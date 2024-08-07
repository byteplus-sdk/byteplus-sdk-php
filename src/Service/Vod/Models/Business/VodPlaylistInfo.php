<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_media.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodPlaylistInfo</code>
 */
class VodPlaylistInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Id = 1;</code>
     */
    protected $Id = '';
    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>string Format = 3;</code>
     */
    protected $Format = '';
    /**
     * Generated from protobuf field <code>string Codec = 4;</code>
     */
    protected $Codec = '';
    /**
     * Generated from protobuf field <code>string Definition = 5;</code>
     */
    protected $Definition = '';
    /**
     * Generated from protobuf field <code>string StartTime = 6;</code>
     */
    protected $StartTime = '';
    /**
     * Generated from protobuf field <code>string EndTime = 7;</code>
     */
    protected $EndTime = '';
    /**
     * Generated from protobuf field <code>string Cycles = 8;</code>
     */
    protected $Cycles = '';
    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodPlaylistVideoInfo VideoInfos = 9;</code>
     */
    private $VideoInfos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Id
     *     @type string $Name
     *     @type string $Format
     *     @type string $Codec
     *     @type string $Definition
     *     @type string $StartTime
     *     @type string $EndTime
     *     @type string $Cycles
     *     @type \Byteplus\Service\Vod\Models\Business\VodPlaylistVideoInfo[]|\Google\Protobuf\Internal\RepeatedField $VideoInfos
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Generated from protobuf field <code>string Id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->Id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Format = 3;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * Generated from protobuf field <code>string Format = 3;</code>
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
     * Generated from protobuf field <code>string Codec = 4;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     * Generated from protobuf field <code>string Codec = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Definition = 5;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->Definition;
    }

    /**
     * Generated from protobuf field <code>string Definition = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->Definition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string StartTime = 6;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * Generated from protobuf field <code>string StartTime = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EndTime = 7;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * Generated from protobuf field <code>string EndTime = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->EndTime = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Cycles = 8;</code>
     * @return string
     */
    public function getCycles()
    {
        return $this->Cycles;
    }

    /**
     * Generated from protobuf field <code>string Cycles = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCycles($var)
    {
        GPBUtil::checkString($var, True);
        $this->Cycles = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodPlaylistVideoInfo VideoInfos = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVideoInfos()
    {
        return $this->VideoInfos;
    }

    /**
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.VodPlaylistVideoInfo VideoInfos = 9;</code>
     * @param \Byteplus\Service\Vod\Models\Business\VodPlaylistVideoInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVideoInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\VodPlaylistVideoInfo::class);
        $this->VideoInfos = $arr;

        return $this;
    }

}

