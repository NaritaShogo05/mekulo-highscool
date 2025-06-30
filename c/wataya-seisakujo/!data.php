<?php
$co = [
    'slug' => 'wataya-seisakujo',
    'image' => 'factry.jpg',
    'company_name' => '株式会社 綿谷製作所',
    'catch_copy' => '丸子地域の産業を支える',
    'industry' => ['E'],
    'post_code' => '386-0404',
    'address' => '長野県上田市上丸子1082',
    'homepage' => 'https://www.wataya-co.jp/index.html',
    'logo_filename' => 'wataya-logo.png',
    'latitude' => 36.319934,//緯度
    'longitude' => 138.271499,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_kakou' => [
        'name' => '加工(マシニング・ダイス)',
        'url' => 'job_kakou',
        'catch_copy' => '思い通りに機械を動かす',
        'work' => ['523'],
        'image' => 'job_kakou/first_view.jpg',
        'latitude' => 36.319934,//緯度
        'longitude' => 138.271499,//経度
        'MBTI' => 'Istp',
    ],
     'job_denki' => [
        'name' => '電気組立',
        'url' => 'job_denki',
        'catch_copy' => '部品から「動く機械」へ',
        'work' => ['542'],
        'image' => 'job_denki/first_view.jpg',
        'latitude' => 36.319934,//緯度
        'longitude' => 138.271499,//経度
        'MBTI' => 'Istj',
    ],
     'job_meka' => [
        'name' => 'メカ組立',
        'url' => 'job_meka',
        'catch_copy' => '脚立やクレーンを駆使して、大きな機械を組み立てよう！',
        'work' => ['541'],
        'image' => 'job_meka/first_view.jpg',
        'latitude' => 36.319934,//緯度
        'longitude' => 138.271499,//経度
        'MBTI' => 'Istj',
    ],
     'job_kensa' => [
        'name' => '検査(品質保証)',
        'url' => 'job_kensa',
        'catch_copy' => '1/1000のズレも、見逃さない。',
        'work' => ['581'],
        'image' => 'job_kensa/first_view.jpg',
        'latitude' => 36.319934,//緯度
        'longitude' => 138.271499,//経度
        'MBTI' => 'Intj',
    ],
     'job_seisan' => [
        'name' => '生産管理',
        'url' => 'job_seisan',
        'catch_copy' => '製品づくりの司令塔！生産をスムーズに進める仕事',
        'work' => ['271'],
        'image' => 'job_seisan/first_view.jpg',
        'latitude' => 36.319934,//緯度
        'longitude' => 138.271499,//経度
        'MBTI' => 'estj',
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