<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodUpdateSpaceUploadConfigRequest</code>
 */
class VodUpdateSpaceUploadConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 需要变更的设置key，值为VodSpaceUploadConfigKey中的枚举数字 
     *
     * Generated from protobuf field <code>string ConfigKey = 2;</code>
     */
    protected $ConfigKey = '';
    /**
     * 需要变更的设置value，取值与ConfigKey相关。
     * ConfigKey传入1时，ConfigValue可选值为”true“或”false“;
     * ConfigKey传入2时，ConfigValue可选值为”Available“或”Unavailable“
     *
     * Generated from protobuf field <code>string ConfigValue = 3;</code>
     */
    protected $ConfigValue = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           空间名 
     *     @type string $ConfigKey
     *           需要变更的设置key，值为VodSpaceUploadConfigKey中的枚举数字 
     *     @type string $ConfigValue
     *           需要变更的设置value，取值与ConfigKey相关。
     *           ConfigKey传入1时，ConfigValue可选值为”true“或”false“;
     *           ConfigKey传入2时，ConfigValue可选值为”Available“或”Unavailable“
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
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
     * 需要变更的设置key，值为VodSpaceUploadConfigKey中的枚举数字 
     *
     * Generated from protobuf field <code>string ConfigKey = 2;</code>
     * @return string
     */
    public function getConfigKey()
    {
        return $this->ConfigKey;
    }

    /**
     * 需要变更的设置key，值为VodSpaceUploadConfigKey中的枚举数字 
     *
     * Generated from protobuf field <code>string ConfigKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConfigKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->ConfigKey = $var;

        return $this;
    }

    /**
     * 需要变更的设置value，取值与ConfigKey相关。
     * ConfigKey传入1时，ConfigValue可选值为”true“或”false“;
     * ConfigKey传入2时，ConfigValue可选值为”Available“或”Unavailable“
     *
     * Generated from protobuf field <code>string ConfigValue = 3;</code>
     * @return string
     */
    public function getConfigValue()
    {
        return $this->ConfigValue;
    }

    /**
     * 需要变更的设置value，取值与ConfigKey相关。
     * ConfigKey传入1时，ConfigValue可选值为”true“或”false“;
     * ConfigKey传入2时，ConfigValue可选值为”Available“或”Unavailable“
     *
     * Generated from protobuf field <code>string ConfigValue = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConfigValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->ConfigValue = $var;

        return $this;
    }

}

