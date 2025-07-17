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
$title = $co['company_name'] . '株式会社マルイの高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = '株式会社マルイは長野県東御市を拠点に鉄筋・鋼材・建築資材を加工・販売をしています。誠実な企業姿勢と成長志向で20億円企業を目指し、社員一人ひとりの挑戦を応援します。';//メタディスクリプションの追加 
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
	<img alt="" class="fv_image" src="fv.jpg">
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
		<li class="jobs"><a href="#recruitment_requirements">募集要項</a></li>
	</ol>
</section>
<div class="about-com content" id="company_gallery">
	<h2>
		未来の自分をつくる、成長企業
	</h2>
	<p>私たちマルイは、長野県東御市に拠点を置き、鉄筋や鉄骨などの建築資材を加工・販売している会社です。<br>
		創業1973年。長い歴史を持ちながらも、昔ながらのやり方にとらわれず、常に新しい挑戦を続けています。<br>
		2018年には売上7億円だった当社も、現在は15億円まで成長。<br>
		次なる目標は20億円。企業の成長は、働く一人ひとりの成長にもつながっています。
	</p>
	<h2>
		「誠実企業たれ」――これが私たちの姿勢です
	</h2>
	<p>
		マルイが何よりも大切にしているのは、お客様にも社員にも、正直であること。<br>
		だからこそ、社員が安心して働ける環境づくりに力を入れています。<br>
		•	産休・育休取得率100％。ライフステージが変わっても安心して働けます。<br>
		•	有給休暇は1時間単位で取得可能。家庭やプライベートも大切にできます。<br>
		•	経営数字はすべてオープン。社員全員が会社の現状を把握し、一緒に未来を考えます。<br>
		「働く人が安心できなければ、いい仕事はできない。」<br>
		これが私たちマルイの考え方です。<br>
		また、マルイでは年齢や経験年数も関係ありません。<br>
		「やる気」「行動力」「成長意欲」がある人には、積極的にチャンスを与えています。<br>
		実際に、20代の若手社員がリーダーや役職者として活躍しています。<br>
		現在、管理職は男性14名、女性6名と、男女問わず活躍できる環境が整っています。<br>
		そんなマルイでは今回は、鉄筋を扱う「鉄筋事業部」、鋼材を扱う「鋼材事業部」、建築や土木に使う資材を扱う「建築土木資材事業部」で、一緒に働いてくれる人を募集します。入社後はそれぞれの部署の仕事を体験できる研修期間があり、自分に合った仕事を選んでスタートできます。
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
	<h3>取材担当者からのポイント！</h3>
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		「取材中に印象的だったのは、社内での「会話の多さ」です。<br>
		先輩に気軽に相談する姿や、別の部署の人とも自然にやりとりする様子が、あちこちで見られました。全体的に穏やかな雰囲気で、話しかけやすいだけでなく、先輩のほうから新入社員に声をかける姿も多く見られました。<br>
		実際に入社したばかりの社員さんも、「見学での雰囲気が良かった」「先輩たちが優しく教えてくれるから、すぐに不安はなくなった」と話してくれました。<br>
		また、マルイは「やりたいことがまだ決まっていない」という人にこそ、おすすめしたい会社です。<br>
		入社後には全ての部署を体験できる研修があり、自分に合った仕事を見つけてから配属が決まります。さまざまな仕事に触れられる環境だからこそ、「これだ！」と思える道がきっと見つかります。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		地域と共に、誠実に
	</h3>
	<p>
		私たちは東御市で、鉄筋や鉄骨などの建築資材を加工・販売している会社です。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<p>
		建設現場で必要とされるさまざまな資材を、お客様からいただいた建物の設計図をもとに、自社で設計・加工・納品まで一貫して行なっています。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
		<img src="contents04.jpg" class="scene" alt="">
		<img src="fourth.jpg" class="scene" alt="">
	</div>
	<p>
		お客様は、建設会社や工務店、ハウスメーカーなど。<br>
		営業担当は県内だけでなく、埼玉や栃木、北陸などにも足を運び、信頼関係を築きながら仕事を獲得しています。<br>
		そんな営業の仕事を支えているのが、営業事務です。見積書の作成や営業実績の管理、電話対応などを行ない、営業活動をサポートします。
	</p>
	<div class="images">
		<img src="contents06.jpg" class="scene" alt="">
		<img src="contents07.jpg" class="scene" alt="">
	</div>
	<h3>
		3つの事業部を紹介！
	</h3>
	<p>
		(1) 『鉄筋部』<br>
		鉄筋部の工場は、東御市新張にあります。
	</p>
	<p>
		ここでは、建物の骨組みとなる鉄筋を扱っています。鉄筋は、建物の強度を高めるとても大切な資材です。<br>
		まずは、お客様からいただいた図面をみながら、鉄筋を機械で切断。必要な形に曲げたり、溶接して組み立てたりもします。
	</p>
	<div class="images">
		<img src="contents08.jpg" class="scene" alt="">
		<img src="contents09.jpg" class="scene" alt="">
	</div>
	<p>
		住宅の基礎などに使われるユニット鉄筋は、あらかじめ工場で組み立ててから現場に搬入します。
	</p>
	<div class="images">
		<img src="contents10.jpg" class="scene" alt="">
	</div>
	<p>
		(2) 『鋼材部』<br>
		建物の壁や屋根を支える「軽量鉄骨」を作っています。<br>
		まず、お客様からいただいた建物の設計図面をもとに、必要な鉄骨の本数やサイズを割り出し、加工指示書と呼ばれる詳細な図面を作成します。これは、現場の人たちが鉄骨を正確に加工するためのレシピのようなものです。この加工指示書がなければ、正確に加工することができないのです。
	</p>
	<div class="images">
		<img src="first.jpg" class="scene" alt="">
		<img src="contents12.jpg" class="scene" alt="">
	</div>
	<p>
		加工の現場では、鉄骨の切断や穴あけ、溶接、塗装など、さまざまな工程を分担して進めます。
	</p>
	<div class="images">
		<img src="contents13.jpg" class="scene" alt="">
		<img src="contents14.jpg" class="scene" alt="">
	</div>
	<p>
		(3) 『建築土木資材事業部』<br>
		「どんな資材でもそろえます！」をモットーに、現場の「足りない！」に素早く対応する部署です。<br>
		急な注文にもできるだけ早く対応できるように、自社のトラックで配送するようにしています。
	</p>
	<div class="images">
		<img src="contents15.jpg" class="scene" alt="">
		<img src="contents16.jpg" class="scene" alt="">
		<img src="contents17.jpg" class="scene" alt="">
	</div>
	<p>
		入社後は、それぞれの部署を２週間ずつ体験します。実際に手を動かしながら、「自分に合っているかも」と思える仕事を見つけていきます。
	</p>
	</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src=".jpg" alt="">
				</div>
				<hgroup>
					<h3>鉄筋ユニット</h3>
					<p>
						【鉄筋部】あらかじめ工場で加工・組み立てた鉄筋を現場に搬入。効率的かつ安全性の高い施工を実現します。
					</p>
				</hgroup>
			</div>
			<p>鉄筋ユニット</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src=".jpg" alt="">
				</div>
				<hgroup>
					<h3>軽量鉄骨</h3>
					<p>
						【鋼材部】建物の外壁を支える軽量鉄骨。図面からの精密な設計と溶接・塗装の一貫体制で、高品質な製品を提供しています。
					</p>
				</hgroup>
			</div>
			<p>軽量鉄骨</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src=".jpg" alt="">
				</div>
				<hgroup>
					<h3>丸セパ（住宅基礎部材）</h3>
					<p>
						コンクリート型枠のスペーサーとして使用。県内で製造しているのはマルイだけ。品質とスピードに自信があります。
					</p>
				</hgroup>
			</div>
			<p>丸セパ（住宅基礎部材）</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src=".jpg" alt="">
				</div>
				<hgroup>
					<h3>建築用ターンバックル</h3>
					<p>
						JIS規格取得済み。建物の耐震性向上に貢献する高性能資材
					</p>
				</hgroup>
			</div>
			<p>建築用ターンバックル</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark"></p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>1510</span>万円</p>
		<p class="year"></p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>50</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>4</span>年</p>
		</li>
		<li class="small">
			<p>月平均残業時間</p>
			<p class="num"><span>16</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>110</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1980</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>10</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
		<li>
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
						[ 'value' => 1, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 0.0001, 'caption' => '', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 54, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 17, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 2, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 4, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 4, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 21, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 20, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 20, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		</li>
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
							[ 'value' => 82, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 18, 'caption' => '県外', 'color' => '#FEE929'],
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
					<li>金属加工</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>武田孝行</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>71名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.9668984455716!2d138.35829397639404!3d36.36158067237543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601db84af0b021b9%3A0x6ea6892879cc1353!2z5qCq5byP5Lya56S-44Oe44Or44Kk!5e0!3m2!1sja!2sjp!4v1752729094284!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-62-2031</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://marui-tomi.com" target="<?= $co['slug'] ?>">https://marui-tomi.com</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">武田孝行</span></figcaption>
		</figure>
		<p>
		私たちマルイは、創業から半世紀以上にわたり「誠実企業たれ」という理念を胸に歩んできました。<br>
		「誠実」とは、まじめで嘘偽りのないこと。 お客様、地域社会、社員――誰に対しても誠実であり続けることが、会社としての存在意義だと考えています。<br>
		地域清掃活動や設備の寄付など、地域に貢献できることは積極的に行っており、社員にも常にオープンな姿勢で経営内容を開示しています。<br>
		社員全員が、自分の家族や友人に「ここで働いている」と誇れる会社を、これからも一緒に築いていきたいと思っています。<br>
		いまの高校生のみなさんは、たくさんの情報があふれる中で生きています。その中で、自分の「強み」を見つけてください。はっきりしていなくてもかまいません。少しでも「これかも」と思えるものがあれば、社会に出たときの大きな力になります。<br>
		そして、何かひとつでも夢中になって打ち込んでみてください。運動でも趣味でもなんでもいい。頑張った時間は、きっと将来のあなたを支えてくれます。

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
<section class="requirements g" id="recruitment_requirements">
	<h2>募集要項</h2>
	<div class="tabs">
		<button class="tab1">募集要項</button>
		<button class="tab2">青少年雇用情報</button>
		<button class="tab3">選考方法</button>
	</div>
	<div class="requirement">
		<div class="content recruitment">
			<h3>仕事内容</h3>
			<dl>
				<div>
					<dt>募集職種</dt>
					<dd></dd>
				</div>
				<div>
					<dt>雇用形態</dt>
					<dd></dd>
				</div>
				<div>
					<dt>雇用期間</dt>
					<dd></dd>
				</div>
				<div>
					<dt>契約更新の可能性</dt>
					<dd></dd>
				</div>
				<div>
					<dt>試用期間</dt>
					<dd></dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd></dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd></dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd></dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd></dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd></dd>
				</div>
				<div>
					<dt>マイカー通勤</dt>
					<dd></dd>
				</div>
				<div>
					<dt>転勤の可能性</dt>
					<dd></dd>
				</div>
				<div>
					<dt>必要な知識・技能等</dt>
					<dd></dd>
				</div>
			</dl>
			<h3>賃金・手当</h3>
			<dl>
				<div>
					<dt>賃金形態</dt>
					<dd></dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd></dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd></dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd></dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd></dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd></dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd></dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd></dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd></dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd></dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd></dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd></dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd></dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd></dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>
					</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd></dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd></dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd></dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd></dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd></dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd></dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd></dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd></dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd></dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd></dd>
				</div>
				<div>
					<dt>入居可能住宅</dt>
					<dd></dd>
				</div>
			</dl>
		</div>
		<div class="content career">
			<h3>青少年雇用情報</h3>
			<dl>
				<div>
					<dt>直近3年間の新卒者等採用者数</dt>
					<dd></dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd></dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd></dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd></dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd></dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd></dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd></dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd></dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd></dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd></dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd></dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd></dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>名</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
					    
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd></dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd></dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						
					</dd>
				</div>
			</dl>
		</div>
	</div>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../../tab.js"></script>
<script src="../../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>animation.js"></script><?php //include $base . '../footer.php' ?>
</body>
