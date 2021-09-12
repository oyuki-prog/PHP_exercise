<?php

echo '1つ目の点数を入力して下さい: ';
$score_1 = fgets(STDIN);

echo '2つ目の点数を入力して下さい: ';
$score_2 = fgets(STDIN);

if ($score_1 >= 80 && $score_2 >= 80) {
    echo '合格' . PHP_EOL;
} elseif ($score_1 >= 50 || $score_2 >= 50) {
    echo '追試' . PHP_EOL;
} else {
    echo '不合格' . PHP_EOL;
}