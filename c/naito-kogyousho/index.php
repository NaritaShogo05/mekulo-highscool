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
$description = '佐久市で巨大な産業機械のフレームを製造する会社。一点物の鉄骨構造を切断・溶接・塗装まで一貫して手がけ、自分の身長を超えるスケールのモノづくりに挑めます。地域産業を支えるダイナミックな仕事です！';//メタディスクリプションの追加 
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
		スケールが違う！バス並にデカい鉄の土台を作る仕事
	</h2>
	<p>
		私たちは、工場で使われている巨大な機械の土台を作っている会社です。<br>
		デカい鉄骨に穴を開け、溶接で組み立て、最終的には自分の身長を超えるような巨大な土台（フレーム）を完成させます。<br>
		そんな、超デカいものを作る仕事をやってみませんか？
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
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
	<h4 class="point">「失敗歓迎!」な職場</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		部活や授業で新しいことに挑戦するとき、最初から完璧にできる人は少ないですよね。学校では、先生や先輩がアドバイスをくれたり、一緒に練習してくれたりするから、少しずつ成長できます。<br>
		職場でも同じです。社員のほとんどが未経験で入社している内藤工業所では、失敗しても怒られることはありません。代わりに、「次はどうすればいいか一緒に考えよう」という雰囲気があります。<br>
		安心して挑戦できる環境で、自分の可能性を広げてみませんか。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		一つひとつがオリジナル！巨大フレームを作り上げる仕事
	</h3>
	<p>
		私たちは佐久市中込で、主に産業機械のフレームや筐体の製造、大型部品の加工を手掛けています。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<p>
		分厚い金属の板や鉄骨を設計図に合わせて切断し、四角形に組み上げて溶接したり、ボルトで止めたりして、フレームの形を作ります。<br>
		言葉でいうと簡単ですが、鉄骨は1本あたり数十kgありますし、溶接をすると形が歪んでしまうこともあるので、設計図通りに作るにはいろいろな工夫が必要です。
	</p>
	<div class="images grid-img">
		<img src="job_yousetsu/yousetsu2.jpg" class="scene" alt="">
		<img src="job_yousetsu/yousetsu3.jpg" class="scene" alt="">
		<img src="job_yousetsu/yousetsu1.jpg" class="scene" alt="">
	</div>
	<p>
		最後に塗装をして完成です。
	</p>
	<div class="images">
		<img src="fukitsuke.jpg" class="scene" alt="">
	</div>
	<p>
		作っているものは一点物ばかりなので、毎回みんなで考えながら作業に取り組んでいきます。新しいことに積極的に挑戦できる人や、困ったときにすぐ相談できる人に向いている仕事だと思います。<br>
		主要取引先には、株式会社ステック、パナソニックコネクト株式会社、ミマキエンジニアリングなどがあり、ものづくりを通して地域産業の発展に貢献することを大切にしています。
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="seikan.jpg" alt="">
				</div>
				<hgroup>
					<h3>製缶溶接</h3>
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
			<p class="num"><span>50</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>10</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>20</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>113</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1961</span>年</p>
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
							[ 'value' => 87, 'caption' => "長野県内87%", 'color' => '#B2CF3E'],
							[ 'value' => 23, 'caption' => '県外23%', 'color' => '#FEE929'],
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
					<li>産業機械</li>
					<li>工作機械</li>
					<li>建設機械等各種機械のフレーム</li>
					<li>架台の製作及び大型NC機械</li>
					<li>マシニングセンターによる金属の機械加工</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>内藤央</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>16名（男性 11名／女性 5名、役員、パート・アルバイト含む）（2024年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3217.3819080239614!2d138.46759807650105!3d36.254505972407784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dcb5aeb822259%3A0xbdfb0d798128c345!2z5YaF6Jek5bel5qWt5omA!5e0!3m2!1sja!2sjp!4v1738231241938!5m2!1sja!2sjp" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0267-67-1800</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://sakucity-industrialpark.com/naitou/" target="<?= $co['slug'] ?>">https://sakucity-industrialpark.com/naitou/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>仕事はゲームと一緒！？</h3>
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">内藤央</span></figcaption>
		</figure>
		<p>
			みなさんは、初めてスマホを使ったときや新しいゲームを始めたとき、「難しかったらどうしよう」と思ったことがありますか？「どんなことができるのかな」とわくわくした人が多いのではないでしょうか。<br>
			簡単すぎるゲームが物足りないのと同じで、少しずつ挑戦しながらレベルアップしていくのが楽しいですよね。
		</p>
		<p>
			実は、仕事もこれと似ています。ゲームのチュートリアルのように1つずつ新しいスキルを身につけながら挑戦を重ねることでどんどん成長していけます。機械の操作方法や溶接のコツを学び、自分の「レベル」を上げていけば、さらに面白いことに挑戦できます。<br>
			一緒にスキルを高め合える仲間たちが、あなたを待っています！ 
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
					<img src="<?= $company_base ?>job_kinzoku/firstview.jpg" alt="">
					<figcaption>金属加工</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_yousetsu/">
				<figure>
					<img src="firstview.jpg" alt="">
					<figcaption>溶接作業</figcaption>
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
