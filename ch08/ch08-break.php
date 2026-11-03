<?php
// 1부터 10까지 짝수만 출력
for($i=1; $i<=10; $i++){
    if($i%2 !== 0){
        continue;
    }
    echo $i . " ";
}
// 찾는 값이 나오면 바로 멈추기
echo "\n";
$numbers = [3, 8, 15, 4, 23];
foreach ($numbers as $n){
    if ($n > 10){
        echo "10보다 큰 첫 숫자: {$n}\n";
        break;
    }
}

$count=1;
foreach ($numbers as $n){
    if ($n !==23){
        $count++;
        continue;
    }
    echo "{$n}을 찾았습니다. {$count}번 검색";
    break;
}