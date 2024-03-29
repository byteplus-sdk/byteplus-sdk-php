<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_cdn.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodTrafficData</code>
 */
class VodTrafficData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Time = 1;</code>
     */
    protected $Time = '';
    /**
     * GB
     *
     * Generated from protobuf field <code>double Traffic = 2;</code>
     */
    protected $Traffic = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Time
     *     @type float $Traffic
     *           GB
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Time = 1;</code>
     * @return string
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * Generated from protobuf field <code>string Time = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->Time = $var;

        return $this;
    }

    /**
     * GB
     *
     * Generated from protobuf field <code>double Traffic = 2;</code>
     * @return float
     */
    public function getTraffic()
    {
        return $this->Traffic;
    }

    /**
     * GB
     *
     * Generated from protobuf field <code>double Traffic = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setTraffic($var)
    {
        GPBUtil::checkDouble($var);
        $this->Traffic = $var;

        return $this;
    }

}

