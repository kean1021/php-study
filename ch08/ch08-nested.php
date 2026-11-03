<?php
for($dan = 1; $dan <=9; $dan++){
    echo "=== {$dan}단 === \n";
    for($i = 1; $i <=9; $i++){
        echo "{$dan} * {$i} = " . ($dan * $i) . "\n";
    }
    echo "\n"; 
}