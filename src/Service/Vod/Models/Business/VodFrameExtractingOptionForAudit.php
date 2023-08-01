<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: byteplus/vod/business/vod_media.proto

namespace Byteplus\Service\Vod\Models\Business;

use UnexpectedValueException;

/**
 * 模型帧 抽帧选项
 *
 * Protobuf type <code>Byteplus.Vod.Models.Business.VodFrameExtractingOptionForAudit</code>
 */
class VodFrameExtractingOptionForAudit
{
    /**
     * 未定义的
     *
     * Generated from protobuf enum <code>UndefinedVodFrameExtractingOptionForAudit = 0;</code>
     */
    const UndefinedVodFrameExtractingOptionForAudit = 0;
    /**
     * 根据帧率取帧
     *
     * Generated from protobuf enum <code>FpsVodFrameExtractingOptionForAudit = 1;</code>
     */
    const FpsVodFrameExtractingOptionForAudit = 1;
    /**
     * 根据帧数取帧
     *
     * Generated from protobuf enum <code>NumberOfFramesVodFrameExtractingOptionForAudit = 2;</code>
     */
    const NumberOfFramesVodFrameExtractingOptionForAudit = 2;
    /**
     * 根据时间戳取帧
     *
     * Generated from protobuf enum <code>CutTimesVodFrameExtractingOptionForAudit = 3;</code>
     */
    const CutTimesVodFrameExtractingOptionForAudit = 3;
    /**
     * 根据Fps抽帧，并限制最大或最小帧数
     *
     * Generated from protobuf enum <code>FpsLimitNumberOfFramesVodFrameExtractingOptionForAudit = 4;</code>
     */
    const FpsLimitNumberOfFramesVodFrameExtractingOptionForAudit = 4;
    /**
     * 只取首帧或尾帧
     *
     * Generated from protobuf enum <code>OnlyFirstLastFrameVodFrameExtractingOptionForAudit = 5;</code>
     */
    const OnlyFirstLastFrameVodFrameExtractingOptionForAudit = 5;

    private static $valueToName = [
        self::UndefinedVodFrameExtractingOptionForAudit => 'UndefinedVodFrameExtractingOptionForAudit',
        self::FpsVodFrameExtractingOptionForAudit => 'FpsVodFrameExtractingOptionForAudit',
        self::NumberOfFramesVodFrameExtractingOptionForAudit => 'NumberOfFramesVodFrameExtractingOptionForAudit',
        self::CutTimesVodFrameExtractingOptionForAudit => 'CutTimesVodFrameExtractingOptionForAudit',
        self::FpsLimitNumberOfFramesVodFrameExtractingOptionForAudit => 'FpsLimitNumberOfFramesVodFrameExtractingOptionForAudit',
        self::OnlyFirstLastFrameVodFrameExtractingOptionForAudit => 'OnlyFirstLastFrameVodFrameExtractingOptionForAudit',
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

