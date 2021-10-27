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
 * @property \DTS\eBaySDK\MerchantData\Enums\BoldTitleCodeType $BoldTitle
 * @property \DTS\eBaySDK\MerchantData\Enums\BorderCodeType $Border
 * @property \DTS\eBaySDK\MerchantData\Enums\HighlightCodeType $Highlight
 * @property \DTS\eBaySDK\MerchantData\Enums\GiftIconCodeType $GiftIcon
 * @property \DTS\eBaySDK\MerchantData\Enums\HomePageFeaturedCodeType $HomePageFeatured
 * @property \DTS\eBaySDK\MerchantData\Enums\FeaturedFirstCodeType $FeaturedFirst
 * @property \DTS\eBaySDK\MerchantData\Enums\FeaturedPlusCodeType $FeaturedPlus
 * @property \DTS\eBaySDK\MerchantData\Enums\ProPackCodeType $ProPack
 * @property string $DetailVersion
 * @property \DateTime $UpdateTime
 */
class ListingFeatureDetailsType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BoldTitle' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BoldTitle'
        ],
        'Border' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Border'
        ],
        'Highlight' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Highlight'
        ],
        'GiftIcon' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'GiftIcon'
        ],
        'HomePageFeatured' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'HomePageFeatured'
        ],
        'FeaturedFirst' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeaturedFirst'
        ],
        'FeaturedPlus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FeaturedPlus'
        ],
        'ProPack' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ProPack'
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