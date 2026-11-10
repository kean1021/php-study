<?php
$keyword = $_GET['keyword'] ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>검색</title>
</head>
<body>
    <form action="search.php" method="get">
        <input type="text" name="keyword" value="<?= $keyword ?>">
        <button type="submit">검색</button>
    </form>

    <?php if ($keyword !== ''): ?>
        <p>"<?= $keyword ?>"에 대한 검색 결과입니다.</p>
    <?php endif; ?>
</body>
</html>