<?php
namespace DTS\eBaySDK\Test;

use DTS\eBaySDK\ConfigurationResolver;
use DTS\eBaySDK\Test\Mocks\StaticMethods;
use InvalidArgumentException;

class ConfigurationResolverTest extends \PHPUnit\Framework\TestCase
{
    public function testDefaults()
    {
        $r = new ConfigurationResolver([
            'array' => [
                'valid' => ['array'],
                'default' => ['foo']
            ],
            'bool' => [
                'valid' => ['bool'],
                'default' => true
            ],
            'callable' => [
                'valid' => ['int'],
                'default' => [StaticMethods::class, 'defaultConfigValue']
            ],
            'int' => [
                'valid' => ['int'],
                'default' => -1
            ],
            'string' => [
                'valid' => ['string'],
                'default' => 'foo'
            ]
        ]);

        $this->assertEquals($r->resolve([]), [
            'array' => ['foo'],
            'bool' => true,
            'callable' => -1,
            'int' => -1,
            'string' => 'foo',
        ]);
    }

    public function testRequired()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['int'],
                'required' => true
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Missing required configuration options');

        $r->resolve([]);
    }

    public function testValidatesArray()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['array']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected array, but got int(-1)');

        $r->resolve(['foo' => -1]);
    }

    public function testValidatesBool()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['bool']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected bool, but got int(-1)');

        $r->resolve(['foo' => -1]);
    }

    public function testValidatesCallable()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['callable']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected callable, but got int(-1)');

        $r->resolve(['foo' => -1]);
    }

    public function testValidatesInstanceOf()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['StdClass']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected StdClass, but got int(-1)');

        $r->resolve(['foo' => -1]);
    }

    public function testValidatesInt()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['int']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected int, but got string(3)');

        $r->resolve(['foo' => 'foo']);
    }

    public function testValidatesStrings()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['string']
            ]
        ]);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid configuration value provided for "foo". Expected string, but got int(-1)');

        $r->resolve(['foo' => -1]);
    }

    public function testAllowsValid()
    {
        $r = new ConfigurationResolver([
            'array' => [
                'valid' => ['array']
            ],
            'bool' => [
                'valid' => ['bool']
            ],
            'callable' => [
                'valid' => ['callable']
            ],
            'int' => [
                'valid' => ['int']
            ],
            'stdClass' => [
                'valid' => ['StdClass']
            ],
            'string' => [
                'valid' => ['string']
            ]
        ]);

        $options = [
            'array' => [],
            'bool' => true,
            'callable' => function () {
            },
            'int' => 1,
            'stdClass' => new \stdClass(),
            'string' => 'foo'
        ];

        $this->assertEquals($r->resolve($options), $options);
    }

    public function testFn()
    {
        $r = new ConfigurationResolver([
            'foo' => [
                'valid' => ['int'],
                'fn' => [StaticMethods::class, 'applyConfigValue']
            ]
        ]);
        $this->assertEquals($r->resolve(['foo' => 1]), ['foo' => 3]);
    }
}
