<?php
$rate = 1.1;

$withTax = function ($price) use ($rate){
    return $price * $rate;
};

echo $withTax(1000);