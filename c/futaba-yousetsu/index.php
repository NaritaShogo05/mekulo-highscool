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
$description = '株式会社双葉溶接は、鉄やアルミなどの金属をくっつけて、工場で使う機械のフレームやカバー、タンクなどを作っている会社です。火花がバチバチ飛ぶ「アーク溶接」が中心で、鉄の家具のオリジナルブランド「F.I.L.M.S」も展開。未経験でも先輩がしっかり教えてくれるから安心の職場です。';//メタディスクリプションの追加 
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
	<img alt="" class="fv_image" src="first-view.jpg">
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
		溶接職人になりたい人、集まれ！ 
	</h2>
	<p>
		「モノづくりに興味がある！」「手に職をつけたい！」そんなあなたへ。<br>
        双葉溶接では、工場で使われる機械のフレームやカバーなど、金属を溶接して作る仕事をしています。<br>
		作っている物は主に工場で使われる機械のフレームやカバーなどです。金属をピタッとつなげるのにはコツが必要ですが、未経験でも大丈夫！会社の先輩がイチから丁寧に教えてくれます。
	</p><br>
    <p>
		さらに、双葉溶接ではF.I.L.M.Sというオリジナルブランドを立ち上げ、製品づくりにも挑戦中！<br>
		キャンプギアやインテリア製品など、自分たちの技術を活かして新しいものを生み出しています。<br>
        「ものづくりを仕事にしたい！」、そんなあなたと一緒に私たちも挑戦し続けたいと思っています。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="job_kinzoku/kinzoku01.jpg" alt="" class="fs show">
			<img src="gallery01.jpg" alt="" class="sc">
			<img src="gallery02.jpg" alt="" class="th">
			<img src="gallery03.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="job_kinzoku/kinzoku01.jpg" alt="" class="fs">
			<img src="gallery01.jpg" alt="" class="sc">
			<img src="gallery02.jpg" alt="" class="th">
			<img src="gallery03.jpg" alt="" class="fo">
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
	<h4 class="point">カッコイイ会社です。</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['shomura']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['shomura']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		そして、ものづくりが好きな人、火花飛び散る金属加工をやってみたい人にピッタリの職場だと思います。<br>
        一度、双葉溶接の工場やオリジナルブランドF.I.L.M.Sの製品を見て欲しい。底に流れる共通の何かをきっと感じると思う。<br>
		「なるほど、この会社だからこの製品が生まれたのか」と、その理由がわかるはずだから。<br>
        メインの仕事「溶接」って、火花飛び散らしてバチバチやっているのを見たことあると思うけど、あれは金属を溶かしてつなぎ合わせているところです。その作業は一発勝負。位置を決めたら一気にバチバチです。<br>
        「難しそう…」と思うかもしれません。僕ならそう思います。
        だから簡単に「安心してください！」なんて言えません。<br>
        でも、頼れるアニキ（傍点）的な存在の社長のお話しを伺ったので、やっぱり「安心してください！」で良いのだと、今なら言えます。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		ものづくりを支える溶接技術
	</h3>
	<p>
		双葉溶接は上田市古里にあります。郊外の大通りから少し入ったのどかな田園のなか、黒を基調とし赤を差し色に使ったかっこいい建物が見えたら、それが双葉溶接です。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<h3>
		私たちは「笑顔と感動」をつくり「世界と未来」を創造します
	</h3>
	<p>
		これが双葉溶接のコンセプト（経営理念）です。すべての活動はこのコンセプトから始まります。<br>
        当社の業務は、工場で使われる産業機械のフレームやカバーなどを作ること。金属を溶かしてピタッとくっつける「溶接」という技術を使って、高精度な部品を作る仕事です。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		さらに、オリジナルブランドF.I.L.M.Sの製品も開発中！キャンプで使う焚火台や、カッコいい金属製のテーブルなど、自分たちの技術で新しいものを作ることにもチャレンジしています。
	</p>
	<div class="images">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi01.jpg" alt="">
				</div>
				<hgroup>
					<h3>工場の機械のフレームやカバー</h3>
					<p></p>
				</hgroup>
			</div>
			<p>工場の機械のフレームやカバー</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi02.jpg" alt="">
				</div>
				<hgroup>
					<h3>オリジナルブランドF.I.L.M.S；アウトドアグッズ</h3>
					<p></p>
				</hgroup>
			</div>
			<p>オリジナルブランドF.I.L.M.Sアウトドアグッズ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi03.jpg" alt="">
				</div>
				<hgroup>
					<h3>ボトルホルダー</h3>
					<p></p>
				</hgroup>
			</div>
			<p>ボトルホルダー</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi04.jpg" alt="">
				</div>
				<hgroup>
					<h3>オーダーメイドアイアン家具</h3>
					<p></p>
				</hgroup>
			</div>
			<p>オーダーメイドアイアン家具</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi05.jpg" alt="">
				</div>
				<hgroup>
					<h3>オーダーメイドアイアン家具</h3>
					<p></p>
				</hgroup>
			</div>
			<p>オーダーメイドアイアン家具</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>1</span>億<span>2000</span>万円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>38</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>3.7</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>20</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>115</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2011</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>10.5</span>日</p>
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
						[ 'value' => 6, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 94, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 87, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 13, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 7, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 29, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 11, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 42, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 7, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 7, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 65, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 23, 'caption' => '自転車', 'color' => '#D04255'],
						[ 'value' => 12, 'caption' => '徒歩', 'color' => '#FEE929'],
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
					<li>産業機械等のフレーム・架台・カバー部品製作</li>
					<li>アイアンブランド商品開発、製作、販売
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>北澤丈直</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>16名（男性 14名／女性 2名、役員、パート・アルバイト含む）（2025年1月現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.5789001672097!2d138.27405707581983!3d36.39518687236535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601db9ae0d5688a7%3A0xd2d063cf1b7afef9!2z5qCq5byP5Lya56S-IOWPjOiRiea6tuaOpQ!5e0!3m2!1sja!2sjp!4v1751421888992!5m2!1sja!2sjp" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-75-7128</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://futaba-wd.com/" target="<?= $co['slug'] ?>">https://futaba-wd.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="kitazawa1.jpg" alt="">
			<figcaption><span class="name">北澤丈直</span></figcaption>
		</figure>
		<p>
			溶接は、単なる作業ではなく、ものづくりの本質が詰まった技術です。<br>
            金属を思い通りの形に仕上げるには、知識・経験・勘が必要。職人技は、精密な調整や計算を積み重ねた結果なんだ。<br>
            この仕事の魅力は、自分の手で作ったものが社会の中で活躍すること。機械のフレームやパーツ、さらにはオリジナルブランドの製品まで、すべてが「自分が作ったもの」と胸を張れる。<br>
           「できるかな？」と不安に思うかもしれない。でも、大丈夫。最初は誰でも初心者だし、失敗したっていい。大切なのは、そこから何を学ぶかだから。<br>
           「やってみたい」、その気持ちがあれば、双葉溶接は全力のサポートを約束する。焦らず自分のペースで一歩ずつ進んで、いつか振り返った時に「こんなにできるようになった」と思える日に向かって一歩踏み出してほしい。<br>
            一緒に、ものづくりのプロフェッショナルを目指そう。
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
			<a href="<?= $company_base ?>job_kinzoku/">
				<figure>
					<img src="<?= $company_base ?>job_kinzoku/first-view.jpg" alt="">
					<figcaption>金属加工職</figcaption>
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
