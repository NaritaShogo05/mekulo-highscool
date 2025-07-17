<?php
$co = [
    'slug' => 'shindenkou',
    'image' => 'company.jpg',
    'company_name' => '信電工株式会社',
    'catch_copy' => '巨大施設が目を覚ます、その瞬間に立ち会う',
    'industry' => ['F'],
    'post_code' => '385-0021',
    'address' => '長野県佐久市長土呂1040-1',
    'homepage' => 'https://shindenkou.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.28922073,//緯度
    'longitude' => 138.46520054,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 応募前見学
$visit = [//あとで入れる
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年8月7日（木）9時30分～', 
                'date' => '2025-08-07',
                'deadline' => '2025-08-07',//募集締切日
            ],
            [
                'name' => '2025年8月8日（金）9時30分～', 
                'date' => '2025-08-08',
                'deadline' => '2025-08-08',//募集締切日
            ],
        ],
        'catch_copy' => '配管加工を見学してみよう！',
        'visit_img' =>'firstview.jpg',
        'content' => '見学では、信電工の仕事について、詳しくご説明します。<br>
        その日に行なっている工事の内容によっては、実際の現場に足を運び、作業の様子を間近で見ることができる場合もあります。<br>
        教科書や映像ではわからない、現場ならではのリアルな空気を感じてみてください。',
    ],
];

// 目次
$toc = [
    'top' => [
        'name' => '企業TOP',
        'icon' => 'company.png',
        'url' => '',
    ],
];