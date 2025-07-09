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
$title = $co['company_name'] . '有限会社柳沢モータースの高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = 'このページは有限会社柳沢モータースの企業紹介ページです。柳沢モータースは、坂城町で新車や中古車の販売、リース、整備、ロードサービスなどを行う地域密着の自動車工場です。工場とショールームは、千曲川をはさむ形で分かれています。';//メタディスクリプションの追加 
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
<div class="fv_area">
	<img alt="" class="fv_image" src="fv.jpg">
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
		人が好き、車が好きそんな人たち集まれ
	</h2>
	<p>
		「クルマが好き」「手に職をつけたい」「安定した仕事がしたい」<br>
		そんなあなたにヤナモです！<br>
		柳沢モータースはクルマの販売、整備、板金塗装、ロードサービスなどを行う会社です。<br>
		柳沢モータースには、ディーラーのように整備部品のノルマがありません。よって整備の仕事に集中できる環境が整っています。各社の車を扱うことができることもディーラーに無い魅力です。<br>
		社長がメーカー出身なので技術に詳しく、エンジニアに理解があることも働きやすさにつながっています。整備士になるには資格が必要ですが、努力次第で働きながら資格をとることができます。<br>
		昔は男性の職場と思われていましたが、今は女性も多く活躍しています。<br>
		人と関わることが好きなら、フロント業務がお勧めです。クルマの知識がなくても構いませんが、車に対する興味は絶対必要です。<br>
		柳沢モータースのお客様さまは、地元顔なじみのお客様にご利用いただいている自動車工場です。車のことだけでなく、お客様のことも覚えていただきながら、フロント業務に慣れていただけたらと思います。
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
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['shomura']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['shomura']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		「クルマの仕事って難しそう…」<br>
		そう思っているかもしれません。でも、柳沢モータースなら未経験からでも安心してスタートできます。<br>
		柳沢モータースは、社員の資格取得をバックアップする制度が整っています。働きながら、国家資格を取り、手に職をつけることが努力次第で可能です。<br>
		また、フロント業務はお客様と工場のかけ橋です。人とかかわることが好き。人の役に立ちたい。と思う人に向いている仕事です。<br>
		車にかかわる仕事にもいろいろな入口があるんですよ。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<p>
		柳沢モータースは、坂城町で新車や中古車の販売、リース、整備、ロードサービスなどを行う地域密着の自動車工場です。工場とショールームは、千曲川をはさむ形で分かれています。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<p>
		柳沢モータースは指定工場です。<br>
		指定工場とは、工場内で車検をすることのできる民間の自動車工場を言います。その工場になるためには、国が決めたいろいろな条件をクリアする必要があり、ヤナモはそのすべてをクリアし、指定工場として地域の方々の車の安全を守っています。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<p>
		柳沢モータースには15人方が働いています。少人数の街の自動車工場なので、社員同士の仲が良いのはもちろんのこと、ご利用いただいているお客様からも長年のご愛顧をいただき、家族のようお付き合いをさせていただいております。
	</p>
	</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="firstview.jpg" alt="">
				</div>
				<hgroup>
					<h3>車検・整備</h3>
					<p>
						定期的に義務付けられている点検や車検をおこないます。指定工場なので自社工場で車検が完了します。
					</p>
				</hgroup>
			</div>
			<p>車検・整備</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="fourth.jpg" alt="">
				</div>
				<hgroup>
					<h3>鈑金塗装</h3>
					<p>
						事故で凹んだり傷ついたりした車を元に戻します。
					</p>
				</hgroup>
			</div>
			<p>鈑金塗装</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="second.jpg" alt="">
				</div>
				<hgroup>
					<h3>新車中古車の販売・カーリース</h3>
					<p>
						柳沢モータースでは新車中古車の販売・カーリースを通じて、お客様と車の出会いを応援しています。
					</p>
				</hgroup>
			</div>
			<p>新車中古車の販売・カーリース</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="road.jpg" alt="">
				</div>
				<hgroup>
					<h3>ロードサービス</h3>
					<p>
						万が一の時はヤナモのレッカー車が駆けつけます。動けなくなった車を自社工場まで運びます。
					</p>
				</hgroup>
			</div>
			<p>ロードサービス</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark"></p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>5</span>億円</p>
		<p class="year"></p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>54</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>14</span>年</p>
		</li>
		<li class="small">
			<p>月平均残業時間</p>
			<p class="num"><span>8</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>104</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1984</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>8</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
		<!--
		<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 80, 'caption' => '80%', 'color' => '#2378C7'],
						[ 'value' => 20, 'caption' => '', 'color' => '#d9d9d9'],
					]); ?>
				</svg>
			</div>
		</li>
		-->
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 30, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 150, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 110, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 70, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 95, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 5, 'caption' => '自転車', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 100, 'caption' => "長野県内100%", 'color' => '#B2CF3E'],
							[ 'value' => 0.01, 'caption' => '', 'color' => '#FEE929'],
													]); ?>
					</svg>
				</div>
		</li>
		<!--
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 1, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 10, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 18, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 20, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 33, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 15, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		-->
	</ul>	
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src="factry.jpg" alt="" class="scene">
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
					<li>自動車販売</li>
					<li>整備</li>
					<li>板金塗装</li>
					<li>ロードサービス</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>柳澤　哲</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>18名（2025年5月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8874.761425477769!2d138.16949852545085!3d36.45779675303798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d991a3ee6675d%3A0x7246d22c8d0acaba!2z5p-z5rKi44Oi44O844K_44O844K5!5e0!3m2!1sja!2sjp!4v1751444396435!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-82-7043</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://yanamo.jp/" target="<?= $co['slug'] ?>">https://yanamo.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">柳澤　哲</span></figcaption>
		</figure>
		<p>
			みなさん、クルマの仕事ってどんなイメージがありますか？<br>
		自動車業界は大きく変わろうとしています。電動化や自動運転など、新しい技術がどんどん進化しています。でも、どんなに技術が発展しても、クルマを整備したり、お客様に寄り添ってサポートしたりする仕事はなくなりません。<br>
		ヤナモは、地域に根ざした会社として、地元の人たちと一緒に成長していきたいと思っています。未経験からでも大丈夫！資格を取りながら、手に職をつけることができます。<br>
		「車が好き」『安定した仕事がしたい』『モノをきれいに仕上げるのが好き』『人と話すのが好き』 どれか一つでも当てはまるなら、ぜひヤナモでチャレンジしてみませんか？<br>
		一緒に未来のクルマ社会を支える仕事をしていきましょう！
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
			<a href="<?= $company_base ?>job_mechanic/">
				<figure>
					<img src="<?= $company_base ?>first.jpg" alt="">
					<figcaption>メカニック（自動車整備士）</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_metal/">
				<figure>
					<img src="job_metal/firstview.jpg" alt="">
					<figcaption>板金・塗装スタッフ</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_front/">
				<figure>
					<img src="job_front/firstview.jpg" alt="">
					<figcaption>フロント業務（接客・事務）</figcaption>
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
<?php //include $base . '../footer.php' ?>
</body>
