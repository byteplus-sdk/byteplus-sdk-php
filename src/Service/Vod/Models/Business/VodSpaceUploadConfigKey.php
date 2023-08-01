<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_space.proto

namespace Byteplus\Service\Vod\Models\Business;

use UnexpectedValueException;

/**
 * Protobuf type <code>Byteplus.Vod.Models.Business.VodSpaceUploadConfigKey</code>
 */
class VodSpaceUploadConfigKey
{
    /**
     * 未定义的key
     *
     * Generated from protobuf enum <code>UndefinedVodSpaceUploadConfigKey = 0;</code>
     */
    const UndefinedVodSpaceUploadConfigKey = 0;
    /**
     * 自定义文件路径key
     *
     * Generated from protobuf enum <code>CustomUploadFilePathVodSpaceUploadConfigKey = 1;</code>
     */
    const CustomUploadFilePathVodSpaceUploadConfigKey = 1;
    /**
     * 上传完成后自动发布key
     *
     * Generated from protobuf enum <code>AutoPublishAfterUploadVodSpaceUploadConfigKey = 2;</code>
     */
    const AutoPublishAfterUploadVodSpaceUploadConfigKey = 2;

    private static $valueToName = [
        self::UndefinedVodSpaceUploadConfigKey => 'UndefinedVodSpaceUploadConfigKey',
        self::CustomUploadFilePathVodSpaceUploadConfigKey => 'CustomUploadFilePathVodSpaceUploadConfigKey',
        self::AutoPublishAfterUploadVodSpaceUploadConfigKey => 'AutoPublishAfterUploadVodSpaceUploadConfigKey',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

