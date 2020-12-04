<?php
namespace DTS\eBaySDK\Types\Test;

use DTS\eBaySDK\Types\IntegerType;

class IntegerTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new IntegerType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\IntegerType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testHasValueProperty()
    {
        $this->obj->value = 123;
        $this->assertEquals(123, $this->obj->value);
        $this->assertisInt($this->obj->value);
    }
}
