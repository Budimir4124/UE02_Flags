<?php

require_once rect.php;
require_once triangle.php;

$myFlag[] = new rect(
    "England",
    2,
    3
);

$myFlag[] = new triangle(
    "Nepal",
    3,
    2
);

foreach ($myFlags as $item){
    echo $item." / ".$item->getSize();
}



