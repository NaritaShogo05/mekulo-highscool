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
$description = '川久保製作所は上田市を拠点に、産業機械用の金属部品を製造。幅広い加工技術が身につき、技術者として成長できる環境です。機械操作・検査・営業の3職種を募集中です。';//メタディスクリプションの追加
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
		<li class="jobs"><a href="#recruitment_requirements">募集要項</a></li>
	</ol>
</section>
<div class="about-com content" id="company_gallery">
	<h2>金属加工の技術者に、君もなれる！</h2>
	<p>
		川久保製作所では、金属を削ったり、形を変えたりする「産業機械」の部品を、機械や手作業で1つ1つ丁寧に作っています。<br>
		他の製造業の会社では、「切る」、「穴をあける」、「ネジをつける」、「形を変える」、「みがく」といった作業を分担して行い、1人が1つの作業だけを担当することがほとんどです。しかし、川久保製作所では、１人でさまざまな機械を使いこなし、全ての作業工程に関わることができます。そのため、「特定の機械だけじゃ物足りない」「幅広い技術を身につけて、一人前の技術者になりたい」と考えている人には、ピッタリの職場です！<br>
		川久保製作所で作っている部品は、1センチほどの小さなものから、人の背丈ほどもある1メートル超えの大きなものまで様々。部品ごとに、作り方も完成までの時間もガラッと変わります。「どうしたらもっと上手く作れるかな？」「どうやったら納期に間に合うかな？」と、まるでパズルのように頭を使って工夫する面白さがあります。
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
		<img src=<?= $highschool_base . WRITER['ichikawa']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['ichikawa']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p style="min-height: 160px;">
		川久保製作所は、自分の世界に没頭して、黙々と作業に集中したい人には最適な環境だと感じました 。社長も穏やかでユーモアあふれる方なので、現場はいつも和やか。年齢や立場に関係なく、みんなが伸び伸びと自分の仕事に打ち込んでいるのが印象的でした 。<br>
		実は、先輩たちの多くは機械科以外の出身。その為、「未経験で何もわからない」という気持ちを本当に良く理解してくれています。機械の名前から工具の使い方まで、どんなに小さな疑問も、わかるまでとことん丁寧に教えてくれる先輩ばかりなので、安心して技術を身につけられます。<br>
		さらに、ここで作っている部品はすべて一品ものです。毎日違う図面を見て、新しいものづくりにチャレンジできます。「同じ作業の繰り返しは苦手」「色々な機械を使いこなす、一流の技術者になりたい！」という人にはピッタリの場所です！<br>
		少しでも「気になるな」って思ったら、ぜひ一度見学に来て、この空気を感じてみてください！
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		金属を削ったり、形を変えたりする「産業機械」の部品を作る
	</h3>
	<p>
		川久保製作所は、金属を削ったり、形を変えたりする「産業機械」の金属部品を作っている会社です。<br>
		大きな金属の板から加工することもあれば、納品先から預かった材料を使って加工することもあります。これらをマシニングセンタやNC旋盤、フライス盤といった様々な機械を用いて加工し、図面通りに仕上げていくのが私たちの仕事です。
	</p>
	<h3>
		金属を”糸”で切るって知ってた？
	</h3>
	<p>
		川久保製作所では、「ワイヤーカット」という加工工程も経験していただきます。<br>
		ハサミやノコギリでもなく、なんと「糸」で金属をカットして、自由自在な形状を実現します。<br>
		髪の毛の太さの10分の1くらいの精度で金属を切断する、繊細な技術を人の手で仕上げていきます。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<h3>
		今回募集するのは、３つの職種！
	</h3>
	<p>
		今回募集するのは、機械オペレーター（マシン操作）、検査員（最終チェック）、ルート営業（納品・お客様対応）です。
	</p>
	<h3>機械オペレーター（マシン操作）</h3>
	<p>
		納品先からいただいた図面をもとに、金属の材料を加工して部品を作る仕事です。例えば、大きな金属のかたまりや板を機械にセットし、削ったり、穴をあけたりしながら、必要な形に仕上げていきます。<br>
		まずは、「図面をしっかり読み解くこと」。図面を見ながら、「どこを、どんな深さで、どんな機械を使って加工するか」を考えます。そのあと、決めた手順を機械に指示するための「プログラム」を作ります。これは、機械が動くための指示書のようなもので、数字や記号を使って入力していきます。自動で動く機械が多く、プログラムさえ完璧なら、あとは機械が正確に加工してくれます。
	</p>
	<div class="images grid">
		<img src="firstview.jpg" class="scene" alt="">
		<img src="third.jpg" class="scene" alt="">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<p>
		部品が完成したら、最後に表面を滑らかにする「研磨」を行います。これもほとんどは機械でやりますが、細かい部分は手作業で丁寧に仕上げます。<br>
		加工した部品を自分で測り、図面通りに仕上がっていたときは、大きな達成感があります！色んな機械を動かせるようになって、将来的には、納品先や同僚からも頼られる技術者になれます。<br>
		入社後は、基本となる図面を読む練習から始め、先輩と一緒に作業を覚えながら、1年くらいかけて少しずつできることを増やしていきます。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
	</div>
	<h3>検査員（最終チェック）</h3>
	<p>
		加工された製品が、図面通り正確にできているか、「最後の砦」としてチェックする仕事です。ノギスや三次元測定機といった専門の道具を使って、図面と見比べていき、わずか0.01ミリのズレも見逃さないように丁寧に検査します。製品が図面通りでないと、機械に組み込んだときに不具合が起きてしまうため、とても重要な役割を担います。<br>
		仕事は、図面の読み方や測定器の使い方から、じっくりと教えてもらえるので心配いりません。約3ヶ月で基本を身につけることができます。
	</p>
	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<h3>ルート営業（納品・お客様対応）</h3>
	<p>
		完成した製品を、車で納品先へ届けるのが主な仕事です。ただ届けるだけでなく、「お困りごとはないですか？」といった会話を通じ、相手の悩みを解決しながら信頼関係を築いていきます。納品先の方とのコミュニケーションが、次の仕事につながることもあります。<br>
		納品だけでなく、電話やメールでのやりとり、見積書や納品書の作成など、パソコンを使った業務もあります。納品先は上田市を中心とした東信地域がほとんどですが、ときには千葉や東京など、少し遠方へ行くこともあります。<br>
		現在は、営業部長が納品先とのやりとりを担当しており、仕事のイロハをマンツーマンで丁寧に教えてもらえます。約1年かけて、お客様との関係を築くスキルを身につけていきましょう。
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
					<h3>完成部品</h3>
					<p>
						産業機械にそのまま組み込める、完成されたパーツのことです。
					</p>
				</hgroup>
			</div>
			<p>完成部品</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce1.jpg" alt="">
				</div>
				<hgroup>
					<h3>完成部品</h3>
					<p>
						産業機械にそのまま組み込める、完成されたパーツのことです。
					</p>
				</hgroup>
			</div>
			<p>完成部品</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>ノギス</h3>
					<p>
						0.1mm単位の定規のようなもので、完成された部品が図面通りの「長さ・直径・深さ」かを人の手で測るときに使います。
					</p>
				</hgroup>
			</div>
			<p>ノギス</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business4.jpg" alt="">
				</div>
				<hgroup>
					<h3>三次元測定機</h3>
					<p>
						パソコンと連動した自動で動く測定マシンで、ノギスよりも正確に測りたい細かな部品の測定に適しています。使いこなすには専門的な知識や操作の習得が必要な、奥が深い機械です。
					</p>
				</hgroup>
			</div>
			<p>三次元測定機</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>51.82</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>17</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>0</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>110</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1959</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>14</span>日</p>
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
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
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
						[ 'value' => 22, 'caption' => '男性', 'color' => '#0062B5'],
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
					[ 'value' => 0.001, 'caption' => "", 'color' => '#808080'],
					[ 'value' => 1, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 2, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 6, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 9, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 8, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 89, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 8, 'caption' => '自転車', 'color' => '#D04255'],
						[ 'value' => 3, 'caption' => '徒歩', 'color' => '#009F6B'],
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
					<li>工作機械及び、専用機等の部品加工</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>南平　晴久</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>26名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.4233163244794!2d138.27091292695312!3d36.398952200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dbcf413dcae97%3A0xfffc899802b5856a!2z77yI5qCq77yJ5bed5LmF5L-d6KO95L2c5omA!5e0!3m2!1sja!2sjp!4v1751013537188!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-24-7000</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd>なし</dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">南平　晴久</span></figcaption>
		</figure>
		<p>
			やる気がある人、機械操作が好きな人、ものづくりが好きな人と一緒に働きたいと、私たちは心から思っています。<br>
			私自身も、元々は農学部出身で、金属加工の知識は全くゼロで入社しました。今の金属加工の知識は、入社してから様々な経験を通じて身につけたものです。<br>
			機械オペレーターとして入社された方は、まず金属加工の基礎となる図面を読み取る練習から始まりますが、大体1週間くらいで読めるようになります。図面が読み取れるようになったら、次は先輩スタッフと一緒に加工を行っていただきます。<br>
			最初は失敗しても大丈夫です！誰もがゼロからスタートしているので、あなたの「わからない」を責める人はいません 。わからないことは周りの先輩にどんどん聞いてOKです ！一人でできるようになるまでは、私たちがしっかりサポートします 。
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
					<dd>MCオペレーター(マシニングセンター、NC旋盤などの工作機械を用いて金属加工)</dd>
				</div>
				<div>
					<dt>雇用形態</dt>
					<dd>正社員</dd>
				</div>
				<div>
					<dt>雇用期間</dt>
					<dd>定めなし</dd>
				</div>
				<div>
					<dt>契約更新の可能性</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>試用期間</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒386-0005<br>
					長野県上田市古里1988-1</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>信濃国分寺駅から車で5分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋内禁煙</dd>
				</div>
				<div>
					<dt>マイカー通勤</dt>
					<dd>可</dd>
				</div>
				<div>
					<dt>転勤の可能性</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>必要な知識・技能等</dt>
					<dd>不問</dd>
				</div>
			</dl>
			<h3>賃金・手当</h3>
			<dl>
				<div>
					<dt>賃金形態</dt>
					<dd>月給</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>22日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>180,000円</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>180,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月20日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（上限5,000円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回または2.5か月分</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時15分〜17時00分
					</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>日曜日、祝日、その他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>＊会社カレンダーによる　＊年末年始・お盆・GW</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、雇用保険、労災保険、財形保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数3年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり(60歳)</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり(65歳まで)</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>入居可能住宅</dt>
					<dd>なし</dd>
				</div>
			</dl>
		</div>
		<div class="content career">
			<h3>青少年雇用情報</h3>
			<dl>
				<div>
					<dt>直近3年間の新卒者等採用者数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						18年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>47歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>新人研修・OJT等</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						なし
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>25時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>14日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：0人、男性：0人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>0名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>製造業</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>2名</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
					    2025年7月31日（木） 10時30分～<br>
						2025年8月5日（火） 10時30分～<br>
						2025年8月7日（木） 10時30分～
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後10日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						代表取締役<br>
						南平 晴久
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
<script src="<?= $highschool_base ?>animation.js"></script>
<?php include $base . '../footer.php' ?>
</body>
