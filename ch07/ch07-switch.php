<?php
$menu = "커피";

switch($menu){
    case "커피":
        $price = 4500;
        break;
    case "라떼":
        $price = 5000;
        break;
    case "주스":
        $price = 5500;
        break;
    default:
    $price = 0;
}

echo "음료는 {$menu}, 가격은 {$price}원 입니다.";