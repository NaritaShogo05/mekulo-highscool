<?php
$co = [
    'slug' => 'macc',
    'image' => 'company.jpg',
    'company_name' => '税理士法人MACC',
    'catch_copy' => '企業の「困った」を「ありがとう」に変える仕事！',
    'industry' => ['L'],
    'post_code' => '380-0814',
    'address' => '長野県長野市大字鶴賀2141-3',
    'homepage' => 'https://shinko-gr.com/',
    'logo_filename' => 'macc-logo.png',
    'latitude' => 336.6537013,//緯度
    'longitude' => 138.1910489,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村',
    ]
];

// 募集職種
$occupation = [
    'job_supporter' => [
        'name' => '企業サポーター',
        'url' => 'job_supporter',
        'catch_copy' => '積み重ねがお客さまの安心につながる',
        'work' => ['182'],
        'fv_url' => 'job_supporter/first_view.jpg',
        'latitude' => 336.6537013,//緯度
        'longitude' => 138.1910489,//経度
        'MBTI' => 'Intj'
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月1日（火）～随時受付中',
                'date' => '2025-07-01',
                'deadline' => '2025-07-29',//募集締切日
            ],
        ],
        'catch_copy' => '',
        'visit_img' =>'first-view.jpg',
        'content' => '所内の見学、会社についてご説明します。<br>見学は随時開催中です。まずはご相談ください。',
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