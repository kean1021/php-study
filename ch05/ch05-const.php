<?php
const TAX_RATE = 0.1;
define('SITE_NAME', '私のブログ');

$price = 10000;
echo SITE_NAME . "\n";
echo "税金：" . ($price * TAX_RATE) . "円";  // 상수는 대문자로.
