<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/third_push.proto

namespace ThirdPush;

use UnexpectedValueException;

/**
 * Protobuf type <code>thirdPush.Platform</code>
 */
class Platform
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>ANDROID = 1;</code>
     */
    const ANDROID = 1;
    /**
     * Generated from protobuf enum <code>IOS = 2;</code>
     */
    const IOS = 2;
    /**
     * Generated from protobuf enum <code>MACOS = 3;</code>
     */
    const MACOS = 3;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::ANDROID => 'ANDROID',
        self::IOS => 'IOS',
        self::MACOS => 'MACOS',
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

