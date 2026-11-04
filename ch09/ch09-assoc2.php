<?php
$user = ["name" => "정태웅", "age" => 26];

$user["age"] = 28;
$user["city"] = "부산";

foreach($user as $key => $value){
    echo "{$key} : {$value}\n";
}