<?php

namespace Byteplus\Service\Live\V20200801;

class LiveConfig
{
    public static function region()
    {
        return [
            'cn-north-1' => [
                'host' => 'https://open.byteplusapi.com',
                'config' => [
                    'timeout' => 5.0,
                    'headers' => [
                        'Accept' => 'application/json'
                    ],
                    'v4_credentials' => [
                        'region' => 'cn-north-1',
                        'service' => 'live'
                    ]
                ]
            ]
        ];
    }

    public static function apiList()
    {
        return [
            'ListStorageSpace' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListStorageSpace',
                        'Version' => '2020-08-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListStorageSpaceDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListStorageSpaceDetail',
                        'Version' => '2020-08-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ]
        ];
    }
}