<?php

include 'DemoBase.php';
global $client;

$body = [
    "PageNum" => 1,
    "PageSize" => 10,
];

$response = $client->listStorageSpace(['json' => $body]);
echo $response;
echo '<br>';

$body = [
    "Buckets" => ["bucket1","bucket2"],
    "StartTime" => "2022-07-13T00:00:00+08:00",
    "EndTime" => "2022-07-14T00:00:00+08:00",
    "Aggregation" => 86400,
];

$response = $client->describeLiveStorageSpaceData(['json' => $body]);
echo $response;
echo '<br>';



