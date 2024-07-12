<?php
require('../../vendor/autoload.php');

use Byteplus\Service\Vod\Models\Request\VodGetDrmLicenseRequest;
use Byteplus\Service\Vod\Models\Response\VodGetDrmLicenseResponse;
use Byteplus\Service\Vod\Vod;


$client = Vod::getInstance();
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "your vid";
$drmType = "your drm type";
$persistent = 0;
$licenseDuration = 0;
$expire = 6000000; // Sign Expire

echo "\nGenerate ThirdPartyDrmToken\n";
$req = new VodGetDrmLicenseRequest();
$req->setVid($vid);
$req->setThirdPartyDrmType($drmType);
$req->setPersistent($persistent);
$req->setLicenseDuration($licenseDuration);
try {
    $response = $client->getThirdPartyDrmAuthToken($req, $expire);
    echo $response;
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}