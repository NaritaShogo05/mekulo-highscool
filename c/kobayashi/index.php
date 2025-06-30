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
$description = '株式会社KOBAYASHIは、長野県千曲市を拠点に、安全・丁寧・正確な足場工事を提供。住宅からビルまで幅広い現場に対応し、若手職人の育成にも本気で取り組んでいます。';//メタディスクリプションの追加 
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
		信頼が、次の仕事につながる
	</h2>
	<p>
		私たちは、千曲市を中心に「足場工事」を行なっています。<br>
		足場は、大工さんや塗装屋さんなどの職人さんたちが、安全に作業をするための“土台”です。高い場所で安心して作業ができるのは、しっかりとした足場があるからです。<br>
		足場工事と聞くと、「力仕事」のイメージが強いかもしれません。確かに、足場に使う資材は1枚15キロほどあり、ときにはそれを何枚も運びます。<br>
		でも、それだけではありません。<br>
		足場は、そこで作業する数多くの職人さんの命を預かる土台。「まあいいか」「このくらい大丈夫でしょ」という気のゆるみが、大きな事故につながってしまうこともあります。<br>
		だからこそ、私たちは丁寧に、安全に、正確に組み上げることを大切にしています。現場でしっかり仕事をすれば、「また頼むよ」「次もお願いね」と声をかけてもらえる。そんな信頼の積み重ねが、私たちの原動力です。<br>
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
	<h4 class="point">優しいだけじゃ、一人前になれない</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		取材を通して感じたのは、「厳しい＝怖い」ではないということです。<br>
		みなさんは、サッカーの全国大会や甲子園を見たことがありますか？強豪校の試合や練習の様子では、指示が飛び交い、大きな声を出すのが当たり前。一人ひとりが自分の役割を理解し、全力で練習に取り組んでいます。<br>
		でも、休憩中は仲間同士で笑い合うような、ほっとできる時間もちゃんとある。そして、叱られることがあっても、それは決して理不尽なものではなく、成長のために必要なものです。<br>
		KOBAYASHIの現場も、まさにそんな雰囲気でした。
		最初はきつく感じるかもしれません。でもそれは、本気で教えてくれるからこそ。「ゆるくて続けやすい」会社ではなく、「厳しいけど、自分を鍛えられる」会社です。<br>
		信頼できる先輩と一緒に、どんどん成長していきましょう！
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		住宅からビルまで！さまざまな現場で活躍中
	</h3>
	<p>
		KOBAYASHIは長野県千曲市を拠点に、住宅やアパートなどの足場工事を行っている会社です。<br>
		足場は、建物を建てたり、塗装をしたり、外壁を直したりするときに欠かせないもの。みなさんも、一度は目にしたことがあると思います。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<p>
		私たちが手がける現場の多くは住宅です。新築工事では何もない土地に足場を組むこともあれば、リフォーム工事ではすでに建っている家のまわりに足場を組むこともあります。<br>
		ときには、6階建ての大きな建物を任されることも。
	</p>
	<div class="images">
		<img src="introduce2.jpg" class="scene" alt="">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<p>
		現在、8人の職人が2班に分かれて現場を回っています。
	</p>
	<h3>
		声を掛け合いながら、安全第一で
	</h3>
	<p>
		KOBAYASHIの現場では、自然と大きな声が飛び交います。<br>
		「サブロクいくよー！」「持ちましたー！」
		と、まるで部活のようなテンポと掛け声で、チーム全員が息を合わせて動きます。
	</p>
	<div class="images grid-img">
		<img src="firstview.jpg" class="scene" alt="">
		<img src="second.jpg" class="scene" alt="">
		<img src="introduce6.jpg" class="scene" alt="">
		<img src="introduce7.jpg" class="scene" alt="">
	</div>
	<p>
		ただ速ければいいというわけではなく、危険がないか、まわりの足場や仲間の様子を気にしながら作業を進めていきます。<br>
		夏の暑い日には「顔赤いけど大丈夫か？無理するなよ」と仲間を気遣う声が自然と出るのも、現場の空気の良さを物語っています。<br>
		また、安全教育のオンライン講習も定期的に受けながら、「人の命を守る足場」を作っているという自覚をもって、日々の仕事に向き合っています。
	</p>
	<div class="images">
		<img src="introduce9.jpg" class="scene" alt="">
		<img src="introduce10.jpg" class="scene" alt="">
	</div>
	<h3>
		本気で育てる現場
	</h3>
	<p>
		小林社長は18歳でこの仕事を始め、21歳で独立。25年かけて、今のKOBAYASHIをつくり上げてきました。
	</p>
	<div class="images">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<p>
		「厳しいと思われるかもしれないが、本気で教える。どこへ行っても通用するような一人前に育てたい」
		そう話す姿からは、現場への真剣な想いと、人を育てる覚悟が伝わってきます。<br>
		実際、現場は決してラクな仕事ではありません。夏は暑いし冬は寒い。重い資材もあるし、集中力も必要。それでも、誰かが“本気で向き合ってくれる場所”は、そう多くありません。<br>
		挑戦したい人、本気で自分を鍛えたい人。その初めの一歩を、KOBAYASHIで踏み出してみませんか？
	</p>
	<div class="images">
		<img src="introduce11.jpg" class="scene" alt="">
		<img src="introduce12.jpg" class="scene" alt="">
	</div>
	<h3>
		10年かけて一人前へ
	</h3>
	<p>
		入社したら、まずは足場に使う資材の名前や使い方を覚えるところから始めます。
	</p>
	<div class="images grid-img">
		<img src="introduce13.jpg" class="scene" alt="">
		<img src="introduce14.jpg" class="scene" alt="">
		<img src="introduce15.jpg" class="scene" alt="">
	</div>
	<p>
		現場で使うパーツは、まるでプラモデルを組み立てるような感覚で覚えていけます。2～3か月もすれば、ある程度は組み上げられるようになります。<br>
		実際、3か月前にインドネシアから来た仲間も、どんどん技術を身につけて活躍しています。
	</p>
	<div class="images">
		<img src="introduce16.jpg" class="scene" alt="">
	</div>
	<p>
		基本の作業に慣れたら、お客様との打ち合わせや現場のまとめ役にも挑戦できるようになります。時間をかけてじっくり経験を積んでいくことで、10年後には現場を任される“一人前の職人”になれます。
	</p>
</section>
<?php /*
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="seikan.jpg" alt="">
				</div>
				<hgroup>
					<h3>組んだ足場の写真何種類か</h3>
					<p>
						低温で一時的に溶接する「仮付け溶接」のあとに「本付け溶接」を行い、立体的な形を作っていきます。図面をもとに精密に仕上げる技術が求められます。
					</p>
				</hgroup>
			</div>
			<p>製缶溶接</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="gomen.jpg" alt="">
				</div>
				<hgroup>
					<h3>五面加工</h3>
					<p>
						プログラムを書いて、指示通りに機械を動かします。加工素材の付け替えを一切行わずに、下の面以外の五面を全て加工できるのが特徴です。
					</p>
				</hgroup>
			</div>
			<p>五面加工</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="anaake.jpg" alt="">
				</div>
				<hgroup>
					<h3>穴あけ加工</h3>
					<p>
						ガバリという治具を使って、ポンチで印をつけてからドリルで穴を開けます。ラジアルボール盤という機械を使っています。
					</p>
				</hgroup>
			</div>
			<p>穴あけ加工</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="fukitsuke.jpg" alt="">
				</div>
				<hgroup>
					<h3>吹き付け塗装</h3>
					<p>
						塗料に硬化剤を混ぜて、機械で霧状にして吹き付けながら塗装します。普段目につかない部分でも、綺麗に仕上げることを大切にしています。
					</p>
				</hgroup>
			</div>
			<p>吹き付け塗装</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="robot.jpg" alt="">
				</div>
				<hgroup>
					<h3>ロボット溶接</h3>
					<p>
						溶接の一部はロボットが担当しています。手作業ほど細かい調整はできませんが、同じ製品を複数作る場合はとても役立ちます。
					</p>
				</hgroup>
			</div>
			<p>ロボット溶接</p>
		</li>
	</ul>
</section>
*/ ?>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年3月現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>1</span>億<span>3000</span>万円</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>27</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>5</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>16</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>105</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2011</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>5</span>日</p>
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
						[ 'value' => 0.01, 'caption' => '', 'color' => '#2378C7'],
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
					[ 'value' => 50, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 0.01, 'caption' => '', 'color' => '#00AEEF'],
					[ 'value' => 20, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 10, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 0.01, 'caption' => '', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 60, 'caption' => "車・バイク60%", 'color' => '#E06A3A'],
						[ 'value' => 40, 'caption' => '自転車40%', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 60, 'caption' => "長野県内60%", 'color' => '#B2CF3E'],
							[ 'value' => 40, 'caption' => '県外40%', 'color' => '#FEE929'],
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
					<li>鳶工</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>小林旭洋</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>10名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3205.0842379836!2d138.14449917665513!3d36.5520817723189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d9c98c45aa277%3A0x5fdac123efd51fbd!2z77yI5qCq77yJ77yr77yv77yi77yh77y577yh77yz77yo77yp!5e0!3m2!1sja!2sjp!4v1750747249559!5m2!1sja!2sjp"
				style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-273-2512</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://www.kobayashi-k-k.com" target="<?= $co['slug'] ?>">https://www.kobayashi-k-k.com</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="shacyo.jpg" alt="">
			<figcaption><span class="name">小林旭洋</span></figcaption>
		</figure>
		<p>
			KOBAYASHIに興味を持っていただき、ありがとうございます！<br>
			私たちはこれから、20人規模の会社へと成長していきたいと考えています。<br>
			最近は、優しく丁寧に教える会社も増えましたが、私はあえて“厳しさ”も大切にしたいと思っています。なぜなら、本気でやる人間にしか、本当の力はつかないからです。<br>
			だからこそ、目標のあるガツガツしてる人が来てくれたらうれしい。<br>
			「稼ぎたい！」「いい車に乗りたい！」――そんな気持ち、大歓迎！<br>
			本気でぶつかってきてくれる人に、私たちは本気で仕事を教えます。
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
<section class="g requirements" 
id="recruitment_requirements">
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
					<dd>鳶職</dd>
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
					<dd>〒3870001<br>
					長野県千曲市雨宮2438-1</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>屋代高校前駅から徒歩で20分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋内禁煙<br>
					喫煙室設置</dd>
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
					<dd>その他（日給月給）</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>22日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>円</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>10,000～15,000円/日</dd>
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
					<dd></dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>円</dd>
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
					<dd>固定（月末）</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd></dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回<br>
						（賞与額300000～900000円）
					</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時00分〜18時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>あり　（３６協定における特別条項あり）<br>
						夏期は日が長く、繁忙期であるため、残業が多くなります。
					</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>日・祝</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>
						-
					</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>雇用保険、労災保険、健康保険、厚生年金</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数10年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>-</dd>
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
					<dd>前年度:-人、2年度前：-人、3年度前：-人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:-人、2年度前：-人、3年度前：-人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:4人、2年度前：3人、3年度前：-人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:-人、2年度前：-人、3年度前：-人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>5年</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>27歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>作業に必要な教育及び資格の取得の研修</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>あり<br>
						作業に必要な教育及び資格の取得費用は会社で負担します
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>あり</dd>
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
					<dd>10時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>5日</dd>
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
					<dd>-%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>-%</dd>
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
					<dd>-人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						2025年7月29日（火）14時00分～<br>
						2025年8月5日（火）14時00分～
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
					<dd>代表取締役<br>小林旭洋
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
