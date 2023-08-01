<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_smart_strategy.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodGetSmartStrategyLitePlayInfoResult</code>
 */
class VodGetSmartStrategyLitePlayInfoResult extends \Google\Protobuf\Internal\Message
{
    /**
     * 当前返回的播放流类型
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodSmartStrategyResponseStreamType StreamType = 1;</code>
     */
    protected $StreamType = 0;
    /**
     * 该视频在点播中的元信息状态
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodSmartStrategyDataStoreStatus DataStoreStatus = 2;</code>
     */
    protected $DataStoreStatus = 0;
    /**
     * 匹配的VideoModel
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodPlayInfoModel PlayInfoModel = 3;</code>
     */
    protected $PlayInfoModel = null;
    /**
     * 原始URL
     *
     * Generated from protobuf field <code>string OriginalPlayUrl = 4;</code>
     */
    protected $OriginalPlayUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $StreamType
     *           当前返回的播放流类型
     *     @type int $DataStoreStatus
     *           该视频在点播中的元信息状态
     *     @type \Byteplus\Service\Vod\Models\Business\VodPlayInfoModel $PlayInfoModel
     *           匹配的VideoModel
     *     @type string $OriginalPlayUrl
     *           原始URL
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodSmartStrategy::initOnce();
        parent::__construct($data);
    }

    /**
     * 当前返回的播放流类型
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodSmartStrategyResponseStreamType StreamType = 1;</code>
     * @return int
     */
    public function getStreamType()
    {
        return $this->StreamType;
    }

    /**
     * 当前返回的播放流类型
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodSmartStrategyResponseStreamType StreamType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStreamType($var)
    {
        GPBUtil::checkEnum($var, \Byteplus\Service\Vod\Models\Business\VodSmartStrategyResponseStreamType::class);
        $this->StreamType = $var;

        return $this;
    }

    /**
     * 该视频在点播中的元信息状态
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodSmartStrategyDataStoreStatus DataStoreStatus = 2;</code>
     * @return int
     */
    public function getDataStoreStatus()
    {
        return $this->DataStoreStatus;
    }

    /**
     * 该视频在点播中的元信息状态
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodSmartStrategyDataStoreStatus DataStoreStatus = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDataStoreStatus($var)
    {
        GPBUtil::checkEnum($var, \Byteplus\Service\Vod\Models\Business\VodSmartStrategyDataStoreStatus::class);
        $this->DataStoreStatus = $var;

        return $this;
    }

    /**
     * 匹配的VideoModel
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodPlayInfoModel PlayInfoModel = 3;</code>
     * @return \Byteplus\Service\Vod\Models\Business\VodPlayInfoModel|null
     */
    public function getPlayInfoModel()
    {
        return $this->PlayInfoModel;
    }

    public function hasPlayInfoModel()
    {
        return isset($this->PlayInfoModel);
    }

    public function clearPlayInfoModel()
    {
        unset($this->PlayInfoModel);
    }

    /**
     * 匹配的VideoModel
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.VodPlayInfoModel PlayInfoModel = 3;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodPlayInfoModel $var
     * @return $this
     */
    public function setPlayInfoModel($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Vod\Models\Business\VodPlayInfoModel::class);
        $this->PlayInfoModel = $var;

        return $this;
    }

    /**
     * 原始URL
     *
     * Generated from protobuf field <code>string OriginalPlayUrl = 4;</code>
     * @return string
     */
    public function getOriginalPlayUrl()
    {
        return $this->OriginalPlayUrl;
    }

    /**
     * 原始URL
     *
     * Generated from protobuf field <code>string OriginalPlayUrl = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOriginalPlayUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->OriginalPlayUrl = $var;

        return $this;
    }

}

