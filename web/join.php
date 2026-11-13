<?php
$submitted = $_SERVER['REQUEST_METHOD'] == 'POST';

if($submitted) {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $hobbies = $_POST['hobbies'] ?? [];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
    <?php if ($submitted): ?>
        <h1>가입 완료!</h1>
        <p>이름: <?= $name ?></p>
        <p>이메일: <?= $email ?></p>
        <p>취미: <?= implode(',', $hobbies) ?></p>
        <a href="join.php">다시하기</a>
    <?php else: ?>
        <h1>회원가입</h1>
        <form action="join.php" method="post">
            <p>
                <label>이름 <input type="text" name="name"></label>
            </p>
            <p>
                <label>이메일 <input type="text" name="email"></label>
            </p>
            <p>
                취미:
                <label><input type="checkbox" name="hobbies[]" value="독서"> 독서</label>
                <label><input type="checkbox" name="hobbies[]" value="운동"> 운동</label>
                <label><input type="checkbox" name="hobbies[]" value="게임"> 게임</label>
            </p>
            <button type="submit">가입하기</button>
    </form>
<?php endif; ?>
</body>
</html>