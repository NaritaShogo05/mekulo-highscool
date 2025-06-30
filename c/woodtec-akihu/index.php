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
$description = '株式会社 ウッドテック秋富の企業紹介ページです。株式会社 ウッドテックは、長野県上田市にある木製建具・家具を製造している会社です。ドアや棚、学校の家具などをオーダーメイドで作っています。地元の木を使い、昔ながらの技と新しい機械を合わせて、あたたかみのあるものづくりをしています。';//メタディスクリプションの追加 
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
	<img alt="" class="fv_image" src="first-view2.jpg">
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
		日常になじむ木のアイテムをつくる
	</h2>
	<p>ウッドテック秋富は木材を使って、ドアや戸などの建具や、棚などの大きな家具をオーダーメイドでつくる会社です。また、窓やドアの枠となる木製サッシも手がけています。<br>
       家で使うもの以外にも、学校や図書館など、公共の施設でも私たちの作ったものが使われています。<br>
	   身近な素材を使って、身近なものを作り上げる。自分が作った建具や家具が、家族や友達の暮らしの中で使われていたら、ちょっと嬉しくなりませんか？
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="gallery01.jpg" alt="" class="fs show">
			<img src="gallery02.jpg" alt="" class="sc">
			<img src="gallery03.jpg" alt="" class="th">
			<img src="gallery04.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="gallery01.jpg" alt="" class="fs">
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
	
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		ウッドテック秋富さんを取材して印象的だったのは、社員のみなさんが本当に楽しそうに仕事をしていたことです。<br>
        といっても、「わいわい楽しい」という楽しさとは少し違います。<br>
        木材がピタッとはまったときの達成感や、難しい作業をやりきる面白さなど、自分の仕事と真剣に向き合っているからこその「楽しさ」があちこちにあふれていました。
        どの職種の仕事も、基本的には一人で黙々と取り組むスタイル。ですが、現場では「これ、先にやっちゃうね」「ここお願いできる？」と自然に声をかけ合う場面も。<br>
        真剣だけど、気さくな社員さんたちがあなたを待っています。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		木材を理想の形に仕上げる
	</h3>
	<p>
		私たちは、上田市で木製のサッシやオーダーメイドの建具、家具を造っている会社です。真田工場ではオーダーメイドの建具や家具を、芳田工場では木製サッシを造っています。<br>
		中学校の技術の授業で、木材で棚や小物入れを作ったことを覚えていますか？設計図を描き、線を引いて、のこぎりで切断、表面を磨いて塗装する。懐かしいですよね。プロの仕事では、道具も技術もさらに本格的で、仕上げたものは世代を超えて残ります。
	</p><br>
    <p>
		まず、CADという設計ソフトで図面を作成します。これを使うと、サイズや形を正確に決め、見やすい図面を素早く仕上げることができます。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
	</div>
	<p>
		次に、使うのは信州産の木材。CADで作ったデータをもとに木材を機械でカットし、加工します。
		当社で製造する製品は、学校で作るものとは違って、丸みをつけたり同じ形の部品がいくつも必要になったりします 。このようなことを手作業で行うと難しいのですが、機械を使えば正確に美しく仕上げることができます。
	</p>
	<div class="images">
		<img src="contents02.jpg" class="scene" alt="">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		プロの仕事では釘をあまり使わず、木をぴったり合う大きさに加工し、パーツ同士をはめこむことが多いので、形がぴったり合わない時は、削ったり埋めたりして調整が必要になります。<br>
		ピッタリはまったら、思わず「やった！」ってなりますよね。一本一本の木が、職人の手で家の一部として形になります。
	</p>
	<div class="images">
		<img src="contents04.jpg" class="scene" alt="">
		<img src="contents05.jpg" class="scene" alt="">
	</div>
	<h3>
		受け継いだ伝統を、現代の建具に
	</h3>
	<p>
		ウッドテック秋富は、設立から120年以上、一般住宅から寺社仏閣まで、多くの木造建築に携わってきました。木造建築物を受け継ぐための伝統技術を、ふすまや窓、扉など、現代の建具づくりにも活かしています。
		私たちは長野県の伝統工芸「信州組子(くみこ)細工」の継承にも貢献しています。
	</p>
	<div class="images">
		<img src="contents06.jpg" class="scene" alt="">
		<img src="contents07.jpg" class="scene" alt="">
	</div>
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
					<h3>別荘内の建具・家具</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>別荘内の建具・家具</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi02.jpg" alt="">
				</div>
				<hgroup>
					<h3>小学校の棚</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>小学校の棚</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi03.jpg" alt="">
				</div>
				<hgroup>
					<h3>小学校のロッカー</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>小学校のロッカー</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi04.jpg" alt="">
				</div>
				<hgroup>
					<h3>ドア</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>ドア</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi05.jpg" alt="">
				</div>
				<hgroup>
					<h3>木製サッシ</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>木製サッシ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi01.jpg" alt="">
				</div>
				<hgroup>
					<h3>組子の使われている建具</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>組子の使われている建具</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>6.7</span>億円</p>
		<p class="year"></p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>42.8</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>12.5</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>6.6</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>112</span>日</p>
			<p class="at"> </p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1902</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>12.8</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.01, 'caption' => '', 'color' => '#d9d9d9'],
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
						[ 'value' => 76, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 24, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 5, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 13, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 26, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 28, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 17, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 11, 'caption' => '60代', 'color' => '#008C4A'],
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
							[ 'value' => 0.01, 'caption' => '', 'color' => '#FEE929'],
													]); ?>
					</svg>
				</div>
		</li>
	</ul>	
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src="job_kakou/sanada.jpg" alt="" class="scene">
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
					<li>建具・家具・木製サッシの製造販売</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>太田幸雄</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>45名（男性 34名／女性 11名、役員、パート・アルバイト含む）（2025年6月1日現在）</dd>
		</div>
		<div>
			<dt>真田工場 所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25677.65533748563!2d138.310348!3d36.440469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dbddb15a2af99%3A0xf14f765602bf437a!2z77yI5qCq77yJ44Km44OD44OJ44OG44OD44Kv56eL5a-M!5e0!3m2!1sja!2sjp!4v1750672222691!5m2!1sja!2sjp"allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>芳田工場 所在地</dt>
			<dd>〒386-0151<br>長野県上田市芳田1052<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12845.542554161042!2d138.304578!3d36.399864!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dbc11f3ad8289%3A0x5cf953f1ea85645d!2z44Km44OD44OJ44OG44OD44Kv56eL5a-M!5e0!3m2!1sja!2sjp!4v1750750079748!5m2!1sja!2sjp"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>真田工場 電話番号</dt>
			<dd>0268-72-2003</dd>
		</div>
		<div>
			<dt>芳田工場 電話番号</dt>
			<dd>0268-71-5477</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://www.akifu.com" target="<?= $co['slug'] ?>">https://www.akifu.com</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">太田幸雄</span></figcaption>
		</figure>
		<p>
			この会社では、長年受け継がれてきた技を、次の世代へつなぐことを大切にしています 。
			上下関係を気にしすぎず、自由に意見を言える。そんな雰囲気が、職人としての成長を支えてくれると思っています。<br>
		</p>
		<p>
			私たちの仕事は、一日や二日で覚えられるものではありません。時間をかけて経験を積むことで、少しずつ出来ることが増えていきます。<br>
            枠や壁にぴったり収めて、イメージ通りに仕上げるには、細かな気配りも必要です。こういう感覚は先輩たちのもとで基本から学び、コツコツ身につけていくもの。だから、最初はうまくできなくても大丈夫。焦らず自分のペースで成長してください。<br>
            木に関わる仕事がしたい人、自分で考えて行動するのが好きな人、お待ちしています。
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
				※その他の日程は相談して下さい。
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
					<img src="<?= $company_base ?>job_kakou/first-view.jpg" alt="">
					<figcaption>加工職人</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_tosou/">
				<figure>
					<img src="<?= $company_base ?>job_tosou/first_view.jpg" alt="">
					<figcaption>塗装職人</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_sekkei/">
				<figure>
					<img src="<?= $company_base ?>job_sekkei/first_view.jpg" alt="">
					<figcaption>設計職</figcaption>
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
