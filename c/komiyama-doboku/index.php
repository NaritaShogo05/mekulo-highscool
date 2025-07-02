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
$description = '小宮山土木は、橋や道路など、みんなの生活を支えるインフラを作っている会社です。重機を使った作業や、最新の技術を使った工事など、自分の成長を感じられる仕事がたくさんあります。地域の安全を守る、大切でカッコいい仕事です！';//メタディスクリプションの追加 
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
		「まちの基盤」をつくる
	</h2>
	<p>
		小宮山土木は、橋や道路など、町の「基盤」をつくる仕事をしている会社です。<br>
		地震や大雨に強い、安全な町を目指して、新しい施設の建設や、古くなった設備の修理や補強の工事にも取り組んでいます。<br>
		また、私たちは、会社全体の強みを最大限に伸ばすため、様々な技能講習に取り組んでいます。
	</p><br>
    <p>
		この仕事には、橋をかける工事や道路を作る工事、最新のドローンや建設機械の操作など、「モノづくりの楽しさ」や「仕事を通してできるようになること」がたくさんあります。一生モノの技を身につけて、一緒にまちづくりにチャレンジしませんか？
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<div id="gallery">
		<div class="gallery_window">
			<img src="contents05.jpg" alt="" class="fs show">
			<img src="gallery01.jpg" alt="" class="sc">
			<img src="contents10.jpg" alt="" class="th">
			<img src="contents04.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="contents05.jpg" alt="" class="fs">
			<img src="gallery01.jpg" alt="" class="sc">
			<img src="contents10.jpg" alt="" class="th">
			<img src="contents04.jpg" alt="" class="fo">
		</div>
	</div>
	
	<h3>取材担当者からのポイント！</h3>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		小宮山土木の強みは、他の会社がなかなか手を出さないような仕事にも挑戦できること。業界内でも「困ったときは小宮山さんにお願いすれば間違いない」と名前が挙がるほど、特別な技術と信頼を持っています。ここでしか身につかないスキルを学べるのは、大きな魅力です。<br>
        社員の健康を大切にしているのもこの会社の特徴。「健康経営優良法人」に認定されていて、血圧計の設置やスマートウォッチの購入補助など、会社全体で健康づくりをサポートしています。<br>
        さらに、ゴルフやボウリング、ハイキングなど、社長を中心に有志で行うレクリエーションも充実。参加は自由なので、自分のペースで楽しめます。会社の敷地内には社宅もあるので、「一人暮らししてみたい！」という人にもぴったりの環境です。<br>
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		私たちのまちを整える
	</h3>
	<p>
		私たちは、橋や道路を作ったり、水道管やガス管を地面の中に通したり、人々の生活に最低限欠かせないモノ(インフラ)を整備しています。災害が発生した時は、それらをいち早く復旧する役割も担っており、安全な町を作っています。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<p>
		仕事の内容は、鉄筋の組み立てやコンクリート打設、重機の運転など、ここには書ききれないくらい多種多様です。何を作るのか、どんな工法を使うのか、現場はどんな形なのか。条件によって仕事の内容は無限に変わります。毎日が新しいことへのチャレンジ。それが私たちの仕事の魅力でもあります。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<h3>
		実は難しい！橋の工事
	</h3>
	<p>
		私たちの仕事の中で特に多いのは、橋の新設や修理の工事です。<br>
		橋って、どうやって作るか知っていますか？
	</p><br>
	<p>
        まず、地面を掘って土台を作る基礎工事を行います。次に、橋を支える柱を作り、その上に道路を支える部分をクレーンや大型機械で取り付けます。最後に舗装で道路を整え、橋の完成です。<br>
		さまざまな技術を組み合わせることで、橋が架かるのです。
	</p>
	<div class="images">
		<img src="contents05.jpg" class="scene" alt="">
		<img src="contents06.jpg" class="scene" alt="">
	</div>
	<p>
		橋づくりは、部分によって工事方法も変わり、工程も多く、多くの人の協力が必要です。通常は何社かで分担しますが、私たちは基礎の工事や地下の工事を自社で行えるので、自分たちだけで最後までやりとげることができます。
	</p><br>
	<p>
		また、橋をなおす補修工事も大事な仕事のひとつ。古い橋は、雨風で表面がひび割れたり、ボロボロになることも。そういう部分を削って取り除き、新しいコンクリートを吹き付けて修理していきます。
	</p>
	<p>
		難しいのは、見た目と実際の壊れ具合が違うこと。図面や写真では見えない部分も多く、手で触ったり、工事を始めてから「ここも傷んでたんだ」と気づくこともあります。<br>
		でも、そんな時も大丈夫。経験豊富な現場監督や職人さんがそばにいるので、すぐ相談できます。
	</p>
	<div class="images">
		<img src="contents07.jpg" class="scene" alt="">
	</div>
	<p>
		この仕事の楽しいところは、工事が進む中でだんだん形が見えてくる瞬間。ボロボロだった橋が、少しずつきれいになっていく様子を見ると「自分がここを直したんだ」と、自信にもつながっていきます。
	</p>
	<h3>
		助走期間あり！安心して現場へ
	</h3>
	<p>
		小宮山土木には、会社を支える7つの部署があります。橋の新設や道路の舗装など、町を整える工事を担う「土木部」、建物の基礎を作る「環境建築部」、上下水道やガス管など、地下に空間を作る工事を行う「地下工事部」など、どれも町づくりに欠かせません。配属先は入社後に決まり、ヘッドバー事業部、特産事業部を除く5つの部署から選ばれます。 
	</p><br>
	<p>
        入社後は2～3週間の研修があります。会社のルールや仕事の内容、測量や道具の使い方などを学び、現場に出る準備をします。高校を卒業したばかりの人にとっては、社会に慣れるための助走期間。最初から全部覚えようとしなくて大丈夫です。
	</p>
	<div class="images">
		<img src="contents08.jpg" class="scene" alt="">
	</div>
	<p>
		研修後は、配属先の現場で先輩と一緒に作業していきます。まずは職人さんの手元のお手伝いから。実際の現場でやり方を見て、覚えていくことが大切です。一人前になるには10年程かかると言われますが、続けていくことで必ず自分の成長につながります。
	</p>
	<div class="images">
		<img src="contents09.jpg" class="scene" alt="">
	</div>
	<p>
		現場は忙しくて危険な場面もあるので、緊張感が漂うときも。でも、話してみると気さくな人も多く、おしゃべり好きだったり、分からないことを教えてくれたりします。お昼を車の中で食べる人もいて、程よい距離感の中、メリハリのある雰囲気です。<br>
        現場で経験を積むうちに、「職人として技を極めたい」「施工管理として現場をまとめたい」など、自分の進みたい道が少しずつ見えてきます。高卒で入社する人は職人を目指す人が多く、机の上で学ぶより、現場で集中して腕を上げたい人に向いているかもしれません。
	</p>
	<h3>
		他社からも頼られる会社
	</h3>
	<p>
		私たちの強みは、他の会社が使わない難しい工事の方法にも挑戦できること。たとえば、特別な杭打ち機械「ダウンザホールハンマー」。これは、県内で当社だけが使える機械です。これを使うことで、硬い岩盤や不安定な地面でも、杭を打つことができ、確実に工事を進めることができます。
	</p>
	<div class="images">
		<img src="contents10.jpg" class="scene" alt="">
	</div>
	<p>
		また、災害が起きた時には、橋や道路の復旧工事が欠かせません。最近では、能登半島地震への復旧工事にも声をかけていただき、現場での支援を行いました。
	</p>
	<div class="images">
		<img src="contents11.jpg" class="scene" alt="">
		<img src="contents12.jpg" class="scene" alt="">
	</div>
	<p>
		人それぞれ関わってきた現場や経験が違うため、お互いに補い合って仕事を進めます。一人で判断して動くことも多いので、みんなの知識や技術を合わせ、チームでやり遂げる気持ちが大切。だから会社全体のレベルアップを目指し、技能講習にも力を入れています。<br>
        そのおかげで、同業他社から「小宮山土木さんならやってくれる」と頼まれることも多く、数々の現場に駆けつけています。<br>
        新しいことにチャレンジするだけでなく、困っている現場から頼られること。それが、私たちの誇りです。
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
					<h3>土木部</h3>
					<p>
						橋の新設や道路の舗装、トンネルの掘削など、町の基盤を整える工事を担当しています。特に橋の工事では、さまざまな特殊な方法を扱います。
					</p>
				</hgroup>
			</div>
			<p>土木部</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi02.jpg" alt="">
				</div>
				<hgroup>
					<h3>土木保全部</h3>
					<p>
						橋の補修や、耐震補強工事を得意としています。日本の橋や水路は老朽化が進んでおり、私たちが補修を行っています。
					</p>
				</hgroup>
			</div>
			<p>土木保全部</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi03.jpg" alt="">
				</div>
				<hgroup>
					<h3>環境建築部</h3>
					<p>
						公共の建物や一般住宅など、建物の基礎作りを担当しています。安全な建物を支えるために、地盤や土壌の調査も行います。
					</p>
				</hgroup>
			</div>
			<p>環境建築部</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi04.jpg" alt="">
				</div>
				<hgroup>
					<h3>地下工事部</h3>
					<p>
						上下水道やガス水路など、地下に空間を作る工事を行います。写真のような大きな掘削機を使い、ガスや水道のパイプを埋めたり、トンネルを作ったりします。
					</p>
				</hgroup>
			</div>
			<p>地下工事部</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="contents10.jpg" alt="">
				</div>
				<hgroup>
					<h3>基礎工事部</h3>
					<p>
						この写真がダウンザホールハンマーです。自社で持っている機械で、ダウンザホールハンマー工事など杭の工事を行います。災害復旧の現場などで、たくさんの工事をしてきました。
					</p>
				</hgroup>
			</div>
			<p>基礎工事部</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi05.jpg" alt="">
				</div>
				<hgroup>
					<h3>特産事業部</h3>
					<p>
						信州の特産品の「りんご」。栽培、加工、販売を行っています。
					</p>
				</hgroup>
			</div>
			<p>特産事業部</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年6月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>24</span>億円</p>
		<p class="year">※2025年6月実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>45</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>15</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>3</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>112</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1974</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>13.6</span>日</p>
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
						[ 'value' => 15, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 85, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 88, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 12, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 11, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 12, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 15, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 31, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 31, 'caption' => '60代', 'color' => '#008C4A'],
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
							[ 'value' => 87, 'caption' => "長野県内87%", 'color' => '#B2CF3E'],
							[ 'value' => 23, 'caption' => '県外13%', 'color' => '#FEE929'],
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
					<li>橋や道路を新たに作ったり、今あるものを補修・補強したりする仕事</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>佐藤謙也</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>70名（男性 62名／女性 8名、役員、パート・アルバイト含む）（2025年6月現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3215.372535705341!2d138.3031742!3d36.3032719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601db0bebb7f4b3f%3A0xab930bf1dbbe4ff4!2z44CSMzg0LTIzMDgg6ZW36YeO55yM5YyX5L2Q5LmF6YOh56uL56eR55S654mb6bm_77yR77yW77yR77yW4oiS77yR!5e0!3m2!1sja!2sjp!4v1751346582066!5m2!1sja!2sjp" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0267-56-1299</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://komiyama.jp/" target="<?= $co['slug'] ?>">https://komiyama.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="satou.jpg" alt="">
			<figcaption><span class="name">佐藤謙也</span></figcaption>
		</figure>
		<p>
			私たちは、土木工事を通して地域の暮らしを支えてきました。最近ではITを活用した新しい工法を学び、作業の効率化や安全性の向上に取り組んでいます。
		</p>
		<p>
			私たちは、「人を大切にする会社であること」を大事にしています。社員の健康を支援するために、スポーツイベントやスマートウォッチ購入補助などの福利厚生を充実させ、安心して長く働ける仕組みを整えています。<br>
            また、職場での人間関係に悩むことがあったら、部署移動も可能です。<br>
            必要な資格や技能講習は会社が全額支援します。努力した分だけ、しっかり成長していける仕事です！
		</p>
		<p>
			建設の技を磨き成長し続けたい人や、自分の気持ちを積極的に発信できる人にはぴったりの環境です。そんなあなたとの出会いを、楽しみにしています。
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
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../../tab.js"></script>
<script src="../../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php //include $base . '../footer.php' ?>
</body>
