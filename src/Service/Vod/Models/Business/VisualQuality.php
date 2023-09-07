<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_workflow.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VisualQuality</code>
 */
class VisualQuality extends \Google\Protobuf\Internal\Message
{
    /**
     * 视频质量评分
     *
     * Generated from protobuf field <code>double VQScore = 1;</code>
     */
    protected $VQScore = 0.0;
    /**
     * 对比度
     *
     * Generated from protobuf field <code>double Contrast = 2;</code>
     */
    protected $Contrast = 0.0;
    /**
     * 色彩
     *
     * Generated from protobuf field <code>double Colorfulness = 3;</code>
     */
    protected $Colorfulness = 0.0;
    /**
     * 亮度
     *
     * Generated from protobuf field <code>double Brightness = 4;</code>
     */
    protected $Brightness = 0.0;
    /**
     * 纹理
     *
     * Generated from protobuf field <code>double Texture = 5;</code>
     */
    protected $Texture = 0.0;
    /**
     * 噪声
     *
     * Generated from protobuf field <code>double Noise = 6;</code>
     */
    protected $Noise = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $VQScore
     *           视频质量评分
     *     @type float $Contrast
     *           对比度
     *     @type float $Colorfulness
     *           色彩
     *     @type float $Brightness
     *           亮度
     *     @type float $Texture
     *           纹理
     *     @type float $Noise
     *           噪声
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 视频质量评分
     *
     * Generated from protobuf field <code>double VQScore = 1;</code>
     * @return float
     */
    public function getVQScore()
    {
        return $this->VQScore;
    }

    /**
     * 视频质量评分
     *
     * Generated from protobuf field <code>double VQScore = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setVQScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->VQScore = $var;

        return $this;
    }

    /**
     * 对比度
     *
     * Generated from protobuf field <code>double Contrast = 2;</code>
     * @return float
     */
    public function getContrast()
    {
        return $this->Contrast;
    }

    /**
     * 对比度
     *
     * Generated from protobuf field <code>double Contrast = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setContrast($var)
    {
        GPBUtil::checkDouble($var);
        $this->Contrast = $var;

        return $this;
    }

    /**
     * 色彩
     *
     * Generated from protobuf field <code>double Colorfulness = 3;</code>
     * @return float
     */
    public function getColorfulness()
    {
        return $this->Colorfulness;
    }

    /**
     * 色彩
     *
     * Generated from protobuf field <code>double Colorfulness = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setColorfulness($var)
    {
        GPBUtil::checkDouble($var);
        $this->Colorfulness = $var;

        return $this;
    }

    /**
     * 亮度
     *
     * Generated from protobuf field <code>double Brightness = 4;</code>
     * @return float
     */
    public function getBrightness()
    {
        return $this->Brightness;
    }

    /**
     * 亮度
     *
     * Generated from protobuf field <code>double Brightness = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setBrightness($var)
    {
        GPBUtil::checkDouble($var);
        $this->Brightness = $var;

        return $this;
    }

    /**
     * 纹理
     *
     * Generated from protobuf field <code>double Texture = 5;</code>
     * @return float
     */
    public function getTexture()
    {
        return $this->Texture;
    }

    /**
     * 纹理
     *
     * Generated from protobuf field <code>double Texture = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setTexture($var)
    {
        GPBUtil::checkDouble($var);
        $this->Texture = $var;

        return $this;
    }

    /**
     * 噪声
     *
     * Generated from protobuf field <code>double Noise = 6;</code>
     * @return float
     */
    public function getNoise()
    {
        return $this->Noise;
    }

    /**
     * 噪声
     *
     * Generated from protobuf field <code>double Noise = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setNoise($var)
    {
        GPBUtil::checkDouble($var);
        $this->Noise = $var;

        return $this;
    }

}
