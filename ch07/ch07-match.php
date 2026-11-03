<?php
$menu = "라떼";

$price = match($menu){
    "커피" => 4500,
    "라떼" => 5000,
    "쥬스", "에이드" => 5500,
    default => 0,
};
echo "{$menu}: {$price}원";