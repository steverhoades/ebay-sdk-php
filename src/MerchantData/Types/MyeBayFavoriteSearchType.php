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
 * @property string $SearchName
 * @property string $SearchQuery
 * @property string $QueryKeywords
 * @property string $CategoryID
 * @property \DTS\eBaySDK\MerchantData\Enums\SimpleItemSortCodeType $ItemSort
 * @property \DTS\eBaySDK\MerchantData\Enums\SortOrderCodeType $SortOrder
 * @property \DateTime $EndTimeFrom
 * @property \DateTime $EndTimeTo
 * @property integer $MaxDistance
 * @property string $PostalCode
 * @property \DTS\eBaySDK\MerchantData\Enums\ItemTypeCodeType $ItemType
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $PriceMax
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $PriceMin
 * @property \DTS\eBaySDK\MerchantData\Enums\CurrencyCodeType $Currency
 * @property integer $BidCountMax
 * @property integer $BidCountMin
 * @property \DTS\eBaySDK\MerchantData\Enums\SearchFlagCodeType[] $SearchFlag
 * @property \DTS\eBaySDK\MerchantData\Enums\PreferredLocationCodeType $PreferredLocation
 * @property string[] $SellerID
 * @property string[] $SellerIDExclude
 * @property \DTS\eBaySDK\MerchantData\Enums\CountryCodeType $ItemsAvailableTo
 * @property \DTS\eBaySDK\MerchantData\Enums\CountryCodeType $ItemsLocatedIn
 * @property \DTS\eBaySDK\MerchantData\Enums\SellerBusinessCodeType $SellerBusinessType
 * @property \DTS\eBaySDK\MerchantData\Enums\ItemConditionCodeType $Condition
 * @property integer $Quantity
 * @property \DTS\eBaySDK\MerchantData\Enums\QuantityOperatorCodeType $QuantityOperator
 */
class MyeBayFavoriteSearchType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'SearchName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchName'
        ],
        'SearchQuery' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SearchQuery'
        ],
        'QueryKeywords' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QueryKeywords'
        ],
        'CategoryID' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CategoryID'
        ],
        'ItemSort' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemSort'
        ],
        'SortOrder' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SortOrder'
        ],
        'EndTimeFrom' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTimeFrom'
        ],
        'EndTimeTo' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'EndTimeTo'
        ],
        'MaxDistance' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'MaxDistance'
        ],
        'PostalCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PostalCode'
        ],
        'ItemType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemType'
        ],
        'PriceMax' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PriceMax'
        ],
        'PriceMin' => [
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PriceMin'
        ],
        'Currency' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Currency'
        ],
        'BidCountMax' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidCountMax'
        ],
        'BidCountMin' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidCountMin'
        ],
        'SearchFlag' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SearchFlag'
        ],
        'PreferredLocation' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PreferredLocation'
        ],
        'SellerID' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SellerID'
        ],
        'SellerIDExclude' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SellerIDExclude'
        ],
        'ItemsAvailableTo' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemsAvailableTo'
        ],
        'ItemsLocatedIn' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ItemsLocatedIn'
        ],
        'SellerBusinessType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellerBusinessType'
        ],
        'Condition' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Condition'
        ],
        'Quantity' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Quantity'
        ],
        'QuantityOperator' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'QuantityOperator'
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
