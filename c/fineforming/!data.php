<?php
$co = [
    'slug' => 'fineforming',
    'image' => 'fv_2.jpg',
    'company_name' => '有限会社ファインフォーミング',
    'catch_copy' => '全国唯一！鋳造×鍛造で世界に通じるアルミ部品を生み出す',
    'industry' => ['E','A'],
    'post_code' => '386-2203',
    'address' => '長野県上田市真田町傍陽938',
    'homepage' => 'https://fine-f.co.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.4563689,//緯度
    'longitude' => 138.2950138,//経度
    'human' => [
    'image' => 'noguchi.png',
    'name' => '野口',
    ]
];

// 募集職種
$occupation = [
    'job_cyuzo' => [
        'name' => '鋳造職人',
        'url' => 'job_cyuzo',
        'catch_copy' => '熱く燃えろ！鋳造の世界で職人デビュー！',
        'work' => ['493','494'],
        'fv_url' => 'job_cyuzo/firstview.jpg',
        'latitude' => 36.4563689,//緯度
        'longitude' => 138.2950138,//経度
        'MBTI' => 'Is-j',
    ],
    'job_tanzo' => [
        'name' => '鍛造職人',
        'url' => 'job_tanzo',
        'catch_copy' => '実は奥が深い、迫力ある鍛造の世界',
        'work' => ['493','494'],
        'fv_url' => 'job_tanzo/firstview.jpg',
        'latitude' => 36.4563689,//緯度
        'longitude' => 138.2950138,//経度
        'MBTI' => 'Is-j',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月30日（月） 10時30分～', 
                'date' => '2025-07-30',
                'deadline' => '2025-03-10',//募集締切日
            ],
            [
                'name' => '2025年8月6日（水） 10時30分～', 
                'date' => '2025-08-6',
                'deadline' => '2025-8-6',//募集締切日
            ],
        ],
        'catch_copy' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
        'visit_img' =>'firstview.jpg',
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