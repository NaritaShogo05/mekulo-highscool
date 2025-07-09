<?php
$co = [
    'slug' => 'woodtec-akihu',
    'image' => 'job_kakou/sanada.jpg',
    'company_name' => '株式会社 ウッドテック秋富',
    'catch_copy' => '木を使って、みんながいつも使うものをつくる',
    'industry' => ['E'],
    'post_code' => '386-2201',
    'address' => '長野県上田市真田町長5589',
    'homepage' => 'https://www.akifu.com',
    'logo_filename' => 'logo01.svg',
    'latitude' => 36.4407115,//緯度
    'longitude' => 138.3107407,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_kakou' => [
        'name' => '加工職人',
        'url' => 'job_kakou',
        'catch_copy' => '“ぴたっ”と決まる職人技！機械と手仕事で木を組み上げる',
        'work' => ['536'],
        'image' => 'job_kakou/first-view.jpg',
        'latitude' => 36.4407115,//緯度
        'longitude' => 138.3107407,//経度
        'MBTI' => 'IS-J',
    ],
    'job_tosou' => [
        'name' => '塗装職人',
        'url' => 'job_tosou',
        'catch_copy' => '仕上げが勝負！見た目や手触りを整える職人',
        'work' => ['536'],
        'image' => 'job_tosou/first_view.jpg',
        'latitude' => 36.4407115,//緯度
        'longitude' => 138.3107407,//経度
        'MBTI' => 'I-FP',
    ],
    'job_sekkei' => [
        'name' => '設計職',
        'url' => 'job_sekkei',
        'catch_copy' => '使う場面を思い浮かべ、使いやすさを図面に込める',
        'work' => ['536'],
        'image' => 'job_sekkei/first_view.jpg',
        'latitude' => 36.4407115,//緯度
        'longitude' => 138.3107407,//経度
        'MBTI' => 'INTJ',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年8月4日（月）10時00分～',
                'date' => '2025-08-04',
                'deadline' => '2025-08-01',//募集締切日
            ],
            [
                'name' => '2025年8月5日（火）10時00分～',
                'date' => '2025-08-05',
                'deadline' => '2025-08-02',//募集締切日
            ],
        ],
        'catch_copy' => '応募前見学',
        'visit_img' =>'first-view2.jpg',
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
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