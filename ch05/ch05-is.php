<?php
$value = 3.14;

var_dump(is_int($value));
var_dump(is_float($value));
var_dump(is_string($value));
var_dump(is_numeric("123"));
var_dump(is_null(null));
echo gettype($value);
