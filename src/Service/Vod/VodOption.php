<?php

namespace Byteplus\Service\Vod;


use Exception;

const ActionApplyUpload = "vod:ApplyUploadInfo";
const ActionCommitUpload = "vod:CommitUploadInfo";
const Statement = "Statement";


class VodOption
{
    public static $apiList = [
        // **********************************************************************
        // 播放
        // **********************************************************************
        'GetPlayInfo' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetPlayInfo',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetPlayInfoWithLiveTimeShiftScene' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetPlayInfoWithLiveTimeShiftScene',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        // **********************************************************************
        // 上传
        // **********************************************************************
        'ApplyUploadInfo' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ApplyUploadInfo',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'CommitUploadInfo' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'timeout' => 8.0,
                'query' => [
                    'Action' => 'CommitUploadInfo',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        // **********************************************************************
        // 媒资
        // **********************************************************************

        // **********************************************************************
        // 视频编辑
        // **********************************************************************

        // **********************************************************************
        // 空间管理
        // **********************************************************************
        'ListSpace' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'ListSpace',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'UpdateSpaceUploadConfig' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'UpdateSpaceUploadConfig',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        // **********************************************************************
        // 分发加速管理
        // **********************************************************************
        'ListDomain' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'ListDomain',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        // **********************************************************************
        // 回调管理
        // **********************************************************************

        // **********************************************************************
        // 计量计费
        // **********************************************************************

    ];

    /**
     * @throws Exception
     */
    public static function getConfig(string $region = 'ap-singapore-1')
    {
        switch ($region) {
            case 'ap-singapore-1':
                $config = [
                    'host' => 'https://vod.byteplusapi.com',
                    'config' => [
                        'timeout' => 5.0,
                        'headers' => [
                            'Accept' => 'application/json',
                        ],
                        'v4_credentials' => [
                            'region' => $region,
                            'service' => 'vod',
                        ],
                    ],
                ];
                break;
            default:
                throw new Exception("Cant find the region, please check it carefully");
        }
        return $config;
    }
}