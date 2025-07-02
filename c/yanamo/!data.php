<?php
$co = [
    'slug' => 'yanamo',
    'image' => 'factry.jpg',
    'company_name' => '有限会社 柳沢モータース',
    'catch_copy' => 'クルマの仕事、未来の自分！ヤナモでスタート！',
    'industry' => ['R'],
    'post_code' => '389-0606',
    'address' => '長野県埴科郡坂城町大字上五明1798-1',
    'homepage' => 'https://yanamo.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.45699395,//緯度
    'longitude' => 138.17584401,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ]
];

// 募集職種
$occupation = [
    'job_mechanic' => [
        'name' => 'メカニック（自動車整備士）',
        'url' => 'job_mechanic',
        'catch_copy' => '車の安全を確かな整備でサポートする',
        'work' => ['891'],
        'image' => 'job_mechanic/firstview.jpg',
        'latitude' => 36.45699395,//緯度
        'longitude' => 138.17584401,//経度
        'MBTI' => 'IStp',
    ],
     'job_metal' => [
        'name' => '板金・塗装スタッフ',
        'url' => 'job_metal',
        'catch_copy' => '車をあらためて美しく仕上げる仕事 ',
        'work' => ['891'],
        'image' => 'job_metal/firstview.jpg',
        'latitude' => 36.45699395,//緯度
        'longitude' => 138.17584401,//経度
        'MBTI' => 'IS-P',
    ],
     'job_front' => [
        'name' => 'フロント業務（接客・事務）',
        'url' => 'job_front',
        'catch_copy' => 'お客様と工場のかけ橋となる仕事',
        'work' => ['890'],
        'image' => 'job_front/firstview.jpg',
        'latitude' => 36.45699395,//緯度
        'longitude' => 138.17584401,//経度
        'MBTI' => '-nFj',
    ],    
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年 月  日（ ）  時  分～', 
                'date' => '2025- -  ',
                'deadline' => '2025-  -  ',//募集締切日
            ],
        ],
        'catch_copy' => '実際の現場をのぞいてみませんか？',
        'visit_img' =>'first_view.JPG',
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