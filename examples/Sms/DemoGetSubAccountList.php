<?php
require('../../vendor/autoload.php');
use Byteplus\Service\Sms;
use Byteplus\Models\Vod\Request\VodApplyUploadInfoRequest;
use Byteplus\Models\Vod\Response\VodApplyUploadInfoResponse;

$client = Sms::getInstance('');// 可选ap-singapore-1 新加坡
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$body = [
    "subAccount"     => "smsAccount",
    "subAccountName" => "",
    "pageIndex"      => 1,
    "pageSize"       => 20,
];

$response = $client->getSubAccountList(['json' => $body]);
echo $response;
