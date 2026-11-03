<?php

$n = 27;
$result = ($n % 2 == 0) ? "짝수" : "홀수";
echo $result;
echo "\n";

$age = 17;
var_dump($age >13 && $age <19);

$name = null;
echo $name ?? "익명";
echo "\n";

$name = "민수";
echo $name ?? "익명";
echo "\n";

$name = "영희";
echo $name ?? "익명";
echo "\n";
