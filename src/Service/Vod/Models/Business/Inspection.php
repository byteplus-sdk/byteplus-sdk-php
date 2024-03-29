<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_workflow.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.Inspection</code>
 */
class Inspection extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频检测质量
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.Quality Quality = 1;</code>
     */
    protected $Quality = null;
    /**
     * 水印检测结果
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.DeLogoInfo DeLogo = 2;</code>
     */
    private $DeLogo;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Byteplus\Service\Vod\Models\Business\Quality $Quality
     *           视频检测质量
     *     @type \Byteplus\Service\Vod\Models\Business\DeLogoInfo[]|\Google\Protobuf\Internal\RepeatedField $DeLogo
     *           水印检测结果
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 视频检测质量
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.Quality Quality = 1;</code>
     * @return \Byteplus\Service\Vod\Models\Business\Quality|null
     */
    public function getQuality()
    {
        return $this->Quality;
    }

    public function hasQuality()
    {
        return isset($this->Quality);
    }

    public function clearQuality()
    {
        unset($this->Quality);
    }

    /**
     * 视频检测质量
     *
     * Generated from protobuf field <code>.Byteplus.Vod.Models.Business.Quality Quality = 1;</code>
     * @param \Byteplus\Service\Vod\Models\Business\Quality $var
     * @return $this
     */
    public function setQuality($var)
    {
        GPBUtil::checkMessage($var, \Byteplus\Service\Vod\Models\Business\Quality::class);
        $this->Quality = $var;

        return $this;
    }

    /**
     * 水印检测结果
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.DeLogoInfo DeLogo = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeLogo()
    {
        return $this->DeLogo;
    }

    /**
     * 水印检测结果
     *
     * Generated from protobuf field <code>repeated .Byteplus.Vod.Models.Business.DeLogoInfo DeLogo = 2;</code>
     * @param \Byteplus\Service\Vod\Models\Business\DeLogoInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeLogo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Byteplus\Service\Vod\Models\Business\DeLogoInfo::class);
        $this->DeLogo = $arr;

        return $this;
    }

}

