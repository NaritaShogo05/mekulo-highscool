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
$title = $co['company_name'] . '株式会社信濃ハウジングの高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = 'このページは、株式会社信濃ハウジングの企業紹介ページです。信濃ハウジングは、東信エリアでエクステリア工事や住宅リフォームを手がける地域密着型の建設会社です。お庭や外構、キッチン・浴室など、暮らしを豊かにする空間づくりを丁寧にサポートします。';//メタディスクリプションの追加 
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
<body class="highschool shinano-haujing">
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
		おうちの外も中も、理想の場所に
	</h2>
	<p>
		芝生が広がるきれいなお庭や、ライトアップされた立派な駐車場。キッチンやお風呂が、リフォームで生まれ変わる。皆さんも実際に外やSNSで、見かけたことはありませんか？<br>
        信濃ハウジングでは、そんなお庭づくりや、建物のまわりを整えるエクステリア工事、家の中を使いやすくするリフォーム工事などを行っています。
    </p><br>
	<p>
        私たちの強みは、お客さまの想いを丁寧に聞き取り、じっくり考えて最適なプランを提案すること。話し合いの中でお客さまが”本当に欲しいもの”を見つけ、形にしていきます。多くのお客さまに選ばれ続け、東信エリアでもトップクラスの実績を持っています。<br>
        何気ない場所を、”お気に入りの場所”に変える仕事。ぜひ、一緒にやってみませんか？
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="contents02.jpg" alt="" class="fs show">
			<img src="contents1.jpg" alt="" class="sc">
			<img src="job_planner/first_view.jpg" alt="" class="th">
			<img src="job_planner/planner06.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="contents02.jpg" alt="" class="fs">
			<img src="contents1.jpg" alt="" class="sc">
			<img src="job_planner/first_view.jpg" alt="" class="th">
			<img src="job_planner/planner06.jpg" alt="" class="fo">
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
		信濃ハウジングは「家族の時間」や「暮らしの楽しさ」を形にする会社だと取材を通じて感じました。<br>
        ただの外構工事ではなく、お客さんの“こうしたい”という想いに、それをこえるプランで応えていく姿勢を大切にしていることが印象的でした。お客さんに寄り添い、お客さんの立場でプランニングしているからできることだと思います。<br>
        新入社員にも現場から丁寧に教え、成長を見守る風土があるのも魅力です。<br>
        「人と話すのが好き」「誰かのために働きたい」という気持ちがあれば、経験がなくても大丈夫だと社長は言います。信濃ハウジングが造っているのは、お客さんのライフスタイル。<br>
		お客さんの人生に自分の仕事が残る、そんなやりがいのある仕事に出会える会社です。<br>
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		“帰りたくなる家”をかたちにする
	</h3>
	<p>
		信濃ハウジングは、家のまわりや室内を整えて、暮らしやすさを作る工事をする会社です。<br>
		玄関へ続く歩きやすいレンガの道、子供がのびのび遊べる芝生の庭、優しい明かりがともる広い駐車場。日々の暮らしに寄り添う、あたたかくて心地よい空間づくりを提案しています。
	</p>
	<div class="images grid-img">
		<img src="contents1.jpg" class="scene" alt="">
		<img src="contents02.jpg" class="scene" alt="">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		また、古くなったお風呂やトイレ、家の外壁のリフォーム、ガレージや倉庫などのプレハブの設置工事にも対応。
		家をもっと便利に、暮らしやすくするお手伝いをしています。
	</p>
	<div class="images">
		<img src="contents4.jpg" class="scene" alt="">
		<img src="contents05.jpg" class="scene" alt="">
	</div>
	<p>
		本店は長野県東御市にあり、上田市と佐久市にもお店があります。
		どの店舗も国道沿いにあり、わかりやすい場所にあるので、地元の人が気軽に立ち寄れる場所です。
	</p>
	<h3>
		経営危機から東信最大のエクステリア業へ
	</h3>
    <p>
		1986年、現会長が前職のエクステリア業を基盤に創業しました。<br>会社は成長を続け、息子である現社長も入社します。
	</p>
	<div class="images">
		<img src="contents6.jpg" class="scene" alt="">
		<img src="contents7.jpg" class="scene" alt="">
	</div>
	<p>
		ところが、世界的な不景気の影響で状況が一変。お庭づくりの仕事は減り続け、売上は落ち込み、初めての赤字に直面しました。<br>
		やむなく給料カットを決断しましたが、それが原因で社員が辞めてしまい、会社は大きなピンチに。
	</p><br>
    <p>
		ある日、父が切り出しました。「もう無理だ。会社を畳もう」。しかし、当時まだ一社員であった社長はあきらめきれませんでした。口論の末、「なら、社長をやらせてくれ！」と、会社を引き継ぐことを決断します。
	</p>
	<div class="images">
		<img src="contents08.jpg" class="scene" alt="">
	</div>
	<p>
		引き継いだ当初、仕事はほとんどなく、利益も出ず厳しい状況に変わりはありませんでした。<br>
		しかし、社長は目先の売上より、本当にお客さまに喜ばれる仕事をすることを会社の方針としました。今では地域に信頼される会社へと成長しています。
	</p>
	<div class="images">
		<img src="contents09.jpg" class="scene" alt="">
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
					<h3>玄関・門まわり</h3>
					<p>
						シンプルなコンクリートの壁で、すっきりとした外観に整えました。庭石で樹木を囲んだ道は、上品で落ち着いた印象を与えます。
					</p>
				</hgroup>
			</div>
			<p>玄関・門まわり</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi02.jpg" alt="">
				</div>
				<hgroup>
					<h3>カースペース(駐車場)</h3>
					<p>
						雪が積もっても安心なタイプで、車の出入りがしやすい設計です。黒を使ったデザインで、見た目も引き締まって見えます。
					</p>
				</hgroup>
			</div>
			<p>カースペース(駐車場)</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi03.jpg" alt="">
				</div>
				<hgroup>
					<h3>フェンス(手すり)</h3>
					<p>
						見た目はアイアン風でかっこいいけど、軽くて丈夫なアルミ製です。こだわりを感じる、存在感のあるフェンスです。
					</p>
				</hgroup>
			</div>
			<p>フェンス(手すり)</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi04.jpg" alt="">
				</div>
				<hgroup>
					<h3>ガーデンスペース</h3>
					<p>
						石風のスタンプコンクリートで、店舗と自宅をつなぐ通り道と、くつろげる花壇付きサークルベンチを作りました。ベンチはお花が見やすい高さになっています。
					</p>
				</hgroup>
			</div>
			<p>ガーデンスペース</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="busi05.jpg" alt="">
				</div>
				<hgroup>
					<h3>ガーデンルーム</h3>
					<p>
						庭とつながる、壁や窓で囲まれたガーデンルーム。洗濯物を干したり、趣味の空間にしたり。天候に左右されず使えます。
					</p>
				</hgroup>
			</div>
			<p>ガーデンルーム</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="contents4.jpg" alt="">
				</div>
				<hgroup>
					<h3>外壁クリーニング</h3>
					<p>
						家の外壁の特殊洗浄・コーティングです。建物をカビや雨漏りから守り、美しい外観を保ちます。
					</p>
				</hgroup>
			</div>
			<p>外壁クリーニング</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>4</span>億<span>8000</span>万円</p>
		<p class="year"></p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>45</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>8</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>5</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>100</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1992</span>年</p>
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
						[ 'value' => 0.1, 'caption' => '', 'color' => '#2378C7'],
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
						[ 'value' => 70, 'caption' => '男性', 'color' => '#0062B5'],
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
					[ 'value' => 0.1, 'caption' => "", 'color' => '#808080'],
					[ 'value' => 0.1, 'caption' => '', 'color' => '#0073B7'],
					[ 'value' => 17, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 41, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 47, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 5, 'caption' => '60代', 'color' => '#008C4A'],
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
							[ 'value' => 0.001, 'caption' => '', 'color' => '#FEE929'],
													]); ?>
					</svg>
				</div>
		</li>
	</ul>	
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src="store.jpg" alt="" class="scene">
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
					<li>住宅のエクステリア外構等の販売・施工、
                    <li>増改築リフォーム</li>
					<li>プレハブ建築</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>中澤英樹</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>17名（男性 12名／女性 5名、役員、パート・アルバイト含む）（2025年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25701.423234994854!2d138.302658!3d36.36858!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dbbc10cf4f7af%3A0x312dec76cd721e6d!2z5qCq5byP5Lya56S-5L-h5r-D44OP44Km44K444Oz44KwIOadseW-oeS4iueUsOW6lw!5e0!3m2!1sja!2sjp!4v1750929373340!5m2!1sja!2sjp" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-36-0077</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://shinanohousing.com/" target="_blank">https://shinanohousing.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="nakazawa.jpg" alt="">
			<figcaption><span class="name">中澤英樹</span></figcaption>
		</figure>
		<p>
			日本一の山といえば富士山。でも、二番目に高い山は？となるとすぐには思い浮かびませんよね。<br>私たちは、“長野でエクステリアといえば信濃ハウジング”と、真っ先に思い出してもらえる会社を目指しています。<br>
            私たちの仕事は、お客さまの「こんな家にしたい！」を形にすること。予算や敷地の条件に合わせ、満足してもらえる形になるよう、一つひとつ考えて提案します。<br>
		</p>
		<p>
            せっかく働くなら、ワクワクしながら仕事ができる会社でありたい。失敗やミスを恐れず、挑戦する気持ちを大切にしてください。困った時は、いつでもサポートします。<br>
            お庭づくりに興味がある人、「ありがとう」と言われる仕事がしたい人、ぜひ一緒に働きましょう！
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
			<a href="<?= $company_base ?>job_planner/">
				<figure>
					<img src="<?= $company_base ?>job_planner/first_view.jpg" alt="">
					<figcaption>お庭プランナー</figcaption>
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
