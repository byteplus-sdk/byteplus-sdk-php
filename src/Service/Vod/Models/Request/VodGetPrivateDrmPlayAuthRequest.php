<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodGetPrivateDrmPlayAuthRequest</code>
 */
class VodGetPrivateDrmPlayAuthRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * drm类型，支持web,app。默认web 
     *
     * Generated from protobuf field <code>string DrmType = 1;</code>
     */
    protected $DrmType = '';
    /**
     * 视频id 
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     */
    protected $Vid = '';
    /**
     * 播放许可id列表，以逗号分割 
     *
     * Generated from protobuf field <code>string PlayAuthIds = 3;</code>
     */
    protected $PlayAuthIds = '';
    /**
     * 唯一性标识信息, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string UnionInfo = 4;</code>
     */
    protected $UnionInfo = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DrmType
     *           drm类型，支持web,app。默认web 
     *     @type string $Vid
     *           视频id 
     *     @type string $PlayAuthIds
     *           播放许可id列表，以逗号分割 
     *     @type string $UnionInfo
     *           唯一性标识信息, 若需使用请联系技术支持 
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * drm类型，支持web,app。默认web 
     *
     * Generated from protobuf field <code>string DrmType = 1;</code>
     * @return string
     */
    public function getDrmType()
    {
        return $this->DrmType;
    }

    /**
     * drm类型，支持web,app。默认web 
     *
     * Generated from protobuf field <code>string DrmType = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDrmType($var)
    {
        GPBUtil::checkString($var, True);
        $this->DrmType = $var;

        return $this;
    }

    /**
     * 视频id 
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * 视频id 
     *
     * Generated from protobuf field <code>string Vid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     * 播放许可id列表，以逗号分割 
     *
     * Generated from protobuf field <code>string PlayAuthIds = 3;</code>
     * @return string
     */
    public function getPlayAuthIds()
    {
        return $this->PlayAuthIds;
    }

    /**
     * 播放许可id列表，以逗号分割 
     *
     * Generated from protobuf field <code>string PlayAuthIds = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPlayAuthIds($var)
    {
        GPBUtil::checkString($var, True);
        $this->PlayAuthIds = $var;

        return $this;
    }

    /**
     * 唯一性标识信息, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string UnionInfo = 4;</code>
     * @return string
     */
    public function getUnionInfo()
    {
        return $this->UnionInfo;
    }

    /**
     * 唯一性标识信息, 若需使用请联系技术支持 
     *
     * Generated from protobuf field <code>string UnionInfo = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUnionInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->UnionInfo = $var;

        return $this;
    }

}

