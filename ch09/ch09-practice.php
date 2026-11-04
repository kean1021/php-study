<?php
/*
친구 다섯 명의 이름을 배열에 넣고, 두 번째와 마지막 친구의 이름을 출력하세요. (힌트: 마지막 인덱스는 count() - 1)
책 정보(제목, 저자, 가격)를 담은 연관 배열 세 개를 다차원 배열로 만들고, foreach로 "『제목』 저자 - 가격원" 형식으로 출력하세요.
2번 배열에서 가격의 합계와 평균을 구하세요.
"사과,배,감,귤"이라는 문자열을 배열로 바꾸고, 가나다순으로 정렬한 뒤, " | "로 이어 붙여 출력하세요.
*/
$friends = ["정태웅", "이원준","송채현", "송보미", "허수연"];

echo $friends[1];
echo "\n";
echo $friends[count($friends)-1];
echo "\n";

$books = [
    ["제목" => "안녕", "저자" => "허수연", "가격" => 50000],
    ["제목" => "잘가", "저자" => "송보미", "가격" => 40000],
    ["제목" => "모찌", "저자" => "이원준", "가격" => 30000],
    ];
foreach($books as $book){
    echo "『{$book["제목"]}』{$book["저자"]} - 가격: {$book["가격"]}원 \n";
}

$total = array_reduce($books, fn($carry, $book) => $carry + $book["가격"], 0);
$avg = $total / count($books);
echo "합계: {$total}원, 평균: {$avg}원 \n";

$fruit = "사과,배,감,귤";
$fruitArray = explode(",", $fruit);
sort($fruitArray);
echo implode(' | ', $fruitArray);