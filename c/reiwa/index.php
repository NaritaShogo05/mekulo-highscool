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
$description = '株式会社令和は、長野県上田市で足場工事を手がける建設会社。仲間と成長し、安全と信頼を支える仕事です。';//メタディスクリプションの追加

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
		<li class="jobs"><a href="#recruitment_requirements">募集要項</a></li>
	</ol>
</section>
<div class="about-com content" id="company_gallery">
	<h2>
		安心は、心ある足場から
	</h2>
	<p>
		私たちは、長野県上田市の真田町で「足場工事」の仕事をしています。<br>
		足場とは、家や学校などの建物を建てたり直したりするときに、専門の職人さんが高い場所で安全に作業できるように、建物のまわりに組む鉄の骨組みや作業台のことです。<br>
		私たちが組む足場は、ただ鉄パイプを組めばいいわけではありません。現場の地形や周囲の状況、作業内容に合わせて、現場ごとに最適な足場を設計し、手作業で素早くしっかり組み立てます。<br>
		足場が使われる工事は、住宅の新築工事や外壁の塗り替え、屋根の修理、太陽光パネルの設置など。どれも高所での作業が必要ですが、建物本体を工事する他会社の職人さんたちは、私たちが組んだ足場の上で作業するので、丈夫で安全な足場を建てなくてはなりません。<br>
		ひとつひとつの足場が、その上で作業をする職人さんを守ることはもちろん、誰かの暮らしや未来につながっている。そんな誇りをもって、日々丁寧に足場を組んでいます。
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
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['ichikawa']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['ichikawa']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		令和の皆さんは、仕事上、チームワークがとても大切なので、気の合った仲間同士で協力しながら作業をしている印象です。ただ作業が早い、できるというだけでなく、お客様や近所の人にも元気であいさつをするなど、人との関わりも大切にしていて、技術と人間力の両方を大切にしている会社です。<br>
		社員さんたちは明るく前向きな人ばかりで、働いているうちにあなたも自然と前向きな気持ちになれるでしょう。ポジティブな雰囲気の中で、楽しく成長できる職場です。<br>
		ただし、わからないことがあったときに、聞かずに黙っている自分のやり方でやってしまう方は、少し合わないと感じることがあるかもしれません。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>令和で大切にしていること</h3>
	<p>
		株式会社令和は、外国から来たメンバー3人を含む、合計9人で活動している会社です。<br>
		もともとは「忍仮設（しのぶかせつ）」という名前で、今の社長を含む3人で始めた会社でした。コツコツと努力を重ね、7年前に社名を「令和」に変えました。<br>
		会社の名前は変わっても、お客様第一として、あいさつやマナーを大切にし、仲間と助け合いながら仕事をする姿勢は変わりません。<br>
		基本的に足場工事は、高いところでの作業が多いので、「危なそう」というイメージがあるかもしれません。しかし、社員一人一人が安全帯をつけて、気を付けながら作業をしているので、今まで転落事故は起きていません。
	</p>
	<div class="images">
		<img src="intro1.jpg" class="scene" alt="">
		<img src="intro2.jpg" class="scene" alt="">
	</div>
	<div class="images">
		<img src="intro3.jpg" class="scene" alt="">
		<img src="intro4.jpg" class="scene" alt="">
	</div>
	<h3>令和での働き方</h3>
	<p>
		足場の組立や解体は、建物の工事全般に欠かせない大切な仕事です。<br>
		作業は、板状や棒状の金属部品を決まった場所に組み立てていきます。部品と部品をつなげるときは、「くさび」という細長い金属の部品を使います。くさびにはデコボコがついていて、それをハンマーで打ち込むことでしっかり固定します。解体するときは、ハンマーで反対からくさびを打つことで、すぐに取り外せます。<br>
		現場では、2～3人でチームを組んで作業し、協力して働くことがとても大切な仕事です。主任が前日に決めたチーム分けに沿って作業を進めていきます。忙しい日には、1日に複数の現場を回ることもあります。午前中に2件の足場を組んで、午後に1件解体、なんてこともあります。
	</p>
	<div class="images">
		<img src="intro5.jpg" class="scene" alt="">
	</div>
	<p>
		現場は松本・軽井沢・白馬などの中東信エリアを中心に、時々、群馬県や山梨県、福島県まで車で行くこともあります。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
	</div>
	<p>
		朝は7時に会社へ集合し、朝礼のあとチームに分かれ、8時に車で現場へ向かいます。<br>
		ケガをしないためにも集中力が必要なので、退勤までにしっかり2時間の休憩があります。仕事を始めると、3カ月くらいで筋肉もつき、マッチョな体も目指せます！<br>
		足場の組立は、ただ組むだけではありません。図面を見ながら、現場の地形や周囲の状況、建物の形や高さに合わせて工夫しながら組んでいく必要があります。<br>
		特に新築の現場では、まだ何もない場所に足場を組みます。作業を始める前に、チーム内で「誰が何をするか」や「どんな順番でやるか」等を話し合って決めることで、ムダがなくなりスムーズに進みます。
	</p>
	<div class="images">
		<img src="intro3.jpg" class="scene" alt="">
	</div>
	<p>
		自分たちの手で足場を組み立てて、それがぴったりと形になったとき、とても大きな達成感があります。そして、その足場の上で職人さんたちが安心して働き、建物が少しずつ完成していく様子を見ると、「自分も誰かの役に立てるんだ」と、とても誇らしい気持ちになります。
	</p>
	<div class="images">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<p>
		足場の材料は、板一枚が約13kgなので最初は一枚を運ぶところからスタートしますが、慣れてくると3～4枚一度に運ぶこともできるようになります。
	</p>
	<h3>入社後は？</h3>
	<p>
		入社後、まず部品の名前を覚えることからスタートします。<br>
		先輩から「これ持ってきて！」と言われたときに、すぐに動けるようになると、仕事がどんどんスムーズになります。<br>
		覚えるスピードは人それぞれ。3カ月でコツをつかむ人もいれば、2〜3年かけてじっくり成長する人もいます。どちらでも大丈夫！焦らなくていいんです。<br>
		大切なのは、好奇心や「やってみたい」という気持ち。わからないことはすぐ聞く、人の話をしっかり聞ける――そんなところも、成長のカギになります。
	</p>
</section>
<section id="business" class="content">
	<h2>私たちが使う道具</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business1.jpg" alt="">
				</div>
				<hgroup>
					<h3>足場の材料</h3>
					<p>
						足場の材料(板一枚が約13kg)
					</p>
				</hgroup>
			</div>
			<p>足場の材料</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="intro1.jpg" alt="">
				</div>
				<hgroup>
					<h3>安全帯</h3>
					<p>
						高所作業に欠かせない命綱で万が一の落下事故を防ぎ、命を守ってくれるもの。作業員一人一人が自分らしさを込めて、安全帯をカスタマイズし、おしゃれも楽しんでいます。
					</p>
				</hgroup>
			</div>
			<p>安全帯</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年5月20日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>1億1313万</span>円</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>39</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>9</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>7</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>87</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2019</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>7</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '該当なし', 'color' => '#d9d9d9'],
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
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
						[ 'value' => 8, 'caption' => '男性：8名', 'color' => '#0062B5'],
						[ 'value' => 1, 'caption' => '女性：1名', 'color' => '#FF6E7E'],
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
					[ 'value' => 3, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 1, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 4, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 0.001, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 1, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 70, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 0.0001, 'caption' => "電車・バス", 'color' => '#F29C50'],
						[ 'value' => 10, 'caption' => "徒歩", 'color' => '#C74227'],
						[ 'value' => 20, 'caption' => '自転車', 'color' => '#F29C50'],
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
					<li>くさび緊結式足場工事一式</li>
					<li>鋼板等仮囲い工事一式</li>
					<li>支保工</li>
					<li>各種イベント等の仮設ステージ</li>
					<li>仮設トイレ等のレンタル</li>
					<li>足場図面作成</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>北沢 一真</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>9名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d933.0335777255171!2d138.29556181370725!3d36.42629642621029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f70!3m3!1m2!1s0x601dbd007bc44c39%3A0x28f382b782c9294!2sREIWA%20co.%2Cltd.!5e0!3m2!1sja!2sjp!4v1750992543952!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-75-8027</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href=""></a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">小林淳</span></figcaption>
		</figure>
		<p>
			私たちは、あいさつやマナーをとても大切にしています。<br>
			家や学校などの工事で、お客様が建物の中にいることも多いため、私たちは、大声を出さないことや、話す内容等に気を付けています。<br>
			そうした日々の積み重ねが、他会社の職人さんやお客様から信頼され、社員が働きやすい職場になっていると感じます。最初はわからなくても、先輩たちの姿を見ていくうちに、きっとみなさんも自然とできるようになっていきます。<br>
			高いところでの作業は、経験を積んだベテランであっても、少なからず「こわい」と感じます。でも、その気持ちがあるからこそ、気を付けて作業に臨むことができ、転落事故も起こっていないと感じます。<br>
			足場をきれいに組めたときの達成感や、お客様の「ありがとう」の言葉が心に刻まれ、やりがいに繋がっています。<br>
			ダムや学校など大きな現場で働くこともあり、場所が変わることで毎日が新鮮です。<br>
			他会社の職人さんやお客様を第一に考えながらも、お昼ごはんを楽しみにしたり、週末に仲間とごはんに行ったりと、年齢関係なく、仲間とのチームワークも大切にしています。
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
				<p>※他の日程はお問い合わせください。</p>
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
<section class="g requirements" id="recruitment_requirements">
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
					<dd>建設業</dd>
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
					<dd>-</dd>
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
					<dd>〒386-2202<br>
					長野県上田市真田町本原103</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>上田バス本原バス停から徒歩で3分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>喫煙室設置</dd>
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
					<dd>必須<br>
						普通自動車免許（AT限定可）
					</dd>
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
					<dd>-</dd>
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
					<dd>20,000円<br>
						時間外手当は、時間外労働時間の有無にかかわらず固定残業代として支給し、15時間を超える時間外労働は追加で支給。
					</dd>
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
					<dd>月末</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>制度無し</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（200,000円～600,000円）</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時00分〜17時30分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>20時間（納期による）
					</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>会社カレンダーによる。年末年始、GW休暇、夏季休暇</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>会社カレンダーによる<br>
						週の真ん中の祝日は出勤の場合がある</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>雇用保険、健康保険、厚生年金、建設工事業国民健康保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり（60歳）</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限年齢65歳）</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>あり（上限年齢70歳）</dd>
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
					<dd>9年</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>39歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり<br>
						入社時研修：会社で行われる業務への理解を深めるための業務研修<br>
						安全研修：労災事故等防止のためのヒヤリハット研修（主に作業時）
					</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>新人研修</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>あり<br>
						資格取得補助：業務に関連する資格取得へのバックアップ、資格取得費用の補助あり
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd>あり<br>
						自己啓発と同様に資格取得することでキャリアアップを図る。
					</dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>7時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>7日</dd>
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
					<dd>-%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>-%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>現場作業</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>2人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						あり<br>
						応募前職場見学は事前にご連絡ください。<br>
						試用期間は3カ月です。<br>
						マイカー通勤：駐車場無料
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>
						あり<br>
						選考旅費は実費分とし、上限5,000円まで
					</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後7日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						北沢 一真
					</dd>
				</div>
			</dl>
		</div>
	</div>
	<div>
		<a href="apply/#entry" class="btn_entry">
			<img src="../../flag.png" class="flag">
			<span>応募前見学情報を見る</span>
			<img src="../../arrow.svg">
		</a>
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
