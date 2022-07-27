<?php

if (isset($_POST['button'])) {
    $date = date('Y年m月d日');
    $w = date('w');
    $week = array("日", "月", "火", "水", "木", "金", "土");
    $msg = '今日は、' . "{$date}" . "{$week[$w]}" . '曜日です';
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>標準関数</title>
</head>

<body>
    <?php if (isset($_POST['button'])) : ?>
        <h1><?= $msg ?></h1>
    <?php else : ?>
        <h2><?= '本日の日付、曜日を確認しますか？' ?></h2>
        <form action="" method="post">
            <input type="submit" name="button" value="はい" />
        </form>
    <?php endif; ?>

    <?php if (isset($_POST['button'])) : ?>
        <a href="function_5.php">戻る</a>
    <?php endif; ?>
</body>

</html>
