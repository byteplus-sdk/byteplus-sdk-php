// Code generated by protoc-gen-byteplus-sdk
// source: getSubtitleInfoList
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Byteplus\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Byteplus\Service\Vod\Models\Request\VodGetSubtitleInfoListRequest();
$request->setVid("your Vid");
$request->setFileIds("your FileIds");
$request->setLanguages("your Languages");
$request->setFormats("your Formats");
$request->setLanguageIds("your LanguageIds");
$request->setSubtitleIds("your SubtitleIds");
$request->setStatus("your Status");
$request->setTitle("your Title");
$request->setTag("your Tag");
$request->setOffset("your Offset");
$request->setPageSize("your PageSize");
$request->setSsl("your Ssl");


$response = new Byteplus\Service\Vod\Models\Response\VodGetSubtitleInfoListResponse();
try {
    $response = $client->getSubtitleInfoList($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response != null && $response->getResponseMetadata() != null && $response->getResponseMetadata()->getError() != null) {
    echo $response->getResponseMetadata()->getError()->serializeToJsonString(), "\n";
} else {
    echo $response->serializeToJsonString(), "\n";
}
