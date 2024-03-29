<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_cdn.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodCdnAccessLogElement</code>
 */
class VodCdnAccessLogElement extends \Google\Protobuf\Internal\Message
{
    /**
     * 下载地址
     *
     * Generated from protobuf field <code>string DownloadUrl = 1;</code>
     */
    protected $DownloadUrl = '';
    /**
     * 文件大小，单位：bytes
     *
     * Generated from protobuf field <code>int64 FileSize = 2;</code>
     */
    protected $FileSize = 0;
    /**
     * 日志文件名
     *
     * Generated from protobuf field <code>string FileName = 3;</code>
     */
    protected $FileName = '';
    /**
     * 日志包起始时间，单位：Unix秒级时间戳
     *
     * Generated from protobuf field <code>int32 StartTimestamp = 4;</code>
     */
    protected $StartTimestamp = 0;
    /**
     * 日志包结束时间，单位：Unix秒级时间戳
     *
     * Generated from protobuf field <code>int32 EndTimestamp = 5;</code>
     */
    protected $EndTimestamp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DownloadUrl
     *           下载地址
     *     @type int|string $FileSize
     *           文件大小，单位：bytes
     *     @type string $FileName
     *           日志文件名
     *     @type int $StartTimestamp
     *           日志包起始时间，单位：Unix秒级时间戳
     *     @type int $EndTimestamp
     *           日志包结束时间，单位：Unix秒级时间戳
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * 下载地址
     *
     * Generated from protobuf field <code>string DownloadUrl = 1;</code>
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->DownloadUrl;
    }

    /**
     * 下载地址
     *
     * Generated from protobuf field <code>string DownloadUrl = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDownloadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->DownloadUrl = $var;

        return $this;
    }

    /**
     * 文件大小，单位：bytes
     *
     * Generated from protobuf field <code>int64 FileSize = 2;</code>
     * @return int|string
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }

    /**
     * 文件大小，单位：bytes
     *
     * Generated from protobuf field <code>int64 FileSize = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFileSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->FileSize = $var;

        return $this;
    }

    /**
     * 日志文件名
     *
     * Generated from protobuf field <code>string FileName = 3;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * 日志文件名
     *
     * Generated from protobuf field <code>string FileName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * 日志包起始时间，单位：Unix秒级时间戳
     *
     * Generated from protobuf field <code>int32 StartTimestamp = 4;</code>
     * @return int
     */
    public function getStartTimestamp()
    {
        return $this->StartTimestamp;
    }

    /**
     * 日志包起始时间，单位：Unix秒级时间戳
     *
     * Generated from protobuf field <code>int32 StartTimestamp = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStartTimestamp($var)
    {
        GPBUtil::checkInt32($var);
        $this->StartTimestamp = $var;

        return $this;
    }

    /**
     * 日志包结束时间，单位：Unix秒级时间戳
     *
     * Generated from protobuf field <code>int32 EndTimestamp = 5;</code>
     * @return int
     */
    public function getEndTimestamp()
    {
        return $this->EndTimestamp;
    }

    /**
     * 日志包结束时间，单位：Unix秒级时间戳
     *
     * Generated from protobuf field <code>int32 EndTimestamp = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setEndTimestamp($var)
    {
        GPBUtil::checkInt32($var);
        $this->EndTimestamp = $var;

        return $this;
    }

}

