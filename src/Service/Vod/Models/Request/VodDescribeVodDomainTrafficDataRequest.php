<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodDescribeVodDomainTrafficDataRequest</code>
 */
class VodDescribeVodDomainTrafficDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * list of domains to query
     *
     * Generated from protobuf field <code>string DomainList = 1;</code>
     */
    protected $DomainList = '';
    /**
     * rfc339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     */
    protected $StartTime = '';
    /**
     * rfc339
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     */
    protected $EndTime = '';
    /**
     * default 300, supports 1800, 3600 and 86400
     *
     * Generated from protobuf field <code>int32 Aggregation = 4;</code>
     */
    protected $Aggregation = 0;
    /**
     * PCDN, CDN, or ALL
     *
     * Generated from protobuf field <code>string TrafficType = 5;</code>
     */
    protected $TrafficType = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DomainList
     *           list of domains to query
     *     @type string $StartTime
     *           rfc339
     *     @type string $EndTime
     *           rfc339
     *     @type int $Aggregation
     *           default 300, supports 1800, 3600 and 86400
     *     @type string $TrafficType
     *           PCDN, CDN, or ALL
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * list of domains to query
     *
     * Generated from protobuf field <code>string DomainList = 1;</code>
     * @return string
     */
    public function getDomainList()
    {
        return $this->DomainList;
    }

    /**
     * list of domains to query
     *
     * Generated from protobuf field <code>string DomainList = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainList($var)
    {
        GPBUtil::checkString($var, True);
        $this->DomainList = $var;

        return $this;
    }

    /**
     * rfc339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * rfc339
     *
     * Generated from protobuf field <code>string StartTime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartTime = $var;

        return $this;
    }

    /**
     * rfc339
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * rfc339
     *
     * Generated from protobuf field <code>string EndTime = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->EndTime = $var;

        return $this;
    }

    /**
     * default 300, supports 1800, 3600 and 86400
     *
     * Generated from protobuf field <code>int32 Aggregation = 4;</code>
     * @return int
     */
    public function getAggregation()
    {
        return $this->Aggregation;
    }

    /**
     * default 300, supports 1800, 3600 and 86400
     *
     * Generated from protobuf field <code>int32 Aggregation = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAggregation($var)
    {
        GPBUtil::checkInt32($var);
        $this->Aggregation = $var;

        return $this;
    }

    /**
     * PCDN, CDN, or ALL
     *
     * Generated from protobuf field <code>string TrafficType = 5;</code>
     * @return string
     */
    public function getTrafficType()
    {
        return $this->TrafficType;
    }

    /**
     * PCDN, CDN, or ALL
     *
     * Generated from protobuf field <code>string TrafficType = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTrafficType($var)
    {
        GPBUtil::checkString($var, True);
        $this->TrafficType = $var;

        return $this;
    }

}

