<?php
$result = 0;
for($i=1; $i<=100; $i++){
    $result += $i;
} 
echo "총 합은 {$result} 입니다.\n";

for ($d = 1; $d <= 30; $d++) {
    if ($d % 3 === 0) {
        echo "짝!\n";
        continue;
    }
    echo "{$d}\n";
}
?>
<?php
//$menus = ["김치찌개", "된장찌개", "비빔밥"]; 배열을 HTML <ol> 목록으로 출력하는 페이지를 만들어 브라우저에서 확인하세요.
 $menus = ["김치찌개", "된장찌개", "비빔밥"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메뉴</title>
</head>
<body>
    <ol>
    <?php foreach ($menus as $menu) : ?>    
            <li><?= $menu ?></li>
        <?php endforeach; ?>
    </ol>   
</body>
</html>

<?php
for($i=1;$i<=5;$i++){
    for($d=1; $d<=$i; $d++){
        echo "*";
    } echo"\n";
}
?>
<?php
    for($i = 1; $i<=5; $i++){
        echo str_repeat("*", $i) . "\n";
    }