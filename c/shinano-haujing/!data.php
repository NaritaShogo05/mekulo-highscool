<?php
$co = [
    'slug' => 'shinano-haujing',
    'image' => 'store.jpg',
    'company_name' => '株式会社 信濃ハウジング',
    'catch_copy' => '家の外も中も、毎日が楽しくなる場所に変える',
    'industry' => ['D'],
    'post_code' => '389-0505',
    'address' => '長野県東御市和1057-1',
    'homepage' => 'https://shinanohousing.com/',
    'logo_filename' => 'housing-logo.png',
    'latitude' => 36.36858,//緯度
    'longitude' => 138.302658,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村',
    ]
];

// 募集職種
$occupation = [
    'job_planner' => [
        'name' => 'お庭プランナー',
        'url' => 'job_planner',
        'catch_copy' => '理想のお庭を聞き出して、形にする',
        'work' => ['349'],
        'fv_url' => 'job_planner/first_view.jpg',
        'latitude' => 36.36858,//緯度
        'longitude' => 138.302658,//経度
        'MBTI' => '-sfj'
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '随時開催中！',
                'date' => '2025-0 -  ',
                'deadline' => '2025-0 -  ',//募集締切日
            ],
        ],
        'catch_copy' => '',
        'visit_img' =>'first_view.jpg',
        'content' => '店舗をご案内しながら、仕事内容について詳しくご説明致します。',
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