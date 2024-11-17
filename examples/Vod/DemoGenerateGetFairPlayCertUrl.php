<?php
require('../../vendor/autoload.php');

use Byteplus\Service\Vod\Vod;


$client = Vod::getInstance();
// $client->setAccessKey("");
// $client->setSecretKey("");

$certId = "your cert id";
$expire = 6000000; // Sign Expire

echo "\nGenerate GetFairPlayCertUrl\n";
try {
    $response = $client->getFairPlayCertUrl($certId, $expire);
    echo $response;
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}