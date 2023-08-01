<?php
require('../../vendor/autoload.php');

use Byteplus\Service\Vod\Vod;

$client = Vod::getInstance();
// call below method if you dont set ak and sk in ～/.vcloud/config
$client->setAccessKey('');
$client->setSecretKey('');

$expire = 6000000; // Default Sign Expire（minutes）

echo "\nSTS2 Auth and Sign\n";
$space = "";
$response = $client->getUploadVideoAuthWithExpiredTime($expire);
echo json_encode($response);

echo "\nSTS2 Auth and Sign，Default Expire after 1 Hour\n";
$vid = "";
$response = $client->getUploadVideoAuth();
echo json_encode($response);