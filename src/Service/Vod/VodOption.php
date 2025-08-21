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
        'GetPrivateDrmPlayAuth' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetPrivateDrmPlayAuth',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetHlsDecryptionKey' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetHlsDecryptionKey',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'CreateHlsDecryptionKey' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'CreateHlsDecryptionKey',
                    'Version' => '2023-07-01',
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
        'UploadMediaByUrl' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UploadMediaByUrl',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'QueryUploadTaskInfo' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'QueryUploadTaskInfo',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
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
        'UpdateMediaInfo' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'UpdateMediaInfo',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'UpdateMediaPublishStatus' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'UpdateMediaPublishStatus',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetMediaInfos' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetMediaInfos',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetRecommendedPoster' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetRecommendedPoster',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DeleteMedia' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DeleteMedia',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DeleteTranscodes' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DeleteTranscodes',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetMediaList' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetMediaList',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetSubtitleInfoList' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetSubtitleInfoList',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'UpdateSubtitleStatus' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'UpdateSubtitleStatus',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'UpdateSubtitleInfo' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'UpdateSubtitleInfo',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'CreatePlaylist' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'CreatePlaylist',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetPlaylists' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetPlaylists',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'UpdatePlaylist' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'UpdatePlaylist',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DeletePlaylist' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DeletePlaylist',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        // **********************************************************************
        // 转码
        // **********************************************************************
        'StartWorkflow' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'StartWorkflow',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'RetrieveTranscodeResult' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'RetrieveTranscodeResult',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetWorkflowExecution' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetWorkflowExecution',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetWorkflowExecutionResult' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetWorkflowExecutionResult',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        // **********************************************************************
        // 视频编辑
        // **********************************************************************

        // **********************************************************************
        // 空间管理
        // **********************************************************************
        'CreateSpace' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'CreateSpace',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'ListSpace' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'timeout' => 10.0,
                'query' => [
                    'Action' => 'ListSpace',
                    'Version' => '2023-07-01',
                ],
            ]
        ],
        'GetSpaceDetail' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetSpaceDetail',
                    'Version' => '2023-07-01',
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
        'DescribeVodSpaceStorageData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodSpaceStorageData',
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
        'CreateCdnRefreshTask' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'CreateCdnRefreshTask',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'CreateCdnPreloadTask' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'CreateCdnPreloadTask',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'ListCdnTasks' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ListCdnTasks',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'ListCdnAccessLog' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ListCdnAccessLog',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeVodDomainBandwidthData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodDomainBandwidthData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeVodDomainTrafficData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodDomainTrafficData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],

        'ListCdnUsageData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ListCdnUsageData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'ListCdnStatusData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ListCdnStatusData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'ListCdnTopAccessUrl' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ListCdnTopAccessUrl',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeIpInfo' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeIpInfo',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'ListCdnPvData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'ListCdnPvData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        // **********************************************************************
        // 回调管理
        // **********************************************************************
        'AddCallbackSubscription' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'AddCallbackSubscription',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'SetCallbackEvent' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'SetCallbackEvent',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        // **********************************************************************
        // 计量计费
        // **********************************************************************
        'DescribeVodSpaceTranscodeData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodSpaceTranscodeData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeVodSnapshotData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodSnapshotData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeVodSpaceStorageDataFD' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodSpaceStorageDataFD',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeVodEnhanceImageData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodEnhanceImageData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeVodSpaceSubtitleStatisData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodSpaceSubtitleStatisData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeVodPlayedStatisData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodPlayedStatisData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeVodMostPlayedStatisData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodMostPlayedStatisData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'DescribeVodRealtimeMediaData' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'DescribeVodRealtimeMediaData',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        // **********************************************************************
        // 商业drm
        // **********************************************************************
        'GetDrmLicense' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'GetDrmLicense',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
        'GetFairPlayCert' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'GetFairPlayCert',
                    'Version' => '2023-01-01',
                ],
            ]
        ],
    ];

    /**
     * @throws Exception
     */
    public static function getConfig(string $region = 'ap-singapore-1')
    {
        switch ($region) {
            case 'ap-southeast-1':
            case 'ap-singapore-1':
                $config = [
                    'host' => 'https://vod.byteplusapi.com',
                    'scheme' => 'https',
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