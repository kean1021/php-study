<?php
$hour = 14;
$day = "토";
$total = 42000;

if ($hour >= 5 && $hour <= 11) {
    echo "좋은 아침이에요!";
} elseif ($hour >= 12 && $hour <= 17) {
    echo "좋은 오후예요!";
} elseif ($hour >= 18 && $hour <= 21) {
    echo "좋은 저녁이에요!";
} else {
    echo "안녕히 주무세요!";
}
echo "\n";
//요일 문자열("월"~`"일")을 받아 "평일" 또는 "주말"을 돌려주는 match` 식을 작성하세요.

$whatDay = match($day){
    "월", "화", "수", "목", "금" => "평일",
    "토", "일" => "주말",
    default => "요일을 알 수 없습니다.",
};
echo "오늘은 {$day}요일, {$whatDay}입니다.";

echo "\n";
//장바구니 금액 $total이 50,000원 이상이면 배송비 0원, 아니면 3,000원을 더해 최종 결제 금액을 출력하세요.

if($total >= 50000){
    $deliveryFee = 0;
} else{
    $deliveryFee = 3000;
}       //$deliveryFee = $total >= 50000 ? 0 : 3000; 삼항연산자로 쓰면 더 짧음
$total += $deliveryFee;
echo "최종 금액은 {$total}원 입니다.";