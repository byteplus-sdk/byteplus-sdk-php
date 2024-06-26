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
    "Filters" => [
        [
            "Fuzzy" => false,
            "Name" => "type",
            "Value" => ["service"]
        ]
    ]
];

$response = $client->describeTemplates($body);
var_dump($response);
