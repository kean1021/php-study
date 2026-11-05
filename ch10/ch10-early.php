<?php
function getGrade($score){
    if($score < 0 || $score > 100){
        echo "잘못 된 점수";
    }
    if($score >= 90){
        return "A";
    }
    if($score >= 80){
        return "B";
    }
    return "C 이하";
}

echo getGrade(95) . "\n";
echo getGrade(150) . "\n";