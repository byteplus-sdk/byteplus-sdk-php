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
            'DeleteCommonTransPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteCommonTransPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteTranscodePresetPatchByAdmin' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteTranscodePresetPatchByAdmin',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'AddCommonTransPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'AddCommonTransPreset',
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
            'DescribeTranscodePresetDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeTranscodePresetDetail',
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
            'CreateTranscodePresetPatchByAdmin' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateTranscodePresetPatchByAdmin',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteWatermarkPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteWatermarkPresetV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateWatermarkPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateWatermarkPresetV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeWatermarkPresetDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeWatermarkPresetDetail',
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
            'CreateWatermarkPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateWatermarkPresetV2',
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
            'StopPullRecordTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'StopPullRecordTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreatePullRecordTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreatePullRecordTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteRecordHistory' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteRecordHistory',
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
            'ListPullRecordTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListPullRecordTask',
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
            'ListVideoClassifications' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVideoClassifications',
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
            'UpdateSnapshotPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateSnapshotPresetV2',
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
            'ListVhostSnapshotPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostSnapshotPresetV2',
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
            'CreateSnapshotPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateSnapshotPresetV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteTimeShiftPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteTimeShiftPresetV2',
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
            'CreateTimeShiftPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateTimeShiftPresetV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateTimeShiftPresetV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateTimeShiftPresetV2',
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
            'DescribeTimeShiftPresetDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeTimeShiftPresetDetail',
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
            'GenerateTimeShiftPlayURL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GenerateTimeShiftPlayURL',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVhostDomainDetailByUserID' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostDomainDetailByUserID',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateVhostTags' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateVhostTags',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVhostDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostDetail',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVhostDetailByAdmin' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostDetailByAdmin',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeVhost' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeVhost',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetTags' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetTags',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'ListProjects' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListProjects',
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
            'DeleteAuth' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteAuth',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'EnableAuth' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'EnableAuth',
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
            'DisableAuth' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DisableAuth',
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
            'UpdateCert' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateCert',
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
            'DescribeCertDetailV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeCertDetailV2',
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
            'ListObject' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListObject',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ManagerPullPushDomainBind' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ManagerPullPushDomainBind',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeCertDetailSecret' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeCertDetailSecret',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeDomainVerify' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeDomainVerify',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateVerifyContent' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateVerifyContent',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVqosDimensionValues' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVqosDimensionValues',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'ListCert' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListCert',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListCertBindInfo' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListCertBindInfo',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveFreeTimeInterval' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveFreeTimeInterval',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'VerifyDomainOwner' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'VerifyDomainOwner',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ValidateCert' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ValidateCert',
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
            'DeleteDomainV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteDomainV2',
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
            'RejectDomain' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'RejectDomain',
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
            'UpdateDomain' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateDomain',
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
            'CreateDomain' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateDomain',
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
            'CreateVQScoreTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateVQScoreTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeVQScoreTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeVQScoreTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVQScoreTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVQScoreTask',
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
            'DeleteDenyConfigV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteDenyConfigV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeDenyConfigV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeDenyConfigV2',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
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
            'UpdateSDKLicense' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateSDKLicense',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateApp' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateApp',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteSDK' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteSDK',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateApp' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateApp',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateSDK' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateSDK',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeSDKDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeSDKDetail',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeSDKParamsAvailable' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeSDKParamsAvailable',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeAppIDParamsAvailable' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeAppIDParamsAvailable',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateSDK' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateSDK',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListSDK' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListSDK',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListSDKAdmin' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListSDKAdmin',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetApps' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetApps',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'UpdateService' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateService',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListServices' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListServices',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeService' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeService',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'UpdateActivityBilling' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateActivityBilling',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateBilling' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateBilling',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListInstance' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListInstance',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeBillingForAdmin' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeBillingForAdmin',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeBilling' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeBilling',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'DescribeBillingMonthAvailable' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeBillingMonthAvailable',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'ListResourcePackage' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListResourcePackage',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'TerminateInstance' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'TerminateInstance',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteStreamQuotaConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteStreamQuotaConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateStreamQuotaConfigPatch' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateStreamQuotaConfigPatch',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeStreamQuotaConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeStreamQuotaConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateStreamQuotaConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateStreamQuotaConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVqosMetricsDimensions' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVqosMetricsDimensions',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetVqosRawData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetVqosRawData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'StopPullCDNSnapshotTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'StopPullCDNSnapshotTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreatePullCDNSnapshotTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreatePullCDNSnapshotTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetPullCDNSnapshotTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetPullCDNSnapshotTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListPullCDNSnapshotTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListPullCDNSnapshotTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetPullRecordTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetPullRecordTask',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteSnapshotAuditPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteSnapshotAuditPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateSnapshotAuditPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateSnapshotAuditPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeSnapshotAuditPresetDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeSnapshotAuditPresetDetail',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVhostSnapshotAuditPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostSnapshotAuditPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateSnapshotAuditPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateSnapshotAuditPreset',
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
            'DescribeLiveBatchSourceStreamMetrics' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveBatchSourceStreamMetrics',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveBatchSourceStreamAvgMetrics' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveBatchSourceStreamAvgMetrics',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveBatchOnlineStreamMetrics' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveBatchOnlineStreamMetrics',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveBatchPushStreamMetrics' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveBatchPushStreamMetrics',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveBatchPushStreamAvgMetrics' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveBatchPushStreamAvgMetrics',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveBatchStreamTranscodeData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveBatchStreamTranscodeData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveStreamCountData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveStreamCountData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLivePushStreamCountData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLivePushStreamCountData',
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
            'DescribeLiveBatchStreamTrafficData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveBatchStreamTrafficData',
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
            'DescribeLiveAuditData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveAuditData',
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
            'DescribeLiveTimeShiftData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveTimeShiftData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeActionHistory' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeActionHistory',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListActionHistory' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListActionHistory',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteDenseSnapshotPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteDenseSnapshotPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateDenseSnapshotPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateDenseSnapshotPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListVhostDenseSnapshotPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListVhostDenseSnapshotPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescDenseSnapshotPresetDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescDenseSnapshotPresetDetail',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateDenseSnapshotPreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateDenseSnapshotPreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveCustomizedLogData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveCustomizedLogData',
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
            'AssociatePreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'AssociatePreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DisAssociatePreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DisAssociatePreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdatePresetAssociation' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdatePresetAssociation',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribePresetAssociation' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribePresetAssociation',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateTicket' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateTicket',
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
            'DescribeDenyConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeDenyConfig',
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
            'UpdateDenyConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateDenyConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateDenyConfigV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateDenyConfigV2',
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
            'DeleteRelaySink' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteRelaySink',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateRelaySink' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateRelaySink',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeRelaySink' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeRelaySink',
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
            'DeleteHeaderConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteHeaderConfig',
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
            'UpdateHeaderConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateHeaderConfig',
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
            'DescribeHeaderConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeHeaderConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListHeaderEnum' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListHeaderEnum',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteNSSRewriteConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteNSSRewriteConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateNSSRewriteConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateNSSRewriteConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeNSSRewriteConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeNSSRewriteConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveActivityBandwidthData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveActivityBandwidthData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateLiveAccountFeeConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateLiveAccountFeeConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteLiveAccountFeeConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteLiveAccountFeeConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveAccountFeeConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveAccountFeeConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'DescribeLiveStreamUsageData' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveStreamUsageData',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeLiveFeeConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveFeeConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'DescribeLiveAccountFeeType' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeLiveAccountFeeType',
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
            'DescribeContentKey' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeContentKey',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
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
            'CreateCustomLogConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateCustomLogConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteCustomLogConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteCustomLogConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeCustomLogConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeCustomLogConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'CheckCustomLogConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CheckCustomLogConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateTranscodePresetBatch' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateTranscodePresetBatch',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteTranscodePresetBatch' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteTranscodePresetBatch',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'AssociateRefConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'AssociateRefConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DisassociateRefConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DisassociateRefConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeRefConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeRefConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListReferenceNames' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListReferenceNames',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListReferenceTypes' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListReferenceTypes',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'ListReferenceInfo' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListReferenceInfo',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'CreateAvSlicePreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateAvSlicePreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteAvSlicePreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteAvSlicePreset',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateAvSlicePreset' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateAvSlicePreset',
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
            'CreateProxyConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateProxyConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteProxyConfigAssociation' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteProxyConfigAssociation',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteProxyConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteProxyConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateProxyConfigAssociation' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateProxyConfigAssociation',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateProxyConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateProxyConfig',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeProxyConfigAssociation' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeProxyConfigAssociation',
                        'Version' => '2023-01-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'ListProxyConfig' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ListProxyConfig',
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
            ]
        ];
    }
}