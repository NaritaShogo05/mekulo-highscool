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
$description = '千曲市を拠点に、水道・ガス・空調などの配管修理を手がける坂口設備。トラブルに“すぐ駆けつけ、サッと解決”する配管のかかりつけ医として、地域の暮らしを支えています。未経験から職人技術を身につけたい方、歓迎！';//メタディスクリプションの追加 
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
	<img alt="" class="fv_image" src="contents10.jpg">
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
		すぐ駆けつけて、サッと解決する
	</h2>
	<p>
		「水が出ない」「ガスが使えない」――そんなとき、すぐに駆けつけて修理するのが、私たち坂口設備です。千曲市を拠点に、地域の暮らしを支える“配管のかかりつけ医”として日々現場で奮闘中。職人ならではの技術と経験を活かして、一つひとつのトラブルに丁寧に向き合っています。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="gallery1.jpg" alt="" class="fs show">
			<img src="gallery2.jpg" alt="" class="sc">
			<img src="gallery3.jpg" alt="" class="th">
			<img src="gallery4.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="gallery1.jpg" alt="" class="fs">
			<img src="gallery2.jpg" alt="" class="sc">
			<img src="gallery3.jpg" alt="" class="th">
			<img src="gallery4.jpg" alt="" class="fo">
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
	<h4 class="point">のびのびと働ける職場</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		「職場の雰囲気が良い」「和気あいあいと仕事をしている」<br>
		これは、実際に坂口設備の社員さんから聞いた言葉です。<br>
		取材の日も、冗談を言い合ったり、笑い声が聞こえたりと、楽しそうに働いている姿が印象的でした。<br>
		もちろん、仕事にはしっかり責任感を持って取り組んでいますが、気負いすぎず自然体で働ける雰囲気があります。<br>
		そんなあたたかい雰囲気なので、長く働いている社員さんが多いのも納得です。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		地域の配管の『かかりつけ医』
	</h3>
	<p>
		はじめまして！坂口設備のページを見てくれて、ありがとうございます。<br>
		私たちは千曲市を中心に、主に地域の工場や一般家庭の<b>配管の修理・メンテナンス</b>を担当しています。
	</p>
	<div class="images">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<p>
		学校や家で蛇口をひねると水が出たり、コンロで火が使えたりするのは、配管があるおかげです。<br>
		配管には、水道管やガス管、空調管など、いろいろな種類があります。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
		<img src="suidoukan.jpg" class="scene" alt="">
	</div>
	<p>
		どんな建物にも必要で、私たちの生活に欠かせない配管。でも、配管は鉄やプラスチックでできているので、時間が経つとサビて穴があいたり、衝撃で外れたり、パイプのつなぎ目から水や空気が漏れたりしてしまいます。<br>
		そんなときに活躍するのが、私たちです！
	</p>
	<div class="images">
		<img src="gallery2.jpg" class="scene" alt="">
	</div>
	<p>
		「水が漏れている」「設備の調子が悪い」そんな連絡をもらったら、まずはすぐに現場へ。どこが悪いのかをチェックして、必要な工具や修理方法をその場で判断します。
	</p>
	<div class="images">
		<img src="contents06.jpg" class="scene" alt="">
	</div>
	<p>
		その場ですぐに直せることもあれば、一度パイプを作業場に持ち帰って加工・修理・製作して再設置することもあります。
	</p>
	<div class="images">
		<img src="contents07.jpg" class="scene" alt="">
	</div>
	<p>
		修理方法はさまざま。ヒビの入った部分を溶接して繋げたり、壊れた部分を新しい部品に交換したりします。配管は、パズルのようにたくさんの部品を組み合わせてできているので、場所や用途に合わせた“オーダーメイド”の修理が必要なんです。
	</p>
	<div class="images">
		<img src="parts.jpg" class="scene" alt="">
		<img src="contents10.jpg" class="scene" alt="">
	</div>
	<p>
		困ったとき、すぐに駆けつけて修理する――まるで“かかりつけ医”のような存在として、地域の家庭や産業を支えています。
	</p>
	<h3>「やってみたい！」という気持ちがあれば大丈夫</h3>
	<p>
		当社で働く社員のほとんどが、普通科高校の出身。最初はみんな未経験です。知識や技術は、仕事の中で少しずつ身につけていけば大丈夫！<br>
		例えば溶接では、素材に合わせて温度やスピードを調整する必要があります。電圧を高めてスピードを上げる…なんていう“ちょっとした小技”も、やっていくうちに自然と覚えていけるでしょう。
	</p>
	<div class="images">
		<img src="contents11.jpg" class="scene" alt="">
		<img src="contents12.jpg" class="scene" alt="">
	</div>
	<p>
		素材によっては、ほんの少しの温度の違いで仕上がりが変わることもあり、まさに<b>職人の世界</b>。<br>
		そんな技術を身につけて、困っている人のところに飛んでいき、ササッと解決してしまう。そんな私たちに加わりませんか？
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="haikan.jpg" alt="">
				</div>
				<hgroup>
					<h3>配管</h3>
					<p>
						さまざまな種類の配管を、場所に合わせて加工していきます。
					</p>
				</hgroup>
			</div>
			<p>配管</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="gallery03.jpg" alt="">
				</div>
				<hgroup>
					<h3>工場内</h3>
					<p>
						私たちは、主に工場内の配管を担当しています。写真のような場所で作業するのが特徴です。
					</p>
				</hgroup>
			</div>
			<p>工場内</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>2</span>億円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>40</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>13</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>30</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>100</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1984</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>10</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '100%', 'color' => '#2378C7'],
						[ 'value' => 0.01, 'caption' => '', 'color' => '#d9d9d9'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '中途', 'color' => '#2378C7'],
						[ 'value' => 0.01, 'caption' => '', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 90, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 10, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 10, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 20, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 80, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 10, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 10, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "車・バイク100%", 'color' => '#E06A3A'],
						[ 'value' => 0.001, 'caption' => '', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 95, 'caption' => "長野県内95%", 'color' => '#B2CF3E'],
							[ 'value' => 5, 'caption' => '県外5%', 'color' => '#FEE929'],
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
					<li>冷暖房、給排水、衛生設備工事の施工、管理</li>
					<li>上下水道設備工事の施工、管理</li>
					<li>消火栓設備工事の施工</li>
					<li>空調機器の搬入据付工事</li>
					<li>土木工事の施工、管理</li>
					<li>上記各号に付帯関連する一切の事業</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>坂口吉一</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>8名</8dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18586.82821317078!2d138.09972145837128!3d36.518250225082355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d9d1f3ba61f41%3A0x8b635be25eb1e1b8!2z77yI5pyJ77yJ5Z2C5Y-j6Kit5YKZ!5e0!3m2!1sja!2sjp!4v1745677392678!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-274-2236</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://ssb-haikanya.co.jp" target="<?= $co['slug'] ?>">https://ssb-haikanya.co.jp</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">坂口吉一</span></figcaption>
		</figure>
		<p>
			坂口設備では、体力に自信のない人や女性でも安心して働けるような職場作りを進めています。DX（デジタル技術）の導入や設備投資も進め、遠隔での現場管理を可能にするなど、これからの時代に合った会社を作っていきたいと考えています。<br>
			ぜひ、若いみなさんの意見をどんどん聞かせてください！
		</p>
		<p>
			入社後は、とにかく現場に出て、実際に手を動かしながら成長していってください。資格を取れば、自信にもつながるでしょう。<br>
			自分から学んでいく姿勢が大切な仕事です。「やってみたい！」というやる気のある人は大歓迎です。あなたの挑戦を、全力で応援します！
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
			<a href="<?= $company_base ?>job_setubikoji/">
				<figure>
					<img src="firstview.jpg" alt="">
					<figcaption>現場職人</figcaption>
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
