<?php
/**
 * Created by PhpStorm.
 * User: osvaldas
 * Date: 18.12.7
 * Time: 19.13
 */

namespace App\Format;


class MoneyFormatter
{
    private $numberFormatter;


    /**
     * MoneyFormatter constructor.
     * @param $numberFormatter
     */
    public function __construct(NumberFormatter $numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function formatEur($number){
        $formattedNumber = $this->numberFormatter->format($number);
        return $formattedNumber." €";
    }

    public function formatUsd($number){
        $formattedNumber = $this->numberFormatter->format($number);
        return "$".$formattedNumber;
    }
}