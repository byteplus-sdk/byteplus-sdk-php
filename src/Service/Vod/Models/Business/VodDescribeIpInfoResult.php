<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_cdn.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodDescribeIpInfoResult</code>
 */
class VodDescribeIpInfoResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodCdnIpInfo Infos = 1;</code>
     */
    private $Infos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Vod\Models\Business\VodCdnIpInfo[]|\Google\Protobuf\Internal\RepeatedField $Infos
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodCdnIpInfo Infos = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInfos()
    {
        return $this->Infos;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodCdnIpInfo Infos = 1;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodCdnIpInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\VodCdnIpInfo::class);
        $this->Infos = $arr;

        return $this;
    }

}

