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
$description = '株式会社キャステクは長野県青木村・丸子を拠点に、熟練の鋳造技術で未来の暮らしを支える製品を製造しています。砂型・金型鋳造から加工まで一貫対応し、環境技術にも挑戦中です。';//メタディスクリプションの追加 
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
<body class="highschool kyasuteku">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_area">
	<img alt="" class="fv_image" src="introduce1.jpg">
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
		形のない金属を、図面通りの部品に変える職人技
	</h2>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<p>
		私たちキャステクは青木村(本社)と丸子で、鋳造という、溶かした金属を型に流し込み、冷やして固める加工方法で製品を作る仕事をしています。<br>
		鋳造で作った製品のことを「鋳物」と言い、鋳物は皆さんの身の回りで生活を支えています。例えば、マンホール、車のタイヤホイール、ドアノブなどがあります。<br>
		さらに、鋳造技術を活かして電力、医療といった多分野に挑戦しています。<br>
		本社工場では複雑な形に対応できる砂型鋳造、丸子工場では大量生産に適した金型鋳造を行っています。<br>
		また、社員が「ここをこうした方がいい」と思ったことを会社に提案できる制度があります。いい提案には会社から賞金も出ることもあるのでみんなが積極的に意見を出しています。他にも、月に一度、工場の中をチェックしてきれいに保つ活動もしています。<br> 
		今回は、本社工場の「砂型鋳造部門」または「加工部門」で、一緒に働いてくださる方を募集しています。
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
		<img src=<?= $highschool_base . WRITER['ichikawa']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['ichikawa']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		鋳造の仕事は、まさに「職人の世界」です。<br>
		作業は繰り返しが多く、すぐに成果が見えないこともありますが、コツコツ続けることで技術が身につきます。作業場は暑く、重い物を運ぶこともあるので体力は必要ですが、何より大切なのは「前向きな気持ち」です。失敗してもくよくよせず、次に活かすことが大事です。<br>
		細かい確認や時間を守る力も、鋳物を完成させるためには大切で、「感覚」と「経験」が活きる仕事です。
		最初は誰でもわからないことだらけ。でも大丈夫。先輩が一人ついてマンツーマンで指示して、教えてくれるので、安心してスタートできます！ <br>
		自分の手で作った製品が、身の回りで使われているのを見ることがやりがいになります。
		また、現場で働く社員さんへの安全の意識も高く、会社として安全対策（粉じんを通さない安全性の高いマスクの着用等）を行っており、安心して働ける環境が整っています。 
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		キャステクでできること
	</h3>
	<p>
		私たちキャステクは、青木村にある本社工場と丸子にある丸子工場で、鋳造技術を活かしたさまざまな製品を作っています。<br>
		また、自社の鋳造技術を活かした環境への取り組みも行っています。自然エネルギーを利用した発電システム機の開発を行い、実用化を目指しています。道の駅あおきにある「エネ空あおきタワー」、リフレッシュパーク青木にある「ミライズあおき」がその一例です。エネ空あおきタワーは風力と太陽光のハイブリッド発電システムが搭載され、ミライズあおきは水力と太陽光のハイブリッド発電システムが搭載されたタワーです。
	</p>
	<div class="images">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<h3 class="department">
		砂型鋳造部門
	</h3>
	<p>

		砂型鋳造では、砂で作った型にドロドロに溶かした金属を流し込み、冷えて固まることで形を作ります。砂で型を作るため、複雑な形の製品にも対応できるのが特徴です。<br>
		砂型の作り方には「手ごめ」と「機械」の2つの方法があります。「手ごめ」は職人が手で砂を込めて形を作る方法で、高い技術が必要です。その分、自分の技で丁寧に仕上げるので、やりがいも大きく、まるで芸術作品を作るような楽しさがあります。
		一方、「機械」は型づくりを自動で行う方法で、たくさんの製品を効率よく大量に作るのに向いています 。<br>
		例えば、キャステクでは、ガスタンクや電車、工場の設備などに使われる圧力計の部品を作ります。この部品は、金属を流し込んで作る「鋳造」という作業から、形を整える「加工」まで、すべての工程を自社で行っています。こうすることで、製品の品質を高く保ちつつ、ムダの少ない効率的な生産ができるのです。 
	</p>

	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<p>
		砂型鋳造の作業工程<br>
		1.砂型を作成 
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
	<p>
		2.地金を溶かす：インゴットを溶解炉に入れて、ドロドロに溶かします。
	</p>
	<div class="images">
		<img src="introduce5.jpg" class="scene" alt="">
	</div>
	<p>
		3.注湯：作成した砂型に溶かした金属を流し込みます。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
	</div>
	<p>
		4.型をハンマーで叩いて壊す：冷えて固まったら型を壊して砂を崩し、鋳物を取り出します。
	</p>
	<div class="images">
		<img src="introduce7.jpg" class="scene" alt="">
	</div>
	<p>
		5.できた鋳物の型バラシ：型を壊した直後の鋳物は、プラモデルのランナーからパーツを切り離す前のような状態なので造形物から使用するパーツを切断して取り出します。<br>
		6.バリ部分を取り除く工程（鋳仕上げ）：キャステクの青木工場は、鋳造から2次加工まで、一貫した生産ラインがあります。砂型工場の現場で製造された鋳物は、このあと、青木の加工工場でいくつかの工程を経て、圧力計の部品が完成します。
	</p>
	<div class="images">
		<img src="introduce8.jpg" class="scene" alt="">
	</div>
	<p>
		どの工程も、完成品をイメージして、作業に取り組むことが、早い成長へのカギになります。
	</p>
	<h3 class="department">
		加工部門
	</h3>
	<p>
		加工工場では、鋳造で作られた製品を、実際に機械に使えるような正確な部品に仕上げる仕事をしています。鋳造によってできた製品は、表面がぼこぼこしていたり、寸法が大まかだったりして、そのままでは使えません。また、ネジの穴なども開いていないため、機械を使って加工する必要があります。<br>
		加工工場では、鋳造された製品を削り、磨き、検査して、精密で信頼できる部品に仕上げています。ものづくりにおいて、なくてはならない大切な工程です。<br> <br>
		加工の作業工程<br>
		1.切削工程：機械に指示を送って操作し、鋳造でできた材料を削ったり、穴を開けたりして、設計図通りの形や大きさに仕上げる作業です。たとえば、平らにすべき部分を正確に削ったり、角を滑らかに整えたりします。
	</p>
	<div class="images">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<p>
		2.研磨工程:機械を使わずに自分の手で、切削だけでは出せないような細かい寸法を調整したり、表面を磨いてきれいに仕上げたりする工程です。見た目を整えるだけでなく、部品同士をぴったりと組み合わせるためにも必要な作業です。<br>
		3.検査工程:ノギスや三次元測定機やバランスマシンなどの測定工具を使って、完成した部品が設計図通りの寸法や形状になっているかを確認します。不具合がないかをしっかりチェックすることで、安全で正確な製品を送り出すことができます。
	</p>
	<div class="images">
		<img src="introduce10.jpg" class="scene" alt="">
	</div>
	<h3>入社後</h3>
	<p>
		入社後は、まず一つの工程から始めます。半年ほどで道具や作業の名前は覚えられますが、仕事を任されるには2～3年、全体を理解して自分の判断で動けるようになるには5～7年かかります。すぐに成長を実感するのは難しいかもしれませんが、粘り強く学び続けることで、必ず力になります。<br>
		私たちの仕事は、学校ではなかなか学べない世界なので、スタートラインはみんな同じです。最初は不安でも、真面目に取り組むあなたなら、必ず成長できるでしょう。
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce11.jpg" alt="">
				</div>
				<hgroup>
					<h3>建設大型機械のトランスミッショントルクコンバーター部品</h3>
					<p>
						ショベルカーなどのエンジンとトランスミッションの間でエンジンの回転力をミッションに伝達する役割を担う一部の部品です。
					</p>
				</hgroup>
			</div>
			<p>建設大型機械のトランスミッショントルクコンバーター部品</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce12.jpg" alt="">
				</div>
				<hgroup>
					<h3>ミニチュア銅鐸(どうたく)</h3>
					<p>
						伝統工芸を再現した鋳造技術のミニチュア模型です。
					</p>
				</hgroup>
			</div>
			<p>ミニチュア銅鐸(どうたく)</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>13</span>億<span>8000</span>万円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>45.1</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>11.3</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num">月平均<span>11</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>117</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1962</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>9.3</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 0.01, 'caption' => '所得者なし', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 75, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 12, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 18, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 12, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 20, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 12, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 25, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 90, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 10, 'caption' => '自転車', 'color' => '#D04255'],
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
					<li>銅合金</li>
					<li>アルミニウム軽合金製品の鋳造、加工</li>
					<li>鉄鋳物製品の製造、加工</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>増田公男</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>87名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.802355936288!2d138.12601207631053!3d36.36556597237416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601da1b7147d3687%3A0xdf53886df4281da9!2z44Kt44Oj44K544OG44KvIOacrOekvuW3peWgtA!5e0!3m2!1sja!2sjp!4v1751007208892!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-49-3737</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://castec.jp/" target="<?= $co['slug'] ?>">https://castec.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">南波武男</span></figcaption>
		</figure>
		<p>
			鋳造には、4,000年以上の歴史があります。砂や粘土で型を作り、そこに溶かした金属を流し込んで、冷やして固め、取り出して整える。この手順は、時代が変わっても変わりません。鋳造は、人々の暮らしに必要な部品や製品をつくる仕事。今もこれからも、なくてはならない仕事の一つです。<br>
			私たちの会社では、この長い歴史を大切にしながら、現代に合わせた挑戦も続けています。たとえば、新幹線や電子医療機器に使われる部品など、最先端の分野に使われる鋳物部品を作る技術を開拓していくことです。みんなが毎日使っているスマホや電車、自動車の中にも、私たちが作った部品が使われているかもしれません。<br>
			社会の役に立つと同時に、会社の技術力や信頼も高めていきたいと考えています。<br>
			私たちと一緒に、ものづくりの世界で力を発揮してみませんか。
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
				その他の日時等も随時受け付けております。
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
					<dd>砂型鋳造部門、加工部門</dd>
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
					<dd>なし</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒386-1605<br>
						長野県小県郡青木村大字夫神1282
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>青木バス停駅から徒歩で10分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋内禁煙<br>
						屋外での喫煙を許可している。
					</dd>
				</div>
				<div>
					<dt>マイカー通勤</dt>
					<dd>可</dd>
				</div>
				<div>
					<dt>転勤の可能性</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>必要な知識・技能等</dt>
					<dd>あれば尚可<br>
						普通自動車免許（MTだとなお良し）<br>
						フォークリフト・クレーンの運転資格（入社後の取得可）
					</dd>
				</div>
			</dl>
			<h3>賃金・手当</h3>
			<dl>
				<div>
					<dt>賃金形態</dt>
					<dd>日給月給制</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>20日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>月額189,000円</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>職場手当(4000円)</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>職務手当(133000円)</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当③</dt>
					<dd>物価高手当(8000円)</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>月額189,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>皆勤手当(4000円)</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>資格手当(1000円)</dd>
				</div>
				<div>
					<dt>特別に支払われる手当③</dt>
					<dd>溶解手当(5000円)</dd>
				</div>
				<div>
					<dt>特別に支払われる手当④</dt>
					<dd>扶養手当(3700円)</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>月末</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>実費支給（上限なし）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり（6%）</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回または5.3か月分</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時00分〜17時00分
					</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>土、日、その他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>
						祝日においては概ね休日となっているが、週中日の連続性の無い祝日は出勤となる。<br>
						年末年始、お盆、ゴールデンウィークなど社会風習的な連休は全従業員が取得できるように計画されている。
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
					<dd>あり（勤続年数3年以上）</dd>
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
					<dd>あり(75歳まで)</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>入居可能住宅</dt>
					<dd>-</dd>
				</div>
			</dl>
		</div>
		<div class="content career">
			<h3>青少年雇用情報</h3>
			<dl>
				<div>
					<dt>直近3年間の新卒者等採用者数</dt>
					<dd>前年度:1人、2年度前：1人、3年度前：0人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:1人、2年度前：1人、3年度前：0人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						11.3年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>45.1歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>外部の研修機関を利用し、2日程度の社会常識および作業安全教育を行う。</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり<br>
						希望者に対し、専門知識の学習機会や外部専門機関（職業能力開発協会など）の研修参加機会の提供、資格取得費用の補助。
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
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>11時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>9.3日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：-人、男性：-人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>-名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>5%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>製造業</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>2名</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
					    2025年7月28日（月）8時30分～<br>
						2025年8月5日（火）8時30分～<br>
						その他の日時等も随時受け付けております。
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
					<dd>面接後10日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						管理部　取締役管理部長<br>
						長澤　隆弘
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