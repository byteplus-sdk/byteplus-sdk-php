<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_media.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodSnapshot</code>
 */
class VodSnapshot extends \Google\Protobuf\Internal\Message
{
    /**
     *格式
     *
     * Generated from protobuf field <code>string Format = 1;</code>
     */
    protected $Format = '';
    /**
     *高
     *
     * Generated from protobuf field <code>int32 Height = 2;</code>
     */
    protected $Height = 0;
    /**
     *宽
     *
     * Generated from protobuf field <code>int32 Width = 3;</code>
     */
    protected $Width = 0;
    /**
     * Uri
     *
     * Generated from protobuf field <code>string StoreUri = 4;</code>
     */
    protected $StoreUri = '';
    /**
     *图片地址
     *
     * Generated from protobuf field <code>string Url = 5;</code>
     */
    protected $Url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Format
     *          格式
     *     @type int $Height
     *          高
     *     @type int $Width
     *          宽
     *     @type string $StoreUri
     *           Uri
     *     @type string $Url
     *          图片地址
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     *格式
     *
     * Generated from protobuf field <code>string Format = 1;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     *格式
     *
     * Generated from protobuf field <code>string Format = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Format = $var;

        return $this;
    }

    /**
     *高
     *
     * Generated from protobuf field <code>int32 Height = 2;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     *高
     *
     * Generated from protobuf field <code>int32 Height = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->Height = $var;

        return $this;
    }

    /**
     *宽
     *
     * Generated from protobuf field <code>int32 Width = 3;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     *宽
     *
     * Generated from protobuf field <code>int32 Width = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->Width = $var;

        return $this;
    }

    /**
     * Uri
     *
     * Generated from protobuf field <code>string StoreUri = 4;</code>
     * @return string
     */
    public function getStoreUri()
    {
        return $this->StoreUri;
    }

    /**
     * Uri
     *
     * Generated from protobuf field <code>string StoreUri = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStoreUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->StoreUri = $var;

        return $this;
    }

    /**
     *图片地址
     *
     * Generated from protobuf field <code>string Url = 5;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     *图片地址
     *
     * Generated from protobuf field <code>string Url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->Url = $var;

        return $this;
    }

}

