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
$title = $co['company_name'] . '株式会社綿谷製作所の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = 'このページは株式会社 綿谷製作所の企業紹介ページです。長野県上田市にある綿谷製作所は、機械の部品をつくる会社。いろいろな種類の部品を少しずつ作るのが得意で、「きさげ加工」という職人技も使っています。地球にやさしい機械の開発にも力を入れていて、新しいことにどんどんチャレンジしています。';//メタディスクリプションの追加 
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
	<img alt="" class="fv_image" src="first_view.jpg">
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
		挑戦を楽しむ会社
	</h2>
	<p>
		当社では、機械部品などを加工する加工部門と、プラスチック製品を生産するための機械の組立、配線、運転調整を行う組立部門の2つを軸に事業を展開しています。<br>
       「限りなき成長を求めて」をスローガンに、職人の伝統技法である「きさげ加工」や廃棄物を燃料に還元する製品の開発など、さまざまなものづくりに挑戦しています。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="gallery01.jpg" alt="" class="fs show">
			<img src="gallery02.jpg" alt="" class="sc">
			<img src="gallery03.jpg" alt="" class="th">
			<img src="gallery04.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="gallery01.jpg" alt="" class="fs">
			<img src="gallery02.jpg" alt="" class="sc">
			<img src="gallery03.jpg" alt="" class="th">
			<img src="gallery04.jpg" alt="" class="fo">
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
	<h4 class="point">充実した新人研修</h4>
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		入社後の新人研修では、検査部門→加工部門→組立部門→ダイス部門の順で、それぞれ約2週間ずつ仕事を経験します。いろんな仕事を実際にやってみることで、会社全体の流れがよくわかるようになりますし、たくさんの先輩たちに顔を覚えてもらえるのもポイントです！<br>
        社員さんの中には、「最初は興味がなかった部門でも、あとでその経験が役に立った」と話してくれた人もいます。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		多品種少量生産が強み！毎日が新しい仕事
	</h3>
	<p>
		綿谷製作所は、上田市上丸子にある会社です。私たちの仕事は大きく分けて２つあります。
	</p>
	<div class="images">
		<img src="factry.jpg" class="scene" alt="">
	</div>
	<p>
		1つ目は「組立部門」。工場で使われる機械を組み立てたり、電気の配線をしたり、正確に動くように調整したりします。特に、プラスチック製品を作るための射出成型機という機械づくりでは、日精樹脂工業株式会社の協力工場として、安定した品質で多くの実績を残しています。
	</p>
	<div class="images">
		<img src="first_view.jpg" class="scene" alt="">
	</div>
	<p>
		2つ目は「加工部門」。機械に使われる部品を、図面を見ながら専用の機械を使って削ったり、形を整えたりします。いろんな部品を少しずつ作る「多品種少量生産」が強みです。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
	</div>
	<h3>
		綿谷製作所の特別な技術
	</h3>
	<p>
		本社から車で５分ほどのダイス工場では、ネジを作るための「転造ダイス」という金型を作っています。この金型で作られたネジはとても強く、大手企業の製品にも使われています。
	</p>
	<div class="images">
		<img src="daisu.jpg" class="scene" alt="">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<p>
		さらに、職人の伝統技法「きさげ加工」も大切にしています。これは金属の表面を手作業で削って、平らに仕上げる技術です。機械だけでは表現できない高精度の仕上がりを実現できます。
	</p>
    <div class="images">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<h3>
		未来のために、環境にもやさしく
	</h3>
    <p>
		環境にやさしい製品の開発にも力を入れています。<br>
        生ゴミを土壌改良する「亜臨界水処理」や、プラスチック廃棄物を燃料に変える「油化機」の開発など、より良い未来のために環境課題に向き合っています。
	</p>
	 <div class="images">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<p>
		私たちは、長い歴史と豊富な経験、確かな技術で、多くのニーズに応えるものづくりを続けています。一緒に技術を学び、未来のものづくりを支えていきましょう！
	</p>
	</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="first_view.jpg" alt="">
				</div>
				<hgroup>
					<h3>射出成型機</h3>
					<p>
					</p>
				</hgroup>
			</div>
			<p>射出成型機</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="daisu.jpg" alt="">
				</div>
				<hgroup>
					<h3>ダイス</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>ダイス</p>
		</li>
		<!--
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src=".jpg" alt="">
				</div>
				<hgroup>
					<h3>精密転造盤</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>精密転造盤</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src=".jpg" alt="">
				</div>
				<hgroup>
					<h3>大型転造盤</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>大型転造盤</p>
		</li>
		-->
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
			<p class="num"><span>43.5</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>15</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>20</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>116</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1942</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>13</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 20, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 80, 'caption' => '80%', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 10, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 90, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 80, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 20, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
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
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "TBD", 'color' => '#E06A3A'],
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
							[ 'value' => 100, 'caption' => "長野県内100%", 'color' => '#B2CF3E'],
							[ 'value' => 0.01, 'caption' => '', 'color' => '#FEE929'],
													]); ?>
					</svg>
				</div>
		</li>
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
					<li>汎用機械器具製造業</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>綿谷憲一</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>67名（男性 53名／女性 14名、役員、パート・アルバイト含む）（2024年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6429.370898776393!2d138.271499!3d36.319934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dba8d01145df9%3A0xd9233a82c24b05a3!2z5pel5pys44CB44CSMzg2LTA0MDQg6ZW36YeO55yM5LiK55Sw5biC5LiK5Li45a2Q77yR77yQ77yY77yS!5e0!3m2!1sja!2sus!4v1751279695165!5m2!1sja!2sus"allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-42-3114</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="http://www.wataya-co.jp/index.html" target="<?= $co['slug'] ?>">http://www.wataya-co.jp/index.html</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>社会の役に立つものづくりを</h3>
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">綿谷憲一</span></figcaption>
		</figure>
		<p>
			私たちは、社会に貢献する製品や人材を世界に発信していきたいと考えています。そのためには、今ある課題を見つけ、自ら考え行動できる人が必要です。<br>
		</p><br>
		<p>
			現在、私たちは新たに環境事業にも取り組み、資源循環の仕組みを開発しながら、持続可能な社会に貢献しています。また、社員一人ひとりの成長を大切にしており、社内外の研修制度を充実させることで、スキルアップの機会を増やしています。その結果、部署を飛び越えた学びや交流が活発になり、チームワークを活かした働き方が可能になりました。
			</p><br>
        <p>
			私たちの目指す未来を、一緒に創っていきませんか？挑戦する意欲のある方を、心からお待ちしております。 
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
			<a href="<?= $company_base ?>job_kakou/">
				<figure>
					<img src="<?= $company_base ?>job_kakou/first_view.jpg" alt="">
					<figcaption>加工(マシニング・ダイス)</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_denki/">
				<figure>
					<img src="job_denki/first_view.jpg" alt="">
					<figcaption>電気組立</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_meka/">
				<figure>
					<img src="job_meka/first_view.jpg" alt="">
					<figcaption>メカ組立</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_kensa/">
				<figure>
					<img src="job_kensa/first_view.jpg" alt="">
					<figcaption>検査(品質保証)</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_seisan/">
				<figure>
					<img src="job_seisan/first_view.jpg" alt="">
					<figcaption>生産管理</figcaption>
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
