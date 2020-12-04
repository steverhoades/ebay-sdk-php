<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Types\DoubleType;

class DoubleTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new DoubleType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\DoubleType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 123.45;
        $this->assertEquals(123.45, $this->obj->value);
        $this->assertisFloat($this->obj->value);
    }
}
