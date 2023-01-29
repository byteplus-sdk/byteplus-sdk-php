<?php


namespace Byteplus\Service;

use Byteplus\Base\V4Curl;

class Rtc extends V4Curl
{
    public function __construct()
    {
        $this->region = func_get_arg(0);
        parent::__construct($this->region);
    }

    protected function getConfig($region = 'ap-singapore-1')
    {
        // public configuration
        $arr = [
            'host' => "https://open.byteplusapi.com",
            'config' => [
                'timeout' => 10.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => $region,
                    'service' => 'rtc',
                ],
            ],
        ];

        return $arr;
    }

    // ===API Configuration===
    // The format is fixed, the variables are method, Action, Version
    // The outermost key is consistent with the Action
    protected $apiList = [
        'StartRecord' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'StartRecord',
                    'Version' => '2022-06-01',
                ]
            ]
        ],
        'GetRecordTask' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetRecordTask',
                    'Version' => '2022-06-01',
                ]
            ]
        ]
    ];

    public function requestWithRetry($api, $configs)
    {
        try {
            $response = $this->request($api, $configs);
            return (string)$response->getBody();
        } catch (\Exception $e) {
            $response = $this->request($api, $configs);
            return (string)$response->getBody();
        }
    }

    // === API method ===
    public function startRecord(array $query = [])
    {
        return $this->requestWithRetry("StartRecord", $query);
    }

    public function getRecordTask(array $query = [])
    {
        return $this->requestWithRetry("GetRecordTask", $query);
    }
}