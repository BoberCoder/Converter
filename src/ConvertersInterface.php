<?php

namespace Vendor\Converter;


interface ConvertersInterface
{
    /**
     * @param string $primary
     * @param string $final
     * @param int $value
     * @return int
     */

    public static function convert($primary,$final,$value);
}