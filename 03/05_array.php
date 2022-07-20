<?php

/* 結果
私は、古文、物理、日本史に力を入れて、学習をしています｡
また部活は、バレー部と茶道部を兼部しています｡ */

$life = [
    'study' => [
        '国語' => ['現代文', '古文', '漢文'],
        '理科' => ['物理', '生物'],
        '社会' => ['日本史', '現代社会'],
    ],
    'club' => [
        '運動部' => ['サッカー部', 'テニス部', 'バレー部', 'バスケ部'],
        '文化部' => ['茶道部', '書道部', 'カルタ部']
    ]
];

// 以下のXXXXXを修正
$study = "{$life['study']['国語'][1]}、{$life['study']['理科'][0]}、{$life['study']['社会'][0]}";
$club = "{$life['club']['運動部'][2]}と{$life['club']['文化部'][0]}";

echo "私は、{$study}に力を入れて、学習をしています｡" . PHP_EOL .
    "また部活は、{$club}を兼部しています｡";
