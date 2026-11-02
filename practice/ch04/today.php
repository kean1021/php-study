<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>오늘의 날짜</title>
</head>
<body>
    <h1>안녕하세요!</h1>
    <p>오늘은 <?php
    date_default_timezone_set('Asia/Seoul'); 
    echo date('Y-m-d'); ?> 입니다.</p>
    <p>지금 시각은 <?= date('H:i') ?> 입니다.</p>
</body>
</html>