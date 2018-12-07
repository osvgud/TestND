<?php

namespace App\Format;

class NumberFormatter
{
    public function format($number)
    {
        if (abs($number) >= 999500) {
            return number_format($number / 1000000, 2, '.', ' ') . "M";
        } elseif (abs($number) >= 99950) {
            return number_format($number / 1000, 2, '.', ' ') . "K";
        } elseif(abs($number) > 1000){
            return number_format($number,2,'.',' ');
        } else {
            $whole = floor($number);
            if($number-$whole < 0.005){
                return number_format($number,0,'.',' ');
            }
            else {
                return number_format($number, 2, '.', ' ');
            }
        }
    }
}