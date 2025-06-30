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
$description = 'スーパーでおなじみの「なめ茸」を製造する飯島食品。毎朝届く新鮮なえのき茸を選別し、煮込み・瓶詰め・密封の工程で丁寧に加工。真面目さやチームワークを活かして働ける職場で、食品づくりの基本から学べます。';//メタディスクリプションの追加
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
	<h2>スーパーに並んでいる『なめ茸』、作っています！</h2>
	<p>
		スーパーで売っている、瓶に入った「なめ茸」。<br>
		それを“生のえのき茸”から加工して商品にしているのが、私たち飯島食品です。地元の生産者さんから毎朝800kg以上のえのき茸を仕入れて、全国へ届けています。<br>
		生産者さんから届いた新鮮なえのきを選別し、煮込んで、ビンに詰める。私たちがいつも何気なく食べている食品の裏側には、地域に根差した丁寧な加工現場があります。ぜひ一度、見学に来てください！
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="business1.jpg" alt="" class="fs show">
			<img src="second.jpg" alt="" class="sc">
			<img src="first.jpg" alt="" class="th">
			<img src="fourth.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="business1.jpg" alt="" class="fs">
			<img src="second.jpg" alt="" class="sc">
			<img src="first.jpg" alt="" class="th">
			<img src="fourth.jpg" alt="" class="fo">
		</div>
	</div>
	<h3>取材担当者からのポイント！</h3>
	<h4 class="point">「真面目にやりたい」気持ちが活かせる職場</h4>
	<figure class="portrait" style="width: 20%;">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p style="min-height: 160px;">
		工場内を見学してまず感じたのは、社員さんの気持ちの良い挨拶でした。こちらから声をかける前に挨拶してくださる方が多く、職場全体の雰囲気の良さが伝わってきました。<br>
		食品を扱う会社だからこそ、衛生管理は徹底されています。帽子の中に髪の毛をきちんと入れ、手洗いや消毒もしっかり行なうなど、「当たり前のことを当たり前にやる」姿勢が印象的でした。<br>
		どの作業工程でも、みなさんがテキパキと動いていて、仕事中は集中、休憩中はリラックス、とオンオフのメリハリがしっかりしています。<br>
		学校生活の中で、「掃除は真面目にやってほしい」「授業中は静かにしてほしい」と思ったことがある人にこそ、特に向いている職場だと思います。そんなあなたなら、きっと飯島食品で心地よく働けるでしょう。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		新鮮なえのきを、おいしく加工する
	</h3>
	<p>
		飯島食品の主な仕事は、“えのき茸”を使った加工食品の製造です。<br>
		ビンに入った「なめ茸」や「うめなめ茸」など、さまざまな味の総菜を作っています。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<p>
		毎朝8時に、地元の生産者さんから新鮮なえのきが届きます。これは、生産者さんが2か月以上かけて育ててくれた大切な原料です。
	</p>
	<div class="images">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<p>
		届いたえのきは1～2センチにカットされていて、1日でおよそ800kg分を加工します。製造の中心は「煮込み」「充填（ビン詰め）」「密封（フタ閉め）」の3つの工程で、製造スタッフ全員がそれぞれの役割を担っています。
	</p>
	<h3>お客様の目線で、異物を取り除く</h3>
	<p>
		製造前の「選別」で一番大切なのは、「お客様だったらどう感じるか」という気持ちです。異物が少しでも混ざっていたら、たとえ体に害がなくても気になってしまいますよね。<br>
		そこで、えのきの石づきなどの固い部分、たまに混ざるビニール片や髪の毛などを、手作業で丁寧に取り除いていきます。毎朝8時からお昼くらいまで、6～7人で集中して行なっています。
	</p>
	<div class="images">
		<img src="first.jpg" class="scene" alt="">
		<img src="introduce4.jpg" class="scene" alt="">
		<img src="introduce5-1.jpg" class="scene" alt="">
	</div>
	<p>
		入社後に初めて教わるのも、この選別工程。細かい作業ですが、「丁寧に」「正確に」を意識することで、食品づくりの基本がしっかり身につきます。
	</p>
	<h3>動きがあるから飽きない</h3>
	<p>
		選別工程を学んだあとは、実際の製造工程に挑戦していきます。<br>
		飯島食品では、一つの工程だけをやり続けることはありません。その日その時でさまざまなポジションに入ります。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
		<img src="third.jpg" class="scene" alt="">
		<img src="introduce8.jpg" class="scene" alt="">
	</div>
	<p>
		製造工程では、14人ほどが働いています。リーダーの指示のもと、みんなで協力しながら製造していきます。
	</p>
	<p>
		『煮込み』<br>
		選別されたえのきに調味料を加え、大きな釜でじっくり煮込みます。味をしっかり染み込ませるために、火加減や時間の管理が大切な作業です。
	</p>
	<div class="images">
		<img src="introduce9.jpg" class="scene" alt="">
	</div>
	<p>
		『充填（瓶詰め）』<br>
		ビンのサイズや量に合わせて機械を調整し、リズムよく中身を詰めていきます。ここでは、スピードと正確さが求められます。
	</p>
	<div class="images">
		<img src="introduce10.jpg" class="scene" alt="">
		<img src="introduce11.jpg" class="scene" alt="">
	</div>
	<p>
		『密封（フタ閉め）』<br>
		機械を使って、ビンのふたをしっかり閉めていきます。最後には人の目と手で、一つひとつ丁寧に確認することも欠かせません。
	</p>
	<div class="images">
		<img src="introduce12.jpg" class="scene" alt="">
		<img src="introduce8.jpg" class="scene" alt="">
		<img src="introduce14.jpg" class="scene" alt="">
		<img src="introduce15.jpg" class="scene" alt="">
	</div>
	<p>
		それぞれの工程がつながって、やっと一つの商品が完成します。どこか一つでも欠けたら成り立たない、チームワークが命の仕事です。<br>
		入社後1か月ほどで基本的な流れを体験したら、各工程の作業のコツやノウハウを、先輩が隣で丁寧に教えてくれます。3か月ほどで、一通りの仕事が理解できるでしょう。
	</p>
	<div class="images">
		<img src="introduce16.jpg" class="scene" alt="">
		<img src="introduce17.jpg" class="scene" alt="">
	</div>
	<p>
		仕事中はチームワークを大切にしていますが、休憩時間はそれぞれ自由に過ごしています。同じくらいの年齢の人とおしゃべりを楽しむ人もいれば、一人でゆったり過ごす人も。<br>
		大切なのは、わからないことを素直に「わかりません」と言えること。「忘れちゃいました！」と正直に伝えられる人が歓迎されます。素直さと謙虚さが、仕事を覚える近道なんです。
	</p>
	<h3>めざせリーダー！全体を見渡せる存在に</h3>
	<p>
		将来的には、製造現場の「リーダー」を目指すこともできます。<br>
		リーダーは、前日までに製造計画を立てて、その日の製造の順番や人の配置を決め、当日みんなに指示を出すポジションです。<br>
		一つの製品を作るためには、量や時間、順序などをしっかり考えて進めていく必要があります。だからこそ、全体の流れを把握し、現場をうまく回していく力が求められます。
	</p>
	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
		<img src="introduce18.jpg" class="scene" alt="">
		<img src="fourth.jpg" class="scene" alt="">
	</div>
	<p>
		リーダーになるには、少なくとも10年は必要。それだけ責任ある立場ですが、信頼される存在として、現場の中心で活躍できます。<br>
		食品に関わる仕事をしてみたいあなたを、私たちは心から歓迎します。一歩ずつ、一緒に成長していきましょう！
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
					<h3>なめ茸</h3>
					<p>
						売れ筋ランキング1位。大根おろしや納豆をはじめ、さまざまな料理のトッピングにぴったりです。
					</p>
				</hgroup>
			</div>
			<p>なめ茸</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>うめなめたけ</h3>
					<p>
						売れ筋ランキング2位。えのき茸のシャキシャキ感と梅の酸味が絶妙。
					</p>
				</hgroup>
			</div>
			<p>うめなめたけ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>赤唐味噌なめたけ</h3>
					<p>
						売れ筋ランキング3位。信州味噌の深い味わいと、赤唐辛子のピリ辛が食欲をそそります。
					</p>
				</hgroup>
			</div>
			<p>赤唐味噌なめたけ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="ninnikunametake.jpg" alt="">
				</div>
				<hgroup>
					<h3>焼きにんにくなめたけ</h3>
					<p>
						スライスしたにんにくを加え、風味がアップしました。
					</p>
				</hgroup>
			</div>
			<p>焼きにんにくなめたけ</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>3</span>億円</p>
		<p class="year">※2025年4月実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>45</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>10</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>14</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>104</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1967</span>年</p>
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
						[ 'value' => 5, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 16, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 4, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 8, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 5, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 2, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 90, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 10, 'caption' => '徒歩', 'color' => '#D04255'],
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
					<li>なめ茸や山菜・きのこの製造・販売</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>平林　忍</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>21名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1183.2512533256145!2d138.15532027877967!3d36.468342852470975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d9eaa29f3a30d%3A0x633875bd2ae9de82!2z6aOv5bO26aOf5ZOBKOagqik!5e0!3m2!1sja!2sjp!4v1749629696945!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-276-0011</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://www.iijimashokuhin.com/" target="<?= $co['slug'] ?>">https://www.iijimashokuhin.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">平林　忍</span></figcaption>
		</figure>
		<p>
			私たちが求めているのは、ルールを守れて、素直な人。食品を扱う仕事だからこそ、髪の毛を帽子にきちんと入れる、工場へ入る前には手をしっかり洗う、そういった基本的なルールを守ることが何より大切です。<br>
			また、もし間違えてしまったときは、「間違えました」と伝えられる素直さも大切です。食品会社は、一度の失敗で信頼を失ってしまうこともあります。だからこそ、工場の中でミスに気付けたほうが良いのです。失敗しても、次から気を付ければ大丈夫。やさしくフォローしてくれる先輩たちがそばにいます。<br>
			さらに、目標を持って前向きに挑戦できる人も大歓迎です。将来的には、リーダーとして活躍する道もあります。<br>
			少しでも興味を持っていただけた方は、ぜひ一度、見学に来てみてください。お待ちしています。
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
					<dd>食品加工業</dd>
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
					<dd>あり(原則更新)</dd>
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
					<dd>〒389-0822<br>
					長野県千曲市大字上山田417-1</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>戸倉駅から車で15分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>-</dd>
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
					<dd>180,000円～</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>皆勤手当(8000円)</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>精勤手当(3000円)</dd>
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
					<dd>あり（上限10,000円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回または2か月分</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時00分〜17時15分<br>
						8時00分〜12時00分
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
					<dd>土曜日（月2回）休み　交代制</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、雇用保険、労災保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数1年以上）</dd>
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
						10年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>45歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>外部研修（フォークリフト免許取得など）</dd>
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
					<dd>あり</dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>14時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>12日</dd>
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
					<dd>75%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>高卒以上</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>1名</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
					    2025年7月28日（月）～8月1日（金）の中で要相談 13時00分～
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
					<dd>面接後7日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						代表取締役<br>
						平林　忍
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
