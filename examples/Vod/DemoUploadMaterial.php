<?php
require('../../vendor/autoload.php');

use Byteplus\Service\Vod\Models\Request\VodUploadMaterialRequest;
use Byteplus\Service\Vod\Models\Response\VodCommitUploadInfoResponse;
use Byteplus\Service\Vod\Upload\Functions;
use Byteplus\Service\Vod\Upload\VodUpload;
use Byteplus\Service\Vod\Upload\OptionInfo;

$client = VodUpload::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$space = 'your space';
$filePath = "file path";

//音视频素材上传
$functions = new Functions();
$functions->addGetMetaFunc();
$functions->addSnapshotTimeFunc(2.1);

$optionInfo = new OptionInfo();
$optionInfo->Title = '';
$optionInfo->Tags = 'test';
$optionInfo->Description = '';
$optionInfo->Category = 'video';
$optionInfo->RecordType = 2;
$optionInfo->Format = 'mp4';
$functions->addOptionInfoFunc($optionInfo);

$functions = $functions->getFunctionsString();

$request = new VodUploadMaterialRequest();
$request->setSpaceName($space);
$request->setFilePath($filePath);
$request->setFunctions($functions);
$request->setFileType("media");

$request->setCallbackArgs("my callback");

$response = new VodCommitUploadInfoResponse();
try {
    $response = $client->uploadMaterial($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata() != null && $response->getResponseMetadata()->getError() != null) {
    echo $response->getResponseMetadata()->getError(), "\n";
}
echo $response->serializeToJsonString();
echo "\n";

if ($response->getResult() != null) {
    echo $response->getResult()->getData()->getMid(), "\n";
    echo $response->getResult()->getData()->getSourceInfo()->getWidth(), "\n";
    echo $response->getResult()->getData()->getSourceInfo()->getHeight(), "\n";
}

