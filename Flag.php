<?php

/**
 * Class Flag
 * Class Flag is the base for all Flags
 */

abstract class Flag
{

    private $country;

    /**
     * @return string
     */

    public function getCountry(): string{
        return $this->country;
    }

    /**
     * @param string $country
     */

    public function construct(string $country)
    {
        $this->country = $country;
    }

}