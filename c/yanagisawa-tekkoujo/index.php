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
$description = '柳澤鐵工所は、最大14メートルにもなる大型の鉄骨をオーダーメイドで製作しています。体育館や工場などの柱や骨組みに使われ、地域の建物を支える重要な役割を担います。設計図をもとに加工・溶接・検査・塗装を行い、現場での設置も担当。複雑な溶接技術が自慢で、初心者も資格なしで挑戦可能です。ものづくりに興味がある方を歓迎します。';//メタディスクリプションの追加 
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
		最大14メートル！バスより長い鉄骨も
	</h2>
	<p>
		私たちの会社では、建物を支える大きな鉄骨を作っています。<br>
		鉄骨はとても重く、クレーンを使わないと動かせないほどです。長さは最大14メートルにもなり、大型バスより長いものもあります。<br>
        鉄骨は、建物の基本となる大切な部品です。地元の建物を支える鉄骨を、一緒に作ってみませんか？

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
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		鉄骨を扱う仕事なので、とにかくスケールが大きくて迫力があります。しかも鉄骨はすべてオーダーメイド。毎回違うものを作るから、同じ作業の繰り返しはありません。<br>
        取材を通して感じたのは、みなさんが自分の仕事に誇りを持っているということ。職人さんたちの見た目はちょっぴりコワモテですが、「これはこうやるんだよ」「ここがポイントなんだ」と、嬉しそうに話してくれる姿が印象的でした。そんな先輩たちと働ける環境なら、きっと自然と技術も身につくはずです。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<p>
		柳澤鐵工所では、建物を支える大きな鉄骨を作っています。鉄骨は、体育館や工場の柱、屋根の骨組みなど、さまざまなところで使われています。体育館に使われている柱は、みなさんも見たことがあると思います。
	</p>
	<div class="images">
		<img src="taiikukan.jpg" class="scene" alt="">
	</div>
	<p>
		私たちが作っている鉄骨は、すべてがオーダーメイド。全く同じ形の鉄骨はほとんどありません。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
	</div>
	<p>
		鉄骨を作るときは、まずお客様からもらった設計図をもとに、鉄骨の詳しい図面を作成します。その後、加工・組み立て・溶接・検査・塗装といった工程を経て、建物に使われる鉄骨が完成します。
	</p>
	<div class="images grid-img">
		<img src="contents02.jpg" class="scene" alt="">
		<img src="contents03.jpg" class="scene" alt="">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<p>
		現場での設置も担当しており、地域に残る建築に関われる仕事です。
	</p>
	<div class="images">
		<img src="kuusatu.jpg" class="scene" alt="">
	</div>
	<h3>
		複雑な溶接が得意
	</h3>
	<p>
		私たちの作る鉄骨は、ビルや工場、学校など、さまざまな建物で使われています。<br>
		作っている鉄骨は、ただ大きいだけではありません！柳澤鐵工所は、『溶接』が得意な会社。まっすぐな部分はもちろん、角度のついた部分や複雑な形の鉄骨も、しっかりと溶接できる技術があります。
	</p>
	<div class="images grid-img">
		<img src="contents05.jpg" class="scene" alt="">
		<img src="contents06.jpg" class="scene" alt="">
		<img src="contents07.jpg" class="scene" alt="">
	</div>
	<p>
		ものづくりに興味がある人、いろんな技術を身につけてみたい人をお待ちしています！資格が無くても大丈夫！一緒に建物を支える仕事をしてみませんか？
	</p>
</section>
<section class="content" id="business">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="kurokawajyokyo.jpg" alt="">
				</div>
				<hgroup>
					<h3>黒皮除去</h3>
					<p>
						鋼の製造工程中には、酸化皮膜と呼ばれる「黒皮」が表面に発生します。この「黒皮」を除去することで、錆止め塗料のノリが良くなり、凹凸もなくなるため表面が美しく仕上がります。
					</p>
				</hgroup>
			</div>
			<p>黒皮除去</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="yousetu.jpg" alt="">
				</div>
				<hgroup>
					<h3>溶接</h3>
					<p>
						開先（溝）を設けて鋼材同士を繋ぎ合わせる「突き合わせ溶接」や、開先を設けない「隅肉溶接」など、溶接ごとの特徴や長所と短所を抑えた上で、設計図面に沿った適切な溶接加工を行っています。
					</p>
				</hgroup>
			</div>
			<p>溶接</p>
		</li>
		
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>7</span>億円</p>
		<p class="year"></p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>51.4</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>11</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>30</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>101</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1948</span>年</p>
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
						[ 'value' => 0.01, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 100, 'caption' => '100%', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 10, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 90, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 80, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 20, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 0.1, 'caption' => "", 'color' => '#808080'],
					[ 'value' => 0.1, 'caption' => '', 'color' => '#0073B7'],
					[ 'value' => 20, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 25, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 35, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 15, 'caption' => '60代', 'color' => '#008C4A'],
					[ 'value' => 10, 'caption' => '70代', 'color' => '#007A41'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 95, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 5, 'caption' => "徒歩", 'color' => '#009F6B'],
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
					<li>鉄骨工事一式</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>柳澤章</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>20名（男性 16名／女性 4名、役員、パート・アルバイト含む）（2025年2月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3217.4144269235026!2d138.4700250762507!3d36.253716298313456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dcb50a2c9bbd1%3A0xf198e51de647ff60!2z77yI5qCq77yJ5p-z5r6k6ZC15bel5omA!5e0!3m2!1sja!2sjp!4v1750378583431!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0267-62-1152</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://yanatetu.com/" target="<?= $co['slug'] ?>">https://yanatetu.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="yanagisawa.jpg" alt="">
			<figcaption><span class="name">柳澤章</span></figcaption>
		</figure>
		<p>
			私たちの仕事は一見地味かもしれませんが、暮らしを支えるとても大切な仕事です。どんなに技術が進んでも、手でしかできない作業があります。だからこそ、手先が器用で、考える力のある人が必要なんです。
		</p>
		<p>
            難しいことは言いません。中学や高校で習う数学、たとえば円の面積や三角関数がわかると役立ちますが、計算が苦手でも大丈夫。大事なのは、覚えようとする姿勢です。<br>
        </p>
		<p>
			それから、何よりも大切なのは人柄です。ちゃんとあいさつができて、真面目に仕事に向き合える人。周りの人のことを考えて動ける人。器用さも大切ですが、性格の良さや協調性がなければ、どんな仕事もうまくいきません。<br>
		</p>
		<p>
			この仕事、向いている人は長く続きます。でも、「思っていたのと違う」とすぐに辞めてしまう人もいます。そうならないように、私たちは仕事の中身も、会社の雰囲気も、できるだけありのままを伝えたいと思っています。<br>
            みなさんは、初めてスマホを使ったときや新しいゲームを始めたとき、「難しかったらどうしよう」と思ったことがありますか？「どんなことができるのかな」とわくわくした人が多いのではないでしょうか。<br>
			簡単すぎるゲームが物足りないのと同じで、少しずつ挑戦しながらレベルアップしていくのが楽しいですよね。
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
					<img src="<?= $company_base ?>first-view.jpg" alt="">
					<figcaption>鉄骨製造職</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_sekkei/">
				<figure>
					<img src="job_sekkei/firstview.jpg" alt="">
					<figcaption>鉄骨設計職</figcaption>
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
