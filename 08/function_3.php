<?php

function self_introduction($skills, $likes)
{
    // コードを追記
    $skills_quantities = count($skills);
    $all_skills = implode("、", $skills);
    $likes_quantities = count($likes);
    $all_likes = implode("、", $likes);

    return <<<EOM
    私の特技は{$skills_quantities}個あり、{$all_skills}です｡<br>
    また、趣味は{$likes_quantities}個あり、{$all_likes} です｡
    EOM;
}

$skills = ['書道', '料理', '英会話', '作文'];
$likes = ['ランニング', '釣り', '運転'];

echo self_introduction($skills, $likes);


/*
標準関数を使用して、スキルの数($skills_quantities)を求める
標準関数を使用して、趣味の数($likes_quantities)を求める
標準関数を使用して、スキルを読点(、)切りの文字列に変換($all_skills)する
例) 書道、料理、英会話、作文
標準関数を使用して、趣味を読点(、)区切りの文字列に変換($all_likes)する
例) ランニング、運転、釣り
 */
