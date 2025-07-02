<?php
$co = [
    'slug' => 'miyama-seisakusho',
    'image' => 'company.jpg',
    'company_name' => 'ミヤマ製作所',
    'catch_copy' => 'スゴ腕金属加工職人のあつまる職場',
    'industry' => ['E'],
    'post_code' => '386-1102',
    'address' => '長野県上田市上田原１７８４',
    'homepage' => 'https://miyamass.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.3855759193,//緯度
    'longitude' => 138.2310452864,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ]
];

// 募集職種
$occupation = [
    'job_kakou' => [
        'name' => '金属加工職',
        'url' => 'job_kakou',
        'catch_copy' => '切粉の数だけ磨かれる職人技',
        'work' => ['562'],
        'fv_url' => 'first.jpg',
        'latitude' => 36.3855759193,//緯度
        'longitude' => 138.2310452864,//経度
        'MBTI' =>  'IStJ',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '', 
                'date' => '',
                'deadline' => '',//募集締切日
            ],
        ],
        'catch_copy' => '',
        'visit_img' =>'.jpg',
        'content' => '',
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