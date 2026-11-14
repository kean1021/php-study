<?php
$a  = $_POST['a'] ?? '';
$op = $_POST['op'] ?? '+';
$c  = $_POST['c'] ?? '';
$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $x = (float) $a;
    $y = (float) $c;
    $result = match ($op) {
        '+' => $x + $y,
        '-' => $x - $y,
        '*' => $x * $y,
        '/' => $y == 0 ? '0으로 나눌 수 없습니다' : $x / $y,
        default => '알 수 없는 연산자입니다',
    };
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>계산기</title>
</head>
<body>
    <form action="calc.php" method="post">
        <p>
            <label>첫 번째 숫자: <input name="a" value="<?= htmlspecialchars($a) ?>"></label>
        </p>
        <p>
            <select name="op">
                <?php foreach (['+', '-', '*', '/'] as $item): ?>
                    <option <?= $item === $op ? 'selected' : '' ?>><?= $item ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label>두 번째 숫자: <input name="c" value="<?= htmlspecialchars($c) ?>"></label>
            <button type="submit">=</button>
            <?php if ($result !== null): ?>
                <strong><?= htmlspecialchars((string) $result) ?></strong>
            <?php endif; ?>
        </p>
    </form>
</body>
</html>