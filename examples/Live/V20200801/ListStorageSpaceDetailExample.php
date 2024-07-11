<?php
include_once(__DIR__ . '/../../../vendor/autoload.php');

use Byteplus\Service\Live\V20200801\Live;

$client = Live::getInstance("cn-north-1");

// call below method if you dont set ak and sk in ~/.byteplus/config
$client->setAccessKey("ak");
$client->setSecretKey("sk");

$body = [];

$response = $client->listStorageSpaceDetail($body);
print_r($response);
