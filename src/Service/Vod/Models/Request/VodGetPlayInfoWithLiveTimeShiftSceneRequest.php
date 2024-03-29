<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodGetPlayInfoWithLiveTimeShiftSceneRequest</code>
 */
class VodGetPlayInfoWithLiveTimeShiftSceneRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 播放URI列表,多个uri之间使用“,”分隔 
     *
     * Generated from protobuf field <code>string StoreUris = 1;</code>
     */
    protected $StoreUris = '';
    /**
     * 空间名称 
     *
     * Generated from protobuf field <code>string SpaceName = 2;</code>
     */
    protected $SpaceName = '';
    /**
     * 返回https播放地址，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string Ssl = 3;</code>
     */
    protected $Ssl = '';
    /**
     * 过期时间戳：毫秒。若不传，则为当前时间+1小时 
     *
     * Generated from protobuf field <code>string ExpireTimestamp = 4;</code>
     */
    protected $ExpireTimestamp = '';
    /**
     * 生成地址时填充BucketName，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedComposeBucketName = 5;</code>
     */
    protected $NeedComposeBucketName = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $StoreUris
     *           播放URI列表,多个uri之间使用“,”分隔 
     *     @type string $SpaceName
     *           空间名称 
     *     @type string $Ssl
     *           返回https播放地址，默认否, 1-是；0-否 
     *     @type string $ExpireTimestamp
     *           过期时间戳：毫秒。若不传，则为当前时间+1小时 
     *     @type string $NeedComposeBucketName
     *           生成地址时填充BucketName，默认否, 1-是；0-否 
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 播放URI列表,多个uri之间使用“,”分隔 
     *
     * Generated from protobuf field <code>string StoreUris = 1;</code>
     * @return string
     */
    public function getStoreUris()
    {
        return $this->StoreUris;
    }

    /**
     * 播放URI列表,多个uri之间使用“,”分隔 
     *
     * Generated from protobuf field <code>string StoreUris = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStoreUris($var)
    {
        GPBUtil::checkString($var, True);
        $this->StoreUris = $var;

        return $this;
    }

    /**
     * 空间名称 
     *
     * Generated from protobuf field <code>string SpaceName = 2;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名称 
     *
     * Generated from protobuf field <code>string SpaceName = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

    /**
     * 返回https播放地址，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string Ssl = 3;</code>
     * @return string
     */
    public function getSsl()
    {
        return $this->Ssl;
    }

    /**
     * 返回https播放地址，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string Ssl = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSsl($var)
    {
        GPBUtil::checkString($var, True);
        $this->Ssl = $var;

        return $this;
    }

    /**
     * 过期时间戳：毫秒。若不传，则为当前时间+1小时 
     *
     * Generated from protobuf field <code>string ExpireTimestamp = 4;</code>
     * @return string
     */
    public function getExpireTimestamp()
    {
        return $this->ExpireTimestamp;
    }

    /**
     * 过期时间戳：毫秒。若不传，则为当前时间+1小时 
     *
     * Generated from protobuf field <code>string ExpireTimestamp = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setExpireTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->ExpireTimestamp = $var;

        return $this;
    }

    /**
     * 生成地址时填充BucketName，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedComposeBucketName = 5;</code>
     * @return string
     */
    public function getNeedComposeBucketName()
    {
        return $this->NeedComposeBucketName;
    }

    /**
     * 生成地址时填充BucketName，默认否, 1-是；0-否 
     *
     * Generated from protobuf field <code>string NeedComposeBucketName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNeedComposeBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->NeedComposeBucketName = $var;

        return $this;
    }

}

