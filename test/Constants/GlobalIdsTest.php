<?php
namespace DTS\eBaySDK\Constants\Test;

use DTS\eBaySDK\Constants\GlobalIds as GlobalIds;

class GlobalIdsTest extends \PHPUnit\Framework\TestCase
{
    public function testConstantsAreCorrectType()
    {
        $this->assertisString(GlobalIds::US);
        $this->assertisString(GlobalIds::ENCA);
        $this->assertisString(GlobalIds::GB);
        $this->assertisString(GlobalIds::AU);
        $this->assertisString(GlobalIds::AT);
        $this->assertisString(GlobalIds::FRBE);
        $this->assertisString(GlobalIds::FR);
        $this->assertisString(GlobalIds::DE);
        $this->assertisString(GlobalIds::MOTORS);
        $this->assertisString(GlobalIds::IT);
        $this->assertisString(GlobalIds::NLBE);
        $this->assertisString(GlobalIds::NL);
        $this->assertisString(GlobalIds::ES);
        $this->assertisString(GlobalIds::CH);
        $this->assertisString(GlobalIds::HK);
        $this->assertisString(GlobalIds::IN);
        $this->assertisString(GlobalIds::IE);
        $this->assertisString(GlobalIds::MY);
        $this->assertisString(GlobalIds::FRCA);
        $this->assertisString(GlobalIds::PH);
        $this->assertisString(GlobalIds::PL);
        $this->assertisString(GlobalIds::SG);
    }

    public function testConstantsHaveCorrectValue()
    {
        $this->assertEquals('EBAY-US', GlobalIds::US);
        $this->assertEquals('EBAY-ENCA', GlobalIds::ENCA);
        $this->assertEquals('EBAY-GB', GlobalIds::GB);
        $this->assertEquals('EBAY-AU', GlobalIds::AU);
        $this->assertEquals('EBAY-AT', GlobalIds::AT);
        $this->assertEquals('EBAY-FRBE', GlobalIds::FRBE);
        $this->assertEquals('EBAY-FR', GlobalIds::FR);
        $this->assertEquals('EBAY-DE', GlobalIds::DE);
        $this->assertEquals('EBAY-MOTOR', GlobalIds::MOTORS);
        $this->assertEquals('EBAY-IT', GlobalIds::IT);
        $this->assertEquals('EBAY-NLBE', GlobalIds::NLBE);
        $this->assertEquals('EBAY-NL', GlobalIds::NL);
        $this->assertEquals('EBAY-ES', GlobalIds::ES);
        $this->assertEquals('EBAY-CH', GlobalIds::CH);
        $this->assertEquals('EBAY-HK', GlobalIds::HK);
        $this->assertEquals('EBAY-IN', GlobalIds::IN);
        $this->assertEquals('EBAY-IE', GlobalIds::IE);
        $this->assertEquals('EBAY-MY', GlobalIds::MY);
        $this->assertEquals('EBAY-FRCA', GlobalIds::FRCA);
        $this->assertEquals('EBAY-PH', GlobalIds::PH);
        $this->assertEquals('EBAY-PL', GlobalIds::PL);
        $this->assertEquals('EBAY-SG', GlobalIds::SG);
    }
}
