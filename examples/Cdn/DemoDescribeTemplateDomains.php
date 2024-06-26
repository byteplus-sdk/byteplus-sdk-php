<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";

$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
    "PageNum" => 1,
    "PageSize" => 10,
    "Filters" => []
];


$response = $client->describeTemplateDomains($body);
var_dump($response);
