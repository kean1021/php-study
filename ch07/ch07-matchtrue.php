<?php
$score = 77;

$grade = match (true) {
    $score >= 90 => "A",
    $score >= 80 => "B",
    $score >= 70 => "C",
    default => "F",
};

echo "당신의 점수는 {$score}, 등급은 {$grade} 입니다.";