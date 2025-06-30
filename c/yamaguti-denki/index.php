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
$description = '山口電気は長野市で元請けとして住宅や大型建物の電気工事を手掛けています。配線やトラブル対応を中心に、ペンチや測定器など多様な工具を使い分けて正確に作業。土木工事は協力会社が担当し、電気工事に集中できる環境です。電気は生活に不可欠で、身につけた技術は一生もの。明かりが灯る仕組みに興味がある方を歓迎します。';//メタディスクリプションの追加 
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
		元請けならではの仕事
	</h2>
	<p>
		山口電気では、新築住宅でコンセントを使えるようにしたり、電線を引いたり、大きな建物の電気設備を整えたりと、さまざまな電気工事を行っています。元請けの仕事が多いので、他社の言いなりではなく、自分たちの考えで仕事ができます。
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
	<h4 class="point">毎日が新しい発見の連続</h4>
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p style="min-height: 160px;">
		山口電気では、住宅の配線工事から工場の電気設備まで、さまざまな電気工事を手掛けています。同じ現場は一つとしてなく、作業内容も毎回異なるため、新しいことに挑戦する機会がたくさんあります。「今日はどんな現場だろう？」とワクワクしながら働けるのが魅力です。経験を積むごとに、できることが増えていく楽しさも実感できます。電気工事のプロとして成長しながら、毎日新しい発見をしてみませんか？
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		電気が必要な場所に、私たちの仕事がある
	</h3>
	<p>
		山口電気は、長野市にある電気工事を行う会社です。家庭の電気トラブルから公共工事まで、幅広い電気工事を手掛けています。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
	</div>
	<p>
		電気がすぐに切れてしまう、照明がつかない、コンセントが使えない――そんなトラブル一つとっても、さまざまな原因があります。いろいろな手段を使って原因を探り当て、きちんと電気が通るようになったときの嬉しさは格別です。
	</p>
	<div class="images">
		<img src="gallery1.jpg" class="scene" alt="">
	</div>
	<p>
		電気工事ではドライバーやペンチはもちろん、配線を切るケーブルカッターや圧着工具、電子測定器など、さまざまな工具を使いこなします。<br>
		“ペンチ”と言っても、写真のようにいくつも種類があります。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		現場ごとに適した工具を選び、正確で効率的な作業を進めることが、職人技の光るポイントです。<br>
		民間の仕事が中心なので、書類仕事はほとんどありません。また、配線を地中に埋めるような土木工事が必要な場合は協力会社に依頼しているので、重機の運転も必要ありません。電気工事に専念できる環境なので、身につけた技術をさらに磨いていくことができます。
	</p>
	<div class="images">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<p>
		電気工事は需要の高い仕事です。家や学校、街灯などの電気がなくなることはないので、一度身につけたスキルは一生ものです。<br>
		スイッチを押すと明かりがつく。そんな当たり前なことの仕組みに興味がある人は、電気工事士に向いていると思います。ぜひ一緒に働きましょう！
	</p>
	<div class="images">
		<img src="contents05.jpg" class="scene" alt="">
	</div>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi1.jpg" alt="">
				</div>
				<hgroup>
					<h3>コンセント</h3>
					<p>
						電線を繋ぎ、コンセントを設置します。
					</p>
				</hgroup>
			</div>
			<p>コンセント</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi2.jpg" alt="">
				</div>
				<hgroup>
					<h3>通線</h3>
					<p>
						配管の中に電線を通していきます。そのままだと上手く入っていかないので、スチールワイヤーという道具を使って入れていきます。
					</p>
				</hgroup>
			</div>
			<p>通線</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="firstview.jpg" alt="" style="max-width: 400px;">
				</div>
				<hgroup>
					<h3>ブレーカー</h3>
					<p>
						ブレーカーに電線を１本ずつ繋いでいきます。
					</p>
				</hgroup>
			</div>
			<p>ブレーカー</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="gallery4.jpg" alt="" style="max-width: 400px;">
				</div>
				<hgroup>
					<h3>配管</h3>
					<p>
						電線を通すための配管も設置します。
					</p>
				</hgroup>
			</div>
			<p>配管</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi5.jpg" alt="" style="max-width: 400px;">
				</div>
				<hgroup>
					<h3>照明</h3>
					<p>
						LEDへの変更を希望されるお客様が多いです。
					</p>
				</hgroup>
			</div>
			<p>照明</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>2</span>億<span>5</span>千万円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>48</span>歳</p>
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
			<p class="num"><span>95</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1967</span>年</p>
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
						[ 'value' => 0.01, 'caption' => '所得者なし', 'color' => '#2378C7'],
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
					[ 'value' => 20, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 50, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 30, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 80, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 20, 'caption' => '徒歩', 'color' => '#D04255'],
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
					<li>電気工事全般</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>山口忠幸</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>10名（パート含む）（2024年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25604.664429669505!2d138.21888837346864!3d36.66048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d88a5f5d9fd03%3A0x1aa7d8f9c098e330!2z5qCq5byP5Lya56S-5bGx5Y-j6Zu75rCX!5e0!3m2!1sja!2sjp!4v1744623711364!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-243-5219</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://yama-den.co.jp/" target="<?= $co['slug'] ?>">https://yama-den.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>さらなる成長を目指して、新しい仲間を募集中！</h3>
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">山口忠幸</span></figcaption>
		</figure>
		<p>
			当社は、多くのお客様から継続的にご依頼をいただき、安定した経営を続けてきました。また、中部電力の正規サポート店として認可されているので、地域の皆様からも高い信頼をいただいています。これからもお客様の期待に応え、さらなる成長を目指していきます。
		</p>
		<p>
			しかし、現在は人手が足りず、一部のお客様のご依頼をお断りせざるを得ない場面もあり、とても心苦しく感じています。そこで、私たちは新しい力を必要としています。あなたが加わってくれることで、より多くのお客様をサポートし、会社としてもさらに成長していけると確信しています。<br>
			私たちが誇る仕事や、職場の魅力を知っていただきたいです。ぜひ一度見学に来てみてください！
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
			<a href="<?= $company_base ?>job_electrician/">
				<figure>
					<img src="<?= $company_base ?>job_electrician/firstview.jpg" alt="">
					<figcaption>電気工事士</figcaption>
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
