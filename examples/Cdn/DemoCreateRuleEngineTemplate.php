<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";


$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
        'Title' => 'example-sdk',
        'Project' => 'default',
        'TemplateVersion' => 'draft',
        'Rule' => json_encode([
            'IfBlock' => [
                'SubRules' => [
                    [
                        'Desc' => '规则名称',
                        'IfBlock' => [
                            'SubRules' => [],
                            'Actions' => [
                                [
                                    'Action' => 'response_header',
                                    'Stage' => 'client_response',
                                    'Phase' => 6,
                                    'Module' => 1,
                                    'Groups' => [
                                        [
                                            'Dimension' => 'response_header',
                                            'GroupParameters' => [
                                                [
                                                    'Parameters' => [
                                                        ['Name' => 'action', 'Values' => ['set']],
                                                        ['Name' => 'header_name', 'Values' => ['testsdk']],
                                                        ['Name' => 'header_value', 'Values' => ['true']]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ],
                            'Condition' => [
                                'IsGroup' => true,
                                'Connective' => 'and',
                                'ConditionGroups' => [
                                    [
                                        'IsGroup' => true,
                                        'Connective' => 'and',
                                        'ConditionGroups' => [
                                            [
                                                'IsGroup' => false,
                                                'Condition' => ['Object' => 'always']
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'Actions' => [
                    [
                        'Action' => 'allow_access',
                        'Stage' => 'client_request',
                        'Phase' => 1,
                        'Module' => 1,
                        'Groups' => [
                            [
                                'Dimension' => 'allow_access',
                                'GroupParameters' => [
                                    [
                                        'Parameters' => []
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                'Condition' => [
                    'IsGroup' => true,
                    'Connective' => 'and',
                    'ConditionGroups' => [
                        [
                            'IsGroup' => true,
                            'Connective' => 'and',
                            'ConditionGroups' => [
                                [
                                    'IsGroup' => false,
                                    'Condition' => [
                                        'Object' => 'query_string',
                                        'Name' => 'params',
                                        'Operator' => 'equal',
                                        'IgnoreCase' => true,
                                        'Value' => ['sdktest', '123']
                                    ]
                                ]
                            ]
                        ],
                        [
                            'IsGroup' => true,
                            'Connective' => 'and',
                            'ConditionGroups' => [
                                [
                                    'IsGroup' => false,
                                    'Condition' => [
                                        'Object' => 'http_referer',
                                        'Operator' => 'not_equal',
                                        'IgnoreCase' => true,
                                        'Value' => ['www.blacklist.xxxx.com']
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ])
    ];

$response = $client->createRuleEngineTemplate($body);
var_dump($response);
