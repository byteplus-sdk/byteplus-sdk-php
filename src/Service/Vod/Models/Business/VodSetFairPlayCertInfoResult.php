<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_common.proto

namespace Byteplus\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Byteplus.Vod.Models.Business.VodSetFairPlayCertInfoResult</code>
 */
class VodSetFairPlayCertInfoResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string CertId = 1;</code>
     */
    protected $CertId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $CertId
     * }
     */
    public function __construct($data = NULL) {
        \Byteplus\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string CertId = 1;</code>
     * @return string
     */
    public function getCertId()
    {
        return $this->CertId;
    }

    /**
     * Generated from protobuf field <code>string CertId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCertId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CertId = $var;

        return $this;
    }

}

