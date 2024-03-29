<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property boolean $LinkedPayPalAccount
 * @property \DTS\eBaySDK\MerchantData\Types\MaximumBuyerPolicyViolationsDetailsType $MaximumBuyerPolicyViolations
 * @property \DTS\eBaySDK\MerchantData\Types\MaximumItemRequirementsDetailsType $MaximumItemRequirements
 * @property \DTS\eBaySDK\MerchantData\Types\MaximumUnpaidItemStrikesInfoDetailsType $MaximumUnpaidItemStrikesInfo
 * @property \DTS\eBaySDK\MerchantData\Types\MinimumFeedbackScoreDetailsType $MinimumFeedbackScore
 * @property boolean $ShipToRegistrationCountry
 * @property string $DetailVersion
 * @property \DateTime $UpdateTime
 */
class SiteBuyerRequirementDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'LinkedPayPalAccount' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LinkedPayPalAccount'
        ],
        'MaximumBuyerPolicyViolations' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\MaximumBuyerPolicyViolationsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumBuyerPolicyViolations'
        ],
        'MaximumItemRequirements' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\MaximumItemRequirementsDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumItemRequirements'
        ],
        'MaximumUnpaidItemStrikesInfo' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\MaximumUnpaidItemStrikesInfoDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaximumUnpaidItemStrikesInfo'
        ],
        'MinimumFeedbackScore' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\MinimumFeedbackScoreDetailsType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MinimumFeedbackScore'
        ],
        'ShipToRegistrationCountry' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ShipToRegistrationCountry'
        ],
        'DetailVersion' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DetailVersion'
        ],
        'UpdateTime' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'UpdateTime'
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
