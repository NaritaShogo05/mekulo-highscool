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
$description = '長野市の税理士法人MACCでは、企業の課題解決を支える会計サポーターを募集。「ありがとう」がやりがいになる仕事です。';//メタディスクリプションの追加 
$canonical_url = 'https://works.mekulo.jp/hs/' . $co['slug'] . '/';
$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php //include $base . '../tracking.php'; ?>
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
<body class="highschool naganorezin">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_area">
	<img alt="" class="fv_image" src="first_view.jpg">
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
		企業に伴走し、税金と会計の仕事で支える
	</h2>
	<p>
		税理士法人MACCは、税金と会計の専門知識de
		「他社（者）の幸せ」を実現している会社です。チームで協力し、お客様や仲間の笑顔を追求しています。税理士事務所というと「難しそう」と思うかもしれません。でも、「人の役に立ちたい」「社会に貢献する仕事をしたい」という気持ちがあれば、未経験でも大丈夫。あなたの可能性をMACCで広げませんか？
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="gallery01.jpg" alt="" class="fs show">
			<img src="busi03.jpg" alt="" class="sc">
			<img src="gallery02.jpg" alt="" class="th">
			<img src="gallery03.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="gallery01.jpg" alt="" class="fs">
			<img src="busi03.jpg" alt="" class="sc">
			<img src="gallery02.jpg" alt="" class="th">
			<img src="gallery03.jpg" alt="" class="fo">
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
	<h4 class="point">「人の役に立っている」を実感できる職場</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['shomura']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['shomura']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		友達から「ありがとう」という言葉をかけられて、嬉しかった経験はありませんか？<br>
		この仕事は、税金についてのサポートや会計という業務を通じて、お客様の役に立とうとする仕事です。お客様のために親身になり、役立ちたいと考え行動することが仕事に繋がります。<br>
		会計事務所と聞くと、「難しい計算をしないといけないから、自分にはムリっ」と思うかもしれません。会計という仕事の性質上、数字を扱います。数字を生理的に受け付けない人には向きませんが、少しでも気になったのなら、心のチャンネルをMACCに合わせてみませんか？ 
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
	    地域の企業の悩みを解決するプロのチーム
	</h3>
	<p>
		長野の未来を一緒に創りませんか？<br>
		私たちは、長野市にある税理士法人MACCです。地域の企業の悩みを解決するプロのチームの会社です。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
	</div>
	<p>
		長野の企業がもっと輝けるように、経営のサポートをしています。売上アップや経営改善など、企業の「困った」を解決し、成長を応援することで、地域全体を盛り上げていくのが私たちの仕事です。
	</p>
	<div class="images">
		<img src="contents02.jpg" class="scene" alt="">	
	</div>
	<p>
		税理士やコンサルタントなど、様々な専門家がチームとなって、企業の成長を支えています。企業の成長を支え、感謝されることは、とてもやりがいのある仕事です。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">	
	</div>
	<p>
		長野の未来を創る、社会貢献度の高い仕事を、私たちと一緒にしませんか？専門知識を身につけ、自分自身も成長できる環境で、あなたの力を発揮してください。
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi01.jpg" alt="">
				</div>
				<hgroup>
					<h3></h3>
					<p>
					    お客さまを訪ね、税金や会計処理を確認し、修正する仕事
					</p>
				</hgroup>
			</div>
			<p></p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi02.jpg" alt="">
				</div>
				<hgroup>
					<h3></h3>
					<p>
					    お客さまの課題を解決する提案をする仕事
					</p>
				</hgroup>
			</div>
			<p></p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi03.jpg" alt="">
				</div>
				<hgroup>
					<h3></h3>
					<p>
					    お客さまの会社の給料を代わりに計算する仕事
					</p>
				</hgroup>
			</div>
			<p></p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi04.jpg" alt="">
				</div>
				<hgroup>
					<h3></h3>
					<p>
					    お客さまの会社の経営をよくするためのセミナー
					</p>
				</hgroup>
			</div>
			<p></p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年6月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>2.6</span>億円</p>
		<p class="year"></p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>33</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>9</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>28</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>125</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2023</span>年</p>
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
						[ 'value' => 60, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 40, 'caption' => '40%', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 30, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 73, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 50, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 50, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 31, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 35, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 15, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 11, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 8, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 35, 'caption' => "自転車", 'color' => '#E06A3A'],
						[ 'value' => 75, 'caption' => '電車・バス', 'color' => '#D04255'],
						[ 'value' => 0.01, 'caption' => '', 'color' => '#008C4A'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 87, 'caption' => "長野県内80%", 'color' => '#B2CF3E'],
							[ 'value' => 13, 'caption' => '県外20%', 'color' => '#FEE929'],
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
					<li>税務会計事務、経営支援</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>三井和典</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>26名（男性 13名／女性 13名、パートタイムの従業員含む）（2025年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3200.873316087606!2d138.19104892640527!3d36.653498172289275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d86f6ceb30343%3A0x25c4dbbdc695daf8!2z44CSMzgwLTA4MTQg6ZW36YeO55yM6ZW36YeO5biC6ba06LOA6KW_6ba06LOA55S677yS77yR77yU77yR4oiS77yT!5e0!3m2!1sja!2sjp!4v1751289702064!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-232-0255</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://shinko-gr.com/" target="<?= $co['slug'] ?>">https://shinko-gr.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="mitsui1.jpg" alt="">
			<figcaption><span class="name">三井和典</span></figcaption>
		</figure>
		<p>
			税理士法人MACC代表の三井です。<br>
			私たちは「助け合い」「人のために」「得意を活かし」「社会貢献をする」を大切に、お客様の成長を共に喜び、地域を元気にする仕事をしています。税金や会計の知識で、企業の「困った」を解決するのが私たちの仕事です。<br>
			私は「人は人との関わりの中で成長できる」と考えています。会計事務所は多くの方と関わる仕事です。頼れる先輩のもと、成長できる環境で、あなたの力をMACCで発揮してください！お客様の企業が抱える問題を解決し、「ありがとう」をいただける最高のやりがいが待っています。
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
			<a href="<?= $company_base ?>job_supporter/">
				<figure>
					<img src="<?= $company_base ?>job_supporter/first-view.jpg" alt="">
					<figcaption>企業サポーター</figcaption>
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
<?php //include $base . '../footer.php' ?>
</body>
