<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
$cur_page = 'top';
include_once $company_base . '!data.php';
include_once $highschool_base . 'circle.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = '株式会社宮下興業の応募前見学ページです。';//メタディスクリプションをここに挿入 
$canonical_url = 'https://works.mekulo.jp/hs/' . $co['slug'] . '/';
$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include $base . '../tracking.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $highschool_base ?>highschool.css?v=2">
<link rel="icon" href="<?= $base ?>mekulo-works-mark.png">
<link rel="canonical" href="<?= $canonical_url ?>">
<title><?= $title_with_site ?></title>
<?php if ($description) { ?>
<meta name="description" content="<?= $description ?>">
<?php } ?>
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title_with_site ?>">
<?php if ($description) { ?>
<meta property="og:description" content="<?= $description ?>">
<?php } ?>
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
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/hs/<?= $co['slug'] ?>/"
	}]
}
</script>

</head>
<body class="highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_wr">
	<img alt="" class="fv_image" src="../firstview.jpg">
	<div class="apply">
		<h1 class="catch"><?= $co['company_name'] ?></h1>
		<p class="tag">応募前見学ページ</p>
	</div>
</div>
<section id="visit1" class="content">
	<p class="catchcopy"><span>吊り足場ってどうなってるの！？</span></p>
	<p class="cont">
		「空中に浮いてるみたいだけど、どうやって支えてるの？」<br>
		「ぐらぐらしないの？」――そんな疑問を持ったこと、ありませんか？<br>
		宮下興業の応募前見学では、そんな“吊り足場”のしくみや仕事の内容を、事務所で詳しくご説明します。<br>
		「高いところは怖いけど、大丈夫かな？」<br>
		「体力に自信がなくてもできる？」<br>
		そんな不安や疑問も、遠慮なく聞いてください！<br>
		現場を直接見ることはできませんが、現場の空気を少しでも感じてもらえるような時間にしたいと思っています。<br>
		少しでも興味があれば、ぜひ気軽に見に来てくださいね。
	</p>
	<div class="opendate">
		<p>開催日時</p>
		<ul>
			<li>2025年〇月〇日（）〇時〇分～</li>
			<li>2025年〇月〇日（）〇時〇分～</li>
			<li>その他の日時等も随時受け付けております。</li>
		</ul>
	</div>
	<div class="flow">
		<p>見学の流れ</p>
		<ul>
			<li>会社紹介<span>30分</span></li>
		</ul>
	</div>
	<p class="entry_txt">応募前見学をご希望の方は、担任の先生や、進路指導の先生にご相談ください。</p>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../tab.js"></script>
<script src="../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
