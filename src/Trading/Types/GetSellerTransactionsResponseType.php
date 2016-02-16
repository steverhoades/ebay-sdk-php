<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\PaginationResultType $PaginationResult
 * @property boolean $HasMoreTransactions
 * @property integer $TransactionsPerPage
 * @property integer $PageNumber
 * @property integer $ReturnedTransactionCountActual
 * @property \DTS\eBaySDK\Trading\Types\UserType $Seller
 * @property \DTS\eBaySDK\Trading\Types\TransactionArrayType $TransactionArray
 * @property boolean $PayPalPreferred
 */
class GetSellerTransactionsResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'PaginationResult' => [
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationResultType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
        ],
        'HasMoreTransactions' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HasMoreTransactions'
        ],
        'TransactionsPerPage' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionsPerPage'
        ],
        'PageNumber' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
        ],
        'ReturnedTransactionCountActual' => [
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnedTransactionCountActual'
        ],
        'Seller' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Seller'
        ],
        'TransactionArray' => [
            'type' => 'DTS\eBaySDK\Trading\Types\TransactionArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'TransactionArray'
        ],
        'PayPalPreferred' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalPreferred'
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