<?php
$birthday = new DateTime('2026-12-25');
$today = new DateTime('2026-10-18');

$diff = $today->diff($birthday);
echo "크리스마스까지 {$diff->days}일 남았습니다.";