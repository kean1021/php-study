<?php
$money = 10000;
$price = 3000;
$count = 0;

while($money >= $price) {
    $money -= $price;
    $count++;
}
echo "{$count}개를 사고 {$money}원이 남았습니다.";
