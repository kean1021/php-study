<?php

$user = ["name" => "영희", "age" => 25, "skills" => ["PHP", "SQL"]];

$json = json_encode($user, JSON_UNESCAPED_UNICODE);
echo $json . "\n";

$back = json_decode($json, true);
echo $back["skills"][0];
