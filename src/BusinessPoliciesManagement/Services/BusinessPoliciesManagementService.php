<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\BusinessPoliciesManagement\Services;

class BusinessPoliciesManagementService extends \DTS\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService
{
    const API_VERSION = '1.1.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse
     */
    public function getVersion(\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse
     */
    public function removeProfile(\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request)
    {
        return $this->removeProfileAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeProfileAsync(\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileRequest $request)
    {
        return $this->callOperationAsync(
            'removeProfile',
            $request,
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveProfileResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse
     */
    public function addSellerProfile(\DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request)
    {
        return $this->addSellerProfileAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addSellerProfileAsync(\DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileRequest $request)
    {
        return $this->callOperationAsync(
            'addSellerProfile',
            $request,
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\AddSellerProfileResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse
     */
    public function getSellerProfiles(\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request)
    {
        return $this->getSellerProfilesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSellerProfilesAsync(\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesRequest $request)
    {
        return $this->callOperationAsync(
            'getSellerProfiles',
            $request,
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetSellerProfilesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse
     */
    public function setSellerProfile(\DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request)
    {
        return $this->setSellerProfileAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setSellerProfileAsync(\DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileRequest $request)
    {
        return $this->callOperationAsync(
            'setSellerProfile',
            $request,
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\SetSellerProfileResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse
     */
    public function removeSellerProfiles(\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request)
    {
        return $this->removeSellerProfilesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeSellerProfilesAsync(\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesRequest $request)
    {
        return $this->callOperationAsync(
            'removeSellerProfiles',
            $request,
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveSellerProfilesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse
     */
    public function consolidateShippingProfiles(\DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request)
    {
        return $this->consolidateShippingProfilesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function consolidateShippingProfilesAsync(\DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesRequest $request)
    {
        return $this->callOperationAsync(
            'consolidateShippingProfiles',
            $request,
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\ConsolidateShippingProfilesResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse
     */
    public function getConsolidationJobStatus(\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request)
    {
        return $this->getConsolidationJobStatusAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConsolidationJobStatusAsync(\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest $request)
    {
        return $this->callOperationAsync(
            'getConsolidationJobStatus',
            $request,
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request
     * @return \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse
     */
    public function removeOverrides(\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request)
    {
        return $this->removeOverridesAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeOverridesAsync(\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesRequest $request)
    {
        return $this->callOperationAsync(
            'removeOverrides',
            $request,
            '\DTS\eBaySDK\BusinessPoliciesManagement\Types\RemoveOverridesResponse'
        );
    }
}
