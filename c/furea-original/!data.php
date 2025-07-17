<?php
$co = [
    'slug' => 'furea-original',
    'image' => 'first_view.JPG',
    'company_name' => '株式会社 フレアオリジナル',
    'catch_copy' => '坂城町から世界を目指す！次世代を担うロボットメーカー',
    'industry' => ['L'],
    'post_code' => '389-0601',
    'address' => '長野県埴科郡坂城町坂城9439-5',
    'homepage' => 'https://www.flareoriginal.com/',
    'logo_filename' => 'flarelogo.svg',
    'latitude' => 36.4558151,//緯度
    'longitude' => 138.1860619,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ]
];

// 募集職種
$occupation = [
    'job_robot' => [
        'name' => 'ロボットクリエーター',
        'url' => 'job_robot',
        'catch_copy' => '考えて、作って、動かす。ロボットに使命を与える仕事',
        'work' => ['541','73'],
        'fv_url' => 'job_robot/first_view.jpg',
        'latitude' => 36.4558151,//緯度
        'longitude' => 138.1860619,//経度
        'MBTI' => 'IStj', 
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '随時開催中！', 
                'date' => '2025-08-31',
                'deadline' => '2025-08-31',//募集締切日
            ],
        ],
        'catch_copy' => '',
        'visit_img' =>'first_view.JPG',
        'content' => '作業内容について詳しくご説明いたします。お気軽にお問い合わせください。',
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