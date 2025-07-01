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
$description = '株式会社エース・ワーカーズは、塗装工事とシーリング防水工事の両方を手がける職人集団です。長野県を中心に、建物の美しさと耐久性を高めるための確かな技術と真心で施工を行っています。技術力・心意気・人間力を大切に、街をもっとカッコよくします。';//メタディスクリプションの追加
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
<body class="highschool aceworkers">
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
		あなたの手で、街がもっとカッコよくなる！  
	</h2>
	<p>
		エース・ワーカーズでは、「塗装工事」と「シーリング防水工事」の2つを行っています。「塗装工事」は、家の外壁・内壁・屋根の見た目をキレイにするための工事です。主に液体塗料を使って、ローラーやハケで塗ったり、スプレーガンといった専門道具で吹き付けたりします。<br>
		「シーリング防水工事」は、家の雨漏りやひび割れを防ぐための工事です。シーリング材という液体状の物を、シーリングガンといった専門道具で打っていきます。<br>
		防水と塗装、エース・ワーカーズはどちらもできてしまう、職人集団です 。
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
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['ichikawa']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['ichikawa']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		エース・ワーカーズの松本社長は、20代前半で独立した若い社長。<br>
		社員一人ひとりに寄り添い、誰もが気持ちよく働ける職場づくりを大切にしています。<br>
		職場の雰囲気は、きっちりしてるけど、息がしやすい。そんなバランスの良さが魅力です。<br> 
		試用期間を終えると、1人1台の社用車が支給されるので、毎朝会社に集まる必要はありません。家から現場へ直行して、仕事が終わったらそのまま帰れます。<br>
		しかも、残業もほとんどないので、プライベートの時間もしっかりとれます。<br>
		塗装や防水の仕事は、現場によって使う道具も、やり方も異なります。そのため、自然と多くの技術が身についていきます。 気がつくと、自分の中に「できること」が増えていて、そんな自分の変化が、ちょっと誇らしく思えるかもしれません。<br>
		初めての現場でも、まわりには経験豊富で頼れる先輩たちがいます。不安よりも「やってみたい」と思える、そんな前向きな気持ちでスタートできるはずです。 
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<p>
		エース・ワーカーズは、2013年に設立した新しい会社です 。<br>
		お客様から依頼を受けて、古くなった家の外壁、内壁、屋根を塗装しなおします。また、建物の壁と窓の間、水回りなどのすき間を埋めるシーリング防水で、建物の魅力を高める仕事も担っています。長野県東北信エリアが主な作業現場になりますが、時々依頼をうけて県内全域の現場で作業することもあります。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<p>
		一般的には防水と塗装はそれぞれのプロ業者が対応しますが、当社では建築工事の流れが効率よく進むように両方を行っています！別々で業者を頼む手間やトラブルが省けます。<br>
		塗装は、ただペンキを塗るだけではありません。塗る場所をしっかり洗ったり、下地を整えたり、何回も塗ったりすることで、家の見た目をキレイにするだけでなく、外からの紫外線や雨などのダメージもガードできます。
	</p>
	<div class="images">
		<img src="first.jpg" class="scene" alt="">
	</div>
	<p>
		シーリング防水では、壁と窓の間や、水回りなどのすき間に、シーリング材というゴムのような素材を入れることで、雨漏りやヒビ割れを防ぎます。キズや不具合が発生しないように、それぞれの現場の気候や劣化予測を元に、ピッタリな工事を提案し、100％本気の作業を心がけています。
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
	<p>
		エース・ワーカーズでは、プロの名に恥じない「技術力」、納得のいく仕事をやり遂げる「心意気」、礼儀正しく約束を守れる「人間力」を大切にしています。この3つの思いを社員全員で共有し、職人としても人としてもレベルアップするため、日々の仕事に取り組んでいます。
	</p>
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
					<h3>シーリング防水工事</h3>
					<p>
						シーリング材というゴムのような素材を入れることで、雨漏りやヒビ割れを防ぎます。キズや不具合が発生しないように、それぞれの現場の気候や劣化予測も考えます。
					</p>
				</hgroup>
			</div>
			<p>シーリング防水工事</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>塗装工事</h3>
					<p>
						塗る場所をしっかり洗ったり、下地を整えたり、何回も塗ったりすることで、家の見た目をキレイにするだけでなく、外からの紫外線や雨などのダメージもガードできます。
					</p>
				</hgroup>
			</div>
			<p>塗装工事</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>1億9386万</span>円</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>32</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>8</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>15</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>90</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2013</span>年</p>
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
						[ 'value' => 0.001, 'caption' => '', 'color' => '#b1b1b1'],
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
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
						[ 'value' => 14, 'caption' => '中途100%', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 4, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 1, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 8, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 2, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 0.001, 'caption' => '', 'color' => '#009F6B'],
					[ 'value' => 0.001, 'caption' => '', 'color' => '#008C4A'],
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
							[ 'value' => 0.001, 'caption' => '', 'color' => '#FEE929'],
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
					<li>シーリング防水工事</li>
					<li>塗装工事</li>
					<li>板金工事</li>
					<li>仮設足場</li>
					<li>住宅・店舗・ビル等のリフォーム工事一式</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>松本　朗</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>14名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3205.741307980616!2d138.1192850763172!3d36.536234972323584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d8327d9ec0faf%3A0xf899b11647bc1a36!2z5qCq5byP5Lya56S-44Ko44O844K544O744Ov44O844Kr44O844K6!5e0!3m2!1sja!2sjp!4v1748582444511!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-214-3905</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://www.aceworkers.co.jp/" target="<?= $co['slug'] ?>">https://www.aceworkers.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">松本　朗</span></figcaption>
		</figure>
		<p>
			私は10代でこの業界に入り、20代前半で独立しました。技術を学びながら、「約束を守る」「心のこもったあいさつをする」そんな当たり前だけど大切なことを、たくさんの先輩たちから教わってきました。そこで僕がたどり着いた答えは、「確かな仕事をスピーディーに気持ちよくやり遂げる」ことの大切さ。これは、社長になった今でもずっと大事にしている信念です。
		</p>
		<p>
			誰かのマネじゃなく、自分たちの腕と心で、建物の価値を高める。防水・塗装という専門のフィールドで、プロとしての誇りを持って挑んでいます。
		</p>
		<p>
			この仕事は、ある意味「リアルな冒険」だと思っています。毎回が違う現場、違う課題。でもその分、自分の成長を肌で感じられる。手に職をつけて、仲間と一緒に汗をかきながら、カッコよく仕事をやり遂げる。そんな“職人力”を、一緒に発揮してくれる方と出会える日を楽しみにしています。
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
				<p>※他の日程はお問い合わせください。</p>
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
			<a href="<?= $company_base ?>job_genba/">
				<figure>
					<img src="first.jpg" alt="">
					<figcaption>現場職人</figcaption>
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
<?php include $base . '../footer.php'; ?>
</body>
