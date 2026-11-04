<?php
$age = 22;
$isMember = true;

if ($age >= 19 && $isMember){
    echo "성인 회원 전용 페이지에 접속 할 수 있습니다.";
} else{
    echo "청소년은 성인 회원 전용 페이지에 접속 할 수 없습니다.";
}
echo "\n";

$day = "토";
if ($day === "토" || $day === "일"){
    echo "오늘은 주말입니다.";
}else{
    echo "오늘은 평일입니다.";
}
