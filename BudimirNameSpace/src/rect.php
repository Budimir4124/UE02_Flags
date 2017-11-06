<?php

//require_once 'Flag.php';
//require_once 'FlagInterface.php';

namespace BudimirNameSpace;

/**
 * Class rect
 * Class represents a rectangular Flag
 */
class rect extends Flag implements FlagInterface
{

    private $width;
    private $length;

    /**
     * rect constructor
     * @param string $country
     * @param int $width
     * @param int $length
     */

    public function __construct(string $country, int $width, int $length){
        parent::__construct($country);
        $this->width=$width;
        $this->length=$length;
    }

    /**
     * @return int
     */

    public function getSize(): int
    {
        return $this->length * $this->width;
    }

    public function __toString()
    {
        return parent::__toString();
        return "Width: ".$this->width." / Length: ".$this->length;
    }


}