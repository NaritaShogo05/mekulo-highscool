<?php
$co = [
    'slug' => 'group-home-santaclaus',
    'image' => 'office.jpg',
    'company_name' => '株式会社あさまかい<br>グループホーム サンタクロース',
    'catch_copy' => '認知症の高齢者の、『第二の家』を支える',
    'industry' => ['P'],
    'post_code' => '389-0603',
    'address' => '長野県坂城町大字南条657-1',
    'homepage' => 'https://sakaki-santaclaus.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.42860602,//緯度
    'longitude' => 138.19426856,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_kaigo' => [
        'name' => '介護スタッフ',
        'url' => 'job_kaigo',
        'catch_copy' => 'お年寄りの毎日の暮らしを、そっとサポートする',
        'work' => ['036'],
        'fv_url' => 'third.jpg',
        'latitude' => 36.42860602,//緯度
        'longitude' => 138.19426856,//経度
        'MBTI' =>  '-SFJ',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月28日（月）10時00分～',
                'date' => '2025-07-28',
                'deadline' => '2025-07-25',//募集締切日
            ],
            [
                'name' => '2025年7月30日（水）10時00分～',
                'date' => '2025-07-30',
                'deadline' => '2025-07-27',//募集締切日
            ],
        ],
        'catch_copy' => '',
        'visit_img' =>'firstview.jpg',
        'content' => '応募前見学として参加する方は参加申し込みをしてください。',
    ],
];

// 目次
$toc = [
    'top' => [
        'name' => '企業TOP',
        'icon' => 'company.png',
        'url' => '',
    ],
    'job' => [
        'name' => '募集職種',
        'icon' => 'carrier.png',
        'url' => '',
        'submenu' => $occupation,
	],
];