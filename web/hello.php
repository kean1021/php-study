<?php
$name = $_GET['name'] ?? '손님';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>인사</title>
</head>
<body>
    <h1><?=  $name  ?>님, 반갑습니다!</h1>
</body>
</html>