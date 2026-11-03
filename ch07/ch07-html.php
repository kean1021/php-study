<?php
$isLoggedIn = true;
$userName = "야마다";
?>
<!DOCTYPE html>
<html lang="ko">
    <body>
        <?php if ($isLoggedIn): ?>
            <p><?=  $userName ?>님, 안녕하세요!</p>
            <a href="/logout">로그아웃</a>
            <?php else: ?>
                <a href="/login">로그인</a>
            <?php endif; ?>
    </body>
</html>