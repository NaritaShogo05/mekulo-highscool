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
$description = '株式会社アルファーシステムズは、FA装置をオーダーメイドで設計・製造する技術集団。配線・設計・制御など各専門分野の技術者が連携し、世界に一つだけの装置を創り上げます。工場の自動化を支える、やりがいのあるものづくりの現場です。';//メタディスクリプションの追加
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
		<li class="jobs"><a href="#recruitment_requirements">募集要項</a></li>
	</ol>
</section>
<div class="about-com content" id="company_gallery">
	<h2>“動く”をゼロからつくる。チームでものづくりする会社</h2>
	<p>
		株式会社アルファーシステムズは、ものづくりの工場で使われる“動く機械”をつくっている会社です。<br>
		でも、ただの機械ではありません。お客さんごとにオーダーメイドされた「この世に一つだけ」の装置を設計・製造しています。<br>
		装置の構造を考え設計をする人、電気を通すための配線をする人、実際に組み立てる人、その機械の制御を設計する人──さまざまな技術が集まって、一つの機械を作っています。<br>
		バラバラだった幾百もの部品が一つに組み上がり、機能的に動き出すことで工場を自動化する。そんな「ものづくり」をしている会社です。
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
	<h3>取材担当者からのポイント！</h3>
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['shomura']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['shomura']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p style="min-height: 160px;">
		東御市にある株式会社アルファーシステムズは、“ものづくりの工場の中で働く装置の自動化”を設計からオーダーメイドでつくっている会社です。<br>
		図面を引いて設計し、部品を集めて組み立て、配線し、機械の制御プログラム組み込み動かす。ゼロから「働く機械」を生み出しています。<br>
		特に注目すべきは、設計から配線・組立まで、すべての工程を社内で完結している点。自分が描いた設計図がそのまま機械になり、動き出す瞬間に立ち会えるのは、ものづくりやメカが好きな人にとってはたまらないはず。<br>
		入社後は研修や社内検定など、未経験でも着実に技術を身につけられる仕組みが整っています。<br>
		工場の自動化という、いまや社会に欠かせない分野で、「ものをつくること」に本気で向き合っている人の集まる会社です。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		私たちはこんな会社です
	</h3>
	<p>
		工場の生産ラインを自動化する「FA（ファクトリー・オートメーション）装置」の設計・製造を行っています。手のひらサイズのものから、部屋ほどの大きさの装置まで、多様な製品を生み出しています。
	</p>
	<div class="images">
		<img src="introduce7.jpg" class="scene" alt="">
	</div>
	<h3>配線課―機械が動く達成感</h3>
	<p>
		工場で使われる“FA装置（自動機）”の配線作業を行います。機械の中の部品に、電源や制御信号を送り込むための配線を、ハンダ付けや圧着、ねじ止めによってつなぎ合わせ、機械に命を吹き込む大切な仕事です。完成した装置に電気が通って正常に動いたときの達成感は格別です！装置が大きいときは、配線の数も膨大になりますので、部署全体で力を合わせて取り組みます。
	</p>
	<div class="images">
		<img src="introduce8.jpg" class="scene" alt="">
		<img src="fourth.jpg" class="scene" alt="">
	</div>
	<p>
		センサー部品の細かい配線から、数十アンペアの電流を流すことのできる太い電線まで様々な種類の配線を行いますが、たった1本つなぎ間違えるだけで動作不良や部品の故障につながるので、一つひとつ確実に丁寧に確認しながら作業を進める慎重さと正確さが求められます。未経験でも社内研修があるので安心してください。「ハンダ付け」「圧着」などの基礎技術から学びます。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
		<img src="introduce9.jpg" class="scene" alt="">
	</div>
	<h3>機械設計課―アイデアをカタチに</h3>
	<p>
		「自分で考えた機械が本当に動いたら…？」そんなワクワクを、実際の仕事で体験できるのが「機械設計」の仕事です。お客様から「こんなことを自動でできる機械を作ってほしい！」という依頼をもとに、ゼロから設計図を描き、装置をカタチにしていきます。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
	</div>
	<p>
		とはいっても、最初からいきなり設計図を描ける人は誰もいません。最初は、先輩が描いた設計図の中から「部品の図面」を担当。そこからだんだんと、部品を組み合わせた「ユニット」、最終的には機械全体の「組立図」を担当するようになります。お客様と直接打ち合わせをして、装置の構想を練ったり、試作品を見せながら調整を行ったりと、「図面を描くだけじゃない」やりとりも大事な仕事です。
	</p>
	<div class="images">
		<img src="introduce5.jpg" class="scene" alt="">
	</div>
	<h3>制御設計課―「工場」の自動化を設計する</h3>
	<p>
		工場で動く機械には、「電気」と「プログラム」が欠かせません。その両方を操って、機械に命を吹き込むのが“制御設計”の仕事です。
	</p>
	<div class="images">
		<img src="introduce7.jpg" class="scene" alt="">
	</div>
	<p>
		制御設計の仕事は、その機械が「正しいタイミングで正しく動くように」制御プログラムを作ること。具体的には、
	</p>
	<ul style="padding: 0 10px 0 2em;">
		<li style="list-style: disc;">仕様書から、正しい機械の動きを把握して制御方法を考える</li>
		<li style="list-style: disc;">機械の動き（シーケンス制御）をプログラムで実装</li>
		<li style="list-style: disc;">実際に電気を通して動作テスト</li>
		<li style="list-style: disc;">お客様の工場に搬入後、動作確認や最終調整</li>
	</ul>
	<p>
		とくに機械を「どんな順番でどう動かすか」を考えるのが制御設計のポイントです。たとえば、「ボタンを押したらベルトが動く → センサーが反応したら止まる」といった条件を“見える形”で組んでいくのが、制御設計のしごとです。
	</p>
	<div class="images">
		<img src="introduce10.jpg" class="scene" alt="">
		<img src="introduce11.jpg" class="scene" alt="">
	</div>
	<p>
		自分が組んだプログラムで、機械が正しく動いた瞬間の感動は格別。「動いた！」という実感が目の前で得られるのが、この仕事の醍醐味です。<br>
		また、お客様の工場に出向いて直接調整したり、自分の手で動きを変えたりと、現場での活躍もできる職種。まさに“機械の頭脳”をつくるエンジニアです！
	</p>
	<div class="images">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<p>
		私たちアルファーシステムズは、工場の自動化を支える「FA装置」の設計・製造を手がけています。親会社であるミマキエンジニアリングの技術力を活かし、国内外の製造現場で使われる装置をオーダーメイドで開発。電気配線や制御の設計・施工など、ものづくりの中核を担っています。
	</p>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business1.jpg" alt="">
				</div>
				<hgroup>
					<h3>部品整列機 MPI-A</h3>
					<p>
						左右振動（揺動）と傾斜させることにより、各種部品を治具上に整列させる装置です。<br>
						対象部品は、大きさの制限があるものの、あらゆる部品の振込が可能です。<br>
						従来の振込機やパーツフィーダで供給できなかったものまで短時間に整列できます。
					</p>
				</hgroup>
			</div>
			<p>部品整列機 MPI-A</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>接着剤塗布装置</h3>
					<p>
						「FA装置」の例：接着剤塗布装置<br>
						製造現場で使われる装置をオーダーメイドで開発しています。電気配線や制御の設計・施工など、ものづくりの中核を担う装置の開発をおこなっています。
					</p>
				</hgroup>
			</div>
			<p>接着剤塗布装置</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>シール貼付け装置</h3>
					<p>
						「FA装置」の例：シール貼付け装置<br>
						製造現場で使われる装置をオーダーメイドで開発しています。電気配線や制御の設計・施工など、ものづくりの中核を担う装置の開発をおこなっています。
					</p>
				</hgroup>
			</div>
			<p>シール貼付け装置</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business4.jpg" alt="">
				</div>
				<hgroup>
					<h3>外観検査装置</h3>
					<p>
						「FA装置」の例：外観検査装置<br>
						製造現場で使われる装置をオーダーメイドで開発しています。電気配線や制御の設計・施工など、ものづくりの中核を担う装置の開発をおこなっています。
					</p>
				</hgroup>
			</div>
			<p>外観検査装置</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business4.jpg" alt="">
				</div>
				<hgroup>
					<h3>箱組み立て装置</h3>
					<p>
						「FA装置」の例：箱組み立て装置<br>
						製造現場で使われる装置をオーダーメイドで開発しています。電気配線や制御の設計・施工など、ものづくりの中核を担う装置の開発をおこなっています。
					</p>
				</hgroup>
			</div>
			<p>箱組み立て装置</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>3</span>億円</p>
		<p class="year">※2025年4月実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>46.5</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>10.8</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>7.9</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>121</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1989</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>15.6</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
						[ 'value' => 100, 'caption' => '取得者なし', 'color' => '#d9d9d9'],
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
						[ 'value' => 100, 'caption' => '中途100%', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 5, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 16, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 2, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 4, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 8, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 5, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 2, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 90, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 10, 'caption' => '徒歩', 'color' => '#D04255'],
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
					<li>自動化システムの提案、企画設計、製造</li>
					<li>機械・制御装置の設計製造</li>
					<li>機械・制御装置のOEM(加工・組立・調整)</li>
					<li>機械・制御装置の保守サービス</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>森澤 修二郎</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>21名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.599701121261!2d138.37757127639344!3d36.34625037237988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601db7f497f830a5%3A0x25e7d677ad00f1ea!2z44Ki44Or44OV44Kh44O844K344K544OG44Og44K6!5e0!3m2!1sja!2sjp!4v1750398719344!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-276-0011</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://www.alpha-systems.jp/" target="<?= $co['slug'] ?>">https://www.alpha-systems.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">森澤 修二郎</span></figcaption>
		</figure>
		<p>
			株式会社アルファーシステムズは、工場の「自動化」を支えるFA（ファクトリー・オートメーション）装置を、設計から配線・制御まで一貫して手がける会社です。一台ごとにカスタムメイドで、お客様の“こうしたい”という声に応え、世界に一つだけの機械を形にしています。<br>
			入社後は社内研修があります。ハンダ付けや圧着といった配線の基礎、図面の見方や機械の仕組み、機械制御の基本なども丁寧に教えていくので、未経験でも安心してください。中には、さまざまな技術を身に付けたいと希望して、部署を横断しての研修を受ける人もいます。<br>
			「機械いじりが好き」「動いている機械を見るのが好き」「頭で考えて動かすのが面白そう」――どんなきっかけでも大歓迎。<br>
			いろんな世代の先輩たちが関わり合いながら、1台の機械をつくりあげていく。そんなチームの一員として、あなたも一緒に“動くものづくり”を始めてみませんか？
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
<section class="requirements g" id="recruitment_requirements">
	<h2>募集要項</h2>
	<div class="tabs">
		<button class="tab1">募集要項</button>
		<button class="tab2">青少年雇用情報</button>
		<button class="tab3">選考方法</button>
	</div>
	<div class="requirement">
		<div class="content recruitment">
			<h3>仕事内容</h3>
			<dl>
				<div>
					<dt>募集職種</dt>
					<dd>製造技術者</dd>
				</div>
				<div>
					<dt>雇用形態</dt>
					<dd>正社員</dd>
				</div>
				<div>
					<dt>雇用期間</dt>
					<dd>定めなし</dd>
				</div>
				<div>
					<dt>契約更新の可能性</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>試用期間</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>
						〒389-0511<br>
						長野県東御市滋野甲２２１１－３
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>しなの鉄道滋野駅駅から徒歩10分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋内喫煙</dd>
				</div>
				<div>
					<dt>マイカー通勤</dt>
					<dd>可</dd>
				</div>
				<div>
					<dt>転勤の可能性</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>必要な知識・技能等</dt>
					<dd>
						あれば尚可<br>
						機械科または電気科での履修があれば尚可
					</dd>
				</div>
			</dl>
			<h3>賃金・手当</h3>
			<dl>
				<div>
					<dt>賃金形態</dt>
					<dd>月給</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>20.3日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd> 197,000円～</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>197,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月20日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>実費支給（上限なし）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回35~40万円または1.5か月分</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>9時00分〜18時00分
					</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>土 日 祝 その他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>
						年に数回の土曜に出勤日があります。<br>
						年末年始、ＧＷ、夏季の連続休暇あり。
					</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生保険、健康保険、雇用保険、労災保険、財形保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり(65歳)</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>入居可能住宅</dt>
					<dd>なし</dd>
				</div>
			</dl>
		</div>
		<div class="content career">
			<h3>青少年雇用情報</h3>
			<dl>
				<div>
					<dt>直近3年間の新卒者等採用者数</dt>
					<dd>前年度:2人、2年度前：3人、3年度前：0人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:1人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:2人、2年度前：3人、3年度前：0人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						10.8年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>46.5歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>親会社にて新入社員研修に参加</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり(資格取得奨励金制度)
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>前年度の月平均所定労働時間</dt>
					<dd>7.9時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>15.6日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：0人、男性：2人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>女性：0人、男性：2人</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>-</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>名</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
					    
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接、適性検査</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd></dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後10日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						管理部総務課<br>
						柳澤　編
					</dd>
				</div>
			</dl>
		</div>
	</div>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../../tab.js"></script>
<script src="../../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>animation.js"></script>
<?php include $base . '../footer.php' ?>
</body>
