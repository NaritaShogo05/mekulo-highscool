<?php
$co = [
    'slug' => 'yamaguti-denki',
    'image' => 'company.jpg',
    'company_name' => '株式会社 山口電気',
    'catch_copy' => 'まるでパズル！？電気を読み解く仕事',
    'industry' => ['D'],
    'post_code' => '381-0016',
    'address' => '長野県長野市大字南掘24-1',
    'homepage' => 'https://yama-den.co.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.6604827,//緯度
    'longitude' => 138.2452723,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_electrician' => [
        'name' => '電気工事士',
        'url' => 'job_electrician',
        'catch_copy' => '電気工事士は名探偵！？',
        'work' => ['67','542','552','679',],
        'image' => 'job_electrician/firstview.jpg',
        'latitude' => 36.6604827,//緯度
        'longitude' => 138.2452723,//経度
        'MBTI' => 'iNTP',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月29日（火）9時00分～、14時00分～',
                'date' => '2025-07-29',
                'deadline' => '2025-07-26',//募集締切日
            ],
            [
                'name' => '2025年8月5日（火）9時00分～、14時00分～',
                'date' => '2025-08-05',
                'deadline' => '2025-08-02',//募集締切日
            ],
        ],
        'catch_copy' => '電気工事士の仕事を見てみよう！',
        'visit_img' =>'firstview.jpg',
        'content' => '現場や倉庫内での作業を間近で見学することができます。',
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