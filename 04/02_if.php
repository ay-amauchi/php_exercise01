<?php

/*条件
$pointが偶数であれば xは偶数です と出力
$pointが奇数であれば xは奇数です と出力 */

echo '$pointの値を入力して下さい: ';
$point = trim(fgets(STDIN));

// ここに処理を記述
if ($point % 2 == 0) {
    echo "{$point}は偶数です";
} else {
    echo "{$point}は奇数です";
}
