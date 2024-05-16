<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";

$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
    "ServiceRegion" => "global",
    "Project" => "default",
    "ServiceTemplateId" => "tpl-example",
    "SparrowSwitch" => "off",
    "CertId" => "cert-example",
    "CipherTemplateId" => "tpl-example",
    "HTTPSSwitch" => "on",
    "Domains" => [
        "example.com"
    ]
];

$response = $client->updateTemplateDomain($body);
var_dump($response);
