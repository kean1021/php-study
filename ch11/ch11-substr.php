<?php
$title = "라라벨로 만드는 나만의 웹사이트";

echo mb_strlen($title) . "\n";
echo mb_substr($title, 0, 3) . "\n";
echo mb_substr($title, -4) . "\n";
echo mb_strimwidth($title, 0, 20, "...") . "\n";