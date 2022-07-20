<?php

/*条件
$a が $b より大きい場合、$aを出力
$a が $b より小さい場合、$bを出力
$a と $b が等しい場合、 入力された値は等しいです と出力
 */

echo '$aの値を入力して下さい: ';
$a = trim(fgets(STDIN));

echo '$bの値を入力して下さい: ';
$b = trim(fgets(STDIN));

// ここに処理を記述
if ($a > $b) {
    echo $a;
} elseif ($b > $a) {
    echo $b;
} else {
    echo '入力された値は等しいです';
}
