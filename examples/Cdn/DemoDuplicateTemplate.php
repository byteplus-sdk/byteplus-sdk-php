<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";

$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
    "ReferredTemplateId" => "tpl-example",
    "Title" => "example",
    "Message" => "example",
    "Project" => "default"
];

$response = $client->duplicateTemplate($body);
var_dump($response);
