<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\AuthenticityVerificationType $AuthenticityVerification
 * @property \DTS\eBaySDK\Trading\Types\FulfillmentType $Fulfillment
 */
class TransactionProgramType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AuthenticityVerification' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AuthenticityVerificationType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AuthenticityVerification'
        ],
        'Fulfillment' => [
            'type' => 'DTS\eBaySDK\Trading\Types\FulfillmentType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Fulfillment'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
