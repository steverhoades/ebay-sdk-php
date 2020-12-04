<?php
namespace DTS\eBaySDK\Constants\Test;

use DTS\eBaySDK\Constants\SiteIds as SiteIds;

class SiteIdsTest extends \PHPUnit\Framework\TestCase
{
    public function testConstantsAreCorrectType()
    {
        $this->assertisInt(SiteIds::US);
        $this->assertisInt(SiteIds::ENCA);
        $this->assertisInt(SiteIds::GB);
        $this->assertisInt(SiteIds::AU);
        $this->assertisInt(SiteIds::AT);
        $this->assertisInt(SiteIds::FRBE);
        $this->assertisInt(SiteIds::FR);
        $this->assertisInt(SiteIds::DE);
        $this->assertisInt(SiteIds::MOTORS);
        $this->assertisInt(SiteIds::IT);
        $this->assertisInt(SiteIds::NLBE);
        $this->assertisInt(SiteIds::NL);
        $this->assertisInt(SiteIds::ES);
        $this->assertisInt(SiteIds::CH);
        $this->assertisInt(SiteIds::HK);
        $this->assertisInt(SiteIds::IN);
        $this->assertisInt(SiteIds::IE);
        $this->assertisInt(SiteIds::MY);
        $this->assertisInt(SiteIds::FRCA);
        $this->assertisInt(SiteIds::PH);
        $this->assertisInt(SiteIds::PL);
        $this->assertisInt(SiteIds::SG);
    }

    public function testConstantsHaveCorrectValue()
    {
        $this->assertEquals(0, SiteIds::US);
        $this->assertEquals(2, SiteIds::ENCA);
        $this->assertEquals(3, SiteIds::GB);
        $this->assertEquals(15, SiteIds::AU);
        $this->assertEquals(16, SiteIds::AT);
        $this->assertEquals(23, SiteIds::FRBE);
        $this->assertEquals(71, SiteIds::FR);
        $this->assertEquals(77, SiteIds::DE);
        $this->assertEquals(100, SiteIds::MOTORS);
        $this->assertEquals(101, SiteIds::IT);
        $this->assertEquals(123, SiteIds::NLBE);
        $this->assertEquals(146, SiteIds::NL);
        $this->assertEquals(186, SiteIds::ES);
        $this->assertEquals(193, SiteIds::CH);
        $this->assertEquals(201, SiteIds::HK);
        $this->assertEquals(203, SiteIds::IN);
        $this->assertEquals(205, SiteIds::IE);
        $this->assertEquals(207, SiteIds::MY);
        $this->assertEquals(210, SiteIds::FRCA);
        $this->assertEquals(211, SiteIds::PH);
        $this->assertEquals(212, SiteIds::PL);
        $this->assertEquals(216, SiteIds::SG);
    }
}
