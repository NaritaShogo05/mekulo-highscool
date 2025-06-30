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
$description = '荒井造園は、長野県坂城町を拠点に活動する若い職人チームの造園会社です。剪定や植栽、エクステリア工事を通じて、庭を快適な住空間としてデザイン。地域密着で、自然との調和を大切にした庭づくりを行っています。';//メタディスクリプションの追加 
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
<body class="highschool arai-zouen">
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
		<li class="jobs"><a href="#recruitment_requirements">募集要項</a></li>
	</ol>
</section>
<div class="about-com content" id="company_gallery">
	<h2>
		空間をつくる仕事
	</h2>
	<p>
	    荒井造園は、お庭づくりを通して、地域の人たちが快適に過ごせる空間をつくっている会社です。<br>
		庭木をきれいに整える「剪定」や、木を植える「植栽」、家の周りを整える「エクステリア工事」など、幅広い分野で活躍しています。<br>
		私たちは、職人３人という若いチームです。昔ながらの「見て覚えろ」ではなく、丁寧に教えることを大切にしています。<br>
		「庭師になりたい！」「かっこいい庭をつくりたい！」<br>
		そんなあなたは、ぜひ私たちの仕事をのぞいてみてください。
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
	
	<h3>取材担当者からのポイント！</h3>
	
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
	    職人が3人という少人数の会社で、荒井社長も現場で職人として働いています。<br>笑顔がとても素敵な社長で、取材のときも温かく対応してくれたのが印象的でした。
	</p>
    <p>    
	    少人数だからこそ、一人ひとりの存在がとても大きいです。どんどん新しい仕事を教えてもらえるので、早い段階から「プロ」の職人として成長することができます。<br>実際、入社2年目の若い職人さんも、現場でバリバリ活躍している頼もしい姿を見ることができました。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		若くて元気な会社！
	</h3>
	<p>
	    荒井造園は、坂城町にある造園会社です。<br>
        現在、職人は3人。若いチームで、元気いっぱいに活動しています！
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
		<img src="gallery3.jpg" class="scene" alt="">
	</div>
	<p>
	    下の写真は、実際に手掛けた玄関まわりのビフォーアフター。
	</p>
	<div class="images">
	   <img src="contents09.jpg" class="scene" alt="">
	   <img src="contents10.jpg" class="scene" alt="">
	</div>
	<p>
	    植物があることで、ずいぶん印象が変わりますよね。<br>
        私たちは、庭も家と同じくらい大切な「快適な住空間の一部」だと考えています。<br>
        家族が休日にリラックスできる場所。帰ってきたときに、ほっと迎えてくれる場所。そんな空間づくりを大切にしています。
    </p>
	<h3>
		地域密着！綺麗なお庭を保つ
	</h3>
	<p>
	    地域密着の造園会社として、坂城町が管理している団地やアパート、温泉などの木の管理から街路樹の剪定まで、幅広い業務を手掛けています。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
	   当社でいちばん多い仕事は、個人宅の庭木の剪定です。剪定とは、木の枝を切って美しく整えるもので、1年中綺麗なお庭を保つためには欠かせません。<br>
       人と同じように、木にもそれぞれ個性があります。同じ種類の木でも、枝の伸び方や育ち方は全く違うので、まずはよく観察して「木の性格」を知ることが大切です。
	</p>
	<div class="images">
		<img src="gallery03.jpg" class="scene" alt="">
		<img src="contents05.jpg" class="scene" alt="">
	</div>
	<p>
	   お庭の広さや木の状態によって異なりますが、１日に2～３件のお庭を回ることもあれば、ひとつのお庭に2～3日かけてじっくり作業することもあります。
	</p>
	<div class="images">
		<img src="first-view.jpg" class="scene" alt="">
		<img src="contents08.jpg" class="scene" alt="">
	</div>
	<p>
	   伸びた枝をすべて取り払うような剪定は、入社後すぐに挑戦することができます。
       しかし松の剪定はとても難しく、1年ほどかけてようやく形を整えることができるでしょう。
	</p>
	<div class="images">
		<img src="contents06.jpg" class="scene" alt="">
	</div>
	<p>
		庭は住む人だけでなく、そこで育つ木々や小鳥、通りを歩く人にとっても大切な環境です。
	</p>
	<div class="images">
		<img src="contents11.jpg" class="scene" alt="">
	</div>
	<p>
	    木々が元気に育ち、小鳥が安心して羽を休める――そんな自然との調和も、私たちの庭づくりに欠かせないテーマです。
	</p>
	<h3>
		エクステリア工事や高所作業も！
	</h3>
	<p>
	    私たちは庭づくりだけでなく、「エクステリア工事」や「特殊高所剪定伐採」と呼ばれる高いところでの伐採にも取り組んでいます。<br>
       『エクステリア工事』は、家のまわりをオシャレで使いやすくする工事です。<br>
        たとえば、玄関の横に木を植えたり、カーポートを設置したり。見た目を良くするだけではなく、暮らしやすくすることを大切にしています。
	</p>
	<div class="images">
		<img src="zumen.jpg" class="scene" alt="">
		<img src="contents12.jpg" class="scene" alt="">
	</div>
	<p>
		アスファルト舗装や水道設備などは協力会社に依頼しますが、人工芝やフェンスの設置、玄関のアプローチづくりは、自社で設計から工事までを行っています。
	</p>
	<div class="images">
		<img src="ishi2.jpg" class="scene" alt="">
		<img src="ishi3.jpg" class="scene" alt="">
	</div>
	<p>
		上田市や佐久市、軽井沢など、さまざまなエリアで作業できるのが特徴です。
	</p>
	<div class="images">
		<img src="contents13.jpg" class="scene" alt="">
	</div>
	<p>
		『特殊高所剪定伐採』は、急斜面や狭い場所、高所などで木を伐採する技術です。倒れそうになっている木や、不要になった木を取り除くために行うもので、1年に1～2回ほどの珍しい仕事です。<br>
         広い場所で行う一般的な伐採とは違い、ロープワークやクレーンを使いながら行うダイナミックな作業が特徴です。
	</p>
	<div class="images">
		<img src="gallery4.jpg" class="scene" alt="">
	</div>
	<h3>
		エクステリア工事や高所作業も！
	</h3>
	<p>
		荒井造園の職人たちは、「ニッカポッカ」という作業ズボンと、「足袋」を履いて作業しています。<br>
        ニッカポッカは、裾が絞られたゆったりしたシルエットが特徴。高所や不安定な足場でもバランスをとりやすく、風の強さを感じながら、いち早く危険を察知するための工夫でもあります。
	</p>
	<div class="images">
		<img src="contents15.jpg" class="scene" alt="">
	</div>
	<p>
	    足袋は底が薄く、つま先に力を入れやすいので、細かいバランスを取る作業にぴったりです。軽くて通気性も良いので、夏場でも蒸れにくいんです。
	</p>
	<div class="images">
		<img src="contents16.jpg" class="scene" alt="">
	</div>
	<p>
		腰道具は、職人にとって欠かせない相棒。のこぎりや剪定バサミなど、よく使う道具を身につけて、すぐに使えるようにしています。
	</p>
	<div class="images">
		<img src="contents17.jpg" class="scene" alt="">
	</div>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="contents05.jpg" alt="">
				</div>
				<hgroup>
					<h3>剪定</h3>
					<p>
					    当社で一番多い仕事です。木の枝を切って美しく整えるもので、1年中綺麗なお庭を保つためには欠かせません。
					</p>
				</hgroup>
			</div>
			<p>剪定</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="contents13.jpg" alt="">
				</div>
				<hgroup>
					<h3>庭づくり</h3>
					<p>
					    家族が休日にリラックスできる場所。帰ってきたときに、ほっと迎えてくれる場所。そんな空間づくりを大切にしています。
					</p>
				</hgroup>
			</div>
			<p>庭づくり</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="contents12.jpg" alt="">
				</div>
				<hgroup>
					<h3>エクステリア</h3>
					<p>
					    人工芝や玄関アプローチ、駐車場のスペースづくりなども行なっています。
					</p>
				</hgroup>
			</div>
			<p>エクステリア</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="gallery4.jpg" alt="">
				</div>
				<hgroup>
					<h3>特殊高所剪定伐採</h3>
					<p>
					    急斜面や狭い場所、高所などで木を伐採することもあります。広い場所で行う一般的な伐採とは違い、ロープワークやクレーンを使いながら安全かつ正確に作業します。
					</p>
				</hgroup>
			</div>
			<p>特殊高所剪定伐採</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>5,000</span>万円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>44</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>20</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>0</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>80</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1975</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>6</span>日</p>
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
						[ 'value' => 50, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 50, 'caption' => '中途', 'color' => '#F34444'],
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
					[ 'value' => 10, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 10, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 10, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 10, 'caption' => '60代', 'color' => '#008C4A'],
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
					<li>造園</li>
					<li>植栽</li>
					<li>管理工事</li>
					<li>掃除（庭木の剪定等）</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>荒井宏紀</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>4名（パート・アルバイト含む）（2025年4月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8542.690453679188!2d138.15858933340482!3d36.46998040221632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d99540fff3ebd%3A0x78fb03bf14ba4c60!2z77yI5qCq77yJ6I2S5LqV6YCg5ZyS!5e0!3m2!1sja!2sjp!4v1747291006606!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-82-3938</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://www.arai-zouen.com/" target="<?= $co['slug'] ?>">https://www.arai-zouen.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">荒井宏紀</span></figcaption>
		</figure>
		<p>
		    荒井造園で大切にしているのは、「お客様に喜んでもらうこと」「働く人が気持ちよく働けること」です。<br>
			庭は、家に帰ったときに最初に迎えてくれる大切な空間です。私たちの仕事は、お客様の暮らしを支えるもの。だからこそ、一つひとつの現場に丁寧に向き合っています。
		</p>
		<p>
		    私は、会社を大きくすることより、一人ひとりが安心して長く働ける職場でありたいと考えています。社員の声を大切にし、みんなが楽しく前向きに働けることを何より大事にしています。<br>
			「庭師になりたい！」「かっこいい庭をつくりたい！」<br>
            そんな方はぜひ一度、私たちの仕事をのぞいてみてください。お客様や地域のみなさんに喜ばれる庭づくりをしてみませんか？ 
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
<section class="requirements" id="recruitment_requirements">
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
					<dd>造園</dd>
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
					<dd>〒389-0601<br>
					長野県更科群坂城町坂城236-1</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>-</dd>
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
					<dd>日給</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>23日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>184,000円～</dd>
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
					<dd>184,000円</dd>
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
					<dd>毎月25日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（上限なし）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時00分〜17時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>日曜日、その他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年末年始、GW、お盆、など 天候により休日になることもあります。</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
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
					<dd>なし</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>なし</dd>
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
					<dd>
						20年<br>
						※創業以降の実績
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>44歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						〇資格取得支援<br>
						仕事に必要な資格について、取得費用を全額補助いたします。
						〇各種講習会への参加
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>0時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>6日</dd>
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
					<dd>25%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>建設業</dd>
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
					    2025年7月28日（月）～8月1日（金）の中で要相談 13時00分～<br>
						2025年8月4日（月）～8月8日（金）の中で要相談 13時00分～<br>
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後１０日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						代表取締役社長<br>
						荒井宏紀
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
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
