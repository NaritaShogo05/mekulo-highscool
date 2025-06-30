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
$description = '';//メタディスクリプションの追加
$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/';
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
		"item": "https://works.mekulo.jp/highschool/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/"
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
		目指せ！金属加工マスター
	</h2>
	<p>
		ミヤマ製作所は、精度を超えた金属加工のプロ集団です。<br>
		特に、複数の部品を組み合わせたとき、ぴったり合う部品加工ができる ことで、お客様から「他の会社だとできなかったことが、ミヤマさんだとできる」と指名されることが 多い会社です。<br>
		どんな仕事でも、技術は一朝一夕で身に付くものではありません。職人技はなおさらです。しかし、努力して身に着けた技術は一生モノです。<br>
		ミヤマ製作所では、手作業で加工をおこなう汎用工作機械と、プログラムで動くマシニングの両方を使って、精度の高い製品を作っています。<br>
		誰にも負けない金属加工職人に挑戦しませんか！
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
		<img src=<?= $highschool_base . WRITER['shomura']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['shomura']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p style="min-height: 160px;">
		ミヤマ製作所の山田社長 は、見かけによらずエネルギッシュで、思ったことをまっすぐ伝え、すぐに実行する人です。<br>
		「もっとカッコいい作業着にしないと、若い子は入ってこないよ」って言われたら、すぐに新しい作業着を作っちゃう。それだけじゃなく、オリジナルのTシャツまで作っちゃう、柔軟な考え方と、遊び心を持っている社長です。<br>
		製品を加工したての状態では、バリと呼ばれるギザギザがあり、製品として納品するためには、それを取り除く作業が必須です。納期に間に合わせるために、何百個っていうバリ取りを徹夜でやり遂げ、「やっと納品できた！」って、笑って話すような社長です。<br>
		ミヤマ製作所は、技術者が集まるプロ集団だから、頑張ればすごい技術を身につけることができます。技術を身につけ、思いっきり発揮してください！
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<p>
		ミヤマ製作所は、長野県上田市の住宅街にある、金属加工のスペシャリスト集団です。初めて行く人は、「え、こんなところに工場があるの？」って思うかもしれません。でも、見た目とは裏腹に、すごい技術を持った会社です。<br>
		ミヤマ製作所の強みは、お客さんが求める「ピッタリの精度 」で金属を加工できること。二つの部品を組み合わせた時に、スっとはまって一体化するような加工ができます。<br>
		その精度を保証するために、最新の「三次元測定機」っていう機械を導入して、検査場も作りました。この機械のおかげで、今まで以上に正確な金属加工ができるようになっただけでなく、三次元測定のサービスも始めました。<br>
		ミヤマ製作所は、いろんな種類の部品を、少ない数でも作ります。例えば、試作品の部品とか、ロボットの部品とか、お客さんのいろんな要望に柔軟に対応しています。
	</p>
	<h3>山田社長の紹介</h3>
	<p>
		つまり、ミヤマ製作所は、住宅街にひっそりとあるけど、高度な技術 と柔軟性を持った、金属加工のプロ集団です！
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
		<img src="introduce2.jpg" class="scene" alt="">
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
					<h3>NCフライス加工</h3>
					<p>
						いわゆる角物と言われる金属の加工をおこないます。最大1300×700×600㎜（幅×奥行×高さ）の金属の加工ができます。
					</p>
				</hgroup>
			</div>
			<p>NCフライス加工</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>NC旋盤加工</h3>
					<p>
						直径200φまでの金属加工をおこなうことができます。丸物と呼ばれる、円筒や円錐形の物の加工をします。
					</p>
				</hgroup>
			</div>
			<p>NC旋盤加工</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>マシニング加工</h3>
					<p>
						プログラムを組み金属加工を自動でおこないます。複雑な形の加工ができます。
					</p>
				</hgroup>
			</div>
			<p>マシニング加工</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>44</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>17</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>7</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>95</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1978</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>19.5</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '0%', 'color' => '#d9d9d9'],
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 3, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 7, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 8, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 2, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 4, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 3, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 7, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 6, 'caption' => '50代', 'color' => '#009F6B'],
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
							[ 'value' => 95, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 5, 'caption' => '県外', 'color' => '#FEE929'],
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
					<li>一般建設業（ダクト工事）</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>金子慎也</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>17人</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d411273.5803471806!2d137.9031010706135!3d36.358965914100914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601da32fd89a4f8b%3A0x5e95147d2fa2bc25!2z44Of44Ok44Oe6KO95L2c5omA!5e0!3m2!1sja!2sjp!4v1745987333428!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-72-4065</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://miyamass.jp/" target="<?= $co['slug'] ?>">https://miyamass.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>ミヤマ製作所で、一緒にものづくりしよう！</h3>
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">山田しのぶ</span></figcaption>
		</figure>
		<p>
			はじめまして！ミヤマ製作所の社長をやっている山田しのぶです！<br>
			ウチは上田市にある**金属加工の工場**で、小さい部品から大きな製品まで、いろんなものをつくっている会社です。平成から令和に変わった年に、親の代から引き継いで、今は私が社長をやってます！<br>  
			「金属加工ってなに？」って思うよね。簡単に言うと、**金属を削ったり、穴を開けたりして、必要な形にする仕事**！機械を使いこなして、いろんなものをつくる仕事です。<br>
			今も昔も職人さんたちは、ひたむきに仕事をしています。黙々と目の前の仕事に向き合いながら、コツコツ自分の腕を磨いています。簡単にできることじゃないけど、その分やりがいのある仕事です。<br>
			うちで作っている物は、他社さんがうまくいかなかったものを、「助けて～、ミヤマさん」って感じで依頼されて作る物が多いです。困った時のミヤマさんと思ってもらえていることは、うちの自慢です。<br>
			協働ロボットを作っている坂城町にあるフレアオリジナルさんも、そんな感じでお仕事をするようになった会社さんです。私たちの作った部品がロボットに使われるなんて、思ってもみなかったことです。<br>
			「ちょっと気になるな～」って思ったら、ぜひ工場を見に来て！未経験でも大丈夫、イチからしっかり教えるから、安心して飛び込んできてください。待ってるよ～！
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
			<a href="<?= $company_base ?>job_kakou/">
				<figure>
					<img src="first.jpg" alt="">
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
<?php include $base . '../footer.php' ?>
</body>
