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
$description = '長野県東御市のアルファーデザイン株式会社は、半導体製造装置や電子基板検査装置などを設計・製造するエンジニアリング企業。高精度かつカスタマイズ対応で、世界に一台の機械を形にします。若手からベテランまでが協力し、最先端のモノづくりを支えています。';//メタディスクリプションの追加
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
	<h2>
		あなたのスマホの中に私たちの技術がある
	</h2>
	<p>
		長野県東御市にあるアルファーデザインは、電子部品や半導体製造を支える自動機や、最新のカッティング機などを設計・製造するエンジニアリング企業です。自社製品である機械を設計・製造・出荷していますが、お客様ごとの仕様に合わせたカスタマイズを行い、幅広いニーズに対応しています。<br>
		製造している機械は、当社独自の技術を用いて、半導体パッケージや、電子回路の基板の製造を自動化し、様々なコンピューターや電子機器の製造において活躍しています。<br>
		機械設計・制御設計・電気設計など、若手からベテランまでがチームで協力しながら、お客様に合わせた一台を形にしています。設計から納品、現地での最終調整まで関われるからこそ、「自分がつくった」と胸を張れるやりがいがここにあります。
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
	<h4 class="point">「標準品」から広がる最先端のものづくり</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['shomura']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['shomura']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		アルファーデザインは、標準機をベースに顧客ごとの要望に応じたカスタマイズ装置を開発しています。半導体製造や基板製造に必要な高精度な位置決めを実現し、最先端の製造現場で使われる装置を世に送り出しています。
	</p>
	<h4 class="point">実機と向き合うリアルなものづくり</h4>
	<p>
		設計者自身がコンベアとの動きの同期を調整したり、現地に出向いてお客様の現場で調整作業をしたり。現場感のあるダイナミックな設計が体験できます。
	</p>
	<h4 class="point">共同開発で視野が広がる</h4>
	<p>
		親会社であるミマキエンジニアリングと一緒にカッティングプロッタを開発するなど、社外とのコラボレーションも活発。プロッターで切り出した段ボール製のイスや、大きな「あ」の文字など、設計と遊び心が同居しています。
	</p>
	<div class="images">
		<img src="point1.jpg" class="scene" alt="">
	</div>
	<h4 class="point">「チーム」で考える設計現場</h4>
	<p>
		設計者たちは、何人かで集まってアイデアを出し合いながら製品をつくっていました。黙々とだけではなく、議論しながらより良いものを形にしていく、そんな開かれた現場の雰囲気も魅力です。
	</p>
	<div class="images">
		<img src="point2.jpg" class="scene" alt="">
	</div>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<p>
		アルファーデザイン株式会社は、モノづくりの最先端を支える半導体製造装置や、電子回路の基板検査装置、プリント基板の防湿・絶縁を目的とした「防湿材」を塗布する装置などを製造しています。
	</p>
	<div class="images">
		<img src="firstview.jpg" class="scene" alt="">
	</div>
	<p>
		半導体って、じつは身の回りのほとんどの電化製品に使われています。その『半導体チップを、マイクロ単位の精度で、ぴったり基板に置いて接着する装置』などを作っています。スマホやAIチップの心臓部をつくる超精密マシンに関わることができる会社です。<br>
		また、電子基板にチップを差し込む装置も作っています。この装置は、間違った位置に挿入されない工夫があり、チップを差し込んだ後、リードを切る、リードをかるく曲げて固定（クリンチ）する、といった工程を自動で行うことができるものです。<br>
		最先端を「産業機械」を設計・開発し、製造現場の効率化を技術で支えている会社です。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<h3>
		【機械設計】自分の設計が、世界でただ一つの機械になる。
	</h3>
	<p>
		アルファーデザインでは、お客様の要望に合わせて、電子部品を基板に取り付けるための自動機をセミオーダーメイドで設計しています。既存の機械をカスタマイズしてお客様の求める機械を作り出す仕事です。<br>
		入社後は、過去の図面を見ながら設計の基礎を学び、先輩と一緒に一台ずつ機械を作り上げていきます。経験を積むうちに、機械の設計だけでなく、お客様とのやりとりも自分の担当になります。時には、他社と共同開発して海外向けの大型機械を手がけることも！
	</p>
	<div class="images">
		<img src="introduce2.jpg" class="scene" alt="">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<p>
		ものづくりの構造に興味がある人にはぴったりの仕事です。設計する上では様々な市販の部品を使用しますので、展示会で最新部品をチェックしたり、自分の「引き出し」を増やしていけるのも面白さの一つです。
	</p>
	<h3>
		【制御設計】お客さまの製品にあった動きを考えて作る
	</h3>
	<p>
		制御設計は、機械の“頭脳”を作る仕事。アルファーデザインでは、完成した装置に自分で書いたプログラムを組み込み、思い通りに動くように調整する役割を担います。
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
	<p>
		最初はプログラムの勉強からスタート。現場での調整作業もあり、全国各地の工場に出張して、お客様と直接やり取りしながら機械の動きを仕上げていきます。自分の仕事が、誰かの現場で実際に役立っていると実感できるのが、この仕事の一番の魅力です。
	</p>
	<div class="images">
		<img src="introduce5.jpg" class="scene" alt="">
	</div>
	<p>
		機械のモデルが持っている動きと、自分が与えた新しい指示が一体となって生産現場でモノを生み出し始める、その瞬間の達成感は、他では味わえません。
	</p>
	<div class="images">
		<img src="introduce6.jpg" class="scene" alt="">
	</div>
	<p>
		休日には甘いもの巡りをするのが好きというエンジニアもいる、そんなちょっとユニークで熱い職場です。
	</p>
	<div class="images">
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
					<h3>防湿剤塗布装置</h3>
					<p>
						湿度・結露・腐食性ガスからの保護だけでなく、導電ゴミ発生や浮遊防止にも役立ち、害虫ゴミショート対策にも威力を発揮。
					</p>
				</hgroup>
			</div>
			<p>防湿剤塗布装置</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>半自動挿入機</h3>
					<p>
						挿入位置の挿し間違いを防止し、挿入後のカットならびにクリンチをする半自動挿入機。<br>
						現工程での事前のリードプリカットや半田槽前の治具脱着など無くすことが可能。
					</p>
				</hgroup>
			</div>
			<p>半自動挿入機</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>異形部品挿入機</h3>
					<p>
						各種異形部品の荷姿（スティック・バルク・トレイ）に合わせたフィーダ類の搭載により、多品種対応の異形部品挿入機。
					</p>
				</hgroup>
			</div>
			<p>異形部品挿入機</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business4.jpg" alt="">
				</div>
				<hgroup>
					<h3>HSB-300</h3>
					<p>
						半導体チップを基板に接合する最先端装置。
					</p>
				</hgroup>
			</div>
			<p>HSB-300</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business5.jpg" alt="">
				</div>
				<hgroup>
					<h3>入退室ICカードリーダー</h3>
					<p>
						入退室ICカードリーダー<br>
						ICカードをかざすだけで鍵を開けることができる端末です。Felica/Type-B/Mifareなど様々なカードタイプに対応します。<br>
						ネットワークで遠隔制御対応。
					</p>
				</hgroup>
			</div>
			<p>入退室ICカードリーダー</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>3</span>億円</p>
		<p class="year">※2024年実績</p>
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
							[ 'value' => 87, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 23, 'caption' => '県外', 'color' => '#FEE929'],
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
					<li>自動機・省力機の設計</li>
					<li>製造、販売</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>森澤修二郎</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>95名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.605466586934!2d138.37828337639357!3d36.34611067238002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601db73b793ba3cd%3A0x468602916180e153!2z44Ki44Or44OV44Kh44O844OH44K244Kk44Oz!5e0!3m2!1sja!2sjp!4v1750397033429!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-64-0088</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://www.alpha-design.co.jp/" target="<?= $co['slug'] ?>">https://www.alpha-design.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">森澤修二郎</span></figcaption>
		</figure>
		<p>
			アルファーデザインは長野県東御市で、半導体製造装置や、電子機器の基板の製造装置をてがけている会社です。<br>
			私たちが手がけているのは、半導体や電子部品をつくる工場で活躍する自動機械。ここには最先端のノウハウが詰め込まれています。それをお客様の「こうしてほしい！」に合わせて、一台ずつカスタマイズして設計し、動きを作っていくことです。現地で自分の作った機械がちゃんと動くかどうか、立ち会うこともあります。<br>
			こうした製品の新しいモデルを一から開発することもあります。その時には当社の選りすぐりのエンジニアが集まって何カ月もかけてモデルを設計していきます。親会社のミマキエンジニアリングとの共同開発では、段ボールでイスをつくったり、大きな文字のパネルをつくったりすることのできる、アイデアが活きるプロッター製品もあります。<br>
			最初は知識がなくても、「やってみたい」「なんか面白そう」そんな気持ちが、技術者としての第一歩です。アイデアを出し合い、難しい課題を解決していく。その楽しさを、私たちと一緒に味わいませんか？
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
					<dd>しなの鉄道滋野駅から徒歩10分</dd>
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
					<dd>なし（新卒者の前年度実績）</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>
						年2回35～40万円または1.5か月分<br>
						※新卒1年目
					</dd>
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
					<dd>土 日 祝 その他<br>
					年間休日121日
				</dd>
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
					<dd>厚生年金保険、健康保険、雇用保険、労災保険、財形保険</dd>
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
					<dd>1名</dd>
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
					<dd>あり</dd>
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
