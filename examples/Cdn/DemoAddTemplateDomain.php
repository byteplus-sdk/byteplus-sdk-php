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
    "CertId" => "cert-example",
    "CipherTemplateId" => "tpl-example",
    "Domain" => "example.com",
    "HTTPSSwitch" => "on"
];


$response = $client->addTemplateDomain($body);
var_dump($response);
