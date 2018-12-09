<?php

namespace App\Tests;

use App\Format\MoneyFormatter;
use App\Format\NumberFormatter;
use PHPUnit\Framework\TestCase;

class MoneyFormatterTest extends TestCase
{
    private $mockObj = null;
    public function setUp()
    {
        $this->mockObj = $this->createMock(NumberFormatter::class);
    }

    public function provideValidUSD()
    {
        return [
            ['$5.55', '5.55'],
            ['$108.12M', '108.12M'],
            ['$990.01K', '990.01K']
        ];
    }

    public function provideValidEur()
    {
        return [
            ['5.55 €', '5.55'],
            ['108.12M €', '108.12M'],
            ['990.01K €', '990.01K']
        ];
    }

    /**
     * @dataProvider provideValidUSD
     * @param string $expected
     * @param string $actual
     */
    public function testUsd($expected, $actual)
    {
        $this->mockObj->method('format')
            ->willReturn($actual);

        $usdFormatter = new MoneyFormatter($this->mockObj);

        $this->assertEquals($expected, $usdFormatter->formatUsd($actual));
    }

    /**
     * @dataProvider provideValidEur
     * @param string $expected
     * @param string $actual
     */
    public function testEur($expected, $actual)
    {
        $this->mockObj->method('format')
            ->willReturn($actual);

        $usdFormatter = new MoneyFormatter($this->mockObj);

        $this->assertEquals($expected, $usdFormatter->formatEur($actual));
    }
}
