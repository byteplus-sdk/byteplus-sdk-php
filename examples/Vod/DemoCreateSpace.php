// Code generated by protoc-gen-byteplus-sdk
// source: createSpace
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Byteplus\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Byteplus\Service\Vod\Models\Request\VodCreateSpaceRequest();
$request->setSpaceName("your SpaceName");
$request->setProjectName("your ProjectName");
$request->setDescription("your Description");
$request->setRegion("your Region");
$request->setUserName("your UserName");


$response = new Byteplus\Service\Vod\Models\Response\VodCreateSpaceResponse();
try {
    $response = $client->createSpace($request);
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
