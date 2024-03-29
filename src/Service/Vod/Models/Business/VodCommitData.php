<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_upload.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodCommitData</code>
 */
class VodCommitData extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频信息上报结果 
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodCommitUploadInfoResponseData Data = 1;</code>
     */
    protected $Data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Vod\Models\Business\VodCommitUploadInfoResponseData $Data
     *           视频信息上报结果 
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * 视频信息上报结果 
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodCommitUploadInfoResponseData Data = 1;</code>
     * @return \Byteplus\Service\Vod\Models\Business\VodCommitUploadInfoResponseData|null
     */
    public function getData()
    {
        return $this->Data;
    }

    public function hasData()
    {
        return isset($this->Data);
    }

    public function clearData()
    {
        unset($this->Data);
    }

    /**
     * 视频信息上报结果 
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodCommitUploadInfoResponseData Data = 1;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodCommitUploadInfoResponseData $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Vod\Models\Business\VodCommitUploadInfoResponseData::class);
        $this->Data = $var;

        return $this;
    }

}

