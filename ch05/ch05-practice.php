<?php
// 練習問題　１－２
$product = "ノート";
$price = 1200;
$quantity = 3;
$total = $price * $quantity;

echo $product . " " . $quantity . "冊の値段は " .  $total . "円です。" . "\n";

echo "{$product} {$quantity}冊の値段は {$total}円です。\n";

var_dump("5" + "5");
var_dump("5" . "5");
