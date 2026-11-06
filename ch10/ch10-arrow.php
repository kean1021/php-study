<?php
$rate = 1.1;
$withTax = fn($price) => $price * $rate;
echo $withTax(2000);    //fn 화살표 함수는 use 없이 바깥 변수 가져옴
echo "\n";

$names = ["kim", "lee", "park"];
$upper = array_map(fn($n) => strtoupper($n), $names);
print_r($upper);