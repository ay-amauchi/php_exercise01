<?php
/*条件
$numが素数であれば 素数です と出力
$numが素数でない時は 素数ではありません と出力(1も素数ではありません)
 */

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));


// ここに処理を記述
$flag = true;
if ($num == 1) {
    echo "{$num}は素数ではありません。";
    $flag = false;
}
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $flag = false;
        echo "{$num}は素数ではありません。";
        break;
    }
}
if ($flag == true) {
    echo "{$num}は素数です。";
}
