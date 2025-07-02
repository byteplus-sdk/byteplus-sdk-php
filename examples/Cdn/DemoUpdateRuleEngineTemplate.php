<?php

use Byteplus\Service\Cdn;

require('../../vendor/autoload.php');
require_once "init.php";

$client = Cdn::getInstance();

$config = new Config();
$client->setAccessKey($config->ak);
$client->setSecretKey($config->sk);

$body = [
    'Title' => 'sdktest',
    'Message' => '123',
    'Project' => 'default',
    'Rule' => json_encode([
        'IfBlock' => [
            'SubRules' => [],
            'Actions' => [
                [
                    'Action' => 'request_header',
                    'Stage' => 'client_request',
                    'Phase' => 1,
                    'Module' => 1,
                    'Groups' => [
                        [
                            'Dimension' => 'request_header',
                            'GroupParameters' => [
                                [
                                    'Parameters' => [
                                        ['Name' => 'action', 'Values' => ['set']],
                                        ['Name' => 'header_name', 'Values' => ['xdxxx']],
                                        ['Name' => 'header_value', 'Values' => ['111']]
                                    ]
                                ],
                                [
                                    'Parameters' => [
                                        ['Name' => 'action', 'Values' => ['delete']],
                                        ['Name' => 'header_name', 'Values' => ['volc-cdn111']]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
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
                                        ['Name' => 'header_name', 'Values' => ['volc-cdn111']],
                                        ['Name' => 'header_value', 'Values' => ['1111']]
                                    ]
                                ],
                                [
                                    'Parameters' => [
                                        ['Name' => 'action', 'Values' => ['delete']],
                                        ['Name' => 'header_name', 'Values' => ['xxx123']]
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
    ]),
    'TemplateId' => 'tpl-reqmg6y',
    'Status' => 'editing',
    'CreateTime' => 1750650546,
    'UpdateTime' => 1750650546,
    'TemplateVersion' => 'draft'
];

$response = $client->updateRuleEngineTemplate($body);
var_dump($response);
