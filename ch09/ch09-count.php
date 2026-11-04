<?php
$scores = [90, 85, 77, 100];
echo count($scores);    //4
echo "\n";

// for 문과 함께 쓰면 이렇게 됩니다.
for ($i = 0; $i < count($scores); $i++){
    echo $scores[$i] . "\n";
}

// 하지만 앞 장에서 배운 foreach가 훨씬 간단합니다.

foreach($scores as $score){
    echo"{$score} \n";
}