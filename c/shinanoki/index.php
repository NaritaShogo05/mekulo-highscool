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
$description = '日本にわずか3社の、日清カップ麺のかやく製造会社です。多い日には1日40万食分を手掛け、安全・清潔な環境で具材投入から検査・梱包まで丁寧に作業。2021年には新工場を開設し、冷凍食品も扱っています。安定した環境で、食品製造に挑戦したい方に最適な職場です。'; 
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
		日本にわずか３社！レアな食品会社
	</h2>
	<p>
		私たちは、全国で販売されているカップヌードルやどん兵衛に入っている「かやく」を作っている会社です。<br>
		実は、日清食品のカップ麺のかやくを作っている会社は日本にわずか3社しかありません。そのうちの1社として、多い日には1日40万食分を作ることも。たくさんの人が食べるカップ麺のおいしさを、私たちの技術で支えています。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="gallery01.jpg" alt="" class="fs show">
			<img src="gallery02.jpg" alt="" class="sc">
			<img src="gallery03.jpg" alt="" class="th">
			<img src="gallery04.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="gallery01.jpg" alt="" class="fs show">
			<img src="gallery02.jpg" alt="" class="sc">
			<img src="gallery03.jpg" alt="" class="th">
			<img src="gallery04.jpg" alt="" class="fo">
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
	<h4>離職者ほぼ0！？</h4>
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		科の木は、地元でも有名な安定した企業です。若い社員が多く活躍していて、とにかく離職率が低いのが特徴です。仕事とプライベートをしっかり分けられるもの魅力の一つ。<br>
		休憩時間はそれぞれ一人の時間を大切にしている社員が多く、無理なく働ける雰囲気があります。こうした環境が、離職率の低さに繋がっているのかもしれません。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		安全な食品を届ける
	</h3>
	<p>
		身近な食品であるカップ麺。ふたを開けると、小袋に入った「かやく」が一番に目に入ります。
	</p>
	<p>
		この「かやく」を作っているのが、私たち科の木です。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
	</div>
	<p>
		実は、日清食品のカップ麺に入っているかやくを作っている会社は、日本に3社しかありません。そのため、多い日は一日に約40万食、30種類以上のかやくを作っています。
		作る量も種類も多いので、毎朝のミーティングが欠かせません。1日の流れを把握することで、迷わず作業に集中できます。
	</p>
	<div class="images">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<p>
		食品を扱うので、清潔な作業着を着て、エアーシャワーを浴びてから工場に入ります。室温は年間を通して約24℃に保たれているので、暑い日も寒い日も快適に働けます。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		かやくを作る工程には、具材投入、機械操作、検査、梱包などがあります。どの工程でも素早く正確な作業が求められます。一人ひとりが責任感を持って、品質の徹底に努めています。
	</p>
	<div class="images">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<p>
		また、2021年には、新しく秋和工場を立ち上げました。冷凍のブルーベリーやブロッコリーを取り扱っていて、地元のスーパーだけでなく、東京のスーパーにも並んでいます。<br>
		寒い時期に売り上げが増えるカップ麺ですが、季節に左右されない安定した仕事ができるよう、新しいことにもどんどん挑戦しています！
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi01.jpg" alt="">
				<hgroup>
					<h3>かやく（ラーメン）</h3>
					<p>
						味噌ラーメンのかやく。大きめの具材がたくさん入っているのが特徴です。
					</p>
				</hgroup>
			</div>
			<p>かやく（ラーメン）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi02.jpg" alt="">
				<hgroup>
					<h3>かやく（そば）</h3>
					<p>
						どん兵衛のかやく。色鮮やかな卵が印象的です。
					</p>
				</hgroup>
			</div>
			<p>かやく（そば）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi03.jpg" alt="">
				<hgroup>
					<h3>かやく（エガちゃんねるコラボ）</h3>
					<p>
						「エガちゃんねる」コラボ、イカ墨混ぜそばのかやく。大きなイカが入っています。
					</p>
				</hgroup>
			</div>
			<p>かやく（エガちゃんねるコラボ）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi04.jpg" alt="">
				<hgroup>
					<h3>かやく（ラ王）</h3>
					<p>
						中身が見えないかやくは、検査するのが難しいです。
					</p>
				</hgroup>
			</div>
			<p>かやく（ラ王）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi05.jpg" alt="">
				<hgroup>
					<h3>謎肉</h3>
					<p>
						カップ麵に入っている『謎肉』の試供品。
					</p>
				</hgroup>
			</div>
			<p>謎肉</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="busi06.jpg" alt="">
				<hgroup>
					<h3>かやく（ANA）</h3>
					<p>
						ANAの飛行機内で販売されているカップ麺のかやく。
					</p>
				</hgroup>
			</div>
			<p>かやく（ANA）</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>2</span>億<span>4</span>千万円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>36</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>16</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>8</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>108</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1988</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>6～7</span>日</p>
		</li>
		<li class="circle">
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
					[ 'value' => 100, 'caption' => '取得者なし', 'color' => '#d9d9d9'],
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
						[ 'value' => 12, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 32, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 130, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 120, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 90, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 80, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 20, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 85, 'caption' => "車・バイク85%", 'color' => '#E06A3A'],
						[ 'value' => 10, 'caption' => '徒歩10%', 'color' => '#009F6B'],
						[ 'value' => 5, 'caption' => '自転車5%', 'color' => '#008C4A'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 95, 'caption' => "長野県内95%", 'color' => '#B2CF3E'],
						[ 'value' => 5, 'caption' => '県外5%', 'color' => '#FEE929'],
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
					<li>乾燥食品の包装</li>
					<li>冷凍食品の包装</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>原田孝子</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>44名（パート・アルバイト含む）（2024年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd><?= $co['post-code']?><br><?= $co['adress']?><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11197.538529380718!2d138.2110391440787!3d36.3979483823927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601da2dd6237e6d9%3A0x461e787729e1dee7!2z56eR44Gu5pyo!5e0!3m2!1sja!2sjp!4v1742865261455!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
			<dt>Frozen Packing Factory 秋和工場</dt>
			<dd>〒386-0041<br>長野県上田市秋和201-2<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8105.479495030496!2d138.2238579523568!3d36.40972578843984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601da2c7d461950f%3A0xedd3df9f03032c9c!2z44CSMzg2LTAwNDEg6ZW36YeO55yM5LiK55Sw5biC56eL5ZKM77yS77yQ77yR4oiS77yS!5e0!3m2!1sja!2sjp!4v1743670072846!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-23-6565</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://p-shinanoki.co.jp/" target="<?= $co['slug'] ?>">https://p-shinanoki.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>若い世代の声を大切に</h3>
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="word">原田孝子</span></figcaption>
		</figure>
		<p>
			時代はどんどん変化しています。その変化に対応するには、若いみなさんの意見をしっかり取り入れていくことが必要だと考えています。みなさんからの意見を真摯に受け止め、より良い職場環境を作るために改善を進めています。
		</p>
		<p>
			また、私たちの会社では『報告・連絡・相談』を大切にしています。それによって、問題が起こる前に解決できることがたくさんあります。<br>
			周りのみんなと協力し、仕事に必要な情報をしっかり伝え合えるみなさんのことを、お待ちしております。
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
				<p>その他、ご連絡いただければいつでも見学可能です。お気軽にお問い合わせください。</p>
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
			<a href="<?= $company_base ?>job_food-manufacturing/">
				<figure>
					<img src="<?= $company_base ?>job_food-manufacturing/firstview.jpg" alt="">
					<figcaption>具材投入・かやく検査スタッフ</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_machine-operator/">
				<figure>
					<img src="job_machine-operator/firstview.jpg" alt="">
					<figcaption>機械操作スタッフ</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_quality-control/">
				<figure>
					<img src="job_quality-control/firstview.jpg" alt="">
					<figcaption>品質管理スタッフ</figcaption>
				</figure>
			</a>
		</li>
	</ul>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="<?= $highschool_base ?>tab.js"></script>
<script src="<?= $highschool_base ?>page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
