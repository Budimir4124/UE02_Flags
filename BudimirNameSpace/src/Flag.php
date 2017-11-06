<?php

/**
 * Class Flag
 * Class Flag is the base for all Flags
 */

namespace BudimirNameSpace;

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

    public function __construct(string $country)
    {
        $this->country = $country;
    }

    public function __toString(){
        return "Country: ".$this->country;
    }

}