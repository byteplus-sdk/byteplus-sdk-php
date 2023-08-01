<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_measure.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.DescribeVodSnapshotDataDetail</code>
 */
class DescribeVodSnapshotDataDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Space = 1;</code>
     */
    protected $Space = '';
    /**
     * Generated from protobuf field <code>string TaskStage = 2;</code>
     */
    protected $TaskStage = '';
    /**
     * Generated from protobuf field <code>string Total = 3;</code>
     */
    protected $Total = '';
    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.DescribeVodSnapshotDataItem SnapshotDataList = 4;</code>
     */
    private $SnapshotDataList;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Space
     *     @type string $TaskStage
     *     @type string $Total
     *     @type \Byteplus\Service\Vod\Models\Business\DescribeVodSnapshotDataItem[]|\Google\Protobuf\Internal\RepeatedField $SnapshotDataList
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Space = 1;</code>
     * @return string
     */
    public function getSpace()
    {
        return $this->Space;
    }

    /**
     * Generated from protobuf field <code>string Space = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpace($var)
    {
        GPBUtil::checkString($var, True);
        $this->Space = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TaskStage = 2;</code>
     * @return string
     */
    public function getTaskStage()
    {
        return $this->TaskStage;
    }

    /**
     * Generated from protobuf field <code>string TaskStage = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskStage($var)
    {
        GPBUtil::checkString($var, True);
        $this->TaskStage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Total = 3;</code>
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }

    /**
     * Generated from protobuf field <code>string Total = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkString($var, True);
        $this->Total = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.DescribeVodSnapshotDataItem SnapshotDataList = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSnapshotDataList()
    {
        return $this->SnapshotDataList;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.DescribeVodSnapshotDataItem SnapshotDataList = 4;</code>
     * @param \Byteplus\Service\Vod\Models\Business\DescribeVodSnapshotDataItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSnapshotDataList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\DescribeVodSnapshotDataItem::class);
        $this->SnapshotDataList = $arr;

        return $this;
    }

}

