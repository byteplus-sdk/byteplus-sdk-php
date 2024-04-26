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
    ],
    "HTTPS" => [
        "HTTP2" => false,
        "OCSP" => false,
        "TlsVersion" => ["tlsv1.1", "tlsv1.2", "tlsv1.3"],
        "Hsts" => [
            "Switch" => true,
            "Ttl" => 0,
            "Subdomain" => "exclude"
        ],
        "ForcedRedirect" => [
            "EnableForcedRedirect" => false,
            "StatusCode" => ""
        ]
    ],
    "HttpForcedRedirect" => [
        "EnableForcedRedirect" => false,
        "StatusCode" => ""
    ],
    "TemplateId" => "tpl-example"
];

$response = $client->updateServiceTemplate($body);
var_dump($response);
