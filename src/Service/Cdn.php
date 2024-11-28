<?php

namespace Byteplus\Service;

use Byteplus\Base\V4Curl;

class Cdn extends V4Curl
{

    protected $apiList = [
        'AddCdnDomain' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'AddCdnDomain',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'StartCdnDomain' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'StartCdnDomain',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'StopCdnDomain' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'StopCdnDomain',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DeleteCdnDomain' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DeleteCdnDomain',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'ListCdnDomains' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'ListCdnDomains',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCdnConfig' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCdnConfig',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'UpdateCdnConfig' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'UpdateCdnConfig',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCdnData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCdnData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeEdgeNrtDataSummary' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeEdgeNrtDataSummary',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCdnOriginData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCdnOriginData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeOriginNrtDataSummary' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeOriginNrtDataSummary',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCdnDataDetail' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCdnDataDetail',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeDistrictIspData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeDistrictIspData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeEdgeStatisticalData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeEdgeStatisticalData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeEdgeTopNrtData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeEdgeTopNrtData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeOriginTopNrtData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeOriginTopNrtData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeEdgeTopStatusCode' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeEdgeTopStatusCode',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeOriginTopStatusCode' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeOriginTopStatusCode',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeEdgeTopStatisticalData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeEdgeTopStatisticalData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCdnRegionAndIsp' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCdnRegionAndIsp',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCdnService' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCdnService',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeAccountingData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeAccountingData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'SubmitRefreshTask' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'SubmitRefreshTask',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'SubmitPreloadTask' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'SubmitPreloadTask',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeContentTasks' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeContentTasks',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeContentQuota' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeContentQuota',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'SubmitBlockTask' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'SubmitBlockTask',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'SubmitUnblockTask' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'SubmitUnblockTask',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeContentBlockTasks' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeContentBlockTasks',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCdnAccessLog' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCdnAccessLog',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeIPInfo' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeIPInfo',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeIPListInfo' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeIPListInfo',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCdnUpperIp' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCdnUpperIp',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'AddCdnCertificate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'AddCdnCertificate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'ListCertInfo' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'ListCertInfo',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'ListCdnCertInfo' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'ListCdnCertInfo',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCertConfig' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCertConfig',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'BatchDeployCert' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'BatchDeployCert',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DeleteCdnCertificate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DeleteCdnCertificate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeAccountingSummary' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeAccountingSummary',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeTemplates' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeTemplates',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeServiceTemplate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeServiceTemplate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeCipherTemplate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCipherTemplate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'CreateCipherTemplate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'CreateCipherTemplate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'UpdateServiceTemplate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'UpdateServiceTemplate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'UpdateCipherTemplate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'UpdateCipherTemplate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DuplicateTemplate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DuplicateTemplate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'LockTemplate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'LockTemplate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DeleteTemplate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DeleteTemplate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeTemplateDomains' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeTemplateDomains',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'AddTemplateDomain' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'AddTemplateDomain',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'UpdateTemplateDomain' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'UpdateTemplateDomain',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'CreateServiceTemplate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'CreateServiceTemplate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeDistrictData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeDistrictData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeEdgeData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeEdgeData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeDistrictSummary' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeDistrictSummary',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeEdgeSummary' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeEdgeSummary',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeOriginData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeOriginData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeOriginSummary' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeOriginSummary',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeUserData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeUserData',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeDistrictRanking' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeDistrictRanking',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeEdgeRanking' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeEdgeRanking',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeOriginRanking' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeOriginRanking',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeEdgeStatusCodeRanking' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeEdgeStatusCodeRanking',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeOriginStatusCodeRanking' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeOriginStatusCodeRanking',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DescribeStatisticalRanking' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeStatisticalRanking',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'BatchUpdateCdnConfig' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'BatchUpdateCdnConfig',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'AddCertificate' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'AddCertificate',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'DeleteUsageReport' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DeleteUsageReport',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'CreateUsageReport' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'CreateUsageReport',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'ListUsageReports' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'ListUsageReports',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'TagResources' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'TagResources',
                  'Version' => '2021-03-01',
              ],
          ]
        ],

        'UntagResources' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'UntagResources',
                  'Version' => '2021-03-01',
              ],
          ]
        ],


];

    public function __construct()
    {
        $this->region = func_get_arg(0);
        parent::__construct($this->region);
    }

    protected function getConfig(string $region = 'ap-singapore-1')
    {
        return [
            'host' => "https://open.byteplusapi.com",
            'config' => [
                'timeout' => 60 * 5,
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => $region,
                    'service' => 'CDN',
                ],
            ],
        ];
    }

    public function requestWithRetry(string $api, array $configs): string
    {
        try {
            $response = $this->request($api, $configs);
            return $response->getBody()->getContents();
        } catch (\Exception $e) {
            $response = $this->request($api, $configs);
            return $response->getBody()->getContents();
        }
    }

    public function addCdnDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("AddCdnDomain", ['json' => $data]);
    }

    public function startCdnDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("StartCdnDomain", ['json' => $data]);
    }

    public function stopCdnDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("StopCdnDomain", ['json' => $data]);
    }

    public function deleteCdnDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DeleteCdnDomain", ['json' => $data]);
    }

    public function listCdnDomains(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("ListCdnDomains", ['json' => $data]);
    }

    public function describeCdnConfig(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCdnConfig", ['json' => $data]);
    }

    public function updateCdnConfig(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("UpdateCdnConfig", ['json' => $data]);
    }

    public function describeCdnData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCdnData", ['json' => $data]);
    }

    public function describeEdgeNrtDataSummary(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeEdgeNrtDataSummary", ['json' => $data]);
    }

    public function describeCdnOriginData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCdnOriginData", ['json' => $data]);
    }

    public function describeOriginNrtDataSummary(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeOriginNrtDataSummary", ['json' => $data]);
    }

    public function describeCdnDataDetail(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCdnDataDetail", ['json' => $data]);
    }

    public function describeDistrictIspData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeDistrictIspData", ['json' => $data]);
    }

    public function describeEdgeStatisticalData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeEdgeStatisticalData", ['json' => $data]);
    }

    public function describeEdgeTopNrtData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeEdgeTopNrtData", ['json' => $data]);
    }

    public function describeOriginTopNrtData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeOriginTopNrtData", ['json' => $data]);
    }

    public function describeEdgeTopStatusCode(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeEdgeTopStatusCode", ['json' => $data]);
    }

    public function describeOriginTopStatusCode(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeOriginTopStatusCode", ['json' => $data]);
    }

    public function describeEdgeTopStatisticalData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeEdgeTopStatisticalData", ['json' => $data]);
    }

    public function describeCdnRegionAndIsp(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCdnRegionAndIsp", ['json' => $data]);
    }

    public function describeCdnService(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCdnService", ['json' => $data]);
    }

    public function describeAccountingData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeAccountingData", ['json' => $data]);
    }

    public function submitRefreshTask(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("SubmitRefreshTask", ['json' => $data]);
    }

    public function submitPreloadTask(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("SubmitPreloadTask", ['json' => $data]);
    }

    public function describeContentTasks(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeContentTasks", ['json' => $data]);
    }

    public function describeContentQuota(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeContentQuota", ['json' => $data]);
    }

    public function submitBlockTask(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("SubmitBlockTask", ['json' => $data]);
    }

    public function submitUnblockTask(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("SubmitUnblockTask", ['json' => $data]);
    }

    public function describeContentBlockTasks(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeContentBlockTasks", ['json' => $data]);
    }

    public function describeCdnAccessLog(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCdnAccessLog", ['json' => $data]);
    }

    public function describeIPInfo(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeIPInfo", ['json' => $data]);
    }

    public function describeIPListInfo(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeIPListInfo", ['json' => $data]);
    }

    public function describeCdnUpperIp(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCdnUpperIp", ['json' => $data]);
    }

    public function addCdnCertificate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("AddCdnCertificate", ['json' => $data]);
    }

    public function listCertInfo(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("ListCertInfo", ['json' => $data]);
    }

    public function listCdnCertInfo(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("ListCdnCertInfo", ['json' => $data]);
    }

    public function describeCertConfig(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCertConfig", ['json' => $data]);
    }

    public function batchDeployCert(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("BatchDeployCert", ['json' => $data]);
    }

    public function deleteCdnCertificate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DeleteCdnCertificate", ['json' => $data]);
    }

    public function describeAccountingSummary(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeAccountingSummary", ['json' => $data]);
    }

    public function describeTemplates(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeTemplates", ['json' => $data]);
    }

    public function describeServiceTemplate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeServiceTemplate", ['json' => $data]);
    }

    public function describeCipherTemplate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeCipherTemplate", ['json' => $data]);
    }

    public function createCipherTemplate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("CreateCipherTemplate", ['json' => $data]);
    }

    public function updateServiceTemplate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("UpdateServiceTemplate", ['json' => $data]);
    }

    public function updateCipherTemplate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("UpdateCipherTemplate", ['json' => $data]);
    }

    public function duplicateTemplate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DuplicateTemplate", ['json' => $data]);
    }

    public function lockTemplate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("LockTemplate", ['json' => $data]);
    }

    public function deleteTemplate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DeleteTemplate", ['json' => $data]);
    }

    public function describeTemplateDomains(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeTemplateDomains", ['json' => $data]);
    }

    public function addTemplateDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("AddTemplateDomain", ['json' => $data]);
    }

    public function updateTemplateDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("UpdateTemplateDomain", ['json' => $data]);
    }

    public function createServiceTemplate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("CreateServiceTemplate", ['json' => $data]);
    }

    public function describeDistrictData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeDistrictData", ['json' => $data]);
    }

    public function describeEdgeData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeEdgeData", ['json' => $data]);
    }

    public function describeDistrictSummary(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeDistrictSummary", ['json' => $data]);
    }

    public function describeEdgeSummary(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeEdgeSummary", ['json' => $data]);
    }

    public function describeOriginData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeOriginData", ['json' => $data]);
    }

    public function describeOriginSummary(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeOriginSummary", ['json' => $data]);
    }

    public function describeUserData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeUserData", ['json' => $data]);
    }

    public function describeDistrictRanking(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeDistrictRanking", ['json' => $data]);
    }

    public function describeEdgeRanking(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeEdgeRanking", ['json' => $data]);
    }

    public function describeOriginRanking(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeOriginRanking", ['json' => $data]);
    }

    public function describeEdgeStatusCodeRanking(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeEdgeStatusCodeRanking", ['json' => $data]);
    }

    public function describeOriginStatusCodeRanking(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeOriginStatusCodeRanking", ['json' => $data]);
    }

    public function describeStatisticalRanking(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DescribeStatisticalRanking", ['json' => $data]);
    }

    public function batchUpdateCdnConfig(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("BatchUpdateCdnConfig", ['json' => $data]);
    }

    public function addCertificate(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("AddCertificate", ['json' => $data]);
    }

    public function deleteUsageReport(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("DeleteUsageReport", ['json' => $data]);
    }

    public function createUsageReport(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("CreateUsageReport", ['json' => $data]);
    }

    public function listUsageReports(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("ListUsageReports", ['json' => $data]);
    }

    public function tagResources(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("TagResources", ['json' => $data]);
    }

    public function untagResources(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestWithRetry("UntagResources", ['json' => $data]);
    }

}
