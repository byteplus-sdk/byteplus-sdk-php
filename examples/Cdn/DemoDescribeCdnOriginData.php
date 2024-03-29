<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";

$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
    'StartTime' => $config->startTime,
    'EndTime' => $config->endTime,
    'Metric' => 'pv',
    'Domain' => $config->exampleDomain,
    'Interval' => '5min',
];

$response = $client->describeCdnOriginData($body);
var_dump($response);
