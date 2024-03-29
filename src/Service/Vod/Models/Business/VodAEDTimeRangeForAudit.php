<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_media.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodAEDTimeRangeForAudit</code>
 */
class VodAEDTimeRangeForAudit extends \Google\Protobuf\Internal\Message
{
    /**
     *事件识别区间的起点(ms)
     *
     * Generated from protobuf field <code>double StartTimeMill = 1;</code>
     */
    protected $StartTimeMill = 0.0;
    /**
     *事件识别区间的终点(ms)
     *
     * Generated from protobuf field <code>double EndTimeMill = 2;</code>
     */
    protected $EndTimeMill = 0.0;
    /**
     *事件区间对应的事件概率
     *
     * Generated from protobuf field <code>double Prob = 3;</code>
     */
    protected $Prob = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $StartTimeMill
     *          事件识别区间的起点(ms)
     *     @type float $EndTimeMill
     *          事件识别区间的终点(ms)
     *     @type float $Prob
     *          事件区间对应的事件概率
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     *事件识别区间的起点(ms)
     *
     * Generated from protobuf field <code>double StartTimeMill = 1;</code>
     * @return float
     */
    public function getStartTimeMill()
    {
        return $this->StartTimeMill;
    }

    /**
     *事件识别区间的起点(ms)
     *
     * Generated from protobuf field <code>double StartTimeMill = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setStartTimeMill($var)
    {
        GPBUtil::checkDouble($var);
        $this->StartTimeMill = $var;

        return $this;
    }

    /**
     *事件识别区间的终点(ms)
     *
     * Generated from protobuf field <code>double EndTimeMill = 2;</code>
     * @return float
     */
    public function getEndTimeMill()
    {
        return $this->EndTimeMill;
    }

    /**
     *事件识别区间的终点(ms)
     *
     * Generated from protobuf field <code>double EndTimeMill = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setEndTimeMill($var)
    {
        GPBUtil::checkDouble($var);
        $this->EndTimeMill = $var;

        return $this;
    }

    /**
     *事件区间对应的事件概率
     *
     * Generated from protobuf field <code>double Prob = 3;</code>
     * @return float
     */
    public function getProb()
    {
        return $this->Prob;
    }

    /**
     *事件区间对应的事件概率
     *
     * Generated from protobuf field <code>double Prob = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setProb($var)
    {
        GPBUtil::checkDouble($var);
        $this->Prob = $var;

        return $this;
    }

}

