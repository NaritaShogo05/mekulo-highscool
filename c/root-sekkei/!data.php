<?php
$co = [
    'slug' => 'root-sekkei',
    'image' => 'company.jpg',
    'company_name' => 'ルート設計 株式会社',
    'catch_copy' => '設計図は、思考と確実な作業の集大成',
    'industry' => ['E'],
    'post_code' => '386-1211',
    'address' => '長野県上田市下之郷813-83',
    'homepage' => 'https://root-design.securesite.jp/',
    'logo_filename' => 'root-logo.svg',
    'latitude' => 36.36159808,//緯度
    'longitude' => 138.23305673,//経度
    'human' => [
        'image' => 'ichikawa.png',
        'name' => '市川 祐己',
    ]
];

// 募集職種
$occupation = [
    'job_cad' => [
        'name' => 'CADオペレーター',
        'url' => 'job_cad',
        'catch_copy' => '設計者を支えながら自らも成長していく、頭脳系サポーター！',
        'work' => ['591'],
        'fv_url' => 'job_cad/first_view.jpg',
        'latitude' => 36.36159808,//緯度
        'longitude' => 138.23305673,//経度
        'MBTI' => '',    
    ],
    'job_seigyo' => [
        'name' => '機械設計・制御設計',
        'url' => 'job_seigyo',
        'catch_copy' => '「カタチ」を生み出すのが機械設計、「うごき」を命じるのが制御設計！',
        'work' => ['083'],
        'fv_url' => 'first_view.jpg',
        'latitude' => 36.36159808,//緯度
        'longitude' => 138.23305673,//経度  
        'MBTI' => ''
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月29日(火)10時～11時30分',
                'date' => '2025-07-29',
                'deadline' => '2025-07-26',//募集締切日
            ],
            [
                'name' => '2025年7月30日(水)10時～11時30分',
                'date' => '2025-07-30',
                'deadline' => '2025-07-27',//募集締切日
            ],
            [
                'name' => '2025年8月5日(火)10時～11時30分',
                'date' => '2025-08-05',
                'deadline' => '2025-08-02',//募集締切日
            ],[
                'name' => '2025年8月6日(水)10時～11時30分',
                'date' => '2025-08-06',
                'deadline' => '2025-08-02',//募集締切日
            ],
        ],
        'catch_copy' => 'この図面、何の機械？',
        'visit_img' =>'firstview.jpg',
        'content' => 'ルート設計の応募前見学では、設計者たちがどんなことを考えながら図面を描いているのか、実際に仕事をしている様子を間近で見ることができます。',
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