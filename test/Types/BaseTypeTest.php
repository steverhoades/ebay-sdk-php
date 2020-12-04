<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Types\BaseType;

class BaseTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new BaseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
