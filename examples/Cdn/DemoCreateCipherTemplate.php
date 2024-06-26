<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";

$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
    "Title" => "example",
    "Message" => "example",
    "Project" => "default",
    "Quic" => [
        "Switch" => false
    ]
];

$response = $client->createCipherTemplate($body);
var_dump($response);
