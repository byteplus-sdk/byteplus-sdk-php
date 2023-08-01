<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_workflow.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.CategoryTagInfo</code>
 */
class CategoryTagInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * 标签id
     *
     * Generated from protobuf field <code>int64 TagId = 1;</code>
     */
    protected $TagId = 0;
    /**
     * 置信度
     *
     * Generated from protobuf field <code>double Prob = 2;</code>
     */
    protected $Prob = 0.0;
    /**
     * 标签名称
     *
     * Generated from protobuf field <code>string TagName = 3;</code>
     */
    protected $TagName = '';
    /**
     * 等级
     *
     * Generated from protobuf field <code>int64 Level = 4;</code>
     */
    protected $Level = 0;
    /**
     * 父节点标签信息
     *
     * Generated from protobuf field <code>map<string, string> ParentInfo = 5;</code>
     */
    private $ParentInfo;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $TagId
     *           标签id
     *     @type float $Prob
     *           置信度
     *     @type string $TagName
     *           标签名称
     *     @type int|string $Level
     *           等级
     *     @type array|\Google\Protobuf\Internal\MapField $ParentInfo
     *           父节点标签信息
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * 标签id
     *
     * Generated from protobuf field <code>int64 TagId = 1;</code>
     * @return int|string
     */
    public function getTagId()
    {
        return $this->TagId;
    }

    /**
     * 标签id
     *
     * Generated from protobuf field <code>int64 TagId = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTagId($var)
    {
        GPBUtil::checkInt64($var);
        $this->TagId = $var;

        return $this;
    }

    /**
     * 置信度
     *
     * Generated from protobuf field <code>double Prob = 2;</code>
     * @return float
     */
    public function getProb()
    {
        return $this->Prob;
    }

    /**
     * 置信度
     *
     * Generated from protobuf field <code>double Prob = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setProb($var)
    {
        GPBUtil::checkDouble($var);
        $this->Prob = $var;

        return $this;
    }

    /**
     * 标签名称
     *
     * Generated from protobuf field <code>string TagName = 3;</code>
     * @return string
     */
    public function getTagName()
    {
        return $this->TagName;
    }

    /**
     * 标签名称
     *
     * Generated from protobuf field <code>string TagName = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTagName($var)
    {
        GPBUtil::checkString($var, True);
        $this->TagName = $var;

        return $this;
    }

    /**
     * 等级
     *
     * Generated from protobuf field <code>int64 Level = 4;</code>
     * @return int|string
     */
    public function getLevel()
    {
        return $this->Level;
    }

    /**
     * 等级
     *
     * Generated from protobuf field <code>int64 Level = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkInt64($var);
        $this->Level = $var;

        return $this;
    }

    /**
     * 父节点标签信息
     *
     * Generated from protobuf field <code>map<string, string> ParentInfo = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getParentInfo()
    {
        return $this->ParentInfo;
    }

    /**
     * 父节点标签信息
     *
     * Generated from protobuf field <code>map<string, string> ParentInfo = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setParentInfo($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ParentInfo = $arr;

        return $this;
    }

}

