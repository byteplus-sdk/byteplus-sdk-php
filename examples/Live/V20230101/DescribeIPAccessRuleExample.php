<?php
include_once(__DIR__ . '/../../../vendor/autoload.php');

use Byteplus\Service\Live\V20230101\Live;

$client = Live::getInstance();

// call below method if you dont set ak and sk in ~/.byteplus/config
$client->setAccessKey("");
$client->setSecretKey("");

$body = [];

$response = $client->describeIPAccessRule($body);
print_r($response);
