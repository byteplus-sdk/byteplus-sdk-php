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
    "From"        => "BytePlus",
    "TemplateID"  => "ST_xxx",
    "PhoneNumber" => "+65xxxxxxxx",
    "Scene"       => "myscene",
    "ExpireTime"  => 1800,
    "TryCount"    => 3,
    "CodeType"    => 6,
    "Tag"         => "tag",
];

$response = $client->sendSmsVerifyCode(['json' => $body]);
echo $response;
