<?php
function greet($name = "손님")
{
    return "{$name}님, 어서 오세요!";
}

echo greet("태웅") . "\n";
echo greet() . "\n";