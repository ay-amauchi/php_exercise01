<?php

/*
num1とnum2には計算させる値を指定。値は変更可能。
operatorには
additionを指定したら足し算、
subtractionを指定したら引き算
multiplicationを指定したら掛け算
divisionを指定したら割り算
を行う
上記以外を指定した場合は、 正しい演算子を指定して下さい と出力 */

// num1を取得
$num1 = $_GET['num1'];

// num2を取得
$num2 = $_GET['num2'];

// operatorを取得
$operator = $_GET['operator'];

switch ($operator) {
    case 'addition':
        $answer = $num1 + $num2;
        $result = "{$num1}" . ' + ' . "{$num2}" . ' = ' . "{$answer}";
        break;
    case 'subtraction':
        $answer = $num1 - $num2;
        $result = "{$num1}" . ' - ' . "{$num2}" . ' = ' . "{$answer}";
        break;
    case 'multiplication':
        $answer = $num1 * $num2;
        $result = "{$num1}" . ' * ' . "{$num2}" . ' = ' . "{$answer}";
        break;
    case 'division':
        $answer = $num1 / $num2;
        $result = "{$num1}" . ' / ' . "{$num2}" . ' = ' . "{$answer}";
        break;

    default:
        $result = "正しい演算子を指定して下さい";
        break;
}

echo $result;
