<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";

$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
    'Domain' => $config->operateDomain,
];

$response = $client->stopCdnDomain($body);
var_dump($response);
