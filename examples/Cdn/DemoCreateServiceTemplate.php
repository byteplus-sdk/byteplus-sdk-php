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
    "OriginProtocol" => "http",
    "OriginHost" => "",
    "Origin" => [
        [
            "OriginAction" => [
                "OriginLines" => [
                    [
                        "OriginType" => "primary",
                        "InstanceType" => "domain",
                        "Address" => "example.com",
                        "Weight" => "1",
                        "HttpPort" => "80",
                        "HttpsPort" => "443",
                        "OriginHost" => ""
                    ]
                ]
            ]
        ]
    ]
];

$response = $client->createServiceTemplate($body);
var_dump($response);
