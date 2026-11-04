<?php
$a = [1,2];
$b = [3,4];
$merged = array_merge($a, $b); // [1, 2, 3, 4]
$merged2 = [...$a, ...$b];  // 같은 결과

$letters = ["a", "b", "c", "d", "e"];
$part = array_slice($letters, 1, 3);

$keys = array_keys(["x" => 1, "y" => 2]); // ["x","y"]
$values = array_values(["X" => 1, "y" => 2]); // [1,2]

print_r($merged2);
print_r($part);
print_r($keys);
print_r($values);