<?php
require('../../vendor/autoload.php');
use Byteplus\Service\Sms;
use Byteplus\Models\Vod\Request\VodApplyUploadInfoRequest;
use Byteplus\Models\Vod\Response\VodApplyUploadInfoResponse;

$client = Sms::getInstance('');// 可选ap-singapore-1 新加坡
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$template = [
    "code" => "123456",
];

$messages = [
    [
        "TemplateParam" => json_encode($template),
        "PhoneNumber"   => "+65xxxxxx",
    ],
];

$body = [
    "SmsAccount" => "smsAccount",
    "From"       => "BytePlus",
    "TemplateID" =>  "ST_xxx",
    "Tag"        => "tag",
    "Messages"   => $messages,
];


$response = $client->sendBatchSms(['json' => $body]);
echo $response;
