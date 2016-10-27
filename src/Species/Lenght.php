<?php

namespace Vendor\Converter\Species;

use Vendor\Converter\ConvertersInterface;


class Lenght implements ConvertersInterface
{
    public static function convert($primary, $final,$value)
    {
        if ($primary == "mile" && $final == "km")
        {
            $value = $value * 1.6;
        }

        return $value;
    }
}