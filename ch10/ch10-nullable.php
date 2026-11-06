<?php
function findUser(int $id): ?string {
    $users = [1=> "철수", 2=> "영희"];
    return $users[$id] ?? null;
}

function printLine(string $text): void
{
    echo $text . "\n";
}

printLine(findUser(1) ?? "없음");
printLine(findUser(9) ?? "없음");
