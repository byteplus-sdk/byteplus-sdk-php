<?php
require('../../vendor/autoload.php');

use Byteplus\Service\Vod\Models\Request\VodGetPlayInfoRequest;
use Byteplus\Service\Vod\Models\Response\VodGetPlayInfoResponse;
use Byteplus\Service\Vod\Vod;


$client = Vod::getInstance();
// $client->setAccessKey("");
// $client->setSecretKey("");

$vid = "your vid";
$expire = 6000000; // Sign Expire

echo "\nGenerate PlayAuthToken\n";
$req = new VodGetPlayInfoRequest();
$req->setVid($vid);
try {
    $response = $client->getPlayAuthToken($req, $expire);
    echo $response;
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}