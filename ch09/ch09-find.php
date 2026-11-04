<?php
$fruits = ["사과", "바나나", "포도"];
var_dump(in_array("바나나", $fruits));  // 배열에 바나나가 있나 bool값
var_dump(array_search("포도", $fruits));    // 배열에 포도가 몇번째인가?

$user = ["name" => "철수", "age" => 20];
var_dump(array_key_exists("age", $user));   // 배열에 key가 있나? bool값
var_dump(isset($user["email"]));            // 값이 설정되어 있나? bool값

