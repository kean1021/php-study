<?php
$point = [10, 20];
[$x, $y] = $point;
echo "x={$x}, y={$y}\n";

$user = ["name" => "영희", "age" => 25];
["name" => $name, "age" => $age] = $user;
echo "{$name}, {$age}세"; 