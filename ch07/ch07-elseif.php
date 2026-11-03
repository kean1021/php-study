<?php
$score = 82;
// 90점 이상 A, 80점 이상 B, 70점 이상 C, 그 외 F
if($score >= 90){
 $grade = "A";   
}else if($score >= 80){
    $grade = "B";
}else if($score >= 70){
    $grade = "C";
}else{
    $grade = "F";
}
echo "당신의 학점은 $grade 입니다.";
