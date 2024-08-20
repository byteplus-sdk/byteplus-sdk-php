<?php
require('../../vendor/autoload.php');

use Byteplus\Service\Vod\Models\Request\VodGetDrmLicenseRequest;
use Byteplus\Service\Vod\Models\Response\VodGetDrmLicenseResponse;
use Byteplus\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$vid = "your vid";
$drmType = "your drmType";
$expire = 60; // Sign Expire

echo "\nGenerate ThirdPartyDrmToken\n";
$req = new VodGetDrmLicenseRequest();
$req->setVid($vid);
$req->setThirdPartyDrmType($drmType);
try {
    $response = $client->getThirdPartyDrmAuthToken($req, $expire);
    echo $response;
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}