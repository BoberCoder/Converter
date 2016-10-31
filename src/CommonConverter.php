<?php

namespace Vendor\Converter;

abstract class CommonConverter
{
    /**
     * string @var short description like "some to some", for example "mile to km".
     */
    public $description;

    /**
     * float @var converting coefficient.
     */
    private $coef;

    public function __construct($description, $coef)
    {
        $this->description = $description;
        $this->coef = $coef;
    }

    /**
     * @param float $value
     *
     * @return float
     */
    public function convert($value)
    {
        $value = $value * $this->coef;

        return $value;
    }
}
