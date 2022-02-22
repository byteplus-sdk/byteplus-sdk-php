<?php
require('../../vendor/autoload.php');
use Byteplus\Service\Sms;
use Byteplus\Models\Vod\Request\VodApplyUploadInfoRequest;
use Byteplus\Models\Vod\Response\VodApplyUploadInfoResponse;

$client = Sms::getInstance('your region');// 可选ap-singapore-1 新加坡
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

// template
$template = [
    'code' => 1111,
];

$body = [
    'SmsAccount' => "your sms account",
    'From' => "BytePlus",
    "TemplateID"=>    "ST_xxx",
    "TemplateParam"=> json_encode($template),
    "PhoneNumbers"=>  "phone numbers",
    "Tag"=>           "tag",
];

$response = $client->sendSms(['json' => $body]);
echo $response;
