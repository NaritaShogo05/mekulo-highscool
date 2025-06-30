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
$description = '株式会社ファスコナガノの応募前見学ページです。';//メタディスクリプションをここに挿入 
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
<body class="highschool fasco">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_wr">
	<img alt="" class="fv_image" src="firstview.jpg">
	<div class="apply">
		<h1 class="catch"><?= $co['company_name'] ?></h1>
		<p class="tag">応募前見学ページ</p>
	</div>
</div>
<section id="visit1" class="content">
	<p class="catchcopy"><span>間近で見学してみよう！</span></p>
	<p class="cont">
		ファスコナガノの応募前見学では、実際の作業現場を間近で見ることができます。<br>
		機械の動きや先輩たちの作業風景を見ながら、「これって何してるの？」「どうやって動いてるの？」など、気になることがあればどんどん質問してください！<br>
		見学の最後には、キーホルダーやフック作りの体験もご用意しています。<br>
		自分の手で金属を加工してみると、ものづくりの楽しさや、働くイメージがぐっと身近に感じられるはずです。
	</p>
	<div class="opendate">
		<p>開催日時</p>
		<ul>
			<li>2025年8月1日（金）10時00分～</li>
			<li>2025年8月4日（月）13時30分～</li>
			<li>別日でも対応可能です。ご相談ください。</li>
		</ul>
	</div>
	<div class="flow">
		<p>見学の流れ</p>
		<ul>
			<li>会社説明<span>15分</span></li>
			<li>工場見学<span>15分</span></li>
			<li>体験<span>60分</span></li>
		</ul>
	</div>
	<a href="../../../entry?company=<?= $co['slug'] ?>" class="entry-btn">
		<img src="../../../flag.png" class="flag">
		<span>応募する</span>
		<img src="../../../arrow.svg">
	</a>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../tab.js"></script>
<script src="../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
