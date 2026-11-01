<?php

$name = "정태웅";
$age = 27;

echo $name;
echo "\n";
echo $age;
echo "\n";

$score = 70;
echo $score . "\n";

$score = 95;
echo $score . "\n";

$title = "PHP 입문";
$pages = 250;
$price = 19800.5;
$iNew = true;
$memo = null;

var_dump($title);
var_dump($pages);
var_dump($price);
var_dump($iNew);
var_dump($memo);

echo "안녕, $name\n";
echo '안녕, $name\n';
echo "\n";
$item = "사과";
echo "{$item}를 3개 샀어요.\n";

$firstName = "태웅";
$lastName = "정";

$fullName = $lastName . $firstName;
echo $fullName . "\n";
echo "이름: " . $fullName . "님" . "\n";

$message = "안녕";
$message.= "하세요";
echo $message . "\n";