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
$title = $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$keywords = '';//メタキーワードの追加
$description = '';//メタディスクリプションの追加 

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/';

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
<?php if ($keywords) { ?>
<meta name="keywords" content="<?= $keywords ?>">
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
		"name": "高卒特集",
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
		設計図＝考えるものづくりの地図
	</h2>
	<p>
		私たちの会社が作っているものは「ものづくりの説明書」。製品の“使い方”ではなく、“作り方”を伝える設計図を作っています。<br>
		産業機械を設計したり、産業機械で製品を作るための型である金型(かながた)を設計したりします。この設計図をもとに、産業機械や部品が作られます。<br>
		設計図は、組み立てる人や加工する人が迷わないようにする「地図」のようなもの。正しくなければ、部品の形が違ってしまったり、そもそも機械が動かなかったりします。<br>
		さらに機械は、目的に合わせ「持ち上げる」「加工する」「運ぶ」など、いろいろな動きをします。その動きを順番どおりコントロールする手順を作ることを「制御設計」といいます。<br>
		設計という仕事は、形になっていないイメージをカタチにすること。頭の中のアイデアを、誰でも同じように作れるように説明書として残す。<br>
		それが、私たちの“考えるものづくり”です。

	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="gallery01.jpg" alt="" class="fs show">
			<img src="contents03.jpg" alt="" class="sc">
			<img src="gallery02.jpg" alt="" class="th">
			<img src="job_cad/cad04.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="gallery01.jpg" alt="" class="fs">
			<img src="contents03.jpg" alt="" class="sc">
			<img src="gallery02.jpg" alt="" class="th">
			<img src="job_cad/cad04.jpg" alt="" class="fo">
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
	<h4 class="point">「失敗歓迎!」な職場</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['ichikawa']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['ichikawa']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		社員の皆さんは静かな環境の中で黙々とパソコンに向かって仕事をしています。<br>でも、デスク周りは、それぞれの社員さんの個性が表れていて、小さなフィギュアやお気に入りのアイテムがさりげなく置かれていたりしました。<br>
		ごちゃごちゃした空間ではなく、「自分だけのルール」で整えられた空間だと感じました。<br>
		それぞれが納得のいく環境で、思考を巡らせる日々を送っている。そんな印象を受けました。<br>
		設計の仕事は、基本を守りながら、手順に沿ってコツコツと正確に作業を進めることが大切です。入社後は1か月間の研修があり、図面の見方から丁寧に教えてもらえるので、設計が初めての人も安心してください。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		ものづくりの“仕組み”を描く仕事
	</h3>
	<p>
		ルート設計株式会社では、産業用機械の設計図を作っています。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
	</div>
	<p>
		設計は、機械の目的や機能、構造、使う素材まで、一つひとつ論理的に組み立てていくしごとです。そのため、「構想」「基本」「詳細」と３段階に分けて設計していきます。<br>
		「どう動くべきか」「この部品はなぜ必要なのか」を突き詰め、数字の漏れがないか細かくチェックしていくほど、図面は正確で美しいものになります。<br>
		設計図は、いわば『機械を作るための説明書』。受け取った作業者が図面通りに組み立て、思い描いた通りの製品が生まれます。<br>
		だからこそ、設計者は“迷わせない図面”を描く必要があるのです。
	</p>
	<h3>
		わたしたちルート設計の強み
	</h3>
	<p>
		機械が正しく動くためには、機械の構造と内部のプログラムが密接に連携している必要があります。だから当社では、「機械設計」と「制御設計」の両方を担います。
	</p>
	<div class="images">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<p>
		機械のしくみを決める人と、機械の動かし方を設計する人が、同じ目線でやりとりできる。それが、私たちの強みです。<br>
		緻密な構造、正確な動き、無駄のない仕組み。すべての要素に意味を持たせるのが、ルート設計の設計者たちです。
	</p>
	<h3>
		まずは「部品図」を描くところから
	</h3>
	<p>
		入社後は「部品設計」から学びます。<br>
		機械を構成する何百という部品を、ひとつずつ図面に起こし、正確に寸法を記載します。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		すべての部品には“理由”があります。<br>
		「なぜこの形状なのか？」「この素材にはどんな意図があるのか？」<br>
		そんな問いを繰り返しながら、一つひとつの部品に意味を与えていくのが私たちの仕事です。
	</p>
	<h3>
		求められる姿勢
	</h3>
	<p>
		設計の現場では、すぐに答えがでない問題にたくさん出会います。でも、わからないからこそ面白い。<br>
		「なぜ？」を見過ごさず、自分で調べ、仮説を立て、構造を理解していく。その姿勢こそが、優れた設計者の土台になります。<br>
		ルート設計では、設計未経験者でも安心して仕事を始められるように、1か月間の研修期間を用意しています。設計図の読み方やルール、チェック方法まで、会長自らが丁寧に教えてくださいます。
	</p>
	<div class="images">
		<img src="contents04.jpg" class="scene" alt="">
		<img src="contents05.jpg" class="scene" alt="">
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
					<h3>部品図</h3>
					<p><!-- --></p>
				</hgroup>
			</div>
			<p>部品図</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi02.jpg" alt="">
				</div>
				<hgroup>
					<h3>制御図</h3>
					<p><!-- --></p>
				</hgroup>
			</div>
			<p>制御図</p>
		</li>
	
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>2</span>億2838万円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>39</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>15</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>18</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>122</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1982</span>年</p>
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
						[ 'value' => 100, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 0.01, 'caption' => '取得者無し', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 90, 'caption' => '新卒9', 'color' => '#2378C7'],
						[ 'value' => 10, 'caption' => '中途1', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 90, 'caption' => '男性：9', 'color' => '#0062B5'],
						[ 'value' => 10, 'caption' => '女性：1', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 10, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 20, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 30, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 40, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 100, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 40, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "車・バイク", 'color' => '#E06A3A'],
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
							[ 'value' => 87, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 23, 'caption' => '県外', 'color' => '#FEE929'],
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
					<li>自動車部品</li>
					<li>工作機械</li>
					<li>時計部品等を作る工作機械の機械設計</li>
					<li>プラスチック製品等の金型設計</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>大井雄司</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>25名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.9661417819393!2d138.233056!3d36.361599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601da3565e35beab%3A0x58023ab3a0a3db9!2z44Or44O844OI6Kit6KiI!5e0!3m2!1sja!2sjp!4v1751283019731!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-37-1570</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://root-design.securesite.jp">https://root-design.securesite.jp</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3></h3>
		<figure class="portrait">
			<img src="boss_sp.jpg" alt="">
			<figcaption><span class="name">大井雄司</span></figcaption>
		</figure>
		<p>
			高校生の皆さん、はじめまして！<br>
			私たちルート設計株式会社は、お客様のイメージをもとに、機械の仕組みや動きを「図面」として形にしていく設計の会社です。<br>
			設計の仕事は、ただ自分のアイデアを描くものではありません。一般のお客様、販売店、商品メーカー、機械メーカー、そして機械を使う現場。多くの人の視点や要望を聞き、それらを論理的に整理しながら、最適な形を導き出していく──それが、私たちの仕事です。<br>
			設計がはじめてでも大丈夫！入社後の1ヶ月間、経験豊富な当社の会長が皆さんの先生です。図面の基礎から社会人としてのマナーまで、一つひとつ丁寧に教えてくださいます。<br>
			その後も、先輩がマンツーマンでサポートしますので、安心して仕事に取り組むことができます。<br>
			「仕組みを考えるのが好き」「正確さにこだわりたい」「納得してから動きたい」<br>
			あなたにそんな一面があれば、設計の仕事はきっと向いているはずです。ぜひ一緒に働きましょう！
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
			<a href="<?= $company_base ?>job_kinzoku/">
				<figure>
					<img src="<?= $company_base ?>job_cad/first_view.jpg" alt="">
					<figcaption>機械CADオペレーター</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_seigyo/">
				<figure>
					<img src="first_view.jpg" alt="">
					<figcaption>機械設計・制御設計</figcaption>
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
