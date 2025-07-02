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
$description = '有限会社ファインフォーミングの応募前見学ページです';//メタディスクリプションの追加
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
	<img alt="" class="fv_image" src="<?=$company_base?>fv_1.jpg">
	<div class="apply">
		<h1 class="catch"><?= $co['company_name'] ?></h1>
		<p class="tag">応募前見学ページ</p>
	</div>
</div>
<section id="visit1" class="content">
	<p class="catchcopy">
		<span>鋳造×鍛造の世界を覗いてみよう </span></p>
	<p class="cont">
		ファインフォーミングの応募前見学では、ドロドロに溶けたアルミが型に流れ込むダイナミックな鋳造の瞬間や、600t～1,000tの圧力で金属を叩き、強度を高める迫力満点の鍛造の工程を見学できます。 <br>
		巨大な機械が動く様子は圧巻で、ものづくりの面白さを肌で感じられます！また、20代・30代の若手が活躍する職場の雰囲気もチェックでき、先輩職人からリアルな仕事の話を聞くチャンスも！ <br>
		「自分にできるかな？」「どんな仕事なんだろう？」そんな疑問も、この見学でしっかり解決できます。ものづくりが好きな人、ダイナミックな仕事に興味がある人、大歓迎！実際の現場を見て、自分の未来を想像してみませんか？ 
	</p>
	<div class="opendate">
		<p>開催日時</p>
		<ul>
			<li>2025年7月30日（火） 10時30分～</li>
			<li>2025年8月日（火） 10時30分～</li>
		</ul>
	</div>
	<div class="flow">
		<p>見学の流れ</p>
		<ul>
			<li>会社説明<span>10分程度</span></li>
			<li>工場見学<span>30分程度</span></li>
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
