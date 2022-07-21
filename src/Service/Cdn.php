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

        'DescribeCdnDomainTopData' => [
          'url' => '/',
          'method' => 'post',
          'config' => [
              'query' => [
                  'Action' => 'DescribeCdnDomainTopData',
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

    public function requestStr(string $api, array $configs): string
    {
        $response = $this->request($api, $configs);
        return $response->getBody()->getContents();
    }

    public function addCdnDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("AddCdnDomain", ['json' => $data]);
    }

    public function startCdnDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("StartCdnDomain", ['json' => $data]);
    }

    public function stopCdnDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("StopCdnDomain", ['json' => $data]);
    }

    public function deleteCdnDomain(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DeleteCdnDomain", ['json' => $data]);
    }

    public function listCdnDomains(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("ListCdnDomains", ['json' => $data]);
    }

    public function describeCdnConfig(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeCdnConfig", ['json' => $data]);
    }

    public function updateCdnConfig(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("UpdateCdnConfig", ['json' => $data]);
    }

    public function describeCdnData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeCdnData", ['json' => $data]);
    }

    public function describeEdgeNrtDataSummary(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeEdgeNrtDataSummary", ['json' => $data]);
    }

    public function describeCdnOriginData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeCdnOriginData", ['json' => $data]);
    }

    public function describeOriginNrtDataSummary(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeOriginNrtDataSummary", ['json' => $data]);
    }

    public function describeCdnDataDetail(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeCdnDataDetail", ['json' => $data]);
    }

    public function describeEdgeStatisticalData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeEdgeStatisticalData", ['json' => $data]);
    }

    public function describeEdgeTopNrtData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeEdgeTopNrtData", ['json' => $data]);
    }

    public function describeOriginTopNrtData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeOriginTopNrtData", ['json' => $data]);
    }

    public function describeEdgeTopStatusCode(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeEdgeTopStatusCode", ['json' => $data]);
    }

    public function describeOriginTopStatusCode(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeOriginTopStatusCode", ['json' => $data]);
    }

    public function describeEdgeTopStatisticalData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeEdgeTopStatisticalData", ['json' => $data]);
    }

    public function describeCdnRegionAndIsp(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeCdnRegionAndIsp", ['json' => $data]);
    }

    public function describeCdnDomainTopData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeCdnDomainTopData", ['json' => $data]);
    }

    public function describeCdnService(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeCdnService", ['json' => $data]);
    }

    public function describeAccountingData(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeAccountingData", ['json' => $data]);
    }

    public function submitRefreshTask(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("SubmitRefreshTask", ['json' => $data]);
    }

    public function submitPreloadTask(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("SubmitPreloadTask", ['json' => $data]);
    }

    public function describeContentTasks(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeContentTasks", ['json' => $data]);
    }

    public function describeContentQuota(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeContentQuota", ['json' => $data]);
    }

    public function submitBlockTask(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("SubmitBlockTask", ['json' => $data]);
    }

    public function submitUnblockTask(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("SubmitUnblockTask", ['json' => $data]);
    }

    public function describeContentBlockTasks(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeContentBlockTasks", ['json' => $data]);
    }

    public function describeCdnAccessLog(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeCdnAccessLog", ['json' => $data]);
    }

    public function describeIPInfo(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeIPInfo", ['json' => $data]);
    }

    public function describeIPListInfo(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeIPListInfo", ['json' => $data]);
    }

    public function describeCdnUpperIp(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DescribeCdnUpperIp", ['json' => $data]);
    }

    public function addResourceTags(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("AddResourceTags", ['json' => $data]);
    }

    public function updateResourceTags(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("UpdateResourceTags", ['json' => $data]);
    }

    public function listResourceTags(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("ListResourceTags", ['json' => $data]);
    }

    public function deleteResourceTags(array $data = []): string
    {
        if (empty($data)) {
            $data = new \ArrayObject();
        }
        return $this->requestStr("DeleteResourceTags", ['json' => $data]);
    }

}
