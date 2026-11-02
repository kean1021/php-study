<?php
$input = "42";
$number = (int) $input; // 문자열을 정수로 변환
$price = (float) "19.9"; // 문자열을 실수로 변환
$text = (string) 100; // 정수를 문자열로 변환
$flag = (bool) 1; // 정수를 불리언으로 변환

var_dump($number, $price, $text, $flag);
