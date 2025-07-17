<?php
$co = [
    'slug' => 'futaba-yousetsu',
    'image' => 'first-view.jpg',
    'company_name' => '株式会社 双葉溶接',
    'catch_copy' => '夢は溶接アトリエ！',
    'industry' => ['E'],
    'post_code' => '386-0005',
    'address' => '長野県上田市古里819-2',
    'homepage' => 'https://futaba-wd.com/',
    'logo_filename' => 'futaba-logo.png',
    'latitude' => 36.3951869,//緯度
    'longitude' => 138.2740571,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ]
];

// 募集職種
$occupation = [
    'job_kinzoku' => [
        'name' => '金属加工職',
        'url' => 'job_kinzoku',
        'catch_copy' => '現在と未来をつなぐ、溶接の力！',
        'work' => ['528'],
        'image' => 'job_kinzoku/first-view.jpg',
        'latitude' => 36.3951869,//緯度
        'longitude' => 138.2740571,//経度
        'MBTI' => 'Istp'
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '随時開催<br>日程についてぜひご相談ください。', 
                'date' => '2025-08-31',
                'deadline' => '2025-08-31',//募集締切日
            ],
        ],
        'catch_copy' => '',
        'visit_img' =>'first-view.jpg',
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