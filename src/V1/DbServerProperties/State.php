<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/db_server.proto

namespace Google\Cloud\OracleDatabase\V1\DbServerProperties;

use UnexpectedValueException;

/**
 * The various lifecycle states of the database server.
 *
 * Protobuf type <code>google.cloud.oracledatabase.v1.DbServerProperties.State</code>
 */
class State
{
    /**
     * Default unspecified value.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Indicates that the resource is in creating state.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * Indicates that the resource is in available state.
     *
     * Generated from protobuf enum <code>AVAILABLE = 2;</code>
     */
    const AVAILABLE = 2;
    /**
     * Indicates that the resource is in unavailable state.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 3;</code>
     */
    const UNAVAILABLE = 3;
    /**
     * Indicates that the resource is in deleting state.
     *
     * Generated from protobuf enum <code>DELETING = 4;</code>
     */
    const DELETING = 4;
    /**
     * Indicates that the resource is in deleted state.
     *
     * Generated from protobuf enum <code>DELETED = 5;</code>
     */
    const DELETED = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::AVAILABLE => 'AVAILABLE',
        self::UNAVAILABLE => 'UNAVAILABLE',
        self::DELETING => 'DELETING',
        self::DELETED => 'DELETED',
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

