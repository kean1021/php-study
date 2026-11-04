<?php
$nums = [5, 3, 9, 1];
sort($nums); // 오름차순
print_r($nums);
rsort($nums);   // 내림차순
print_r($nums);

$ages = ["철수" => 30, "영희" => 25, "민수" => 35];
asort($ages); // 값(키) 기준 정렬, key 유지. 영희,철수,민수
print_r($ages);
ksort($ages); // key 기준 정렬
print_r($ages);