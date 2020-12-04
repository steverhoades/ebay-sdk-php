<?php
namespace DTS\eBaySDK\Constants\Test;

use DTS\eBaySDK\Constants\MarketplaceIds as MarketplaceIds;

class MarketplaceIdsTest extends \PHPUnit\Framework\TestCase
{
    public function testConstantsAreCorrectType()
    {
        $this->assertisString(MarketplaceIds::US);
        $this->assertisString(MarketplaceIds::CA);
        $this->assertisString(MarketplaceIds::GB);
        $this->assertisString(MarketplaceIds::AU);
        $this->assertisString(MarketplaceIds::AT);
        $this->assertisString(MarketplaceIds::BE);
        $this->assertisString(MarketplaceIds::FR);
        $this->assertisString(MarketplaceIds::DE);
        $this->assertisString(MarketplaceIds::MOTORS);
        $this->assertisString(MarketplaceIds::IT);
        $this->assertisString(MarketplaceIds::NL);
        $this->assertisString(MarketplaceIds::ES);
        $this->assertisString(MarketplaceIds::CH);
        $this->assertisString(MarketplaceIds::HK);
        $this->assertisString(MarketplaceIds::IN);
        $this->assertisString(MarketplaceIds::IE);
        $this->assertisString(MarketplaceIds::MY);
        $this->assertisString(MarketplaceIds::PH);
        $this->assertisString(MarketplaceIds::PL);
        $this->assertisString(MarketplaceIds::SG);
        $this->assertisString(MarketplaceIds::CN);
    }

    public function testConstantsHaveCorrectValue()
    {
        $this->assertEquals('EBAY-US', MarketplaceIds::US);
        $this->assertEquals('EBAY-CA', MarketplaceIds::CA);
        $this->assertEquals('EBAY-GB', MarketplaceIds::GB);
        $this->assertEquals('EBAY-AU', MarketplaceIds::AU);
        $this->assertEquals('EBAY-AT', MarketplaceIds::AT);
        $this->assertEquals('EBAY-BE', MarketplaceIds::BE);
        $this->assertEquals('EBAY-FR', MarketplaceIds::FR);
        $this->assertEquals('EBAY-DE', MarketplaceIds::DE);
        $this->assertEquals('EBAY-US.MOTORS', MarketplaceIds::MOTORS);
        $this->assertEquals('EBAY-IT', MarketplaceIds::IT);
        $this->assertEquals('EBAY-NL', MarketplaceIds::NL);
        $this->assertEquals('EBAY-ES', MarketplaceIds::ES);
        $this->assertEquals('EBAY-CH', MarketplaceIds::CH);
        $this->assertEquals('EBAY-HK', MarketplaceIds::HK);
        $this->assertEquals('EBAY-IN', MarketplaceIds::IN);
        $this->assertEquals('EBAY-IE', MarketplaceIds::IE);
        $this->assertEquals('EBAY-MY', MarketplaceIds::MY);
        $this->assertEquals('EBAY-PH', MarketplaceIds::PH);
        $this->assertEquals('EBAY-PL', MarketplaceIds::PL);
        $this->assertEquals('EBAY-SG', MarketplaceIds::SG);
        $this->assertEquals('EBAY-CN', MarketplaceIds::CN);
    }
}
