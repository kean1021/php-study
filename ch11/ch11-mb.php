<?php
$text = "안녕하세요!";

echo strlen($text) . "\n";
echo mb_strlen($text) . "\n";
echo substr($text, 0, 2) . "\n";
echo mb_substr($text, 0, 2) . "\n";
