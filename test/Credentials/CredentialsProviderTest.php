<?php
namespace DTS\eBaySDK\Test\Credentials;

use DTS\eBaySDK\Test\TestTraits\ManageEnv;
use DTS\eBaySDK\Credentials\CredentialsProvider;
use DTS\eBaySDK\Credentials\Credentials;
use InvalidArgumentException;

class CredentialsProvideerTest extends \PHPUnit\Framework\TestCase
{
    use ManageEnv;

    public function testCreatesFromEnvironmentVariables()
    {
        $this->clearEnv();
        putenv(CredentialsProvider::ENV_APP_ID . '=111');
        putenv(CredentialsProvider::ENV_CERT_ID . '=222');
        putenv(CredentialsProvider::ENV_DEV_ID . '=333');

        $p = CredentialsProvider::env();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testReturnsExceptionIfNoEnvironmentVariables()
    {
        $this->clearEnv();

        $p = CredentialsProvider::env();
        $c = $p();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Could not find environment variable');

        throw $c;
    }

    public function testCreatesFromIniFile()
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini('default');
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }

    public function testEnsuresIniFileIsValid()
    {
        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', "wef \n=\nwef");
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini();
        $c = @$p();

        unlink($dir . '/credentials');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid credentials file');

        throw $c;
    }

    public function testEnsuresIniFileExists()
    {
        $this->clearEnv();
        putenv('HOME=/does/not/exist');

        $p = CredentialsProvider::ini();
        $c = $p();

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Cannot read credentials from');

        throw $c;
    }

    public function testEnsuresProfileIsNotEmpty()
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
[foo]
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini('foo');
        $c = $p();

        unlink($dir . '/credentials');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('No credentials present in INI profile');

        throw $c;
    }

    public function testEnsuresFileIsNotEmpty()
    {
        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', '');
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::ini('foo');
        $c = $p();

        unlink($dir . '/credentials');

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("'foo' not found in credentials file");

        throw $c;
    }

    public function testMemoize()
    {
        $called = 0;
        $c = new Credentials('111', '222', '333');
        $f = function () use (&$called, &$c) {
            $called++;
            return $c;
        };
        $p = CredentialsProvider::memoize($f);
        $this->assertSame($c, $p());
        $this->assertEquals(1, $called);
        $this->assertSame($c, $p());
        $this->assertEquals(1, $called);
    }

    public function testChain()
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
[foo]
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $a = CredentialsProvider::ini('foo');
        $b = CredentialsProvider::ini();
        $c = function () {
            throw new \InvalidArgumentException('Should not be called');
        };

        $p = CredentialsProvider::chain($a, $b, $c);
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }

    public function testTrysEnvVarByDefault()
    {
        $this->clearEnv();
        putenv(CredentialsProvider::ENV_APP_ID . '=111');
        putenv(CredentialsProvider::ENV_CERT_ID . '=222');
        putenv(CredentialsProvider::ENV_DEV_ID . '=333');

        $p = CredentialsProvider::defaultProvider();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());
    }

    public function testTrysIniByDefault()
    {
        $ini = <<<EOT
[default]
ebay_app_id = 111
ebay_cert_id = 222
ebay_dev_id = 333
EOT;

        $dir = $this->clearEnv();
        file_put_contents($dir . '/credentials', $ini);
        putenv('HOME=' . dirname($dir));

        $p = CredentialsProvider::defaultProvider();
        $c = $p();

        $this->assertEquals('111', $c->getAppId());
        $this->assertEquals('222', $c->getCertId());
        $this->assertEquals('333', $c->getDevId());

        unlink($dir . '/credentials');
    }
}
