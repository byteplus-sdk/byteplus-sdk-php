<?php


namespace Byteplus\Service;

use Byteplus\Base\V4Curl;

const ServiceVersion20210111 = "2021-01-11";

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
        ],
        'GetSubAccountList' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetSubAccountList',
                    'Version' => ServiceVersion20210111,
                ],
            ]
        ],
        'GetSubAccountDetail' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetSubAccountDetail',
                    'Version' => ServiceVersion20210111,
                ],
            ]
        ],
        'GetSmsTemplateAndOrderList' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetSmsTemplateAndOrderList',
                    'Version' => ServiceVersion20210111,
                ],
            ]
        ],
        'ApplySmsTemplate' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ApplySmsTemplate',
                    'Version' => ServiceVersion20210111,
                ],
            ]
        ],
        'DeleteSmsTemplate' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'DeleteSmsTemplate',
                    'Version' => ServiceVersion20210111,
                ],
            ]
        ],
        'InsertSubAccount' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'InsertSubAccount',
                    'Version' => ServiceVersion20210111,
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

    public function getSubAccountList(array $query = [])
    {
        $response = $this->request('GetSubAccountList', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('GetSubAccountList', $query);
        }
        return $response->getBody();
    }

    public function getSubAccountDetail(array $query = [])
    {
        $response = $this->request('GetSubAccountDetail', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('GetSubAccountDetail', $query);
        }
        return $response->getBody();
    }

    public function getSmsTemplateAndOrderList(array $query = [])
    {
        $response = $this->request('GetSmsTemplateAndOrderList', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('GetSmsTemplateAndOrderList', $query);
        }
        return $response->getBody();
    }

    public function applySmsTemplate(array $query = [])
    {
        $response = $this->request('ApplySmsTemplate', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('ApplySmsTemplate', $query);
        }
        return $response->getBody();
    }

    public function deleteSmsTemplate(array $query = [])
    {
        $response = $this->request('DeleteSmsTemplate', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('DeleteSmsTemplate', $query);
        }
        return $response->getBody();
    }

    public function insertSubAccount(array $query = [])
    {
        $response = $this->request('InsertSubAccount', $query);
        if ($response->getStatusCode() >= 500) {
            $response = $this->request('InsertSubAccount', $query);
        }
        return $response->getBody();
    }
}