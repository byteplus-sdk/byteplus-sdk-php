<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/response/response_vod.proto

namespace Byteplus\Service\Vod\Models\Response;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Response.VodUpdateDomainPlayRuleResponse</code>
 */
class VodUpdateDomainPlayRuleResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * 响应通用信息
     *
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Base\Models\Base\ResponseMetadata $ResponseMetadata
     *           响应通用信息
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\ResponseVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 响应通用信息
     *
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @return \Byteplus\Service\Base\Models\Base\ResponseMetadata|null
     */
    public function getResponseMetadata()
    {
        return $this->ResponseMetadata;
    }

    public function hasResponseMetadata()
    {
        return isset($this->ResponseMetadata);
    }

    public function clearResponseMetadata()
    {
        unset($this->ResponseMetadata);
    }

    /**
     * 响应通用信息
     *
     * Generated from protobuf field <code>.Byteplus.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @param \Byteplus\Service\Base\Models\Base\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Base\Models\Base\ResponseMetadata::class);
        $this->ResponseMetadata = $var;

        return $this;
    }

}

