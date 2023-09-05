// Code generated by protoc-gen-byteplus-sdk
// source: updateSubtitleStatus
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Byteplus\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Byteplus\Service\Vod\Models\Request\VodUpdateSubtitleStatusRequest();
$request->setVid("your Vid");
$request->setFileIds("your FileIds");
$request->setLanguages("your Languages");
$request->setFormats("your Formats");
$request->setStatus("your Status");


$response = new Byteplus\Service\Vod\Models\Response\VodUpdateSubtitleStatusResponse();
try {
    $response = $client->updateSubtitleStatus($request);
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
