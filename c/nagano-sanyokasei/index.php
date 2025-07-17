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
$description = 'このページは株式会社長野三洋化成の企業紹介ページです。長野三洋化成は、長野県東御市に本社を構えるプラスチック製品メーカー。耐熱抗菌まな板やホース、雪かきスコップなど、日常に身近な製品を全国へ届けています。100種類以上のホースを製造する、国内屈指のメーカーです。';//メタディスクリプションの追加 
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
		そこにも、ここにも長野三洋化成
	</h2>
	<p>
		長野三洋化成では、「耐熱抗菌まな板」や、キャンプに便利な「ホース」、子ども用の「雪かきスコップ」や、雪合戦の「雪玉製造器」などを作っています。<br>
		こんな身近なものを作っている会社が東御市にあるって知ってましたか？<br>
        製品ラインナップの中でも、特にホースは全国のホームセンターで取り扱われています。実は、国内屈指のメーカーなんです。<br>
        長野三洋化成で、全国のお客さまの身近にあるものを作ってみませんか？
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="gallery01.jpg" alt="" class="fs show">
			<img src="job_seizou/seizou06.jpg" alt="" class="sc">
			<img src="busi01.jpg" alt="" class="th">
			<img src="job_seizou/seizou04.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="gallery01.jpg" alt="" class="fs">
			<img src="job_seizou/seizou06.jpg" alt="" class="sc">
			<img src="busi01.jpg" alt="" class="th">
			<img src="job_seizou/seizou04.jpg" alt="" class="fo">
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
	<!--<h4 class="point">「失敗歓迎!」な職場</h4>-->
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['shomura']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['shomura']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		長野三洋化成は、さまざまな身近なプラスチック製品を作っている会社です。特にホースとまな板はトップクラスのシェアを誇ります。<br>
        この会社の強みは、何と言っても原材料の生産から手掛けていること。<br>
        プラスチックの原材料から製品までを作っているので、自社で素材を調整することが可能です。そのため、抗菌・耐寒・耐圧など、欲しい性能をもったプラスチック製品を作ることができます。<br>
        長野三洋化成は、100種類以上のホースを作っている国内屈指のホースメーカーです。それも、ホームセンターで買えるものが中心です。みなさんも一度は長野三洋化成のホースに出会っているはず。<br>
        自分で作った製品が、家族や友達が使っていたら嬉しいと思いませんか？
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		東御市から全国へ届けるプラスチック製品と原料の製造会社
	</h3>
	<p>
		長野三洋化成は、ホース、まな板、子どものおもちゃなど、商品の企画、製造、出荷・販売までを、一貫して行っています。また、自社内でプラスチック原料の開発もしています。
	</p>
	<div class="images">
		<img src="first-view.jpg" class="scene" alt="">
	</div>
	<p>
		「製造業」はクリエイティブな仕事です。<br>
        より良い商品をお客さまにお届けするには、新しい発想や創造力が必要不可欠です。<br>
        しかし、機械化が進み、いつの間にか「同じことを繰り返す仕事」というイメージが定着してしまいました。<br>
        長野三洋化成には、グループ唯一の研究室があります。そこでは、原材料の組み合わせの開発や配合の研究など、専門的な知識と新しい発想を活かし、プラスチックとビニールの新しい可能性に挑み続けています。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<p>
		研究室では紫外線に強い樹脂、粘性の高い樹脂など、使われるシチュエーションに合わせた機能を付与した樹脂の設計をおこなっています。ホースやまな板など最終製品を作っている樹脂メーカーが研究室を持っているのはとても珍しいことです。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		また、長野三洋化成は創業以来、地域に密着した活動を行っています。湯の丸高地トレーニングプールへの寄付をはじめ、東御市工業振興会主催の親睦スポーツ大会に参加するなど、地域社会の一員として地元とのつながりを深めてきました。
	</p>
	<div class="images">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<p>
		長野三洋化成は、これからも地元に密着した企業として、全国に向かってビジネスを展開していきたいと思います。
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
					<h3>パワーホース</h3>
					<p>
						長年の多くの方から指示していただいている寒さに強いホースです。
					</p>
				</hgroup>
			</div>
			<p>パワーホース</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi02.jpg" alt="">
				</div>
				<hgroup>
					<h3>抗菌まな板</h3>
					<p>
						みなさんの家の台所にも、長野三洋化成が作った樹脂製の抗菌まな板があるかもしれません。
					</p>
				</hgroup>
			</div>
			<p>抗菌まな板</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi03.jpg" alt="">
				</div>
				<hgroup>
					<h3>雪遊びスコップ</h3>
					<p>
						子ども用の雪遊びに使うスコップです。軽いプラスチックは子どもたちのおもちゃに広く使われています。
					</p>
				</hgroup>
			</div>
			<p>雪遊びスコップ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="contents03.jpg" alt="">
				</div>
				<hgroup>
					<h3>原材料コンパウンド</h3>
					<p>
						プラスチックの原材料です。用途に合わせた機能を与えて樹脂製品のメーカーに出荷しています。
					</p>
				</hgroup>
			</div>
			<p>原材料コンパウンド</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>29</span>億円</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>47.2</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>16</span>年</p>
		</li>
		<li class="small">
			<p>月平均残業時間</p>
			<p class="num"><span>10</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>120</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1971</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>17.5</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.001, 'caption' => '', 'color' => '#d9d9d9'],
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
						[ 'value' => 30, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 70, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 73, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 27, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 1, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 12, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 18, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 19, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 28, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 22, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 98, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 2, 'caption' => 'その他', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 85, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 25, 'caption' => '県外', 'color' => '#FEE929'],
													]); ?>
					</svg>
				</div>
		</li>
	</ul>	
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src="factory.jpg" alt="" class="scene">
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
					<li>プラスチック製品製造販売</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>後藤淳</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>135名（2024年4月現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6426.859100602469!2d138.38194!3d36.350373!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601db7f5854b9e07%3A0xf8bf7e411da4216c!2z5pel5pys44CB44CSMzg5LTA1MTEg6ZW36YeO55yM5p2x5b6h5biC5ruL6YeO55Sy77yS77yT77yQ77yV!5e0!3m2!1sja!2sus!4v1751530406055!5m2!1sja!2sus" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-62-1631</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="http://www.sanyokasei.co.jp/index.html" target="<?= $co['slug'] ?>">http://www.sanyokasei.co.jp/index.html</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>モノづくりはヒトづくり</h3>
		<figure class="portrait">
			<img src="president.jpg" alt="">
			<figcaption><span class="name">後藤淳</span></figcaption>
		</figure>
		<p>
			私たち株式会社長野三洋化成では、「事業は人を中心に発展していく」という考えに基づき、社員さんの持ち味や価値観、考えをくみ取ることのできる職場づくりに励んでいます。<br>
            様々な角度の視点は、社員さん同士、能力や技術の向上の刺激を生むことにつながります。
		</p><br>
        <p>
			私たちの事業に関わる全ての人々に「喜びをもたらす思いやりある物づくり」を提供できる企業をめざし、<br>
            1.	自分の考えを打ち出して自由に意見が言える環境や組織<br>
            2.	自らの考えを行動につなげられる仕事内容<br>
            3.	お客様が喜ぶ商品を製造できる、働き甲斐のある職場<br>
            といった3つの柱をもって、社員の皆さんが持っている力を最大限に発揮できるような環境づくりを行っています。
		</p><br>
		<p>
            自分の技術やアイデアで、「相手を喜ばせたい」と行動できる方を求めています。<br>まずは、会社を見て感じてください。
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
					<img src="<?= $company_base ?>job_seizou/first-view.jpg" alt="">
					<figcaption>製造職</figcaption>
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
