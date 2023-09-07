<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_upload.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.ApplyUploadInfoParam</code>
 */
class ApplyUploadInfoParam extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * Generated from protobuf field <code>string FileType = 2;</code>
     */
    protected $FileType = '';
    /**
     * Generated from protobuf field <code>string SessionKey = 3;</code>
     */
    protected $SessionKey = '';
    /**
     * Generated from protobuf field <code>double FileSize = 4;</code>
     */
    protected $FileSize = 0.0;
    /**
     * Generated from protobuf field <code>string MediaType = 5;</code>
     */
    protected $MediaType = '';
    /**
     * Generated from protobuf field <code>string TosKeys = 6;</code>
     */
    protected $TosKeys = '';
    /**
     * Generated from protobuf field <code>string FileExtension = 7;</code>
     */
    protected $FileExtension = '';
    /**
     * Generated from protobuf field <code>string FilePrefix = 8;</code>
     */
    protected $FilePrefix = '';
    /**
     * Generated from protobuf field <code>int32 FlushUploadMode = 9;</code>
     */
    protected $FlushUploadMode = 0;
    /**
     * Generated from protobuf field <code>string Md5 = 10;</code>
     */
    protected $Md5 = '';
    /**
     * Generated from protobuf field <code>int32 StorageClass = 11;</code>
     */
    protected $StorageClass = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *     @type string $FileType
     *     @type string $SessionKey
     *     @type float $FileSize
     *     @type string $MediaType
     *     @type string $TosKeys
     *     @type string $FileExtension
     *     @type string $FilePrefix
     *     @type int $FlushUploadMode
     *     @type string $Md5
     *     @type int $StorageClass
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
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
     * Generated from protobuf field <code>string FileType = 2;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->FileType;
    }

    /**
     * Generated from protobuf field <code>string FileType = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string SessionKey = 3;</code>
     * @return string
     */
    public function getSessionKey()
    {
        return $this->SessionKey;
    }

    /**
     * Generated from protobuf field <code>string SessionKey = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->SessionKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>double FileSize = 4;</code>
     * @return float
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }

    /**
     * Generated from protobuf field <code>double FileSize = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setFileSize($var)
    {
        GPBUtil::checkDouble($var);
        $this->FileSize = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string MediaType = 5;</code>
     * @return string
     */
    public function getMediaType()
    {
        return $this->MediaType;
    }

    /**
     * Generated from protobuf field <code>string MediaType = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMediaType($var)
    {
        GPBUtil::checkString($var, True);
        $this->MediaType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TosKeys = 6;</code>
     * @return string
     */
    public function getTosKeys()
    {
        return $this->TosKeys;
    }

    /**
     * Generated from protobuf field <code>string TosKeys = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTosKeys($var)
    {
        GPBUtil::checkString($var, True);
        $this->TosKeys = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FileExtension = 7;</code>
     * @return string
     */
    public function getFileExtension()
    {
        return $this->FileExtension;
    }

    /**
     * Generated from protobuf field <code>string FileExtension = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setFileExtension($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileExtension = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string FilePrefix = 8;</code>
     * @return string
     */
    public function getFilePrefix()
    {
        return $this->FilePrefix;
    }

    /**
     * Generated from protobuf field <code>string FilePrefix = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setFilePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->FilePrefix = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 FlushUploadMode = 9;</code>
     * @return int
     */
    public function getFlushUploadMode()
    {
        return $this->FlushUploadMode;
    }

    /**
     * Generated from protobuf field <code>int32 FlushUploadMode = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFlushUploadMode($var)
    {
        GPBUtil::checkInt32($var);
        $this->FlushUploadMode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Md5 = 10;</code>
     * @return string
     */
    public function getMd5()
    {
        return $this->Md5;
    }

    /**
     * Generated from protobuf field <code>string Md5 = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setMd5($var)
    {
        GPBUtil::checkString($var, True);
        $this->Md5 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 StorageClass = 11;</code>
     * @return int
     */
    public function getStorageClass()
    {
        return $this->StorageClass;
    }

    /**
     * Generated from protobuf field <code>int32 StorageClass = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setStorageClass($var)
    {
        GPBUtil::checkInt32($var);
        $this->StorageClass = $var;

        return $this;
    }

}
