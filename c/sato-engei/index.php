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
$description = '佐藤園芸は、お庭づくりと植物販売を通じて「緑ある暮らし」を支える会社です。剪定や植栽、エクステリア工事から、花や観葉植物の販売、オフィス緑化まで幅広く手掛けています。緑あふれる空間で人々の暮らしを豊かにし、心を癒す仕事に興味がある方を歓迎します。';//メタディスクリプションの追加 
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
		『造園』という仕事
	</h2>
	<p>
		私たちは、お庭づくりや植物の販売を通じて、『緑ある暮らし』をつくる会社です。お家のお庭はもちろん、公園などの広い場所でも活躍しています。<br>
		主な仕事は、木の枝を切りそろえたり、新しく木を植えたりして、空間をつくる“造園”です。<br>
		花や木があることで街が明るくなり、人々の心も癒されます。そんな緑に囲まれた仕事に興味がある人は、ぜひ佐藤園芸の仕事を見ていってください！
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
	<h4 class="point">自然の中でのびのび働ける</h4>
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p style="min-height: 160px;">
		佐藤園芸のみなさんは、とにかく楽しそうに働いていたのが印象的でした。一人ひとりがこだわりの道具を持ち、迷いなく作業を進めていく姿は職人そのもの。木の切り方ひとつとっても、やり方にそれぞれの個性があり、「基本」をしっかり押さえていれば、自分のセンスを活かして働ける仕事だと感じました。木や石など自然の物と向き合いながら、自分らしいスタイルを追求できる、そんな魅力のある会社です。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		『緑ある暮らし』をつくる
	</h3>
	<p>
		佐藤園芸は、お庭づくりを通じてたくさんの人に『緑ある暮らし』を届ける会社です。花や木があると街が明るくなり、人の心も癒されます。そんな空間をつくるのが、私たちの仕事です。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
	</div>
	<p>
		私たちの仕事は、『工事部門』と『園芸部門』に分かれています。<br>
		<strong>・『工事部門』</strong><br>
		お庭に木を植えたり、塀を作ったり、外での仕事を担当します。
	</p>
	<div class="images">
		<img src="contents02.jpg" class="scene" alt="">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		いちばん多い仕事は、お客様のお庭の手入れです。伸びすぎた木の枝を切りそろえ、雑草を取りのぞくことで、1年中綺麗なお庭を保つことができます。<br>
		下の写真が、手入れのビフォーアフターです。
	</p>
	<div class="images">
		<img src="before.jpg" class="scene" alt="">
		<img src="after.jpg" class="scene" alt="">
	</div>
	<p>
		これらは“造園”と呼ばれる仕事で、個人宅の小さなお庭から大きな公園まで、さまざまな場所を担当しています。
	</p>
	<div class="images">
		<img src="contents04.jpg" class="scene" alt="">
		<img src="contents05.jpg" class="scene" alt="">
	</div>
	<p>
		作業は1～3日程度の短期間で終わることが多く、いろんな現場で作業できるのが特徴です。
	</p>
	<div class="images">
		<img src="gallery3.jpg" class="scene" alt="">
	</div>
	<p>
		また、「子どもが安全に遊べるテラスがほしい」「自転車も入る大きな物置を置きたい」など、お客様の希望に合わせて玄関まわりやお庭をデザインする“エクステリア”の仕事もあります。
	</p>
	<div class="images">
		<img src="gallery4.jpg" class="scene" alt="">
		<img src="contents08.jpg" class="scene" alt="">
	</div>
	<p>
		家づくりの仕上げとも言える重要な役割で、お客様に「理想のお庭になった！」と喜んでもらえる瞬間は、この仕事の大きな魅力です。 <br> 
		<strong>・『園芸部門』</strong><br>
		園芸店舗での花や観葉植物の販売をはじめ、お客様のオフィスやお店の中を緑でいっぱいにする仕事をしています。
	</p>
	<div class="images">
		<img src="contents11.jpg" class="scene" alt="">
	</div>
	<p>
		2024年には、緑あふれるモデルルームを設置しました。地域のみなさんにも、気軽に『緑あふれる暮らし』を体験してもらいたいと考えています。
	</p>
	<div class="images grid-images">
		<img src="contents12.jpg" class="scene" alt="">
		<img src="contents13.jpg" class="scene" alt="">
		<img src="contents14.jpg" class="scene" alt="">
	</div>
	<p>
		私たちの仕事は、単なる工事ではなく『人々の暮らしを豊かにする仕事』です。<br>
		緑に囲まれた仕事に興味がある人は、ぜひ佐藤園芸の仕事をのぞいてみてください！
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="genkan.jpg" alt="">
				</div>
				<hgroup>
					<h3>玄関アプローチ</h3>
					<p>
						アプローチは、家の顔と言われています。毎日通る場所であり、お客様をお迎えする場所でもあるので、依頼が多い部分です。
					</p>
				</hgroup>
			</div>
			<p>玄関アプローチ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="carport.png" alt="">
				</div>
				<hgroup>
					<h3>カーポート</h3>
					<p>
						自家用車・バイク・自転車を置く場所です。車の乗り降りの際に、雨に濡れるのを防ぐほか、雪やひょうから愛車を守る用途もあります。
					</p>
				</hgroup>
			</div>
			<p>カーポート</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="contents01.jpg" alt="">
				</div>
				<hgroup>
					<h3>庭木の手入れ</h3>
					<p>
						庭木を剪定して、大きさを抑えます。見た目を綺麗にするのはもちろん、枯れた枝や葉を掃除することで、害虫や病気から守る効果もあります。
					</p>
				</hgroup>
			</div>
			<p>庭木の手入れ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="contents12.jpg" alt="">
				</div>
				<hgroup>
					<h3>緑とお花のレンタル</h3>
					<p>
						カフェ、美容室、オフィスなどにレンタルで植物をお届けしています。植物のお世話をこまめにする必要がないので、忙しいお客様からの依頼が多いです。
					</p>
				</hgroup>
			</div>
			<p>緑とお花のレンタル</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="contents11.jpg" alt="">
				</div>
				<hgroup>
					<h3>ガーデニングショップ</h3>
					<p>
						お花、観葉植物の力で、『特別な日』だけでなく『日常』を彩るお手伝いをさせていただいております。親しみのある植物から珍しい植物、ガーデニング雑貨など、さまざまな商品を取り揃えております。
					</p>
				</hgroup>
			</div>
			<p>ガーデニングショップ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="kokyokouji.jpg" alt="">
				</div>
				<hgroup>
					<h3>公共工事</h3>
					<p>
						公園の開発工事、街路樹の植栽工事、公共施設の緑地帯管理、土木工事なども行っています。
					</p>
				</hgroup>
			</div>
			<p>公共工事</p>
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
			<p class="num"><span>46</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>14</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>10</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>108</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1970</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>15</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
		<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 30, 'caption' => '30%', 'color' => '#2378C7'],
						[ 'value' => 70, 'caption' => '', 'color' => '#d9d9d9'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 35, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 65, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 55, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 45, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 50, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 70, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 60, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 30, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 30, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 84, 'caption' => "車・バイク84%", 'color' => '#E06A3A'],
						[ 'value' => 11, 'caption' => '自転車11%', 'color' => '#ff7f50'],
						[ 'value' => 5, 'caption' => '徒歩5%', 'color' => '#ff6347'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 90, 'caption' => "長野県内90%", 'color' => '#B2CF3E'],
							[ 'value' => 10, 'caption' => '県外10%', 'color' => '#FEE929'],
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
					<li>造園施工</li>
					<li>造園管理</li>
					<li>土木施工</li>
					<li>植木・園芸資材</li>
					<li>小売</li>
					<li>エクステリア</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>佐藤寛</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>24名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19232.58872601481!2d138.17914373973773!3d36.61851155130257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d84187eb95555%3A0x4e450884ae651a56!2z5qCq5byP5Lya56S-IOS9kOiXpOWckuiKuA!5e0!3m2!1sja!2sjp!4v1745414844531!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
			<dt>工事部事務所</dt>
			<dd>〒381-2247<br>長野県長野市小島田町639-1<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d443.4440010834778!2d138.18521086973732!3d36.59920060729018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1745415090997!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-283-0505</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://sato-engei.co.jp/" target="<?= $co['slug'] ?>">https://sato-engei.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>緑に囲まれた仕事をしませんか？</h3>
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">佐藤寛</span></figcaption>
		</figure>
		<p>
			佐藤園芸は、長野県で初めての造園店としてスタートし、時代に合わせて仕事の幅を広げてきました。私は、もっと多くの人に「緑ある暮らし」の良さを知ってもらい、一緒に造園の仕事をしてくれる仲間を増やしたいと思っています。<br>
			私たちの仕事は、お庭の手入れをすることだけではありません。公園や街の緑を守ったり、会社やお店に観葉植物を置いたり、フェンスやカーポートを作るエクステリア工事を行ったりすることで、人々の暮らしを豊かにしています。
		</p>
		<p>
			この仕事を続ける中では、資格を取ることも大切です。例えば「造園技能士」の資格を取れば、プロとしてもっと幅広い仕事ができるようになります。<br>
			緑に囲まれた仕事をしてみたいと思っているなら、ぜひ一緒に働きましょう！
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
			<a href="<?= $company_base ?>job_gardener/">
				<figure>
					<img src="<?= $company_base ?>job_gardener/firstview.jpg" alt="">
					<figcaption>造園職人</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_exterior/">
				<figure>
					<img src="job_exterior/firstview.jpg" alt="">
					<figcaption>エクステリア職人</figcaption>
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
