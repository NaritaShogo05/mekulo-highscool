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
$description = '株式会社科の木の応募前見学ページです。'; 
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
	<img alt="" class="fv_image" src="firstview.jpg">
	<div class="apply">
		<h1 class="catch"><?= $co['company_name'] ?></h1>
		<p class="tag">応募前見学ページ</p>
	</div>
</div>
<section id="content" class="content">
	<p class="catchcopy"><span>普段は見られない、</span><br>
		<span>『かやく』の製造工程を間近で見学できる！</span></p>
	<p class="cont">
		科の木の応募前見学では、カップ麺に入っている『かやく』の製造工程を見学することができます。<br>
		何の商品を作っているかは、その日のお楽しみ！見たことのあるかやくを作っているかも…？<br>
		かやくの具材を投入しているところから検査まで、すべての工程を間近で見ることができます。タイミングが合えば、実際に働いている先輩から話を聞けるかもしれません。<br>
		また、開催日以外でも、ご連絡いただければいつでも見学可能です。お気軽にお問い合わせください。
	</p>
	<div class="opendate">
		<p>開催日時</p>
		<ul>
			<li>2025年7月30日（水） 10時30分～</li>
			<li>2025年8月6日（水） 10時30分～</li>
		</ul>
	</div>
	<div class="flow">
		<p>見学の流れ</p>
		<ul>
			<li>会社説明<span>20分程度</span></li>
			<li>工場見学<span>40分程度</span></li>
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
