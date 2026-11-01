<?php

$name = "チョン・テウン";
$age = 27;

echo $name;
echo "\n";
echo $age;
echo "\n";

$score = 70;
echo $score . "\n";

$score = 95;
echo $score . "\n";

$title = "PHP入門";
$pages = 250;
$price = 19800.5;
$iNew = true;
$memo = null;

var_dump($title);
var_dump($pages);
var_dump($price);
var_dump($iNew);
var_dump($memo);

echo "こんにちは、$name\n";
echo 'こんにちは、$name\n';
echo "\n";
$item = "りんご";
echo "{$item}を3個買いました。\n";

$firstName = "テウン";
$lastName = "チョン";

$fullName = $lastName . $firstName;
echo $fullName . "\n";
echo "名前: " . $fullName . "さん" . "\n";

$message = "こんに";
$message.= "ちは";
echo $message . "\n";