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
$description = '坂城町のグループホーム「サンタクロース」では、認知症の高齢者が自宅のように過ごせる日常を大切にしています。手伝いすぎず、見守りながら共に暮らす温かな介護を実践しています';//メタディスクリプションの追加
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
		自宅で過ごすような“日常”を
	</h2>
	<p>
		私たちは坂城町にある『グループホーム（地域密着型認知症対応型共同生活介護）』で、認知症の高齢者の生活を支える仕事をしています。大型施設のような特別な環境ではなく、自宅のように落ち着いた日常を大切にしているのが特徴です。料理や洗濯など、入居者さんができることは手伝いすぎず、一緒に楽しみながら生活しています。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="first.jpg" alt="" class="fs show">
			<img src="job_kaigo/work3.jpg" alt="" class="sc">
			<img src="third.jpg" alt="" class="th">
			<img src="fourth.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="first.jpg" alt="" class="fs">
			<img src="job_kaigo/work3.jpg" alt="" class="sc">
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
	<h4 class="point">にぎやかで、あたたかい職場</h4>
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		まるで本当の家族のようなスタッフと入居者さん。いつも笑顔で、日々の生活を楽しんでいる様子が伝わってきます。<br>
		社長も現場でスタッフと一緒に働いているので、距離が近く、職場内のコミュニケーションが活発です。なかには、社長をからかって笑わせるやんちゃなスタッフや、ウケないギャグを連発しているスタッフも(笑)<br>
		にぎやかで、あたたかい雰囲気の職場です。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		手伝いすぎない介護 
	</h3>
	<p>
		私たちは、認知症の方を受け入れているグループホームです。<br>
		グループホームとは、少人数で共同生活を送り、自宅で過ごしているような雰囲気で入居者さんの自立を支援する施設です。認知症は完治しません。ですが、環境の変化を減らし、日常生活の一部を自分でやってもらうことで 、進行を遅らせることができると言われているんです。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<p>
		「認知症」と言っても、進行度合いは人それぞれ。サンタクロースで一番大切にしているのは、『手伝いすぎない』ことです。すべてを手伝うのではなく、時には見守り、入居者さん一人ひとりのペースに合わせたサポートを心がけています。
	</p>
	<div class="images">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<p>
		サンタクロースは、入居者さんにとって『第二の家』。そしてスタッフは、まるで家族のような存在です。しっかり者のお母さんになることもあれば、お調子者のお兄ちゃんになることもあります。
	</p>
	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<p>
		特に若いスタッフは、入居者さんから孫のようにかわいがられています。
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
	<p>
		イベントでは、サンタや鬼に変身することも！
	</p>
	<div class="images">
		<img src="introduce5.jpg" class="scene" alt="">
		<img src="introduce6.jpg" class="scene" alt="">
	</div>
	<p>
		日々変わっていく入居者さんとのやりとりを楽しんでいるうちに、あっという間に時間が過ぎます。楽しんでいる場所に自然と溶け込める人には、ぴったりの仕事だと思います！
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
					<h3>お部屋</h3>
					<p>
						入居者さんが過ごすお部屋です。1人一部屋で、みなさん思い思いの部屋作りを行っています。
					</p>
				</hgroup>
			</div>
			<p>お部屋</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>トイレ</h3>
					<p>
						入居者さんが立ち上がりやすいように、L字型の手すりと跳ね上げ式の手すりを設置しています。
					</p>
				</hgroup>
			</div>
			<p>トイレ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>お風呂</h3>
					<p>
						人力だと不安定な入浴。入浴用のリフトを使用することで、スタッフも入居者さんも安心して入浴することができます。 
					</p>
				</hgroup>
			</div>
			<p>お風呂</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>51</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>10</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>0</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>108</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2020</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>6.7</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 0.001, 'caption' => '取得者なし', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.001, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 100, 'caption' => '中途100%', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 3, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 7, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 2, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 0.001, 'caption' => '', 'color' => '#00AEEF'],
					[ 'value' => 6, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 1, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 4, 'caption' => '60代以上', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 12, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 1, 'caption' => '自転車', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 9, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 4, 'caption' => '県外', 'color' => '#FEE929'],
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
					<li>認知症高齢者に対する、日常生活のお世話</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>高山賢仁</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>13名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3210.199062644198!2d138.19424!3d36.428568999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d988c05be86a9%3A0x2d3dfbf78d35a5c1!2z44Kw44Or44O844OX44Ob44O844Og44K144Oz44K_44Kv44Ot44O844K5!5e0!3m2!1sja!2sjp!4v1745994860143!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-81-3611</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://sakaki-santaclaus.jp/" target="<?= $co['slug'] ?>">https://sakaki-santaclaus.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>一緒に過ごす時間が、何よりも大切</h3>
		<figure class="portrait">
			<img src="introduce3.jpg" alt="">
			<figcaption><span class="name">高山賢仁</span></figcaption>
		</figure>
		<p>
			コミュニケーションって、ただ相手の顔を見て話すことだけだと思っていませんか？同じ空間で過ごしたり、一緒に食事をしたりする、そんな日常のひとときが実はとても大切だと考えています。<br>
			私たちの仕事に向いているのは、何よりも人と関わるのが好きな人です。おとなしい性格の人には、その人らしい関わり方があり、元気な性格の人にはまた違った関わり方があります。介護の仕事に正解はありません。だからこそ、たくさんのスタッフのやり方を見て学び、自分に合ったスタイルを見つけていってください！
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
				別日はご相談ください。
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
			<a href="<?= $company_base ?>job_kaigo/">
				<figure>
					<img src="<?= $company_base ?>third.jpg" alt="">
					<figcaption>介護スタッフ</figcaption>
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
