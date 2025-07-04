<?php
$co = [
    'slug' => 'shinanoki',
    'image' => 'company.jpg',
    'company_name' => '株式会社 科の木',
    'catch_copy' => '有名カップ麺の『かやく』、実は上田で作っています！',
    'industry' => ['E'],
    'post-code' => '386-1101',
    'adress' => '長野県上田市下之条42',
    'homepage' => 'https://p-shinanoki.co.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.3970269,//緯度
    'longitude' => 138.2196892,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_food-manufacturing' => [
        'name' => '具材投入・かやく検査スタッフ',
        'url' => 'job_food-manufacturing',
        'catch_copy' => '機械のスピードに合わせて、人の手で完璧に仕上げる',
        'work' => '533',
        'image' => 'job_food-manufacturing/firstview.jpg',
        'latitude' => 36.3970269,//緯度
        'longitude' => 138.2196892,//経度
        'MBTI' => 'IS-J',
    ],
    'job_machine-operator' => [
        'name' => '機械操作スタッフ',
        'url' => 'job_machine-operator',
        'catch_copy' => '細かい調整が、不良品を減らすカギ',
        'work' => '552',
        'image' => 'job_machine-operator/firstview.jpg',
        'latitude' => 36.3970269,//緯度
        'longitude' => 138.2196892,//経度
        'MBTI' => 'IS-J',
    ],
    'job_quality-control' => [
        'name' => '品質管理スタッフ',
        'url' => 'job_quality-control',
        'catch_copy' => 'たった数グラムのかやく、一つのミスも見逃さない！',
        'work' => '593',
        'image' => 'job_quality-control/firstview.jpg',
        'latitude' => 36.3970269,//緯度
        'longitude' => 138.2196892,//経度
        'MBTI' => 'IS-J',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月30日（水） 10時30分～12時00分',
                'date' => '2025-07-30',
                'deadline' => '2025-07-27',//募集締切日
            ],
            [
                'name' => '2025年8月6日（水）10時30分～12時00分',
                'date' => '2025-08-06',
                'deadline' => '2025-08-03',//募集締切日
            ],
        ],
        'catch_copy' => '現場で職人技を見てみよう！',
        'visit_img' =>'firstview.jpg',
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明します。',
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