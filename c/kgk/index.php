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
		むずかしい会社だと思わないでください（願）
	</h2>
	<p>
		科学技術開発センターというと固くて難しそうな会社のイメージを持つかもしれません。みなさんの身の回りの安全って、法律で決めた安全基準に則っているから、守られているってご存知ですか？<br>
		もちろん、その安全基準が守られているかを測っている人がいるわけです。そんな仕事をしているのがＫＧＫ（科学技術開発センター）です。<br>
		専門用語を使うことも多く、法律が守られているかを確かめる仕事なので、固くて難しそうと思うのも無理ないことですが、実は自然環境に関心のある、アウトドア派の社員が集う会社です。
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
		科学技術開発センター（KGK）は、「好奇心」が仕事になる会社です。たとえば山にこもって野生動物の数を調べたり、普段は立ち入りが難しい場所に行って地面や空気、水などのサンプルを採取したり。新しく建った建物の気密性を測るような仕事もあります。集めたデータは分析され、社会の安全や環境を守るための基準づくりに活かされます。<br>
		入社したばかりのころは、専門用語が多くて戸惑うかもしれません。でも、最初は誰でも初心者。大事なのは「なぜ？」「どうして？」を楽しめる気持ち。サイエンスや化学に興味がある人にはぴったりの職場です。机の前だけじゃなく、自然の中でも実験ができる。そんなちょっと特別な研究フィールドが、ここにはあります。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>好奇心が仕事になる会社</h3>
	<p>
		科学技術開発センター（KGK）は、長野市に本社を置く、環境調査と分析の専門企業です。水や空気、土壌、放射能、臭いなど、身の回りの環境を「科学の目」で測り、私たちの安全な暮らしを守るためのデータを提供しています。
	</p>
	<div class="images">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<h3>現場とラボ、どちらも舞台</h3>
	<p>
		KGKの仕事は、屋外と屋内、両方で行われます。たとえば、山に入って野生動物の数を調べたり、地面や川の水からサンプルを採取したり。ときには新しく建った住宅や施設で、空気の漏れを測定することもあります。調査で得たサンプルは会社に持ち帰り、ラボで細かく分析。その結果をまとめた報告書が、行政や企業の環境対策の基礎データとして活用されます。
	</p>
	<div class="images">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<h3>測るのは「安全」と「未来」</h3>
	<p>
		測定や分析の対象は多岐にわたります。空気中の化学物質（VOC）、住宅の気密性、工場の排水、土壌中の有害物質、放射線、悪臭…など、どれも人々の健康や地域の環境に関わるものばかりです。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
	</div>
	<h3>社会に役立つ実感がある仕事</h3>
	<p>
		KGKの仕事は、社会や地域の人々の安全を守る、いわば「縁の下の力持ち」。自分が関わったデータが、環境保全や建物の安全確保につながるとわかったとき、大きなやりがいを感じることができます。SDGs（持続可能な開発目標）にも積極的に取り組み、環境負荷を減らす社内活動も進めています。
	</p>
	<div class="images">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<h3>「知らない世界」をのぞいてみよう</h3>
	<p>
		もし、あなたが理系の道に進みたいと考えているなら。もし、自然や環境、社会のことに関心があるなら。KGKの仕事は、きっとあなたの好奇心を刺激してくれます。実際の現場を見てみたい、働く人の話を聞いてみたいという人は、ぜひ会社見学に参加してみてください。
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="firstview.jpg" alt="">
				</div>
				<hgroup>
					<h3>水質検査</h3>
					<p>
						自然環境の水から、水道の水までいろいろなところの水質を検査しています。
					</p>
				</hgroup>
			</div>
			<p>水質検査</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi2.jpg" alt="">
				</div>
				<hgroup>
					<h3>作業環境測定</h3>
					<p>
						工場の作業環境を測定し、働いている人が安全に作業できる環境か確認します。また、安全基準を満たすためのアドバイスをすることも、大切な仕事です。
					</p>
				</hgroup>
			</div>
			<p>作業環境測定</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi3.jpg" alt="">
				</div>
				<hgroup>
					<h3>悪臭物質測定</h3>
					<p>
						現在22の物質に規制があります。その代表的なものは、アンモニアやメチルメカブタンという、悪臭の原因となる物質です。その濃度を計測するためのサンプルを採取します。
					</p>
				</hgroup>
			</div>
			<p>悪臭物質測定</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi4.jpg" alt="">
				</div>
				<hgroup>
					<h3>製品分析</h3>
					<p>
						みなさんのよく知るコンビニのお弁当やサンドウィッチ。一部工場の製造過程で使う水の浄化装置はKGKの技術が活かされています。
					</p>
				</hgroup>
			</div>
			<p>製品分析</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi5.jpg" alt="">
				</div>
				<hgroup>
					<h3>騒音振動測定</h3>
					<p>
						騒音や振動の規制基準は朝、昼、夜などに分けられています。それぞれの時間帯で測定をおこないます。
					</p>
				</hgroup>
			</div>
			<p>騒音振動測定</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>-</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>-</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>15</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>110</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1984</span>年</p>
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
						[ 'value' => 0.001, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 100, 'caption' => '（仮）100%', 'color' => '#2378C7'],
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
						[ 'value' => 100, 'caption' => '（仮）中途100%', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 3, 'caption' => '（仮）男性', 'color' => '#0062B5'],
						[ 'value' => 3, 'caption' => '（仮）女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 1, 'caption' => '（仮）20代', 'color' => '#0073B7'],
					[ 'value' => 1, 'caption' => '（仮）30代', 'color' => '#00AEEF'],
					[ 'value' => 4, 'caption' => '（仮）40代', 'color' => '#00B398'],
					[ 'value' => 2, 'caption' => '（仮）50代', 'color' => '#009F6B'],
					[ 'value' => 1, 'caption' => '（仮）60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "（仮）車・バイク100%", 'color' => '#E06A3A'],
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
							[ 'value' => 100, 'caption' => "（仮）長野県内100%", 'color' => '#B2CF3E'],
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
				環境分析
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>若林恒雄</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>29人</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d34254.812434959706!2d138.20833647254778!3d36.64388754961823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d85fe21c88ed1%3A0x8d220fff33b8edc5!2z44CSMzgxLTAwMjUg6ZW36YeO55yM6ZW36YeO5biC5YyX6ZW35rGg77yS77yQ77yV77yY4oiS77yXIOenkeWtpuaKgOihk-mWi-eZuuOCu-ODs-OCv-ODvA!5e0!3m2!1sja!2sjp!4v1751877770799!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-263-2010</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://kgk-c.co.jp/" target="<?= $co['slug'] ?>">https://kgk-c.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="comingsoon.png" alt="">
			<figcaption><span class="name">名前サンプル</span></figcaption>
		</figure>
		<p>
			科学技術開発センターには、自然が好きな“アウトドア派”の社員がたくさんいます。休みの日には山に入り、ソロキャンプをしたり、野草や昆虫を観察したり。そんな日常の中で育まれた好奇心は、実は仕事でもとても役立っています。たとえば、ある現場で測定中にちょっとした違和感に気づき、そこから新たな検査が必要だと判断されたことも。大切なのは、「この会社の安全のために何ができるだろう？」という視点です。科学や自然が好きなあなた、その“気づく力”を社会の役に立ててみませんか？あなたの好奇心が、未来を守る力になります。
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
			<a href="<?= $company_base ?>job_sokutei/">
				<figure>
					<img src="job_sokutei/firstview.jpg" alt="">
					<figcaption>技術部測定課</figcaption>
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
