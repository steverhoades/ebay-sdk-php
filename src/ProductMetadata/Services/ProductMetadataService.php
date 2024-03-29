<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\ProductMetadata\Services;

class ProductMetadataService extends \DTS\eBaySDK\ProductMetadata\Services\ProductMetadataBaseService
{
    const API_VERSION = '1.3.0 1.3.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchNamesRequest $request
     * @return \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchNamesResponse
     */
    public function getProductSearchNames(\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchNamesRequest $request)
    {
        return $this->getProductSearchNamesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchNamesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSearchNamesAsync(\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchNamesRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSearchNames',
            $request,
            '\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchNamesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesRequest $request
     * @return \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesResponse
     */
    public function getCompatibilitySearchNames(\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesRequest $request)
    {
        return $this->getCompatibilitySearchNamesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompatibilitySearchNamesAsync(\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesRequest $request)
    {
        return $this->callOperationAsync(
            'getCompatibilitySearchNames',
            $request,
            '\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchNamesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest $request
     * @return \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesResponse
     */
    public function getProductSearchValues(\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest $request)
    {
        return $this->getProductSearchValuesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSearchValuesAsync(\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSearchValues',
            $request,
            '\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest $request
     * @return \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkResponse
     */
    public function getProductSearchValuesBulk(\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest $request)
    {
        return $this->getProductSearchValuesBulkAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSearchValuesBulkAsync(\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSearchValuesBulk',
            $request,
            '\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest $request
     * @return \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesResponse
     */
    public function getCompatibilitySearchValues(\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest $request)
    {
        return $this->getCompatibilitySearchValuesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompatibilitySearchValuesAsync(\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesRequest $request)
    {
        return $this->callOperationAsync(
            'getCompatibilitySearchValues',
            $request,
            '\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest $request
     * @return \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkResponse
     */
    public function getCompatibilitySearchValuesBulk(\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest $request)
    {
        return $this->getCompatibilitySearchValuesBulkAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompatibilitySearchValuesBulkAsync(\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest $request)
    {
        return $this->callOperationAsync(
            'getCompatibilitySearchValuesBulk',
            $request,
            '\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionRequest $request
     * @return \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionResponse
     */
    public function getProductSearchDataVersion(\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionRequest $request)
    {
        return $this->getProductSearchDataVersionAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSearchDataVersionAsync(\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSearchDataVersion',
            $request,
            '\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchDataVersionResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest $request
     * @return \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse
     */
    public function getCompatibilitySearchDataVersion(\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest $request)
    {
        return $this->getCompatibilitySearchDataVersionAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompatibilitySearchDataVersionAsync(\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getCompatibilitySearchDataVersion',
            $request,
            '\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchDataVersionResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\ProductMetadataBulkRequest $request
     * @return \DTS\eBaySDK\ProductMetadata\Types\ProductMetadataBulkResponse
     */
    public function getProductMetadataBulk(\DTS\eBaySDK\ProductMetadata\Types\ProductMetadataBulkRequest $request)
    {
        return $this->getProductMetadataBulkAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\ProductMetadata\Types\ProductMetadataBulkRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductMetadataBulkAsync(\DTS\eBaySDK\ProductMetadata\Types\ProductMetadataBulkRequest $request)
    {
        return $this->callOperationAsync(
            'getProductMetadataBulk',
            $request,
            '\DTS\eBaySDK\ProductMetadata\Types\ProductMetadataBulkResponse'
        );
    }
}
