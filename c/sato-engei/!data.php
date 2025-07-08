<?php
$co = [
    'slug' => 'sato-engei',
    'image' => 'company.jpg',
    'company_name' => '株式会社 佐藤園芸',
    'catch_copy' => '『植物』で暮らしを豊かにする',
    'industry' => ['D'],
    'post_code' => '381-2247',
    'address' => '長野県長野市青木島3-3-10',
    'homepage' => 'https://sato-engei.co.jp/',
    'logo_filename' => 'logo.svg',
    'latitude' => 36.61648996312668,//緯度
    'longitude' => 138.1793859408674,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_gardener' => [
        'name' => '造園職人',
        'url' => 'job_gardener',
        'catch_copy' => '枝一本に、職人のセンスが光る',
        'work' => ['463','68'],
        'image' => 'job_gardener/firstview.jpg',
        'latitude' => 36.61648996312668,//緯度
        'longitude' => 138.1793859408674,//経度
        'MBTI' => 'iSFp',
    ],
    'job_exterior' => [
        'name' => 'エクステリア職人',
        'url' => 'job_exterior',
        'catch_copy' => 'エクステリアで暮らしを彩る',
        'work' => ['68','463'],
        'image' => 'job_exterior/firstview.jpg',
        'latitude' => 36.61648996312668,//緯度
        'longitude' => 138.1793859408674,//経度
        'MBTI' => 'inFp'
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月29日（火）10時00分～、13時30分～',
                'date' => '2025-07-29',
                'deadline' => '2025-07-26',//募集締切日
            ],
            [
                'name' => '2025年8月8日（金）10時00分～、13時30分～',
                'date' => '2025-08-08',
                'deadline' => '2025-08-05',//募集締切日
            ],
            [
                'name' => '2025年8月20日（水）10時00分～、13時30分～',
                'date' => '2025-08-20',
                'deadline' => '2025-08-17',//募集締切日
            ],
        ],
        'catch_copy' => '現場で職人技を見てみよう！',
        'visit_img' =>'firstview.jpg',
        'content' => '事務所や現場をご案内しながら、仕事内容について詳しくご説明いたします。',
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