<?php
include_once(__DIR__ . '/../../../vendor/autoload.php');

use Byteplus\Service\Live\V20230101\Live;

$client = Live::getInstance("cn-north-1");

// call below method if you dont set ak and sk in ~/.byteplus/config
$client->setAccessKey("ak");
$client->setSecretKey("sk");

$body = [];

$response = $client->describeHLSConfig($body);
print_r($response);
