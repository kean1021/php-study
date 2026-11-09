<?php
$sentence = "PHP는 재밌다. PHP는 쉽다.";

var_dump(str_contains($sentence, "재밌"));
var_dump(str_starts_with($sentence, "PHP"));
var_dump(str_ends_with($sentence, "쉽다."));

echo str_replace("PHP", "라라벨", $sentence) . "\n";

echo mb_strpos($sentence, "재밌") . "\n";