<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_media.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodUpdateSubtitleStatusData</code>
 */
class VodUpdateSubtitleStatusData extends \Google\Protobuf\Internal\Message
{
    /**
     *不存在的转码FileID列表
     *
     * Generated from protobuf field <code>repeated string NotExistFileIds = 1;</code>
     */
    private $NotExistFileIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $NotExistFileIds
     *          不存在的转码FileID列表
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     *不存在的转码FileID列表
     *
     * Generated from protobuf field <code>repeated string NotExistFileIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotExistFileIds()
    {
        return $this->NotExistFileIds;
    }

    /**
     *不存在的转码FileID列表
     *
     * Generated from protobuf field <code>repeated string NotExistFileIds = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotExistFileIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->NotExistFileIds = $arr;

        return $this;
    }

}

