<?php

/**
 * @property string $ak
 * @property string $sk
 * @property string $operateDomain
 * @property int $startTime
 * @property int $endTime
 * @property string $exampleDomain
 */
class Config {

    public function __construct() {
        $this->ak = "";
        $this->sk = "";
        $this->operateDomain = 'operate.example.com';
        $this->exampleDomain = 'test1.example.com';
        $this->startTime = time();
        $this->endTime = time() + 60*10;
    }
}