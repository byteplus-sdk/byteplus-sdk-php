// Code generated by protoc-gen-byteplus-sdk
// source: deleteMedia
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Byteplus\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Byteplus\Service\Vod\Models\Request\VodDeleteMediaRequest();
$request->setVids("your Vids");
$request->setCallbackArgs("your CallbackArgs");


$response = new Byteplus\Service\Vod\Models\Response\VodDeleteMediaResponse();
try {
    $response = $client->deleteMedia($request);
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