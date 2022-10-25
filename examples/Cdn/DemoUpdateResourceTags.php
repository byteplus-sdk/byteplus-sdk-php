<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";

$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
    'Resources' => [$config->exampleDomain],
    'ResourceTags' => [
        ['Key' => 'userKey', 'Value' => 'userValue']
    ]
];

$response = $client->updateResourceTags($body);
var_dump($response);
