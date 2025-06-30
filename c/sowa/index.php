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
$description = '暮らしの当たり前を支える会社、相和。プラスチックの原料「ペレット」や自動車部品の鋳造に使う砂型「中子」を製造。車部品や食品包装、化粧品容器などに使われ、食品ロス削減にも貢献。約18名のチームでフォロー体制も充実。長野県東御市を拠点に、環境に配慮した機能性プラスチックを安定供給しています。';//メタディスクリプションの追加
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
	<h2>暮らしの当たり前を支える仕事がここにある！</h2>
	<p>
		「これ、自分が関わったものかも」──日常の中で誇りを感じられる仕事、相和にはあります。<br>
		私たちは、プラスチック製品の“もと”になる小さな粒「ペレット」を作っている会社です。車の部品やお菓子の袋、化粧品の容器など、あなたの身の回りのあちこちで、私たちの材料が使われています。<br>
		さらには、自動車部品などをつくる鋳造（ちゅうぞう）の現場で使われる「中子（なかご）」という砂の型の製造も手がけ、ものづくりを多方面から支えている会社です。<br>
		派手さはないけれど、暮らしの“当たり前”を陰から支えている実感が、日々のやりがいに。<br>
		モノづくりの現場で、あなたの力を活かしてみませんか？
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
		お話をうかがって「そんな仕事があるんだ」とびっくりした会社です。<br>
		マヨネーズの容器や、ポテトチップスの包装って、プラスチックでできているのはご存知だと思います。それが何層にもなっているって知っていますか？それぞれの層ごとに機能の違うプラスチックのフィルムが使われていて、そのフィルムどうしを接着する樹脂材料を作っているのが株式会社相和です。<br>
		いわゆる高分子を扱う仕事です。<br>
		そう聞くと、「難しそう」と思うかもしれません。確かに突き詰めると難しい仕事です。<br>
		でも大丈夫！先輩は優しく教えてくれるし、決まった手順にそった作業を少しずつ覚えていけば、活躍できる職場です。また、フォークリフトの運転が仕事に必須で、免許取得を会社が完全バックアップしてくれるので、安心してください。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		日常に不可欠な材料メーカー
	</h3>
	<p>
		株式会社相和は、長野県東御市にある会社です。大きく分けると「化学系事業」と「鋳造系事業」の二本柱の事業をおこなっています。具体的には、鋳造品の内部空間造形のためのシェル中子とプラスチックの材料となる粒「ペレット 」を製造しています。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<h3>
		消えてなくなる製品：鋳造系事業
	</h3>
	<p>
		鋳造ってご存知ですか？金属を熱でとかし鋳型(いがた)に流し込んで器物を作ることです。<br>
		鋳造品を作るとき内側に空間を作る必要があるものがあります。例えば、自動車のシリンダーのように筒状のものを想像してもらえるとわかりやすいと思います。<br>
		その空間を作るための部品を砂と樹脂を作っています。説明をするのが本当に難しい製造品ですが、「百聞は一見にしかず」の言葉どおり、実際に見てもらえれば「あ～、そういうこと」とわかってもらえると思います。<br>
		せっかく作ったこの中子といわれる製品。鋳造の過程で消えてなくなってしまう製品なんです！
	</p>
	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<h3>ペレットづくりで社会とつながる仕事、ここにあります</h3>
	<p>
		ペレットというのは、米粒みたいな小さなプラスチックの粒。この粒を元に、いろんな製品が作られています。たとえば、車の部品、食品パッケージ、化粧品の容器など。私たちのペレットが使われた製品は、全国のあちこちで活躍しています。
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
		<img src="introduce5.jpg" class="scene" alt="">
	</div>
	<p>
		社員数は約18名。大きな会社ではないけれど、その分、チームワークはばっちり。新人さんへのフォロー体制も整っていて、「わからないことは何でも聞ける雰囲気」が自慢です。
	</p>
	<div class="images">
		<img src="introduce6.jpg" class="scene" alt="">
	</div>
	<h3>「プラスチック＝悪」じゃない。正しく使えば、地球にやさしい素材です。</h3>
	<p>
		「プラスチックって、環境に悪いんじゃないの？」と感じる人もいるかもしれません。でも実は、プラスチックは暮らしに欠かせない大事な素材なんです。<br>
		たとえば、みんなが毎日使っているスマホやボールペン、メガネ、スニーカー、洗濯機、冷蔵庫、バスルーム、そして自動車にも──ほぼすべてのものに、プラスチックが使われています。
	</p>
	<div class="images">
		<img src="introduce7.jpg" class="scene" alt="">
	</div>
	<p>
		相和化成が作っているのは、ただのプラスチックではなく「機能性プラスチック」。これは、たとえばポテトチップスやマヨネーズなどの食品を、湿気や光から守って“おいしいまま”長持ちさせるためのフィルムを何層も重ねて接着して、1枚に見えるようにする為の素材です。食品のムダ（＝食品ロス）を減らすことにもつながっているんです。<br>
		「当たり前の暮らし」を守る素材を、地球にやさしく届ける──それが私たちの仕事です。
	</p>
	<h3>東御市にあることに意味があるんです！</h3>
	<p>株式会社相和は大手樹脂メーカーのバックアップを担っている会社です。津波の心配のない長野県で樹脂の安定供給を支えています。</p>
	<div class="images">
		<img src="introduce8.jpg" class="scene" alt="">
	</div>
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
					<h3>プラスチックペレット製造</h3>
					<p>
						相和の主な仕事は、プラスチック製品のもとになる「ペレット」という材料をつくることです。<br>
						できたペレットは、車の部品や食品のパッケージ、化粧品の容器などに使われ、あなたの身の回りに広がっています。
					</p>
				</hgroup>
			</div>
			<p>プラスチックペレット製造</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce3.jpg" alt="">
				</div>
				<hgroup>
					<h3>鋳造用中子（ちゅうぞうようなかご）</h3>
					<p>
						金属製品をつくるときに使う“砂の型”を作る仕事です。主に自動車関連の部品づくりに欠かせないもので、こちらの分野でも高い技術で評価されています。
					</p>
				</hgroup>
			</div>
			<p>鋳造用中子（ちゅうぞうようなかご）</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>493.76</span>万円</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>41.5</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>10.5</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>10.4</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>112</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1976</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>12</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.001, 'caption' => '取得者なし', 'color' => '#2378C7'],
						[ 'value' => 100, 'caption' => '', 'color' => '#d9d9d9'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 1, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 16, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 13, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 4, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 4, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 5, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 4, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 2, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 3, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 79, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 21, 'caption' => '自転車', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 13, 'caption' => "長野県内", 'color' => '#B2CF3E'],
						[ 'value' => 4, 'caption' => '県外', 'color' => '#FEE929'],
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
					<li>
						プラスチックペレットの製造
					</li>
					<li>鋳造用中子の製造</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>
				代表取締役<br>
				関　俊樹
			</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>17名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.0642275590494!2d138.32506707639502!3d36.38343917236887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601db95d1fbc266b%3A0x4348d5861d8aff1f!2zKOagqinnm7jlkow!5e0!3m2!1sja!2sjp!4v1749623177369!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-62-4105</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://sowac.co.jp/" target="<?= $co['slug'] ?>">https://sowac.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
		</figure>
		<p>
			うちの仕事は、パッと見で“すごい！”って思われることは少ないかもしれません。<br>
			でも、“目に見えないけど必要なもの”をつくるって、すごいことだと思いませんか？<br>
			私たちの製品は、直接目にすることは少ないかもしれませんが、社会のあらゆる場面で活躍しています。ポテトチップスの袋やマヨネーズの容器など、みなさんの身近で私たちの製品が使われています。<br>
			これまで若い人が安心して成長できるように、職場の環境を整えてきました。“ちゃんと教える” “無理させない” “人間関係で辞めない”──そんな会社を目指しています。モノづくりにちょっとでも興味があるなら、まずは見に来てください。
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
			<a href="<?= $company_base ?>job_machine/">
				<figure>
					<img src="<?= $company_base ?>job_machine/firstview.jpg" alt="">
					<figcaption>マシンオペレーター</figcaption>
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
