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
