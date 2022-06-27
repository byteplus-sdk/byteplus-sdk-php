<?php
require('../../vendor/autoload.php');
use Byteplus\Service\Sms;
use Byteplus\Models\Vod\Request\VodApplyUploadInfoRequest;
use Byteplus\Models\Vod\Response\VodApplyUploadInfoResponse;

$client = Sms::getInstance('');// 可选ap-singapore-1 新加坡
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    "SmsAccount"  => "smsAccount",
    "PhoneNumber" =>  "+65xxxxxx",
    "Scene"       => "myscene",
    "Code"        => "123456",
];

$response = $client->checkSmsVerifyCode(['json' => $body]);
echo $response;
