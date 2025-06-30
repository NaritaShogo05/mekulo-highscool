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
$description = '建物の裏側で空気の通り道をつくる仕事です。金属板からダクトを設計・製造・取り付けまで一貫して行い、学校や商業施設、工場などに快適な空調環境を届けます。設計図をもとにパズルのように組み立て、チームで効率よく現場設置。図形やものづくりが好きな方にぴったりの職場です。';//メタディスクリプションの追加

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
		みんなが知らない、建物の裏側を作る仕事
	</h2>
	<p>
		学校やショッピングモールで、エアコンの風が天井や壁から出てくることがありますよね。その空気を運んでいるのが『ダクト』です。ダクトには、冷暖房の空気を室内に届けるものや工場の排気を外に逃がすものなど、さまざまな役割があります。<br>
		私たちの仕事は、一枚の金属板を筒の形に組み立てて、それを現場で繋げていくこと。空気の通り道を作ることで、快適な環境を作っています。
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
		創風では「とにかく楽しんで働いてほしい」という想いを大切にしており、休憩中は社員同士が笑顔で会話する光景が印象的です。<br>
		また、社長や上司のほうから積極的に声をかけてくれるので、ちょっとしたことでも相談しやすく、安心して働ける環境です。自分のスタイルで自由に働ける一方で、困ったときには先輩がすぐに手を差し伸べてくれます。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		空気の通り道を作る
	</h3>
	<p>
		私たちは上田市真田で、ダクトの設計、製造、現場での取り付けを行っている会社です。作ったダクトは、ビル、店舗、工場などあらゆる建物で使われています。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<p>
		当社では、ダクトの設計・製造・取り付けまでを一貫して行っています。<br>
		まずは設計。建物の構造を確認し、ダクトのルートを決めるところから始めます。ただまっすぐ伸ばせばいいというわけではなく、建物の柱や壁、天井の高さを考えながら、最適な空気の流れを設計図に落とし込みます。
	</p>
	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
	<p>
		設計図をもとに製作指示書を作ったら、製造に引き継ぎます。<br>
		製造では、製作指示書をもとに金属板を切り取る作業から始めます。
	</p>
	<div class="images">
		<img src="introduce5.jpg" class="scene" alt="">
	</div>
	<p>
		切り取った金属板は、体を使って曲げたり、ハンマーで叩いたりしながらダクトの形に仕上げていきます。コツをつかめば、力もあまり必要ありません。1枚の金属板がダクトの形に変わっていくのは、まるでパズルのピースをはめていくような面白さがあります。
	</p>
	<div class="images">
		<img src="firstview.jpg" class="scene" alt="">
		<img src="introduce7.jpg" class="scene" alt="">
	</div>
	<p>
		製造が終わったダクトをトラックで運び、現場で取り付けを行います。設置する位置を確認したら、脚立や高所作業車の上で素早くダクトを繋げていきます。<br>
		ダクトは大きくて重いものもあるので、チームワークを活かして効率よく作業します。
	</p>
	<div class="images">
		<img src="fourth.jpg" class="scene" alt="">
	</div>
	<p>
		どの工程でも、完成像をイメージしながらの作業が必要になります。パズルゲームや図形が好きな人には、特に向いているかもしれません。
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business1.jpg" alt="">
				</div>
				<hgroup>
					<h3>設置後のダクト</h3>
					<p>
						さまざまな種類のダクトを組み合わせています。
					</p>
				</hgroup>
			</div>
			<p>設置後のダクト</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce1.jpg" alt="">
				</div>
				<hgroup>
					<h3>お店</h3>
					<p>
						焼肉屋などでは、排気ダクトと呼ばれるダクトが使われています。室内の空気や煙を、外に排出するためのものです。
					</p>
				</hgroup>
			</div>
			<p>お店</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>直管</h3>
					<p>
						まっすぐに作られたダクトで、壁や天井に沿って取り付けられます。スペースを有効活用できるのがメリットです。
					</p>
				</hgroup>
			</div>
			<p>直管</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business4.jpg" alt="">
				</div>
				<hgroup>
					<h3>異径管</h3>
					<p>
						両端でサイズが異なるダクトです。大きさの違うダクトを接続したり、分岐させたりするときに使います。
					</p>
				</hgroup>
			</div>
			<p>異径管</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business5.jpg" alt="">
				</div>
				<hgroup>
					<h3>エルボ</h3>
					<p>
						曲がった形状のダクトです。角度は90度が標準ですが、他の角度でも作ることができます。
					</p>
				</hgroup>
			</div>
			<p>エルボ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business6.jpg" alt="">
				</div>
				<hgroup>
					<h3>S字管</h3>
					<p>
						S字状にカーブしたダクトです。設置場所によって、エルボと使い分けます。
					</p>
				</hgroup>
			</div>
			<p>S字管</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>44</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>17</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>7</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>95</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1978</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>15.1</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '取得者なし', 'color' => '#d9d9d9'],
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
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
						[ 'value' => 8, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 2, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 4, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 3, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 7, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 6, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 1, 'caption' => '60代', 'color' => '#008C4A'],
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
					<li>一般建設業（ダクト工事）</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>金子慎也</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>17人</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3208.995171837649!2d138.33309507650878!3d36.4576729723467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dbe14c5a3ccc1%3A0xbba8de7ea553eecb!2z5qCq5byP5Lya56S-IOWJtemiqA!5e0!3m2!1sja!2sjp!4v1744347302947!5m2!1sja!2sjp"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-72-4065</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://sohfu.co.jp/" target="<?= $co['slug'] ?>">https://sohfu.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>想像力が武器になる</h3>
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">金子慎也</span></figcaption>
		</figure>
		<p>
			私たちが求めているのは、勉強が得意な人ではなく、想像力のある人です。サイコロの展開図を思い浮かべるのが得意な人や、パズルゲームが好きな人は、この仕事に向いていると思います。
		</p>
		<p>
			創風の仕事では、指示を待つのではなく「次に何をすればいいか」を自分で考えることが大切です。最初は教わることが多いですが、周りを見て動ける人、リーダーシップを持って先頭に立てる人が活躍できます。
		</p>
		<p>
			どんな小さなことでもいいので目標を持ち、自ら行動する力を身につけてください。みなさんと一緒に働ける日を楽しみにしています！
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
			<a href="<?= $company_base ?>job_genba/">
				<figure>
					<img src="job_genba/fv.jpg" alt="">
					<figcaption>現場作業員</figcaption>
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
