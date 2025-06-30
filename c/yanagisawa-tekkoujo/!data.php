<?php
$co = [
    'slug' => 'yanagisawa-tekkoujo',
    'image' => 'company.jpg',
    'company_name' => '株式会社 柳澤鐵工所',
    'catch_copy' => '建物を支える“鉄骨”、作っています！',
    'industry' => ['E'],
    'post_code' => '385-0051',
    'address' => '長野県佐久市中込3400-7',
    'homepage' => 'https://yanatetu.com/',
    'logo_filename' => 'yanatetsu-logo.svg',
    'latitude' => 36.2537328,//緯度
    'longitude' => 138.4726499,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_seizou' => [
        'name' => '鉄骨製造職',
        'url' => 'job_seizou',
        'catch_copy' => '図面を形に！建物の“骨組み”を作る仕事',
        'work' => ['493','494'],
        'image' => 'job_seizou/firstview.jpg',
        'latitude' => 36.2537328,//緯度
        'longitude' => 138.4726499,//経度
        'MBTI' => 'ISTP',
    ],
    'job_sekkei' => [
        'name' => '鉄骨設計職',
        'url' => 'job_sekkei',
        'catch_copy' => '図面を描くだけじゃない！とことん考えて、物事を組み立てる',
        'work' => ['493','494'],
        'image' => 'job_sekkei/firstview.jpg',
        'latitude' => 36.2537328,//緯度
        'longitude' => 138.4726499,//経度
        'MBTI' => 'INTJ',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年8月4日（金）10時00分～',
                'date' => '2025-08-03',
                'deadline' => '2025-08-03',//募集締切日
            ],
            [
                'name' => '2025年8月9日（水）10時00分～',
                'date' => '2025-08-08',
                'deadline' => '2025-08-08',//募集締切日
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