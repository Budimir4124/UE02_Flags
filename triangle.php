<?php

require_once Flag.php;
require_once FlagInterface.php;

/**
 * Class triangle
 * Class represents a triangular Flag
 */
class triangle extends Flag implements FlagInterface
{

    private $height;
    private $length;

    /**
     * triangle constructor
     * @param string $country
     * @param int $height
     * @param int $length
     */

    public function construct(string $country, int $height, int $length){
        parent::construct($country);
        $this->height=$height;
        $this->length=$length;
    }

    /**
     * @return int
     */

    public function getSize(): int{
        return 0.5*$this->height*$this->length;
    }

}