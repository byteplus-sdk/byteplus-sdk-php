<?php


namespace Byteplus\Service;

use Byteplus\Base\V4Curl;

class Sms extends V4Curl
{

    protected function getConfig(string $region = '')
    {

        switch ($region){
            case 'ap-singapore-1':
                $host = 'https://sms.byteplusapi.com';
                $region = 'ap-singapore-1';
                break;
            default:
                $host = 'https://sms.volcengineapi.com';
                $region = 'cn-north-1';
        }
        return [
            'host' => $host,
            'config' => [
                'timeout' => 10.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => $region,
                    'service' => 'volcSMS',
                ],
            ],
        ];
    }

    protected $apiList = [
        'SendSms' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'SendSms',
                    'Version' => '2020-01-01',
                ],
            ]
        ],
        'Conversion' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'Conversion',
                    'Version' => '2020-01-01',
                ],
            ]
        ],
        'SendSmsVerifyCode' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'SendSmsVerifyCode',
                    'Version' => '2020-01-01',
                ],
            ]
        ],
        'CheckSmsVerifyCode' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CheckSmsVerifyCode',
                    'Version' => '2020-01-01',
                ],
            ]
        ],
        'SendBatchSms' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'SendBatchSms',
                    'Version' => '2021-01-01',
                ],
            ]
        ]
    ];

    public function sendSms(array $query = [])
    {
        $response = $this->request('SendSms', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('SendSms', $query);
        }
        return $response->getBody();
    }

    public function conversion(array $query = [])
    {
        $response = $this->request('Conversion', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('Conversion', $query);
        }
        return $response->getBody();
    }

    public function sendSmsVerifyCode(array $query = [])
    {
        $response = $this->request('SendSmsVerifyCode', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('SendSmsVerifyCode', $query);
        }
        return $response->getBody();
    }

    public function checkSmsVerifyCode(array $query = [])
    {
        $response = $this->request('CheckSmsVerifyCode', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('CheckSmsVerifyCode', $query);
        }
        return $response->getBody();
    }

    public function sendBatchSms(array $query = [])
    {
        $response = $this->request('SendBatchSms', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('SendBatchSms', $query);
        }
        return $response->getBody();
    }

}