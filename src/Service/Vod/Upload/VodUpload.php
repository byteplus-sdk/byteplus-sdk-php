<?php


namespace Byteplus\Service\Vod\Upload;


use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RetryMiddleware;
use Throwable;
use Byteplus\Service\Vod\Models\Business\StorageClassType;
use Byteplus\Service\Vod\Models\Business\VodStoreInfo;
use Byteplus\Service\Vod\Models\Request\VodApplyUploadInfoRequest;
use Byteplus\Service\Vod\Models\Request\VodCommitUploadInfoRequest;
use Byteplus\Service\Vod\Models\Request\VodUploadMaterialRequest;
use Byteplus\Service\Vod\Models\Request\VodUploadMediaRequest;
use Byteplus\Service\Vod\Models\Response\VodCommitUploadInfoResponse;
use Byteplus\Service\Vod\Vod;

const MinChunkSize = 1024 * 1024 * 20;
const LargeFileSize = 1024 * 1024 * 1024;

class VodUpload extends Vod
{
    /**
     * @param VodUploadMediaRequest $vodUploadMediaRequest
     * @return VodCommitUploadInfoResponse
     * @throws Exception
     * @throws Throwable
     */
    public function uploadMedia(VodUploadMediaRequest $vodUploadMediaRequest): VodCommitUploadInfoResponse
    {
        $applyRequest = new VodApplyUploadInfoRequest();
        $applyRequest->setSpaceName($vodUploadMediaRequest->getSpaceName());
        $applyRequest->setFileName($vodUploadMediaRequest->getFileName());
        $applyRequest->setFileExtension($vodUploadMediaRequest->getFileExtension());
        $applyRequest->setStorageClass($vodUploadMediaRequest->getStorageClass());
        $resp = $this->upload($applyRequest, $vodUploadMediaRequest->getFilePath());
        if ($resp[0] != 0) {
            throw new Exception($resp[1]);
        }
        $request = new VodCommitUploadInfoRequest();
        $request->setSpaceName($vodUploadMediaRequest->getSpaceName());
        $request->setSessionKey($resp[2]);
        $request->setCallbackArgs($vodUploadMediaRequest->getCallbackArgs());
        $request->setFunctions($vodUploadMediaRequest->getFunctions());
        try {
            return $this->commitUploadInfo($request);
        } catch (Throwable $e) {
            throw $e;
        }
    }

    public function uploadMaterial(VodUploadMaterialRequest $vodUploadMaterialRequest): VodCommitUploadInfoResponse
    {
        $applyRequest = new VodApplyUploadInfoRequest();
        $applyRequest->setSpaceName($vodUploadMaterialRequest->getSpaceName());
        $applyRequest->setFileType($vodUploadMaterialRequest->getFileType());
        $applyRequest->setFileName($vodUploadMaterialRequest->getFileName());
        $applyRequest->setFileExtension($vodUploadMaterialRequest->getFileExtension());
        $resp = $this->upload($applyRequest, $vodUploadMaterialRequest->getFilePath());
        if ($resp[0] != 0) {
            throw new Exception($resp[1]);
        }
        $request = new VodCommitUploadInfoRequest();
        $request->setSpaceName($vodUploadMaterialRequest->getSpaceName());
        $request->setSessionKey($resp[2]);
        $request->setCallbackArgs($vodUploadMaterialRequest->getCallbackArgs());
        $request->setFunctions($vodUploadMaterialRequest->getFunctions());
        try {
            return $this->commitUploadInfo($request);
        } catch (Throwable $e) {
            throw $e;
        }
    }


    public function upload(VodApplyUploadInfoRequest $applyRequest, string $filePath): array
    {
        if (!file_exists($filePath)) {
            return array(-1, "file not exists", "", "");
        }
        try {
            $response = $this->applyUploadInfo($applyRequest);
            if ($response->getResponseMetadata()->getError() != null) {
                return array(-1, $response->getResponseMetadata()->serializeToJsonString(), "", "");
            }

            $uploadAddress = $response->getResult()->getData()->getUploadAddress();

            $uploadHost = ($uploadAddress->getUploadHosts())[0];
            $oid = ($uploadAddress->getStoreInfos())[0]->getStoreUri();
            $session = $uploadAddress->getSessionKey();

            $storeInfo = new VodStoreInfo();
            $storeInfo->mergeFrom(($uploadAddress->getStoreInfos())[0]);
            $respCode = $this->uploadFile($uploadHost, $storeInfo, $filePath, $applyRequest->getStorageClass());
            if ($respCode != 0) {
                return array(-1, "upload " . $filePath . " error", "", "");
            }

            return array(0, "", $session, $oid);
        } catch (Throwable $e) {
            return array(-1, $e->getMessage(), "", "");
        }
    }

    public function uploadFile(string $uploadHost, VodStoreInfo $storeInfo, string $filePath, int $storageClass): int
    {
        if (!file_exists($filePath)) {
            return -1;
        }

        $oid = $storeInfo->getStoreUri();
        $auth = $storeInfo->getAuth();

        $handlerStack = HandlerStack::create(new CurlHandler());
        $handlerStack->push(Middleware::retry($this->retryDecider(), $this->retryDelay()));

        $timeout = 30.0;
        $fileSize = filesize($filePath);

        if ($fileSize > LargeFileSize) {
            $timeout = 600.0;
        }
        $client = new Client([
            'base_uri' => "https://" . $uploadHost,
            'timeout' => $timeout,
            'handler' => $handlerStack,
        ]);

        if ($fileSize < MinChunkSize) {
            return $this->directUpload($oid, $auth, $filePath, $client, $storageClass);
        } else {
            return $this->chunkUpload($oid, $auth, $filePath, true, $client, $storageClass);
        }
    }

    private function retryDecider(): \Closure
    {
        return function ($retries,
                         Request $request,
                         Response $response = null,
                         RequestException $exception = null) {
            if ($retries >= 3) {
                return false;
            }
            return false;
        };
    }

    private function retryDelay(): \Closure
    {
        return function ($num) {
            return RetryMiddleware::exponentialDelay($num);
        };
    }

    private function directUpload(string $oid, string $auth, string $filePath, Client $client, int $storageClass): int
    {
        $content = file_get_contents($filePath);
        $crc32 = sprintf("%08x", crc32($content));
        $headers = ['Authorization' => $auth, 'Content-CRC32' => $crc32];

        if ($storageClass == StorageClassType::Archive) {
            $headers['X-Upload-Storage-Class'] = "archive";
        }

        $response = $client->put($oid, ["body" => $content, "headers" => $headers]);
        $directUploadResponse = json_decode((string)$response->getBody(), true);
        if (!isset($directUploadResponse["success"]) || $directUploadResponse["success"] != 0) {
            return -2;
        }
        return 0;
    }

    private function chunkUpload(string $oid, string $auth, string $filePath, bool $isLargeFile, Client $client, int $storageClass): int
    {
        $uploadID = $this->initUploadPart($oid, $auth, $isLargeFile, $client, $storageClass);
        if ($uploadID == "") {
            return -1;
        }
        $fileSize = filesize($filePath);
        $num = floor($fileSize / MinChunkSize);
        $lastNum = $num - 1;
        $fp = fopen($filePath, 'r');
        $checkSum = [];
        $objectContentType = "";
        for ($i = 0; $i < $lastNum; $i++) {
            $data = stream_get_contents($fp, MinChunkSize, $i * MinChunkSize);
            $partNumber = $i;
            if ($isLargeFile) {
                $partNumber = $partNumber + 1;
            }
            $uploadPartResp = $this->uploadPart($oid, $auth, $uploadID, $partNumber, $data, $isLargeFile, $client, $storageClass);
            $crc32 = $uploadPartResp[0];
            $oct = $uploadPartResp[1];
            if ($partNumber == 1) {
                $objectContentType = $oct;
            }
            if ($crc32 == "") {
                return -1;
            }
            $checkSum[] = $crc32;
        }
        $maxLength = $fileSize - $lastNum * MinChunkSize;
        $data = stream_get_contents($fp, $maxLength, $lastNum * MinChunkSize);
        if ($isLargeFile) {
            $lastNum = $lastNum + 1;
        }
        $uploadPartResp = $this->uploadPart($oid, $auth, $uploadID, $lastNum, $data, $isLargeFile, $client, $storageClass);
        $crc32 = $uploadPartResp[0];
        if ($crc32 == "") {
            return -1;
        }
        $checkSum[] = $crc32;
        return $this->uploadMergePart($oid, $auth, $uploadID, $objectContentType, $checkSum, $isLargeFile, $client, $storageClass);
    }

    private function initUploadPart(string $oid, string $auth, bool $isLargeFile, Client $client, int $storageClass)
    {
        $headers = ['Authorization' => $auth];
        if ($isLargeFile) {
            $headers['X-Storage-Mode'] = ['gateway'];
        }
        if ($storageClass == StorageClassType::Archive) {
            $headers['X-Upload-Storage-Class'] = ['archive'];
        }
        $response = $client->put($oid . '?uploads', ['headers' => $headers]);
        $initUploadResponse = json_decode((string)$response->getBody(), true);
        if (!isset($initUploadResponse["success"]) || $initUploadResponse["success"] != 0) {
            return "";
        }
        return $initUploadResponse['payload']['uploadID'];
    }

    private function uploadPart(string $oid, string $auth, string $uploadID, int $partNumber, $data, bool $isLargeFile, Client $client, int $storageClass): array
    {
        $uri = sprintf("%s?partNumber=%d&uploadID=%s", $oid, $partNumber, $uploadID);
        $crc32 = sprintf("%08x", crc32($data));
        $headers = ['Authorization' => $auth, 'Content-CRC32' => $crc32];
        if ($isLargeFile) {
            $headers['X-Storage-Mode'] = ['gateway'];
        }
        if ($storageClass == StorageClassType::Archive) {
            $headers['X-Upload-Storage-Class'] = ['archive'];
        }
        $response = $client->put($uri, ['headers' => $headers, 'body' => $data]);
        $uploadPartResponse = json_decode((string)$response->getBody(), true);
        if (!isset($uploadPartResponse["success"]) || $uploadPartResponse["success"] != 0) {
            return ["", ""];
        }
        return [$crc32, $uploadPartResponse["payload"]["meta"]["ObjectContentType"]];
    }

    private function uploadMergePart(string $oid, string $auth, string $uploadID, string $objectContentType, array $checkSum, bool $isLargeFile, Client $client, int $storageClass): int
    {
        $uri = sprintf("%s?uploadID=%s&ObjectContentType=%s", $oid, $uploadID, $objectContentType);
        $m = [];
        for ($i = 0; $i < count($checkSum); $i++) {
            $no = $i;
            if ($isLargeFile) {
                $no = $i + 1;
            }
            $m[] = sprintf("%d:%s", $no, $checkSum[$i]);
        }
        $body = implode(",", $m);
        $headers = ['Authorization' => $auth];
        if ($isLargeFile) {
            $headers['X-Storage-Mode'] = ['gateway'];
        }
        if ($storageClass == StorageClassType::Archive) {
            $headers['X-Upload-Storage-Class'] = ['archive'];
        }
        $response = $client->put($uri, ['headers' => $headers, 'body' => $body]);
        $uploadPartResponse = json_decode((string)$response->getBody(), true);
        if (!isset($uploadPartResponse["success"]) || $uploadPartResponse["success"] != 0) {
            return -1;
        }
        return 0;
    }


}