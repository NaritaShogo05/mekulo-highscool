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
$title = $co['company_name'] . '株式会社フレアオリジナルの高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = '長野県坂城町のフレアオリジナルは、工場で使うロボットを作っている会社です。ロボットの設計から組み立て、動かすための設定までを一貫して手掛けています。現場にぴったり合ったロボットを考え、作り、届ける。人の作業が効率よく、簡単になるようにサポートしています。';//メタディスクリプションの追加 
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
<body class="highschool furea-original">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_area">
	<img alt="" class="fv_image" src="first_view.JPG">
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
		ロボットと一緒に、未来を動かす
	</h2>
	<p>
		坂城町に、ロボットを作っている会社があるって知ってますか？<br>
        その名は、株式会社フレアオリジナル。<br>
        ちょっと難しい言い方をすると、私たちはロボット・システム・インテグレーター。<br>ロボットアームと様々なパーツを組み合わせて、人手不足や作業効率といった現場の課題を解決するためのロボットを作ります。そんなロボットづくりのプロ集団です。<br>
    </p><br>
	<p>
        また、人と一緒に働くロボット「DOBOT(ドゥボット)」の、国内でも数社しかない正規代理店として、現場に最適なロボットを届け、工場の作業の効率アップをお手伝いしています。<br>
        人とロボットが、協力して働く時代。その未来を、あなたの手でつくってみませんか？
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="first_view.JPG" alt="" class="fs show">
			<img src="busi01.jpg" alt="" class="sc">
			<img src="job_robot/robot3.jpg" alt="" class="th">
			<img src="factory.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="first_view.JPG" alt="" class="fs">
			<img src="busi01.jpg" alt="" class="sc">
			<img src="job_robot/robot3.jpg" alt="" class="th">
			<img src="factory.jpg" alt="" class="fo">
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
		<img src=<?= $highschool_base . WRITER['shomura']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['shomura']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		坂城町のフレアオリジナルは、社員10名ほどの小さな会社ですが、その最先端の仕事ぶりに驚かされました。<br>
        ここではロボットの設計、組立、配線、プログラム、現場への導入まで、すべてを一貫して手がけています。<br>
        フレアオリジナルの仕事は、“単なるモノづくり”とは一味違います。<br>
        現場が違えば課題も違う。それぞれの現場の課題を読み取り、解決策を考え、それに合うロボットを構想し、形にしていく。最初から最後まで、試行錯誤を繰り返えすロボット造りをしています。<br>
        指示を待つより、自分で考えたい。意味のある仕事に集中したい。そんな高校生には、きっとこの環境は心地よいはずです。<br>
        静かだけど、芯の強い、モノづくり大好き人間たちが、ロボットで未来を変えようとしています。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		少数精鋭！だから、ロボットの全てに関われる
	</h3>
	<p>
		フレアオリジナルは、長野県坂城町にある会社です。ロボットシステムの設計・製造・導入のサポートなどを行っています。社員数約10名で、平均年齢は35歳。若さと経験をあわせ持った、実力派のチームです。
	</p>
		<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
		<img src="factory.jpg" class="scene" alt="">
	</div>
	<p>
		一人ひとりが「ロボットクリエーター」として、担当ロボットを最初から最後まで手がけています。<br>
		設計から組立、設置、その後のケアまで全て社内で対応。だから、ロボットづくりの全工程に携わることができます。
	
	<h3>ロボットを「就職」させる仕事</h3>
	<p>
		皆さんは、「ロボット」と聞いてどんなことを思い浮かべますか？今、さまざまな工場やお店などで人手不足解消や作業効率化のため、ロボットが活躍中。<br>
		私たちが扱うロボットの中には、「協働ロボット」と呼ばれるものがあります。安全性が高く操作も簡単で、人と一緒に働くことができ、運搬や組み立て、箱詰めなどの作業をサポートして現場の負担を減らしています。
	</p>
	<div class="images">
		<img src="contents02.jpg" class="scene" alt="">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		そして私たちの仕事は、ロボットと、ロボットが働く環境を<strong>カスタマイズ</strong>すること！自動車工場の部品の組立や溶接、倉庫の荷物の運搬や仕分けなど、現場ごとに仕事内容はさまざま。<br>
		フレアオリジナルでは、現場に合わせてどんなロボットや部品を使うかを考え、ロボットの動き方も設定します。さらにコンベアやパレットなど「ロボットの作業環境」も整えて組み合わせることで、ロボットを最大限に活用できる仕組みを作ります。
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
					<h3>バリスタロボット</h3>
					<p>
						手前に設置されたタッチパネルで注文すると、ロボットがコーヒーとフォームドミルクを注入し、ラテアートを提供します。
					</p>
				</hgroup>
			</div>
			<p>バリスタロボット</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi02.jpg" alt="">
				</div>
				<hgroup>
					<h3>エンジェルビジョン デスクトップリーダー</h3>
					<p>
						本や新聞などの活字を読み取り、クリアな音声で読み上げる音声読書機です。
					</p>
				</hgroup>
			</div>
			<p>エンジェルビジョン デスクトップリーダー</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi03.jpg" alt="">
				</div>
				<hgroup>
					<h3>加工機ローディング</h3>
					<p>
						3台のロボットを使い、材料を機械にセットする作業から加工が終わったものを取り出すまでを、全自動で行っています。
					</p>
				</hgroup>
			</div>
			<p>加工機ローディング</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi04.jpg" alt="">
				</div>
				<hgroup>
					<h3>自動溶接ロボット</h3>
					<p>
						溶接機へのワークの設置から溶接作業、取り出し、製品の整列までを全自動で行うロボットです。
					</p>
				</hgroup>
			</div>
			<p>自動溶接ロボット</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi05.jpg" alt="">
				</div>
				<hgroup>
					<h3>パレタイジングロボット</h3>
					<p>
						台車で運ばれてきた20㎏の荷物を全自動で運送用のパレットへ積み替えるロボットです。
					</p>
				</hgroup>
			</div>
			<p>パレタイジングロボット</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi06.jpg" alt="">
				</div>
				<hgroup>
					<h3>EYE ROBOT</h3>
					<p>
						私たちは、新しい技術の開発にも取り組んでいます。このロボットは、動くターゲットに対して追従しながら作業をすることができます。
					</p>
				</hgroup>
			</div>
			<p>EYE ROBOT</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>3.1</span>億円</p>
		<p class="year"></p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>35.1</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span> </span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>20</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>115</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2012</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>16</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 25, 'caption' => '取得者無し', 'color' => '#d9d9d9'],
						[ 'value' => 75, 'caption' => '75%', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.01, 'caption' => '', 'color' => '#2378C7'],
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
						[ 'value' => 60, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 40, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 30, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 40, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 20, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 0.01, 'caption' => '', 'color' => '#009F6B'],
					[ 'value' => 10, 'caption' => '60代', 'color' => '#008C4A'],
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
							[ 'value' => 70, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 30, 'caption' => '県外', 'color' => '#FEE929'],
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
					<li>産業用ロボットシステム</li>
					<li>自動制御機器</li>
					<li>精密機械器具</li>
					<li>電気制御機器</li>
					<li>電子応用装置の設計・製造</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>田中陽一郎</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>10名（男性 6名／女性 4名、役員、パート・アルバイト含む）（2025年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3209.072047789946!2d138.1860619!3d36.455815099999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d991a746754e7%3A0x9405d23b01255f48!2z44CSMzg5LTA2MDEg6ZW36YeO55yM5Z-056eR6YOh5Z2C5Z-O55S65Z2C5Z-O77yZ77yU77yT77yZ4oiS77yV!5e0!3m2!1sja!2sjp!4v1750903499444!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-55-8713</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://www.flareoriginal.com/" target="_brank">https://www.flareoriginal.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="tanaka.jpg" alt="">
			<figcaption><span class="name">田中陽一郎</span></figcaption>
		</figure>
		<p>
			フレアオリジナルは、僕が27歳のときに一人で立ち上げた会社です。<br>
            どんな仕事も、まずはやってみる。それがフレアオリジナルのスタイルです。「他ではできなかった」と言われるようなことこそ挑みたくなる、そんな熱意ある仲間がそろっています。<br>
		</p>
		<p>
			ロボットをつくる先には、いつも“人”がいます。「どうすれば作業が楽になるか」、「どんなロボットがこの現場に合うか」。そんなことを日々考えながら、メンバー全員がロボットづくりの最初から最後まで、真剣に向き合っています。<br>
            特別なスキルが無くても大丈夫です。大切なのは、「もっと成長したい」という気持ちだけ。<br>
           「どう動かせばうまくいく？」「この重さ、どんなモーターで持ち上げる？」そんな風に考えるのが好きなら、きっと楽しめるはず。<br>ロボットクリエーターとして、未来をつくる仕事に挑戦してみませんか？ <br>
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
			<a href="<?= $company_base ?>job_robot/">
				<figure>
					<img src="<?= $company_base ?>job_robot/first_view.jpg" alt="">
					<figcaption>ロボットクリエーター</figcaption>
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
