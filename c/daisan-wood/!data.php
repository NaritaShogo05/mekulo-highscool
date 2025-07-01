<?php
$co = [
    'slug' => 'daisan-wood',
    'image' => 'office.jpg',
    'company_name' => '株式会社第三木材',
    'catch_copy' => '100年先に、信州の木を残す',
    'industry' => ['I'],
    'post_code' => '389-0514',
    'address' => '長野県東御市加沢201-5',
    'homepage' => 'https://dai3wood.co.jp/',
    'logo_filename' => 'daisanlogo.png',
    'latitude' => 36.34221711,//緯度
    'longitude' => 138.3444284,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_sales' => [
        'name' => '法人営業',
        'url' => 'job_sales',
        'catch_copy' => '「なんとかしたい」が「役に立てた！」に変わる日々',
        'work' => ['281'],
        'image' => 'eigyo.jpg',
        'latitude' => 36.34221711,//緯度
        'longitude' => 138.3444284,//経度
        'MBTI' =>  'estJ',
    ],
    'job_conmane' => [
        'name' => '建築施工管理',
        'url' => 'job_conmane',
        'catch_copy' => '「計画通り」が、一番の成果。',
        'work' => ['669'],
        'image' => 'second.jpg',
        'latitude' => 36.34221711,//緯度
        'longitude' => 138.3444284,//経度
        'MBTI' => '-StJ',
    ],
    'job_carpenter' => [
        'name' => '建築大工',
        'url' => 'job_carpenter',
        'catch_copy' => '趣味から一歩踏み出そう！',
        'work' => ['661'],
        'image' => 'contents06.jpg',
        'latitude' => 36.34221711,//緯度
        'longitude' => 138.3444284,//経度
        'MBTI' =>  'Istp',
    ],
    'job_delivery' => [
        'name' => '配送',
        'url' => 'job_delivery',
        'catch_copy' => '届けた資材が、建物になっていく。',
        'work' => ['669'],
        'image' => 'contents08.jpg',
        'latitude' => 36.34221711,//緯度
        'longitude' => 138.3444284,//経度
        'MBTI' =>  'Isfp',
    ],
    'job_processing' => [
        'name' => '木材加工',
        'url' => 'job_processing',
        'catch_copy' => '木のクセを読み、試行錯誤を楽しむ。',
        'work' => ['536'],
        'image' => 'firstview.jpg',
        'latitude' => 36.34221711,//緯度
        'longitude' => 138.3444284,//経度
        'MBTI' =>  'I--P',
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