<?php
$base = '../';
$cur_page = 'highschool';

include 'index_data.php';

const MIN_PICKUP_COUNT = 5;

//====================
// ピックアップ求人をランダムで抽出
$pickups = [];
$count = count($highschool);
if ($count >= MIN_PICKUP_COUNT) {
	$max_count = min($count, MIN_PICKUP_COUNT);
	for ($i = 0; $i < $max_count; $i++) {
		do {
			$n = rand(0, $count - 1);
		} while (in_array($n, $pickups));
		$pickups[] = $n;
	}
}

//====================
// 職種別一覧を作成
$jobs_list = [];
foreach ($m_job as $job_slug => $job_name) {
	$job_item = [];
	$job_item['name'] = $job_name;
	$job_item['co'] = [];
	for ($i = 0; $i < count($highschool); $i++) {
		if (in_array($job_slug, $highschool[$i]['jobs'], false)) {
			$job_item['co'][] = &$highschool[$i];
		}
	}
	if (count($job_item['co']) > 0) {
		$job_list[] = $job_item;
	}
}

//====================
// 求人タイルの表示
function show_tile($job) {
?>
	<li>
		<a href="<?= $job['slug'] ?>/" class="wrapper">
			<div class="title"><?= $job['name'] ?></div>
			<ul class="tags">
<?php
foreach ($job['areas'] as $tag) {
	?><li class="area"><?= $tag ?></li><?php
}
foreach ($job['industries'] as $tag) {
	?><li class="industry"><?= $tag ?></li><?php
}
?>
			</ul>
			<img src="<?= $job['image'] ?>" alt="" class="eyecatch">
			<p class="desc"><?= $job['desc'] ?></p>
			<div class="button btn_view">会社を覗いてみる</div>
		</a>
		<a href="<?= $job['slug'] ?>/apply/">
			<div class="button btn_entry">会社に連絡してみる</div>
		</a>
	</li>
<?php
}

//====================
// ページのメタデータ

$title = '高卒求人特集 - 上田市・坂城町で就職活動をしよう';
$title_with_site = $title . ' | めくろうワークス';

$keywords = '上田市,坂城町,高卒,就職活動,求人,めくろうワークス';

$description = '上田市・坂城町で就職したい人は必見！地元で高卒を採用している企業を紹介しています。働きやすい仕事環境作りに取り組んでいる会社、実は高いシェアを誇っている会社など、就職先として魅力的な企業をご覧ください。';

$canonical_url = 'https://works.mekulo.jp/hs/';

$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include $base . '../tracking.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $base ?>style.css?v=1">
<link rel="stylesheet" href="highschool-index.css?v=1">
<link rel="icon" href="<?= $base ?>mekulo-works-mark.png">
<link rel="canonical" href="<?= $canonical_url ?>">
<title><?= $title_with_site ?></title>
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title_with_site ?>">
<meta property="og:url" content="<?= $canonical_url ?>">
<meta property="og:image" content="<?= $og_image ?>">
<meta property="fb:app_id" content="534360210586966">
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [{
		"@type": "ListItem",
		"position": 1,
		"name": "めくろうワークス",
		"item": "https://works.mekulo.jp/"
	},{
		"@type": "ListItem",
		"position": 2,
		"name": "高卒求人特集",
		"item": "https://works.mekulo.jp/hs/"
	}]
}
</script>
</head>
<body class="mw-content">
<?php include $base . '../header.php'; ?>
<main class="newgrads_index">
<div class="fv_area">
	<h1>
		<img src="<?= $base ?>header_logo.png" alt="めくろうワークス" class="logo">
		<span class="text">高卒求人特集</span>
	</h1>
</div>
<?php
// 新卒求人が MIN_PICKUP_COUNT 件以上あればピックアップ求人を表示
if (count($highschool) >= MIN_PICKUP_COUNT) {
?>
<section class="base pickup">
	<h2 id="pickup">ピックアップ求人</h2>
	<div class="scroll_container">
		<ul class="tiles compact">
<?php
foreach ($pickups as $i) {
	$job = $highschool[$i];
	show_tile($job);
}
?>
		</ul>
	</div>
</section>
<?php
}
?>
<section class="base companies">
	<h2 id="companies">会社で選ぶ</h2>
	<ul class="tiles">
<?php
foreach ($highschool as $job) {
	show_tile($job);
}
// 最後の行でアイテムが余った時のスペーサーとして、4つのダミーを挿入する。
?>
		<li class="spacer"></li>
		<li class="spacer"></li>
		<li class="spacer"></li>
		<li class="spacer"></li>
	</ul>
</section>
</main>
<?php include $base . '../footer.php' ?>
</body>
