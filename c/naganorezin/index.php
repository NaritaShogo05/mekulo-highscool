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
$description = '長野レジンは、車や医療部品、日用品などのプラスチック製品を射出成型で製造する会社。昼夜2交代制で安定した生産を行い、努力手当や夜勤手当など、がんばりがしっかり評価される職場です。';//メタディスクリプションの追加 
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
<body class="highschool naganorezin">
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
		がんばるだけ報われる会社！
	</h2>
	<p>
	    プラスチック製品と聞いた時、どのようなものを思い浮かべますか？<br>
		長野レジンでは、アルコールティッシュのケースやマレットゴルフのボールなど、身近な製品から、車や医療器具の部品などを作っています。長野レジンがおこなっているのは射出成型という加工です。<br>
		当社では、昼と夜の2交代制で工場を稼働しています。試用期間後から働くことのできる夜勤は、夜勤手当が付きますし、その他にも段取り手当、努力手当などを用意しています。頑張れば、その分だけ稼ぐことのできる職場です。
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
	<h4 class="point"></h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['shomura']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['shomura']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
	    長野レジンではアルコールティッシュのケースや、車のワイパーの部品、プリンターの部品などを作っています。その日の温度や湿度によって機械の設定を調整したり、作る物によって設定を変更したりする奥の深い仕事なのです。<br>
        お金が稼げるだけの仕事であればいくらでもありますが、自分が工夫して作ったものが、人々の生活の中で使われていると考えると、ワクワクしませんか。<br>
        学生時代に頑張った経験があるひとなら、きっと長野レジンは向いている職場です。この工場での努力は、お給料というかたちで返ってきます。<br>

	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
	    プラスチック部品や製品を24時間作る会社
	</h3>
	<p>
	    長野レジンには、上田市室賀の 本社工場と塩田工場の二つの工場があります。どちらもプラスチック製品を作っていますが、主に働いていただく場所は本社工場です。
	</p>
	<div class="images">
		<img src="factory.jpg" class="scene" alt="">
	</div>
	<p>
	    本社工場は、山あいの室賀温泉「ささらの湯」のすぐ近くです。夜勤明けに温泉で疲れを流して帰る、なんていう、大人の楽しみ方もできます！<br>
        当社はその2013年に本社工場と倉庫の屋根に太陽光発電システムを設置しました。国連がSDGsを採択したのが2015年です。世界に先駆けて観光に配慮した取り組みをしてきた会社です。<br>
        [長野県公式]長野県SDGs推進企業にも登録しています。「7.エネルギーをみんなに　そしてクリーンに」と「12.つくる責任　つかう責任」を主要な取り組みとしています。
	</p>
	<div class="images">
		<img src="introduce.jpg" class="scene" alt="">	
	</div>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="konpou.jpg" alt="">
				</div>
				<hgroup>
					<h3>梱包資材</h3>
					<p>
					    段ボールに取り付ける取手を作っています。冷蔵庫や洗濯機といった大型家電の箱などについているのをみたことありませんか？
					</p>
				</hgroup>
			</div>
			<p>梱包資材</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="ball.jpg" alt="">
				</div>
				<hgroup>
					<h3>マレットゴルフボール</h3>
					<p>
					    マレットゴルフのボールを長野レジンでは作っています。カラフルなボールが特徴のボールです。
					</p>
				</hgroup>
			</div>
			<p>マレットゴルフボール</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="putter.jpg" alt="">
				</div>
				<hgroup>
					<h3>パター練習マットの一部</h3>
					<p>
					    パター練習マットのカップの部分を長野レジンでは作っています。
					</p>
				</hgroup>
			</div>
			<p>パター練習マットの一部</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="tissue.jpg" alt="">
				</div>
				<hgroup>
					<h3>ウェットティッシュのケース</h3>
					<p>
					    時々見かけませんか？車の中にあるウエットティッシュ。そのケースを作ってます。
					</p>
				</hgroup>
			</div>
			<p>ウェットティッシュのケース</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="wiper.jpg" alt="">
				</div>
				<hgroup>
					<h3>ワイパーの部品</h3>
					<p>
					    乗用車やトラックのワイパーブレイド（ゴムの部分）を取り付ける部品を作っています。
					</p>
				</hgroup>
			</div>
			<p>ワイパーの部品</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span></span>億円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>45</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span></span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span></span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span></span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1985</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span></span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 0.01, 'caption' => '取得者無し', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 90, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 10, 'caption' => '中途', 'color' => '#F34444'],
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
					[ 'value' => 10, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 20, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 30, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 40, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 100, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 40, 'caption' => '60代', 'color' => '#008C4A'],
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
							[ 'value' => 87, 'caption' => "長野県内87%", 'color' => '#B2CF3E'],
							[ 'value' => 23, 'caption' => '県外23%', 'color' => '#FEE929'],
													]); ?>
					</svg>
				</div>
		</li>
	</ul>	
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src="office.jpg" alt="" class="scene">
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
					<li>プラスチック製品製造</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>西澤文康</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>14名（男性 4名／女性 10名、パートタイムの従業員含む）（2025年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25688.284790089263!2d138.152182!3d36.408334!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d9f4f03068111%3A0xc464d51f80b664df!2z5pel5pys44CB44CSMzg2LTE1NDEg6ZW36YeO55yM5LiK55Sw5biC5LiK5a6k6LOA77yR77yV77yR77yY!5e0!3m2!1sja!2sus!4v1745219627779!5m2!1sja!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-31-3888</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="http://www.nagano-resin.co.jp/" target="<?= $co['slug'] ?>">http://www.nagano-resin.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">西澤文康</span></figcaption>
		</figure>
		<p>
		    工場で働くことを、単純作業を延々と続ける仕事だと思っていませんか？<br>
            実は、そのイメージ、まったく反対です。<br>
	    </p>
        <p>
			次々につくられていく製品も、少しずつ違っています。気温が変わったり、機械の調子だったり、材料の種類で変わっていくでき上がりを確認し、いつも同じ品質の製品を作らなければなりません。違和感に敏感で、問題を早期に発見できないと、出荷できないものをたくさん生み出してしまいます。
		</p>
		<p>
			はじめは、何が良くて何が失敗なのかもわからないかもしれません。製品を作りながら品質を管理することに慣れて欲しいと思います。<br>
			失敗することは仕方がないと思っています。初めから上手にできる人はいません。失敗してもすぐに報告し、解決に取り組む姿勢さえあれば大丈夫です。
		</p>
        <p>
			仕事は、簡単な作業から始め、徐々に慣れてもらい、最後は一人で機械の複雑な条件設定ができるようになって欲しいと思います。それができれば独り立ちです。<br>
		    長野レジンの新たなマシンオペレーターの誕生を楽しみにしています。</p>
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
			<a href="<?= $company_base ?>job_machineoperater/">
				<figure>
					<img src="<?= $company_base ?>job_machineoperater/operater.jpg" alt="">
					<figcaption>マシンオペレーター</figcaption>
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
