<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_common.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.AdaptiveBitrateStreamingInfo</code>
 */
class AdaptiveBitrateStreamingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *主文件主播放地址
     *下发Abr hls时，为主文件主播放地址
     *下发Abr Dash时，为空字符串
     *没有别的场景
     *
     * Generated from protobuf field <code>string MainPlayUrl = 1;</code>
     */
    protected $MainPlayUrl = '';
    /**
     *主文件备播放地址
     *下发Abr hls时，为主文件备播放地址
     *下发Abr Dash时，为空字符串
     *没有别的场景
     *
     * Generated from protobuf field <code>string BackupPlayUrl = 2;</code>
     */
    protected $BackupPlayUrl = '';
    /**
     *标识本次下发的ABR码流Format
     *下发Abr hls时，AbrFormat=hls
     *下发Abr Dash时，AbrFormat=dash
     *没有别的场景
     *
     * Generated from protobuf field <code>string AbrFormat = 3;</code>
     */
    protected $AbrFormat = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $MainPlayUrl
     *          主文件主播放地址
     *          下发Abr hls时，为主文件主播放地址
     *          下发Abr Dash时，为空字符串
     *          没有别的场景
     *     @type string $BackupPlayUrl
     *          主文件备播放地址
     *          下发Abr hls时，为主文件备播放地址
     *          下发Abr Dash时，为空字符串
     *          没有别的场景
     *     @type string $AbrFormat
     *          标识本次下发的ABR码流Format
     *          下发Abr hls时，AbrFormat=hls
     *          下发Abr Dash时，AbrFormat=dash
     *          没有别的场景
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        parent::__construct($data);
    }

    /**
     *主文件主播放地址
     *下发Abr hls时，为主文件主播放地址
     *下发Abr Dash时，为空字符串
     *没有别的场景
     *
     * Generated from protobuf field <code>string MainPlayUrl = 1;</code>
     * @return string
     */
    public function getMainPlayUrl()
    {
        return $this->MainPlayUrl;
    }

    /**
     *主文件主播放地址
     *下发Abr hls时，为主文件主播放地址
     *下发Abr Dash时，为空字符串
     *没有别的场景
     *
     * Generated from protobuf field <code>string MainPlayUrl = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMainPlayUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->MainPlayUrl = $var;

        return $this;
    }

    /**
     *主文件备播放地址
     *下发Abr hls时，为主文件备播放地址
     *下发Abr Dash时，为空字符串
     *没有别的场景
     *
     * Generated from protobuf field <code>string BackupPlayUrl = 2;</code>
     * @return string
     */
    public function getBackupPlayUrl()
    {
        return $this->BackupPlayUrl;
    }

    /**
     *主文件备播放地址
     *下发Abr hls时，为主文件备播放地址
     *下发Abr Dash时，为空字符串
     *没有别的场景
     *
     * Generated from protobuf field <code>string BackupPlayUrl = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBackupPlayUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->BackupPlayUrl = $var;

        return $this;
    }

    /**
     *标识本次下发的ABR码流Format
     *下发Abr hls时，AbrFormat=hls
     *下发Abr Dash时，AbrFormat=dash
     *没有别的场景
     *
     * Generated from protobuf field <code>string AbrFormat = 3;</code>
     * @return string
     */
    public function getAbrFormat()
    {
        return $this->AbrFormat;
    }

    /**
     *标识本次下发的ABR码流Format
     *下发Abr hls时，AbrFormat=hls
     *下发Abr Dash时，AbrFormat=dash
     *没有别的场景
     *
     * Generated from protobuf field <code>string AbrFormat = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAbrFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->AbrFormat = $var;

        return $this;
    }

}
