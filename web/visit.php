<?php
session_start();

$_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
echo "이 페이지를 {$_SESSION['count']}번 방문했습니다.";