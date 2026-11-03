<?php
$todos = ["PHP 설치하기", "변수 공부하기", "반복문 연습하기"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오늘의 할 일</title>
</head>
<body>
    <h1>오늘의 할 일</h1>
    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li><?= $todo ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>