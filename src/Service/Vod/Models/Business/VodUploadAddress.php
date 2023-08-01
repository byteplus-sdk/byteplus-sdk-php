<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_upload.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodUploadAddress</code>
 */
class VodUploadAddress extends \Google\Protobuf\Internal\Message
{
    /**
     * 1001 阶段返回指定存储相关信息 
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodStoreInfo StoreInfos = 1;</code>
     */
    private $StoreInfos;
    /**
     * 1001 阶段返回指定的上传域名 
     *
     * Generated from protobuf field <code>repeated string UploadHosts = 2;</code>
     */
    private $UploadHosts;
    /**
     * 1001 阶段返回指定上传带的头信息 
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodHeaderPair UploadHeader = 3;</code>
     */
    private $UploadHeader;
    /**
     * 1001 阶段返回的 Session 信息 
     *
     * Generated from protobuf field <code>string SessionKey = 4;</code>
     */
    protected $SessionKey = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Vod\Models\Business\VodStoreInfo[]|\Google\Protobuf\Internal\RepeatedField $StoreInfos
     *           1001 阶段返回指定存储相关信息 
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $UploadHosts
     *           1001 阶段返回指定的上传域名 
     *     @type \Byteplus\Service\Vod\Models\Business\VodHeaderPair[]|\Google\Protobuf\Internal\RepeatedField $UploadHeader
     *           1001 阶段返回指定上传带的头信息 
     *     @type string $SessionKey
     *           1001 阶段返回的 Session 信息 
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * 1001 阶段返回指定存储相关信息 
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodStoreInfo StoreInfos = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStoreInfos()
    {
        return $this->StoreInfos;
    }

    /**
     * 1001 阶段返回指定存储相关信息 
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodStoreInfo StoreInfos = 1;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodStoreInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStoreInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\VodStoreInfo::class);
        $this->StoreInfos = $arr;

        return $this;
    }

    /**
     * 1001 阶段返回指定的上传域名 
     *
     * Generated from protobuf field <code>repeated string UploadHosts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUploadHosts()
    {
        return $this->UploadHosts;
    }

    /**
     * 1001 阶段返回指定的上传域名 
     *
     * Generated from protobuf field <code>repeated string UploadHosts = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUploadHosts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->UploadHosts = $arr;

        return $this;
    }

    /**
     * 1001 阶段返回指定上传带的头信息 
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodHeaderPair UploadHeader = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUploadHeader()
    {
        return $this->UploadHeader;
    }

    /**
     * 1001 阶段返回指定上传带的头信息 
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodHeaderPair UploadHeader = 3;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodHeaderPair[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUploadHeader($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\VodHeaderPair::class);
        $this->UploadHeader = $arr;

        return $this;
    }

    /**
     * 1001 阶段返回的 Session 信息 
     *
     * Generated from protobuf field <code>string SessionKey = 4;</code>
     * @return string
     */
    public function getSessionKey()
    {
        return $this->SessionKey;
    }

    /**
     * 1001 阶段返回的 Session 信息 
     *
     * Generated from protobuf field <code>string SessionKey = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->SessionKey = $var;

        return $this;
    }

}

