<?php

// 変数を用意
$num1 = '';
$num2 = '';
$num3 = '';
$sum = '';
$answer = '';
$err_msg = '';


// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = $_POST['num'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // バリデーション
    if (empty($num) || empty($num1) || empty($num2)) {
        $err_msg = '全てに数字を入力してください';
    } else {
        $answer = $num + $num1 + $num2;
        $sum = '合計値は' . "{$answer}" . 'です。';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム課題</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msg)) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">1つめの数字</label><br>
            <input type="number" name="num"><br>
            <label for="">2つめの数字</label><br>
            <input type="number" name="num1"><br>
            <label for="">3つめの数字</label><br>
            <input type="number" name="num2"><br>
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?= htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') ?>
    </div>

</body>

</html>
