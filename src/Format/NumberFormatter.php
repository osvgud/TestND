<?php

namespace App\Format;

class NumberFormatter
{
    public function format($number)
    {
        if (abs($number) >= 999500) {
            return number_format($number / 1000000, 2, '.', ' ') . "M";
        } elseif (abs($number) >= 99950) {
            return number_format($number / 1000, 0, '.', ' ') . "K";
        } elseif(abs($number) >= 1000){
            return number_format($number,0,'.',' ');
        } else {
            return number_format($number, $this->spacesAfterComma(round($number,2)), '.', ' ');
        }
    }

    public function spacesAfterComma($number)
    {
        $whole = floor($number);
        if($number-$whole < 0.005){
            return 0;
        }
        return 2;
    }
}