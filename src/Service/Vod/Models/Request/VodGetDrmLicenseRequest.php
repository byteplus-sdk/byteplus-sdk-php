<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/request/request_vod.proto

namespace Byteplus\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Request.VodGetDrmLicenseRequest</code>
 */
class VodGetDrmLicenseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     * Generated from protobuf field <code>string Kid = 2;</code>
     */
    protected $Kid = '';
    /**
     * Generated from protobuf field <code>string ThirdPartyDrmType = 3;</code>
     */
    protected $ThirdPartyDrmType = '';
    /**
     * Generated from protobuf field <code>int64 Persistent = 4;</code>
     */
    protected $Persistent = 0;
    /**
     * Generated from protobuf field <code>int64 LicenseDuration = 5;</code>
     */
    protected $LicenseDuration = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *     @type string $Kid
     *     @type string $ThirdPartyDrmType
     *     @type int|string $Persistent
     *     @type int|string $LicenseDuration
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     * Generated from protobuf field <code>string Vid = 1;</code>
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
     * Generated from protobuf field <code>string Kid = 2;</code>
     * @return string
     */
    public function getKid()
    {
        return $this->Kid;
    }

    /**
     * Generated from protobuf field <code>string Kid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Kid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ThirdPartyDrmType = 3;</code>
     * @return string
     */
    public function getThirdPartyDrmType()
    {
        return $this->ThirdPartyDrmType;
    }

    /**
     * Generated from protobuf field <code>string ThirdPartyDrmType = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setThirdPartyDrmType($var)
    {
        GPBUtil::checkString($var, True);
        $this->ThirdPartyDrmType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Persistent = 4;</code>
     * @return int|string
     */
    public function getPersistent()
    {
        return $this->Persistent;
    }

    /**
     * Generated from protobuf field <code>int64 Persistent = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPersistent($var)
    {
        GPBUtil::checkInt64($var);
        $this->Persistent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 LicenseDuration = 5;</code>
     * @return int|string
     */
    public function getLicenseDuration()
    {
        return $this->LicenseDuration;
    }

    /**
     * Generated from protobuf field <code>int64 LicenseDuration = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLicenseDuration($var)
    {
        GPBUtil::checkInt64($var);
        $this->LicenseDuration = $var;

        return $this;
    }

}

