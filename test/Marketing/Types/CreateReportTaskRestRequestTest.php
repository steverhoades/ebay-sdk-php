<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\CreateReportTaskRestRequest;

class CreateReportTaskRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CreateReportTaskRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\CreateReportTaskRestRequest', $this->obj);
    }

    public function testExtendsCreateReportTask()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\CreateReportTask', $this->obj);
    }
}