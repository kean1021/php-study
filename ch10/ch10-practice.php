<?php
function circleArea(float $r): float{
    return $r ** 2 * pi();
}
echo round(circleArea(4), 2);
echo"\n";

function isAdult(int $age): bool{
   return $age >= 19;
}
$age = 18;
echo isAdult(19) ? "성인" : "미성년";

//가격 배열과 할인율(기본값 0.1)을 받아, 할인된 가격 배열을 돌려주는 함수를 array_map과 화살표 함수로 만드세요.

function discount(array $prices, float $rate = 0.1):array
{
    return array_map(fn($p) => $p * (1-$rate), $prices);
}
print_r(discount([10000,20000]));

function cut(string $write, int $length):string
{
    return mb_strlen($write) > $max ? mb_substr($write, 0 , $length) . "..." : text;
    }   
echo cut("PHP는 웹을 위해 태어난 언어입니다.", 8);