<?php
require('../vendor/autoload.php');
use Byteplus\Service\Iam;

$client = Iam::getInstance();
// call below method if you dont set ak and sk in ～/.byteplus/config

// $client->setAccessKey($ak);
// $client->setSecretKey($sk);

echo "\nDemo 1\n";
$response = $client->listUsers([]);
echo $response;

echo "\nDemo 2\n";
$response = $client->listUsers(['query'=>['Limit'=>1, 'Offset'=>0]]);
echo $response;

echo "\nDemo 3\n";
$response = $client->listUsers(['v4_credentials'=>['ak'=>"$ak", 'sk'=>$sk], 'query'=>['Limit'=>1, 'Offset'=>0]]);
echo $response;