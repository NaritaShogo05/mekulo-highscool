<?php
$co = [
    'slug' => 'sowa',
    'image' => 'company.jpg',
    'company_name' => '株式会社相和',
    'catch_copy' => '見えないところで、“便利”を支える化学会社',
    'industry' => ['E'],
    'post_code' => '389-0505',
    'address' => '長野県東御市和７９２８',
    'homepage' => 'https://sowac.co.jp/',
    'logo_filename' => 'logo.gif',
    'latitude' => 36.38335357,//緯度
    'longitude' => 138.32743375,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ]
];

// 募集職種
$occupation = [
    'job_machine' => [
        'name' => 'マシンオペレーター',
        'url' => 'job_machine',
        'catch_copy' => 'つくってるのは材料。でも、支えてるのは社会。',
        'work' => ['508'],
        'image' => 'firstview.jpg',
        'latitude' => 36.38335357,//緯度
        'longitude' => 138.32743375,//経度
        'MBTI' =>  'istp',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年8月20日（水） 10時00分～',
                'date' => '2025-08-20',
                'deadline' => '2025-08-17',//募集締切日
            ],
            [
                'name' => '2025年8月20日（水） 13時30分～',
                'date' => '2025-08-20',
                'deadline' => '2025-08-17',//募集締切日
            ],
            [
                'name' => '2025年8月21日（木） 10時00分～',
                'date' => '2025-08-21',
                'deadline' => '2025-08-18',//募集締切日
            ],
            [
                'name' => '2025年8月21日（木） 13時30分～',
                'date' => '2025-08-21',
                'deadline' => '2025-08-18',//募集締切日
            ],
        ],
        'catch_copy' => '普段は見れない、原料加工、化学の世界を見てみよう',
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