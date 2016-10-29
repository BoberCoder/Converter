<?php

namespace Vendor\Converter;


interface ConvertersInterface
{
    /**
     * @param string $primary
     * @param string $final
     * @param int $value
     * @return mixed
     */

    public static function convert($primary,$final,$value);
}