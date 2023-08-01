<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_media.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodSpriteSnapshot</code>
 */
class VodSpriteSnapshot extends \Google\Protobuf\Internal\Message
{
    /**
     *格式
     *
     * Generated from protobuf field <code>string Format = 1;</code>
     */
    protected $Format = '';
    /**
     *多图中横向数量
     *
     * Generated from protobuf field <code>int32 ImgXLen = 2;</code>
     */
    protected $ImgXLen = 0;
    /**
     *多图中纵向数量
     *
     * Generated from protobuf field <code>int32 ImgYLen = 3;</code>
     */
    protected $ImgYLen = 0;
    /**
     *小图宽
     *
     * Generated from protobuf field <code>int32 CellWidth = 4;</code>
     */
    protected $CellWidth = 0;
    /**
     *小图高
     *
     * Generated from protobuf field <code>int32 CellHeight = 5;</code>
     */
    protected $CellHeight = 0;
    /**
     *截图间隔
     *
     * Generated from protobuf field <code>float Interval = 6;</code>
     */
    protected $Interval = 0.0;
    /**
     *截图总数限制
     *
     * Generated from protobuf field <code>int32 CaptureNum = 7;</code>
     */
    protected $CaptureNum = 0;
    /**
     * Uri列表
     *
     * Generated from protobuf field <code>repeated string StoreUris = 8;</code>
     */
    private $StoreUris;
    /**
     *图片地址列表
     *
     * Generated from protobuf field <code>repeated string Urls = 9;</code>
     */
    private $Urls;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Format
     *          格式
     *     @type int $ImgXLen
     *          多图中横向数量
     *     @type int $ImgYLen
     *          多图中纵向数量
     *     @type int $CellWidth
     *          小图宽
     *     @type int $CellHeight
     *          小图高
     *     @type float $Interval
     *          截图间隔
     *     @type int $CaptureNum
     *          截图总数限制
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $StoreUris
     *           Uri列表
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $Urls
     *          图片地址列表
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
     *多图中横向数量
     *
     * Generated from protobuf field <code>int32 ImgXLen = 2;</code>
     * @return int
     */
    public function getImgXLen()
    {
        return $this->ImgXLen;
    }

    /**
     *多图中横向数量
     *
     * Generated from protobuf field <code>int32 ImgXLen = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setImgXLen($var)
    {
        GPBUtil::checkInt32($var);
        $this->ImgXLen = $var;

        return $this;
    }

    /**
     *多图中纵向数量
     *
     * Generated from protobuf field <code>int32 ImgYLen = 3;</code>
     * @return int
     */
    public function getImgYLen()
    {
        return $this->ImgYLen;
    }

    /**
     *多图中纵向数量
     *
     * Generated from protobuf field <code>int32 ImgYLen = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setImgYLen($var)
    {
        GPBUtil::checkInt32($var);
        $this->ImgYLen = $var;

        return $this;
    }

    /**
     *小图宽
     *
     * Generated from protobuf field <code>int32 CellWidth = 4;</code>
     * @return int
     */
    public function getCellWidth()
    {
        return $this->CellWidth;
    }

    /**
     *小图宽
     *
     * Generated from protobuf field <code>int32 CellWidth = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCellWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->CellWidth = $var;

        return $this;
    }

    /**
     *小图高
     *
     * Generated from protobuf field <code>int32 CellHeight = 5;</code>
     * @return int
     */
    public function getCellHeight()
    {
        return $this->CellHeight;
    }

    /**
     *小图高
     *
     * Generated from protobuf field <code>int32 CellHeight = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCellHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->CellHeight = $var;

        return $this;
    }

    /**
     *截图间隔
     *
     * Generated from protobuf field <code>float Interval = 6;</code>
     * @return float
     */
    public function getInterval()
    {
        return $this->Interval;
    }

    /**
     *截图间隔
     *
     * Generated from protobuf field <code>float Interval = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkFloat($var);
        $this->Interval = $var;

        return $this;
    }

    /**
     *截图总数限制
     *
     * Generated from protobuf field <code>int32 CaptureNum = 7;</code>
     * @return int
     */
    public function getCaptureNum()
    {
        return $this->CaptureNum;
    }

    /**
     *截图总数限制
     *
     * Generated from protobuf field <code>int32 CaptureNum = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setCaptureNum($var)
    {
        GPBUtil::checkInt32($var);
        $this->CaptureNum = $var;

        return $this;
    }

    /**
     * Uri列表
     *
     * Generated from protobuf field <code>repeated string StoreUris = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStoreUris()
    {
        return $this->StoreUris;
    }

    /**
     * Uri列表
     *
     * Generated from protobuf field <code>repeated string StoreUris = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStoreUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->StoreUris = $arr;

        return $this;
    }

    /**
     *图片地址列表
     *
     * Generated from protobuf field <code>repeated string Urls = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrls()
    {
        return $this->Urls;
    }

    /**
     *图片地址列表
     *
     * Generated from protobuf field <code>repeated string Urls = 9;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->Urls = $arr;

        return $this;
    }

}

