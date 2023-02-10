<?php
require('../../vendor/autoload.php');
use Byteplus\Service\Sms;
use Byteplus\Models\Vod\Request\VodApplyUploadInfoRequest;
use Byteplus\Models\Vod\Response\VodApplyUploadInfoResponse;

$client = Sms::getInstance('');// 可选ap-singapore-1 新加坡
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$shortUrlConfig = [
    "isEnabled"          => "1",
    "isNeedClickDetails" => "0",
    "rawUrl"             => ""
];

$body = [
    "subAccount"    => "smsAccount",
    "area"          => "overseas",
    "channelType"   => "I18N_MKT",
    "name"          => "template_name",
    "content"       => "We're offering our xxxx community 20% off with code THANKYOU. It's our way of showing our appreciation to you for standing by us in this time. Shop Now: https://webhook.site/edd2b39a-6c8d-4161-a310-36a470c840d4",
    "desc"          => "Test SDK",
    "shortUrlConfig" => $shortUrlConfig,
];

$response = $client->applySmsTemplate(['json' => $body]);

echo $response;
