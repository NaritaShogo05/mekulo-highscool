<?php
$base = '../../../';
$highschool_base = '../../';
$company_base = './';
$cur_page = 'top';
include_once $company_base . '!data.php';
include_once $highschool_base . 'circle.php';
include_once $highschool_base . '!master-data.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = '信州の味を届ける食品加工会社「味のかけはし」。きのこやりんごなど地元食材を使い、炊き込みご飯の素やゼリーを自社一貫で製造。丁寧な手仕事で、地域の食文化と安心・安全を支える仕事です。';//メタディスクリプションの追加
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
<div class="fv_area">
	<img alt="" class="fv_image" src="firstview.jpg">
	<hgroup>
		<h1 class="catch"><?= $co['catch_copy'] ?></h1>
		<p class="fv-tag"><?= INDUSTRIES[$co['industry'][0]] ?></p>
	</hgroup>
</div>
<section class="toc">
	<hgroup>
			<h2>目次</h2>
			<div class="click">
				<span></span>
				<span></span>
			</div>
	</hgroup>
	<ol>
		<li class="abu"><a href="#about_company">会社紹介記事</a></li>
		<li class="pro"><a href="#business">私たちのビジネス</a></li>
		<li class="num-d"><a href="#numeric_data">数字で見る当社</a></li>
		<li class="f-pre"><a href="#from_president">社長メッセージ</a></li>
		<li class="com-in"><a href="#company_info">会社概要</a></li>
	</ol>
</section>
<div class="about-com content" id="company_gallery">
	<h2>
		信州の味を製造する
	</h2>
	<p>
		私たちは、きのこや山菜、りんごなどの信州ならではの食材を使って、きのこがたっぷり入った炊き込みご飯の素やお惣菜、果物が丸ごと入ったゼリーなどの、加工食品を作っています。<br>
		食材の仕入れから袋詰めまで、すべて自分たちで行い、一つひとつ丁寧に仕上げています。<br>
		食べることは、生きること。そんな『食』を支える仕事です。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="first.jpg" alt="" class="fs show">
			<img src="second.jpg" alt="" class="sc">
			<img src="third.jpg" alt="" class="th">
			<img src="fourth.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="first.jpg" alt="" class="fs">
			<img src="second.jpg" alt="" class="sc">
			<img src="third.jpg" alt="" class="th">
			<img src="fourth.jpg" alt="" class="fo">
		</div>
	</div>
	<h3>募集職種</h3>
<div class="job_btn">
    <?php foreach ($occupation as $job): ?>
        <li>
            <a href="<?= $company_base . $job['url'] ?>/">
                <p class="job_name"><?= $job['name'] ?></p>
            </a>
            <div class="arrow">
                <img src="<?= $highschool_base ?>polygon.png" alt="">
            </div>
        </li>
    <?php endforeach; ?>
</div>
	<h3>取材担当者からのポイント！</h3>
	<h4 class="point">積極的な対話が根付いた職場</h4>
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p style="min-height: 160px;">
		交和物産では、みんなでいろんな話をしながら楽しく仕事をしています。先輩たちは仕事中に優しくサポートしてくれるだけでなく、休憩時間にも声をかけてくれます。まるで文化系の部活の先輩と後輩のように、あたたかい雰囲気で働ける職場です。<br>
		また、工場内での作業なので社外の人と顔を合わせることはなく、毎日親しい仲間たちと安心して働けるのも魅力の一つです。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		『味のかけはし』で地域の食文化を支える
	</h3>
	<p>
		私たちは、坂城町にある食品加工の会社です。『味のかけはし』というブランドを展開し、きのこがたっぷり入った炊き込みご飯の素や、信州りんごが丸ごと入っているゼリーなどを取り扱っています。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<p>
		安全でおいしい商品を作るために、食材の仕入れや選別から、調理、殺菌、袋詰め、検査、ラベル貼りまでをすべて自社で行っています。
	</p>
	<div class="images">
		<img src="third.jpg" class="scene" alt="">
		<img src="introduce4.jpg" class="scene" alt="">
		<img src="introduce5.jpg" class="scene" alt="">
	</div>
	<p>
		私たちの商品は、スーパーの『ツルヤ』や食品メーカーを通じて、たくさんの人に届けられています。これからは新商品の開発にも力を入れ、もっと多くの人に信州の美味しさを届けていきます！
	</p>
	<div class="images">
		<img src="introduce6.jpg" class="scene" alt="">
	</div>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business1.png" alt="">
				</div>
				<hgroup>
					<h3>『味のかけはし』</h3>
					<p>
						「ふるさとの味に懐かしさを感じる人たちに、私たちの商品を届けたい。 そして、一緒に“未来の信州の食文化”を育てていきたい！」<br>
						そんな想いを込めて、『味のかけはし』というブランドを展開しています。
					</p>
				</hgroup>
			</div>
			<p>『味のかけはし』</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce6.jpg" alt="">
				</div>
				<hgroup>
					<h3>人気商品トップ３</h3>
					<p>
						上田市内のスーパーをはじめ、さまざまな場所で販売しています。<br>
						特に軽井沢のお店では、他県から来た観光客の方が『箱買い』していくことも多いです。
					</p>
				</hgroup>
			</div>
			<p>人気商品トップ３</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce1.jpg" alt="">
				</div>
				<hgroup>
					<h3>業務用もあります</h3>
					<p>
						旅館やレストラン、病院向けに業務用製品も作っています。<br>
						そのまま食べられる果物のデザートはもちろん、料理素材として利用できる水煮商品や、薄味の商品も人気があります。
					</p>
				</hgroup>
			</div>
			<p>業務用もあります</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>7.3</span>億円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>47</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>13</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>8</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>111</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1962</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>12</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 20, 'caption' => '20%', 'color' => '#2378C7'],
						[ 'value' => 80, 'caption' => '', 'color' => '#d9d9d9'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 3, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 7, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 28, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 15, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 0.001, 'caption' => "", 'color' => '#808080'],
					[ 'value' => 7, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 3, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 11, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 11, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 11, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 41, 'caption' => "車・バイク95%", 'color' => '#E06A3A'],
						[ 'value' => 2, 'caption' => '電車・バス5%', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "長野県内100%", 'color' => '#B2CF3E'],
						[ 'value' => 0.001, 'caption' => '', 'color' => '#FEE929'],
												]); ?>
				</svg>
			</div>
		</li>
	</ul>	
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src="company.jpg" alt="" class="scene">
	<dl class="speclist">
		<div>
			<dt>会社名</dt>
			<dd><?= $co['company_name'] ?></dd>
		</div>
		<div>
			<dt>業種</dt>
			<dd><?= INDUSTRIES[$co['industry'][0]] ?></dd>
		</div>
		<div>
			<dt>事業内容</dt>
			<dd>
				<ul class="li_style">
					<li>
						一般調理食品製造<br>
						(きのこ・山菜の味付加工・あんず及び果実類の加工・業務用食材加工・各種惣菜類の加工)
					</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>西澤秀一</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>43名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3209.626011254447!2d138.18169607650785!3d36.44242497235139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d98e15a627d21%3A0xeda24e557340129a!2z5Lqk5ZKM54mp55SjKOagqik!5e0!3m2!1sja!2sjp!4v1744353211137!5m2!1sja!2sjp"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-82-2533</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://ajinokakehashi.com/" target="<?= $co['slug'] ?>">https://ajinokakehashi.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">西澤秀一</span></figcaption>
		</figure>
		<p>
			みなさんは、食べること、料理をすることは好きですか？<br>
			「食に関わる仕事がしたい」「興味があって勉強している」という人はもちろん、「今このページを読んで気になった！」という人も、ぜひ一度見学に来てみてください。<br>
			飲食店でアルバイトをしたことがあり、衛生管理を意識できる人は特に大歓迎です！<br>
			これからの交和物産は、新商品の開発に力を入れ、信州の美味しさを全国に広げていきます。目の前の仕事だけでなく、新しいことに挑戦したい人をお待ちしています。<br>
			『食』を通じて、一緒に地域文化の発展に貢献しませんか？
		</p>
	</div>
</section>
<div class="visit content">
    <h2>応募前見学について</h2>
		<dl class="speclist">
    <?php foreach ($visit as $plan): ?>
    <div class="visit-item">
        <h3><?= $plan['about'] ?>について</h3>
        <div>
            <dt>開催日</dt>
            <dd>
				<ul>
						<?php 
						if (is_array($plan['date'])) {
								foreach ($plan['date'] as $date) {
										if (is_array($date)) { 
											echo "<li>" . $date['name'] . "</li>";
										}
								}
						} else {
								echo "<li>" . $plan['date'] . "</li>";
						}
						?>
				</ul>
            </dd>
        </div>
        <div>
            <dt>内容</dt>
            <dd><?= $plan['content'] ?></dd>
        </div>
    </div>
    <?php endforeach; ?>
</dl>
	<a href="apply/#entry" class="flag_btn_entry">
		<img src="<?= $highschool_base ?>flag.png" class="flag">
		<span>
			就活前に会社を見てみよう!<br>
			応募前見学
		</span>
		<img src="<?= $highschool_base ?>arrow.svg">
	</a>
</div>
<section class="content" id="job_list">
	<h2>募集職種</h2>
	<ul class="image_navi">
		<li>
			<a href="<?= $company_base ?>job_seizou/">
				<figure>
					<img src="first.jpg" alt="">
					<figcaption>食品製造職</figcaption>
				</figure>
			</a>
		</li>
	</ul>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../../tab.js"></script>
<script src="../../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
