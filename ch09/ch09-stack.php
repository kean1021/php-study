<?php
$stack = [1, 2, 3];
array_push($stack, 4, 5);
$last = array_pop($stack);
array_unshift($stack, 0);
$first = array_shift($stack);
print_r($stack);