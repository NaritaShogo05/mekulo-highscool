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
$description = '株式会社ファスコナガノは東御市で、切断・曲げ・溶接・仕上げを行う板金加工のプロフェッショナル。地域産業やお客様とのつながりを大切にし、多様な製品に柔軟対応。未経験でも安心の教育体制です。';//メタディスクリプションの追加 
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
<body class="highschool fasco">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_area">
	<img alt="" class="fv_image" src="introduce12.jpg">
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
	<h2>
		地域やお客様と、一緒に成長していく会社
	</h2>
	<p>
		私たちは東御市で、精密板金  のプロとしてものづくりを続けている会社です。<br>
		精密板金は、金属の板をミリ単位の正確さで切ったり曲げたりして、機械や製品の部品をつくる技術です。<br>
		製造業と言っても、ただ機械を動かしているだけではありません。地域のイベントにも積極的に参加し、ワイナリーや牧場といった東御市ならではの産業とのつながりも大切にしながら 、お客様からの「こんなもの作れる？」という声に応える、柔軟な仕事が特徴です。<br>
		自分たちだけでなく、周りも一緒に成長できるような会社を目指しています。
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
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		工場には、昔から使われている機械と、最新の機械がそろっています。長年使われている機械はちょっとクセがあって、扱うにはコツが必要。でも、それを簡単そうに使いこなす姿は、まさに職人です！<br>
		とはいえ、最初から難しいことを任されるわけではありません。3か月の研修期間では、ラベル貼りなどの出荷作業や完成した製品の検査といった簡単な仕事から始めます。会社で作っている製品を覚えてきたら、金属を切ったあとのバリ取りや手動での穴あけなど、少しずつステップアップ。この研修期間にしっかりと「ものづくりの土台」をつくることで、のちのち、技術の幅がぐんと広がっていくそうです。<br>
		また、職場の雰囲気もとても良く、休憩中には趣味の話で盛り上がったり、休日には一緒にゴルフを楽しんだりと、仕事以外でも仲の良い関係ができています。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		金属を、思い通りのカタチに。
	</h3>
	<p>
		私たちは、東御市で板金加工を行っています。<br>
		板金加工とは、図面をもとに金属の板を切ったり、曲げたり、つなげたりして、さまざまな形の製品を作る仕事です。
	</p>
	<div class="images grid-img">
		<img src="introduce1.jpg" class="scene" alt="">
		<img src="introduce2.jpg" class="scene" alt="">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<p>
		まずはお客様から届いた図面をもとに、どんな順番で加工するか、どの機械を使うかを考えながら、実際の作業に必要な細かい図面や作業指示書を作成します。
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
	<p>
		加工は、切断・曲げ・溶接・仕上げの4つの工程に分かれています。
	</p>
	<h3>
		『切断』
	</h3>
	<p>
		ブランクと呼ばれる工程です。ここでは、レーザー加工機やパンチプレス加工機を使って、金属板から必要な形を切り抜きます。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
	</div>
	<p>
		直線が多い製品はプレス、曲線の多い製品はレーザー、といった感じで、作るものに合わせて機械を使い分けています。
	</p>
	<div class="images grid-img">
		<img src="introduce6.jpg" class="scene" alt="">
		<img src="introduce7.jpg" class="scene" alt="">
		<img src="introduce8.jpg" class="scene" alt="">
	</div>
	<p>
		切断後にできる「バリ」と呼ばれるギザギザした部分を削る作業も大切です。やすりで削ったり、 専用の機械に通したりして、キレイに整えていきます。
	</p>
	<div class="images grid-img">
		<img src="introduce9.jpg" class="scene" alt="">
		<img src="introduce10.jpg" class="scene" alt="">
		<img src="introduce11.jpg" class="scene" alt="">
	</div>
	<h3>
		『曲げ』
	</h3>
	<p>
		ベンドと呼ばれる工程です。切断した金属を、曲げ加工機を使って立体的な形にしていきます。
	</p>
	<div class="images">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<p>
		直角に曲げるだけでなく、円錐や段差のある形など、製品によってさまざまな曲げ方があり、高い技術が求められます。
	</p>
	<div class="images">
		<img src="introduce12.jpg" class="scene" alt="">
	</div>
	<p>
		ちょっとした力加減で仕上がりが変わる、奥の深い工程です。
	</p>
	<div class="images">
		<img src="introduce13.jpg" class="scene" alt="">
		<img src="introduce14.jpg" class="scene" alt="">
	</div>
	<h3>
		『溶接』
	</h3>
	<p>
		切断や曲げでできたパーツをつなぎ合わせる工程です。製品の厚さや用途によって、TIG溶接やガス溶接、スポット溶接などを使い分けます。
	</p>
	<div class="images">
		<img src="introduce15.jpg" class="scene" alt="">
	</div>
	<p>
		キレイな溶接を行うためには、切断や曲げが正確であることが大前提。しかし、人の手で作業しているものなので、ときにはズレがあることもあります。<br>
		そこで、溶接工程でも製品の大きさをしっかり測り、ハンマーなどで微調整して整えることが大切です。
	</p>
	<div class="images grid-img">
		<img src="introduce16.jpg" class="scene" alt="">
		<img src="introduce17.jpg" class="scene" alt="">
		<img src="introduce18.jpg" class="scene" alt="">
	</div>
	<h3>
		『仕上げ』
	</h3>
	<p>
		加工最後の工程です。ここでは、グラインダーやバフと呼ばれる道具を使って、溶接部分を削ったり磨いたりして見た目を整えます。
	</p>
	<div class="images">
		<img src="introduce19.jpg" class="scene" alt="">
		<img src="introduce20.jpg" class="scene" alt="">
	</div>
	<p>
		1枚目の写真のように、溶接した部分は黒く焼けてしまします。それを2枚目のようにキレイにしていくのが、最後の仕上げです。<br>
		特に力を入れているのが、ステンレス製品の洗浄。「酸洗い」と「水洗い」で、鉄粉や油分を完全に取り除き、手作業で丁寧に拭き上げていきます。
	</p>
	<div class="images">
		<img src="introduce21.jpg" class="scene" alt="">
		<img src="introduce22.jpg" class="scene" alt="">
	</div>
	<p>
		この作業のおかげで、サビを防ぐことができます。食品工場など、厳しい衛生管理が求められる現場でも安心して使っていただけるように、最後までこだわっています。
	</p>
	<h3>
		まずは会社を知ることから
	</h3>
	<p>
		入社後は、すぐに難しい加工をするわけではありません。<br>
		まずはラベル貼りなど出荷作業の手伝いからスタートして、どんな製品を作っているのかを知ってください。
	</p>
	<div class="images grid-img">
		<img src="fourth.jpg" class="scene" alt="">
		<img src="introduce24.jpg" class="scene" alt="">
		<img src="introduce25.jpg" class="scene" alt="">
	</div>
	<p>
		それから、バリ取りや穴あけなど、簡単な作業から少しずつ覚えていきます。<br>
		図面の読み方も、一から丁寧に教えるので安心してください。普通科出身の先輩たちは、半年ほどで読めるようになりました。
	</p>
	<div class="images">
		<img src="introduce26.jpg" class="scene" alt="">
		<img src="introduce27.jpg" class="scene" alt="">
	</div>
	<p>
		機械を操作できるようになるまでに約3か月、1つの工程を1人で任されるようになるには約3年かかります。焦らず、こつこつと地道に頑張れる人に向いていると思います。<br>
		将来的には、「工場鈑金技能士」という国家資格の取得を目指すこともできます。
	</p>
	<h3>
		0.02ミリの極薄製品から、2メートル超えの大型製品まで
	</h3>
	<p>
		実は東信地域には、板金加工の会社が多いんです。<br>
		そんな他社との違いは、0.02ミリほどの薄い製品から、2メートル超えの大きな製品まで対応できる「守備範囲の広さ」です。
	</p>
	<div class="images">
		<img src="introduce28.jpg" class="scene" alt="">
		<img src="introduce29.jpg" class="scene" alt="">
	</div>
	<p>
		手掛けている製品は毎月約1700種類、約9000点にもなります。全く同じ製品を作ることはほとんどなく、日々新しい製品に挑戦できるのが特徴です。<br>
		学校の授業で棚を作ったり、休日にプラモデルを組み立てるのを楽しんだり。そういった「ものづくり」が好きな人を歓迎します！
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce28.jpg" alt="">
				</div>
				<hgroup>
					<h3>シム板</h3>
					<p>
						厚さ0.02ミリのシム板。金型の補修などに使われます。
					</p>
				</hgroup>
			</div>
			<p>シム板</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>軸部カバー</h3>
					<p>
						産業用機械の回転部を保護するためのカバーです。<br>
						丸いななめの部分は、曲げて作っています。どうやって作っているかわかりますか？   
					</p>
				</hgroup>
			</div>
			<p>軸部カバー</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="first.jpg" alt="">
				</div>
				<hgroup>
					<h3>配電盤</h3>
					<p>
						電気で動く装置の制御部分を組み込む箱です。<br>
						左上の１辺がR形状になっています。このカーブを作るのに、手作業で確認しながら慎重に作業を行います。   
					</p>
				</hgroup>
			</div>
			<p>配電盤</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce29.jpg" alt="">
				</div>
				<hgroup>
					<h3>防音カバー</h3>
					<p>
						縦2メートル、横2メートルほどの大型製品。<br>
						側面の板と天板が、ボルトで組み立てられるようになっています。<br>
						溶接すると歪んでしまうこともあるので、ぴったり合うように作るのが腕の見せ所です。 
					</p>
				</hgroup>
			</div>
			<p>防音カバー</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business5.jpg" alt="">
				</div>
				<hgroup>
					<h3>デザイン看板 </h3>
					<p>
						お店の看板や結婚式のウェルカムボードなど、さまざまなデザイン看板を手掛けています。今年の東御ワインフェスタでも、13軒ほどの看板を製作しました。<br>     
						中の模様と文字が浮いているように見えますよね。『a』や『o』の くり抜かれた部分をどうやって浮かせているのか、写真を見て想像してみてください。
					</p>
				</hgroup>
			</div>
			<p>デザイン看板 </p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business6.jpg" alt="">
				</div>
				<hgroup>
					<h3>ワイナリーで使用する道具</h3>
					<p>
						ワインを混ぜる棒やフィルターなど、ワインを作るために必要な道具を製造しています。バリがなくて使いやすいと好評です。<br>
						毎年行われている、東御ワインフェスタにも出店しています。
					</p>
				</hgroup>
			</div>
			<p>ワイナリーで使用する道具</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年4月現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>3500</span>万円</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>40</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>10</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>15</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>112</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1991</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>18</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 0.01, 'caption' => '取得者なし', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.01, 'caption' => '', 'color' => '#2378C7'],
						[ 'value' => 31, 'caption' => '中途100%', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 24, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 7, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 0.01, 'caption' => "", 'color' => '#808080'],
					[ 'value' => 7, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 9, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 11, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 0.01, 'caption' => '', 'color' => '#009F6B'],
					[ 'value' => 4, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "自転車100%", 'color' => '#E06A3A'],
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
					<li>試作板金加工</li>
					<li>精密板金加工</li>
					<li>薄板板金加工</li>
					<li>安全カバー製作</li>
					<li>筺体製作</li>
					<li>加工材料</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>馬場直樹</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>31名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.1079360738986!2d138.33290627664806!3d36.35816437237636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601db99761681f5f%3A0xff01ca65d6c8c55!2z77yI5qCq77yJ44OV44Kh44K544Kz44OK44Ks44OO!5e0!3m2!1sja!2sjp!4v1750315584613!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-62-0880</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://www.fasco-n.co.jp" target="<?= $co['slug'] ?>">https://www.fasco-n.co.jp</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>地域と共に成長する</h3>
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">馬場直樹</span></figcaption>
		</figure>
		<p>
			ファスコナガノでは、「地域やお客様の発展にどう貢献していけるか」を常に考えながら、ものづくりに取り組んでいます。<br>
			ワイナリーや牧場といった東御市ならではの産業と関わる中で、「こんなもの作れますか？」という声に応えてきました。本場の道具を使っていたワイナリー様から「道具にバリがあって使いにくい」という話をいただいて、バリのない道具をご提供したりもしました。他にも、子牛が飲むミルクを支える器具、産業機械メーカーへの提案など、地元からのさまざまなご相談を一つひとつ形にしています。<br>
			また、地域のイベントにも積極的に参加し、人とのつながりも大切にしています。社員の誕生日には近くの牧場で作られたローストビーフやハンバーグを贈ったり、土用の丑の日には商店街のうなぎを、年末には地元のお餅を配ったりと、地元のお店の商品を活用した福利厚生も行なっています。<br>
			社員を大切にしながら、地域にも恩返しをする。これからも地域と共に歩み、共に成長していける会社を目指していきます。
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
				別日でも対応可能です。ご相談ください。
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
<section class="g requirements" id="recruitment_requirements">
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
					<dd>精密板金</dd>
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
					<dd>なし</dd>
				</div>
				<div>
					<dt>試用期間</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>異なる</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒3890515<br>
					長野県東御市常田753</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>田中駅から徒歩で15分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>喫煙室設置</dd>
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
					<dd>不問</dd>
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
					<dd>21日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>180,000円</dd>
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
					<dd>180,000円</dd>
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
					<dd>毎月18日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（3.4ヶ月分）</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時20分〜17時30分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>土・日・祝</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>会社カレンダーによる<br>
						週の真ん中の祝日は出勤の場合がある</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>雇用保険、労災保険、公務災害補償、健康保険、厚生年金、財形</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数3年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり（60歳）</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり（定年年齢60歳）</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限年齢65歳）</dd>
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
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>10年</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>40歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>新人研修</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>なし</dd>
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
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>15時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>18日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：0人、男性：0人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>0名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>-%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>-%</dd>
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
					<dd>1人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						2025年8月1日（金）10時00分～<br>
						2025年8月4日（月）13時30分～<br>
						別日でも対応可能です。ご相談ください。
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後7日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>経理<br>馬場あゆみ
					</dd>
				</div>
			</dl>
		</div>
	</div>
	<div>
		<a href="apply/#entry" class="btn_entry">
			<img src="../../flag.png" class="flag">
			<span>応募前見学情報を見る</span>
			<img src="../../arrow.svg">
		</a>
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
