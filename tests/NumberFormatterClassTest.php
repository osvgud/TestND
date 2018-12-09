<?php

namespace App\Tests;

use App\Format\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterClassTest extends TestCase
{
    private $numberFormatter;

    public function setUp(){
        $this->numberFormatter = new NumberFormatter();
    }

    public function provideValidData()
    {
        return [
            ['2.84M', 2835779],
            ['1.00M', 999500],
            ['535K', 535216],
            ['536K', 535516,],
            ['27 534', 27533.78],
            ['999.99', 999.99],
            ['1 000', 999.9999],
            ['533.10', 533.1],
            ['66.67', 66.6666],
            ['12', 12.00],
            ['-124K', -123654.89],
            ['-2.84M', -2835779],
            ['-535K', -535216],
            ['-536K', -535516,],
            ['-27 534', -27533.78],
            ['-999.99', -999.99],
            ['-1 000', -999.9999],
            ['-533.10', -533.1],
            ['-66.67', -66.6666],
            ['-12', -12.00],
        ];
    }

    /**
     * @dataProvider provideValidData
     * @param string $expected
     * @param string $actual
     */
    public function testFormat($expected, $actual)
    {
        $this->assertEquals($expected, $this->numberFormatter->format($actual));
    }
}
