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
$description = 'アーチェリー部品や音響・半導体装置のパーツを手がける上田市の町工場・オーパーツ。設計からプログラム、工具製作まで、ものづくりの全工程に関われる職場です。0.001mm単位の精密加工で、最高の性能を追求します。';//メタディスクリプションの追加
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
		アーチェリー部品や音響機器などの部品を手掛ける町工場
	</h2>
	<p>
		オーパーツの採用ページをご覧いただき、ありがとうございます。<br>
		私たちオーパーツは、上田市住吉でアーチェリーの照準器（サイト）や半導体製造装置に使われる部品、高級オーディオ機器のパネル部品などを手掛けている町工場です。<br>
		試作品として単品モノを製造することもあれば、一か月数千個を製造するような量産を行うこともあり、時には、わずか0.001mm（1000分の1ミリ）のズレすら許されない精密な加工を行うこともあります。<br>
		当社では「総合製造スタッフ」という職種を募集していますが、これは製造する部品・パーツの製造設計からプログラム開発、製造に必要となる治具や工具、機械操作など、ものづくりの全工程を手掛ける技術職です。
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
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p style="min-height: 160px;">
		世の中には、「とにかく決められた通りに作るだけ」の会社もあります。<br>
		ですが、オーパーツは違う！<br>
		アーチェリーの照準器、高級オーディオ機器…。<br>
		「自分の作ったパーツが、プロのアーチェリーの勝負を左右するかもしれない」<br>
		そんな実感を持ちながら、モノづくりに携われる仕事です。<br>
		幼いころにガンプラを作ったり、ゲーム機を分解してみたり、そんな経験があるにはハマる仕事だと思います。<br>
		大日方社長も、モノづくり大好き人間です。だからこそ、お話してみると絶対に面白いはず！ 
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		ただ作るだけじゃない！その部品の使われ方まで考え抜く
	</h3>
	<p>
		私たちの仕事は、ただ図面通りに部品を仕上げるだけではありません。<br>
		私たちが目指すのは“最高の性能を発揮する部品”に仕上げ、お客様にご提供することです。<br>
		そのためには、これから製造する部品が「どんな風に使われるのか」「どこまでの精度が必要か」をしっかり考える必要があります。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<p>
		多くの場合、お客様からご提供いただく部品の図面には、寸法や形状は詳細に記されていますが、上記のようなことは記されていないことが多いのです。<br>
		例えば、それがスライドする部品だったにも関わらず、「スライドする」という想像を全くせずに部品を作ると、結果的に動きがスムーズでなかったり、途中で引っかかってしまったりする部品になってしまうこともあります。<br>
		だからこそオーパーツでは、一つひとつの部品について、「どう使われるのか」を常に想像し、お客様とコミュニケーションを取りながら、最適な加工方法を見極めることを大切にしています。
	</p>
	<div class="images">
		<img src="first.jpg" class="scene" alt="">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<h3>
		最高の部品に仕上げるために、ドリルや工具にもこだわる
	</h3>
	<p>
		金属に穴を開けたり、削ったりするためには、それぞれの用途に適した市販のドリルや工具を使うのが一般的ですが、私たちのものづくりでは、時に市販の工具だけでは実現できないことがあります。<br>
		そんな時には、自分たちでドリルや工具を設計し、加工を実現しています。
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
	<p>
		また、ものづくりには、精度や品質だけでなく、同時に加工スピードも求められます。<br>
		例えば、1,400台分の部品を作る場合、１個あたりの加工時間が1分短縮されるだけで、約23時間も生産時間を短縮できます。<br>
		「どうすれば、より正確に、より速く作れるのか」試行錯誤を重ねながら追求するのも、ものづくりの楽しさです。
	</p>
	<div class="images">
		<img src="introduce5.jpg" class="scene" alt="">
	</div>
	<h3>加工機械を動かす、プログラムにも挑戦できる</h3>
	<p>
		加工機械はボタンを押せば勝手に動くわけではありません。<br>
		私たちが機械にこんな動作を、この順序で動いてほしいとプログラムを作ることで初めて動きます。<br>
		オーパーツでは、部品の図面を見て、加工の順序を考え、プログラムを組み、実際に機械を動かして部品を作る。そんなものづくりに必要なすべての仕事に関われます。
	</p>
	<div class="images">
		<img src="introduce6.jpg" class="scene" alt="">
		<img src="introduce7.jpg" class="scene" alt="">
	</div>
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
					<h3>エレベーション（アーチェリー部品）</h3>
					<p>
						照準器の高さを上下に微調整するための重要な部品。4面の平行度を0.005mm以内に抑えるという、高精度な加工が求められます。
					</p>
				</hgroup>
			</div>
			<p>エレベーション（アーチェリー部品）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>サイトボックス（アーチェリー部品）</h3>
					<p>
						アーチェリーの照準器（サイト）に使われる部品を製造しています。
					</p>
				</hgroup>
			</div>
			<p>サイトボックス（アーチェリー部品）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>アローレスト（アーチェリー部品）</h3>
					<p>
						2cm程度の小さな部品ですが、アーチェリーの矢を安定させ、正確に射るためには欠かせないパーツです。ミクロン単位の精度が求められる難易度が高い部品です。
					</p>
				</hgroup>
			</div>
			<p>アローレスト（アーチェリー部品）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business4.jpg" alt="">
				</div>
				<hgroup>
					<h3>フロントパネル（オーディオアンプ部品）</h3>
					<p>
						2cm程度の小さな部品ですが、アーチェリーの矢を安定させ、正確に射るためには欠かせないパーツです。ミクロン単位の精度が求められる難易度が高い部品です。
					</p>
				</hgroup>
			</div>
			<p>フロントパネル（オーディオアンプ部品）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business5.jpg" alt="">
				</div>
				<hgroup>
					<h3>薬局梱包機の部品</h3>
					<p>
						薬を梱包する半透明の袋を密封する機械の部品を製造しています。
					</p>
				</hgroup>
			</div>
			<p>薬局梱包機の部品</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>1.2</span>億円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>50</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>11.3</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>10</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>127</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2010</span>年</p>
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
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
						[ 'value' => 100, 'caption' => '対象者なし', 'color' => '#d9d9d9'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
						[ 'value' => 100, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 2, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 3, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 0.001, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 1, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 2, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 1, 'caption' => '50代', 'color' => '#009F6B'],
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
						[ 'value' => 75, 'caption' => "長野県内75%", 'color' => '#B2CF3E'],
						[ 'value' => 25, 'caption' => '県外25%', 'color' => '#FEE929'],
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
			<dd><?= INDUSTRIES[$co['industry'][0]] ?>（運動用具）</dd>
		</div>
		<div>
			<dt>事業内容</dt>
			<dd>
				<ul class="li_style">
					<li>
						世界で使用されるアーチェリーの照準器やアローレストや、高級オーディオ機器から歯科医療機器、調剤薬局向け機器の部品製造などを手掛ける。
					</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>大日方 新治</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd> 5名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3209.626011254447!2d138.18169607650785!3d36.44242497235139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d98e15a627d21%3A0xeda24e557340129a!2z5Lqk5ZKM54mp55SjKOagqik!5e0!3m2!1sja!2sjp!4v1744353211137!5m2!1sja!2sjp"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-75-9702</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd>なし</dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">大日方 新治</span></figcaption>
		</figure>
		<p>
			オーパーツは、ただ機械を動かして部品を作る会社ではありません。<br>
			私たちが目指すのは、「使う人のことまで考えた最高のものづくり」です。<br>
			例えば、アーチェリーの部品。<br>
			メーカー様から預かった図面通りに作るだけでは、本当に使いやすいものにはなりません。選手がどんな動きをするのか、どんな精度が必要なのかを考え、細かな調整を加える。<br>
			そうやって、自分の手で世界に通じる部品を生み出していくのです。<br>
			最初は何もわからなくても大丈夫。<br>
			ものづくりが好きな人、自分の手で世界に通じる技術を身につけたい人、オーパーツで”最高のものづくり”にチャレンジしてみませんか？
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
					<img src="job_seizou/work1.jpg" alt="">
					<figcaption>総合製造スタッフ</figcaption>
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
