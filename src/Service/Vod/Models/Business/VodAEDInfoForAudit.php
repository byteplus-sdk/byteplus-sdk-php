<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_media.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodAEDInfoForAudit</code>
 */
class VodAEDInfoForAudit extends \Google\Protobuf\Internal\Message
{
    /**
     * 识别出来的音频事件信息
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodAEDEventItemForAudit EventItems = 1;</code>
     */
    private $EventItems;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Vod\Models\Business\VodAEDEventItemForAudit[]|\Google\Protobuf\Internal\RepeatedField $EventItems
     *           识别出来的音频事件信息
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * 识别出来的音频事件信息
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodAEDEventItemForAudit EventItems = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventItems()
    {
        return $this->EventItems;
    }

    /**
     * 识别出来的音频事件信息
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodAEDEventItemForAudit EventItems = 1;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodAEDEventItemForAudit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\VodAEDEventItemForAudit::class);
        $this->EventItems = $arr;

        return $this;
    }

}

