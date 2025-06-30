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
$description = '株式会社柳澤鐵工所の応募前見学ページです。';//メタディスクリプションをここに挿入 
$canonical_url = 'https://works.mekulo.jp/hs/' . $co['slug'] . '/';
$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php //include $base . '../tracking.php'; ?>
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
	<img alt="" class="fv_image" src="../first-view.jpg">
	<div class="apply">
		<h1 class="catch"><?= $co['company_name'] ?></h1>
		<p class="tag">応募前見学ページ</p>
	</div>
</div>
<section id="content" class="content">
	<p class="catchcopy"><span>建物の“骨組み”ができる瞬間を見てみよう！</span></p>
	<p class="cont">
		柳澤鐵工所の応募前見学では、鉄骨ができあがっていく一連の工程を間近で見ることができます。<br>
		小さなパーツが加工や溶接によって少しずつ形を変え、自分の背よりも大きな鉄骨になっていく――そんなダイナミックな変化を、目の前で体感してみてください。<br>
		火花を散らしながら溶接している様子や、正確に穴を開けている作業風景など、普段はなかなか見ることのできない“現場のリアル”がここにあります。<br>
		見学を通して、入社後のイメージを膨らませてください。
	</p>
	<div class="opendate">
		<p>開催日時</p>
		<ul>
			<li>2025年8月4日（金）10時00分～</li>
			<li>2025年8月9日（水）10時00分～</li>
			<li>その他の日程も、お気軽にお問い合わせください。</li>
		</ul>
	</div>
	<!--
	<div class="flow">
		<p>見学の流れ</p>
		<ul>
			<li><span>分</span></li>
			<li><span>分</span></li>
		</ul>
	</div>
	-->
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
<?php //include $base . '../footer.php' ?>
</body>
