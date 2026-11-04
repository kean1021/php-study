<?php
$prices = [1000, 2500, 4000, 800];

// array_map: 모든 값을 변환
$withTax = array_map(fn($p) => $p * 1.1, $prices);
print_r($withTax); // [1100, 2750, 4400, 880]

// array_filter: 조건에 맞는 값만 남김
$expensive = array_filter($prices, fn($p) => $p >= 2000);
print_r($expensive);

// array_reduce: 모든 값을 하나로 합침
$total = array_reduce($prices, fn($carry, $p) => $carry + $p, 0);
echo $total;