<?php
$co = [
    'slug' => 'kgk',
    'image' => 'company.jpg',
    'company_name' => '株式会社科学技術開発センター',
    'catch_copy' => '身近なことを科学で測定する',
    'industry' => ['L'],
    'post_code' => '381-0025',
    'address' => '長野県長野市大字北長池字南長池境2058-3',
    'homepage' => 'https://kgk-c.co.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.64721198,//緯度
    'longitude' => 138.23568173,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ]
];

// 募集職種
$occupation = [
    'job_sokutei' => [
        'name' => '技術部測定課',
        'url' => 'job_sokutei',
        'catch_copy' => '測るためならたとえ地の中、水の中',
        'work' => ['745'],
        'fv_url' => 'job_sokutei/firstview',
        'latitude' => 36.64721198,//緯度
        'longitude' => 138.23568173,//経度
        'MBTI' =>  'iNTj',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '随時開催中！',
                'date' => '2025-08-30',
                'deadline' => '2025-08-30',//募集締切日
            ],
        ],
        'catch_copy' => '',
        'visit_img' =>'.jpg',
        'content' => '見学希望の方は、お問い合わせください。',
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