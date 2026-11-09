<?php
/*$word = "이 문장은 아주 길어서 미리보기에서는 중간까지만 보여야 합니다. 직접 확인해 봅시다.";

echo mb_substr($word, 0, 30) . "..." . "\n";
*/
$word = "이 문장은 아주 길어서 미리보기에서는 중간까지만 보여야 합니다. 직접 확인해 봅시다.";
function preview(string $word): string
{
    return mb_strlen($word) > 30 ? mb_substr($word, 0, 30) . "..." :$word;
}
echo preview($word);

$prices = array_map(fn($p) => number_format($p) . "원", 
[12000, 8500, 230000]);
print_r($prices);

echo date('Y년 n월 j일', strtotime('+100 days')) . "\n";

$input = " Hello@Example.COM ";

echo trim(strtolower($input));