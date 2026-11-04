<?php
$colors = ["빨강", "주황", "노랑"];

$colors[] = "초록";
$colors[0] = "다홍";
unset($colors[1]);

print_r($colors);
$colors = array_values($colors);        // 이 부분은 array의 인덱스값을 재설정 한다.(없어진 부분 채우기)
print_r($colors);