<?php

// '朝' or '昼' or '夜'を指定
$time_zone = '朝';

function get_greeting($time_zone)
{
    $greetings = [
        '朝' => 'おはよう',
        '昼' => 'こんにちは',
        '夜' => 'こんばんは'
    ];
    foreach ($greetings as $time => $greeting) {
        if ($time_zone == $time) {
            return $greeting;
        }
    }
}
// コードを追記
$greeting = get_greeting($time_zone);
echo "{$time_zone}" . 'の挨拶は' . "{$greeting}";
