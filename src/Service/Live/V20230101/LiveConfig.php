<?php

namespace Byteplus\Service\Live\V20230101;

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
            'DeleteTranscodePreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteTranscodePreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateTranscodePreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateTranscodePreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListCommonTransPresetDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListCommonTransPresetDetail',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVhostTransCodePreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostTransCodePreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateTranscodePreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateTranscodePreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateWatermarkPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateWatermarkPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateWatermarkPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateWatermarkPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteWatermarkPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteWatermarkPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListWatermarkPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListWatermarkPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVhostWatermarkPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostWatermarkPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteRecordPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteRecordPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateRecordPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateRecordPresetV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeRecordTaskFileHistory' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeRecordTaskFileHistory',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVhostRecordPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostRecordPresetV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateRecordPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateRecordPresetV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteSnapshotPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteSnapshotPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateSnapshotPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateSnapshotPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeCDNSnapshotHistory' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeCDNSnapshotHistory',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVhostSnapshotPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostSnapshotPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateSnapshotPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateSnapshotPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteTimeShiftPresetV3' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteTimeShiftPresetV3',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateTimeShiftPresetV3' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateTimeShiftPresetV3',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListTimeShiftPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListTimeShiftPresetV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateTimeShiftPresetV3' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateTimeShiftPresetV3',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteCallback' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteCallback',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeCallback' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeCallback',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateCallback' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateCallback',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteCert' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteCert',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeCertDetailSecretV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeCertDetailSecretV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListCertV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListCertV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateCert' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateCert',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'BindCert' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'BindCert',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UnbindCert' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UnbindCert',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteDomain' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteDomain',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'EnableDomain' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'EnableDomain',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateDomainV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateDomainV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateDomainVhost' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateDomainVhost',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeDomain' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeDomain',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListDomainDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListDomainDetail',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DisableDomain' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DisableDomain',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'StopPullToPushTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'StopPullToPushTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreatePullToPushTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreatePullToPushTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeletePullToPushTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeletePullToPushTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'RestartPullToPushTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'RestartPullToPushTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdatePullToPushTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdatePullToPushTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListPullToPushTask' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListPullToPushTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DeleteRelaySourceRewrite' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteRelaySourceRewrite',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteRelaySourceV4' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteRelaySourceV4',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteRelaySourceV3' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteRelaySourceV3',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateRelaySourceRewrite' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateRelaySourceRewrite',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateRelaySourceV4' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateRelaySourceV4',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeRelaySourceRewrite' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeRelaySourceRewrite',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListRelaySourceV4' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListRelaySourceV4',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeRelaySourceV3' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeRelaySourceV3',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateRelaySourceV4' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateRelaySourceV4',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateRelaySourceV3' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateRelaySourceV3',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'KillStream' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'KillStream',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeClosedStreamInfoByPage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeClosedStreamInfoByPage',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeLiveStreamInfoByPage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveStreamInfoByPage',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeLiveStreamState' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveStreamState',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeForbiddenStreamInfoByPage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeForbiddenStreamInfoByPage',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'ForbidStream' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ForbidStream',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ResumeStream' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ResumeStream',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GeneratePlayURL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GeneratePlayURL',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GeneratePushURL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GeneratePushURL',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeIpInfo' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeIpInfo',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveRegionData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveRegionData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'DescribeLiveSourceStreamMetrics' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveSourceStreamMetrics',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLivePushStreamMetrics' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLivePushStreamMetrics',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveStreamSessionData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveStreamSessionData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLivePlayStatusCodeData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLivePlayStatusCodeData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLivePushStreamInfoData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLivePushStreamInfoData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveSourceBandwidthData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveSourceBandwidthData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveSourceTrafficData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveSourceTrafficData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveMetricBandwidthData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveMetricBandwidthData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveMetricTrafficData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveMetricTrafficData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveISPData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveISPData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'DescribeLiveP95PeakBandwidthData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveP95PeakBandwidthData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveASRDurationData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveASRDurationData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLivePullToPushBandwidthData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLivePullToPushBandwidthData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLivePullToPushData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLivePullToPushData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveBandwidthData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveBandwidthData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveRecordData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveRecordData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveSnapshotData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveSnapshotData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveTrafficData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveTrafficData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveTranscodeData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveTranscodeData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveStorageSpaceData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveStorageSpaceData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveLogData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveLogData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteReferer' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteReferer',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeReferer' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeReferer',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeAuth' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeAuth',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateReferer' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateReferer',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateAuthKey' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateAuthKey',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteHLSConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteHLSConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateHLSConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateHLSConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeHLSConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeHLSConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteHTTPHeaderConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteHTTPHeaderConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'EnableHTTPHeaderConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'EnableHTTPHeaderConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeHTTPHeaderConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeHTTPHeaderConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateHTTPHeaderConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateHTTPHeaderConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateEncryptDRM' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateEncryptDRM',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLicenseDRM' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLicenseDRM',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeCertDRM' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeCertDRM',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeEncryptDRM' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeEncryptDRM',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'BindEncryptDRM' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'BindEncryptDRM',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UnBindEncryptDRM' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UnBindEncryptDRM',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListBindEncryptDRM' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListBindEncryptDRM',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteIPAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteIPAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteRegionAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteRegionAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateIPAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateIPAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateRegionAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateRegionAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeIPAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeIPAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeRegionAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeRegionAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteCMAFConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteCMAFConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateCMAFConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateCMAFConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeCMAFConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeCMAFConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteLatencyConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteLatencyConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateLatencyConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateLatencyConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLatencyConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLatencyConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteClusterRateLimit' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteClusterRateLimit',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeClusterRateLimit' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeClusterRateLimit',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateClusterRateLimit' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateClusterRateLimit',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteUserAgentAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteUserAgentAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeUserAgentAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeUserAgentAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateUserAgentAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateUserAgentAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteFormatAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteFormatAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeFormatAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeFormatAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateFormatAccessRule' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateFormatAccessRule',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ]
        ];
    }
}