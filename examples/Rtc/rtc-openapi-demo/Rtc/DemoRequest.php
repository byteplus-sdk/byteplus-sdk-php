<?php

// demo

namespace YourProject\Rtc;

require('../vendor/autoload.php');

$client = Rtc::getInstance();

// ak/sk docs:https://docs.byteplus.com/byteplus-rtc/reference/69828
$ak = 'Your_AK';
$sk = 'Your_SK';
$appId = '';

$client->setAccessKey($ak);
$client->setSecretKey($sk);

// docs: https://docs.guzzlephp.org/en/stable/request-options.html#query
// startRecord - POST
$roomId = 'Your_RoomId';
$body = [
    'AppId' => $appId,
    'RoomId' => '1234',
    'TaskId' => $appId.'_'.$roomId,
    'BusinessId' => 'Your_BusinessId',
    'Encode' => [
        "VideoWidth" => 1920,
        "VideoHeight" => 1080,
        "VideoFps" => 15,
        "VideoBitrate"=> 4000,
    ],
    'FileFormatConfig' => [
        'FileFormat' => ['MP4'],
    ],
    'StorageConfig' => [
        'Type' => 1,
        'VodConfig'=> [
            'AccountId' => 'Your_Volc_AccountId',
            'Space' => 'Your_Space',
        ],
    ],
];

$response = $client->startRecord(['json' => $body]);
echo "startRecord result:\n";
echo $response;
echo "\n";

// getRecordTask - GET
$body = [
    'AppId' => $appId,
    'RoomId' => $roomId,
    'TaskId' => $appId.'_'.$roomId,
];

$response = $client->getRecordTask(['query' => $body]);
echo "getRecordTask result:\n";
echo $response;
echo "\n";