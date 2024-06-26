<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/promotions/v1beta/promotions_common.proto

namespace Google\Shopping\Merchant\Promotions\V1beta;

use UnexpectedValueException;

/**
 * Store codes or list of store codes the promotion applies to. Only for
 * Local inventory ads promotions.
 *
 * Protobuf type <code>google.shopping.merchant.promotions.v1beta.StoreApplicability</code>
 */
class StoreApplicability
{
    /**
     * Which store codes the promotion applies to is unknown.
     *
     * Generated from protobuf enum <code>STORE_APPLICABILITY_UNSPECIFIED = 0;</code>
     */
    const STORE_APPLICABILITY_UNSPECIFIED = 0;
    /**
     * Promotion applies to all stores.
     *
     * Generated from protobuf enum <code>ALL_STORES = 1;</code>
     */
    const ALL_STORES = 1;
    /**
     * Promotion applies to only the specified stores.
     *
     * Generated from protobuf enum <code>SPECIFIC_STORES = 2;</code>
     */
    const SPECIFIC_STORES = 2;

    private static $valueToName = [
        self::STORE_APPLICABILITY_UNSPECIFIED => 'STORE_APPLICABILITY_UNSPECIFIED',
        self::ALL_STORES => 'ALL_STORES',
        self::SPECIFIC_STORES => 'SPECIFIC_STORES',
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

