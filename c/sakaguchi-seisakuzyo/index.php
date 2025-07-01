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
$description = '坂口製作所は、射出成形機の組立・修理を行う製造会社です。未経験からでも安心して始められ、自分より大きな機械を組み上げる達成感が魅力。チームで支え合いながら成長できる職場です。';//メタディスクリプションの追加 
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
	<img alt="" class="fv_image" src="article4.jpg">
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
		自分より大きな機械を組み上げる 
	</h2>
	<p>
		みなさんは、機械の中身を見たことがありますか？ 機械の中には、数えきれないほどの部品や配線が組み込まれていて、それぞれが大切な役割を果たしています。 坂口製作所の仕事は、そんな“機械”を組み立てること。<br>
		ドライバーやレンチなどの工具を使って一つひとつの部品を組み立て、ケーブルを繋ぎ、やがて自分よりも大きな機械が目の前で完成していく──そんな瞬間に立ち会える仕事です。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="gallery1.jpg" alt="" class="fs show">
			<img src="gallery2.jpg" alt="" class="sc">
			<img src="gallery3.jpg" alt="" class="th">
			<img src="gallery4.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="gallery1.jpg" alt="" class="fs">
			<img src="gallery2.jpg" alt="" class="sc">
			<img src="gallery3.jpg" alt="" class="th">
			<img src="gallery4.jpg" alt="" class="fo">
		</div>
	</div>
	<h3>取材担当者からのポイント！</h3>
	<h4 class="point">のびのびと働ける職場</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		取材に訪れたとき、まず印象的だったのは社員同士のあたたかいやりとりです。先輩が後輩に作業を丁寧に教えていたり、仲間と声をかけあって協力していたりと、人と人とのつながりを大切にしている職場だと感じました。 <br>
		実際にお話を聞いてみると、「入社前は人間関係が不安だったけど、先輩たちがすぐに声をかけてくれて安心した」と話す社員さんもいました。未経験からスタートした人や、全く違う仕事から転職してきた人も多いそうです。 <br>
		1台の機械を完成させるにはいくつもの工程があり、1人で組み上げることはできません。機械組立と電気組立、各部署間での連携を大切にしていて、忙しいときは「ここ手伝おうか？」と声をかけあいながら作業を進めているそうです。助け合いながら働ける環境が整っていると感じました。 
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		プラスチック製品の“もと”を作る 
	</h3>
	<p>
		坂口製作所では、工場などで使われる機械の組み立てを行なっています。 
	</p>
	<div class="images">
		<img src="gallery2.jpg" class="scene" alt="">
		<img src="article1.jpg" class="scene" alt="">
		<img src="article2.jpg" class="scene" alt="">
	</div>
	<p>
		主に手がけているのは、「射出成形機」というプラスチック製品を作るための機械です。 
	</p>
	<div class="images">
		<img src="article3.jpg" class="scene" alt="">
	</div>
	<p>
		この機械は、溶かしたプラスチックを型に流し込み、冷やして固めて形を作ります。みなさんの身の回りのプラスチック製品――例えばペットボトルのキャップやゲーム機のパーツなども、この「射出成形機」で作られているんです。 
	</p>
	<div class="images">
		<img src="pura.jpg" class="scene" alt="">
	</div>
	<p>
		「そんなプラスチック製品の“もと”となる機械を作っているのが、私たち坂口製作所です！ 
	</p>
	<h3>
		機械の“中身”を組み立てる 
	</h3>
	<p>
		私たちの仕事は、「機械組立」と「電装組立」の２つに分かれています。 <br><br>
	</p>
	<p>
		<b>『機械組立』</b><br>
		部品を組み合わせて、自分より大きな機械を組み立てていく仕事です。 <br>
		一つひとつの部品が大きいので、クレーンを使って運ぶことも多いです。
	</p>
	<div class="images">
		<img src="article4.jpg" class="scene" alt="">
		<img src="article5.jpg" class="scene" alt="">
	</div>
	<p>
		レンチやスパナ、ドライバーなどの工具を使って、ネジやボルトを締めていきます。ときには市販の工具が合わないこともあり、自分たちで工具を作ることもあります。 
	</p>
	<div class="images">
		<img src="article6.jpg" class="scene" alt="">
		<img src="article7.jpg" class="scene" alt="">
	</div>
	<p>
		機械組立で一番難しいのは、「ボルトを締める強さ」。経験を積みながら、“感覚”を覚えていきます。<br> <br>
	</p>
	<p>
		<b>『電装組立』</b> <br>
		機械が正しく動くように、電気配線を整える仕事です。 <br>
		配線図を見ながら、ドライバーやストリッパー、圧着機などの工具を使ってケーブルを繋げていきます。 
	</p>
	<div class="images">
		<img src="article8.jpg" class="scene" alt="">
		<img src="article9.jpg" class="scene" alt="">
		<img src="gallery4.jpg" class="scene" alt="">
	</div>
	<p>
		配線にはシールが貼られているので、どこにどの線を繋げればいいかわかりやすく、初めてでも取り組みやすいのが特徴です。  
	</p>
	<div class="images">
		<img src="article10.jpg" class="scene" alt="">
		<img src="article11.jpg" class="scene" alt="">
	</div>
	<p>
		機械の中の狭い部分では、みなさんが初めて見るような特殊な工具も使います。  
	</p>
	<div class="images">
		<img src="article12.jpg" class="scene" alt="">
		<img src="article13.jpg" class="scene" alt="">
	</div>
	<p>
		どちらの仕事も、自分の手で機械が完成していく様子を見ることができます。経験を積んでいくうちに、機械の見方が変わるでしょう。 
	</p>
	<h3>
		できることからスタート 
	</h3>
	<p>
		入社後は、3か月の研修期間があります。 <br>
		まずは先輩と一緒に、「このネジを締めてみよう」「この線を繋いでみよう」という簡単な作業からスタート。先輩がそばについて確認してくれるので、安心して学んでいけます。
	</p>
	<div class="images">
		<img src="gallery1.jpg" class="scene" alt="">
	</div>
	<p>
		高校で機械や電気を学んでいなくても、「やってみたい」という気持ちさえあれば大丈夫！もちろん、仕事に必要な資格や講習はすべて会社が負担します。 <br>
		誰かが相談していると、周りの人も「どうしたの？」と声をかけてくるような職場です。1人では組み立てられない機械だからこそ、チームで助け合うことが当たり前になっているんです。 <br>
		失敗しても大丈夫！先輩の中には、「部品を１つ入れ忘れた！」なんて人もいます。そんなときも、怒られるようなことはないので安心してください。失敗したときは、一緒に改善策を考えましょう。 
	</p>
</section>
<!--
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="haikan.jpg" alt="">
				</div>
				<hgroup>
					<h3>射出成型機の組立 </h3>
					<p>
						テキストがはいりますテキストがはいりますテキストがはいりますテキストがはいります
					</p>
				</hgroup>
			</div>
			<p>射出成型機の組立 </p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="gallery03.jpg" alt="">
				</div>
				<hgroup>
					<h3>NC工作機械・汎用機械等の組立 </h3>
					<p>
						テキストがはいりますテキストがはいりますテキストがはいりますテキストがはいります
					</p>
				</hgroup>
			</div>
			<p>NC工作機械・汎用機械等の組立 </p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="gallery03.jpg" alt="">
				</div>
				<hgroup>
					<h3>汎用工作機械の修理・精度出し  </h3>
					<p>
						テキストがはいりますテキストがはいりますテキストがはいりますテキストがはいります
					</p>
				</hgroup>
			</div>
			<p>汎用工作機械の修理・精度出し  </p>
		</li>
	</ul>
</section>
-->
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>48</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>15</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>10</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>118</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1959</span>年</p>
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
						[ 'value' => 85, 'caption' => '中途', 'color' => '#2378C7'],
						[ 'value' => 15, 'caption' => '新卒', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 85, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 15, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 5, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 9, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 43, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 24, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 19, 'caption' => '60代', 'color' => '#008C4A'],
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
							[ 'value' => 86, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 14, 'caption' => '県外', 'color' => '#FEE929'],
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
					<li>射出成形機の組立</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>清水伸仁</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>23名</8dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3211.998296531479!2d138.21340347509545!3d36.38503527236844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601da31eec0817b3%3A0xd9a685710acb092e!2z77yI5pyJ77yJ5Z2C5Y-j6KO95L2c5omA!5e0!3m2!1sen!2sjp!4v1751009026638!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-25-0128</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="http://sakaguchiss.com/">http://sakaguchiss.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">清水伸仁</span></figcaption>
		</figure>
		<p>
			高校生のみなさん、はじめまして！坂口製作所の社長、清水です。<br> 
			私たちは、プラスチック製品を量産するための機械である「射出成型機」を、色々な大きさや種類の部品を使って、一から組み立てていく仕事をしています。 <br>
			目の前で、自分よりも大きな機械が少しずつ組み上がっていく。その中に、自分が取り付けた部品や配線が入っていると思うと、やっぱりワクワクするんです。 <br>
		</p>
		<p>
			ありがたいことに、仕事をお願いできないかと声をかけてくださる企業様も多いですが、今は人手が足りず、お断りしてしまう場面もあります。だからこそ、これから一緒にものづくりを楽しんでくれる“若い力”を必要としています。 <br>
			機械って、ただ大きいだけじゃないんです。中身を知れば知るほど、面白い世界が広がっています。 <br>
			そんな世界に少しでも興味があれば、ぜひ一度、見学に来てみてください！お会いできる日を楽しみにしています。 
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
					<dd>射出成形機の組立</dd>
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
					<dd>〒389-1103<br>
					長野県上田市神畑630</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>神畑駅から徒歩5分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり（喫煙所設置）</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>喫煙箇所指定</dd>
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
					<dd>20.5日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>155,000円～</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>職能手当(15,000円)</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>生産手当(15,000円)</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>185,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>皆勤手当(6,000円)</dd>
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
					<dd>あり（上限15,000円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>年1回（7月）</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回、1.8か月分</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時15分〜17時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>土日、その他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日118日</dd>
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
					<dd>実績あり</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり(70歳)</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>なし</dd>
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
						15年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>なし</dd>
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
					<dd>あり</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>10時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>16日</dd>
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
					    <li>2025年8月1日（金）10時30分～、13時30分～</li>
						<li>2025年8月4日（月）10時30分～、13時30分～</li>
						<li>2025年8月5日（火）10時30分～、13時30分～</li>
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後14日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						代表取締役<br>
						清水　伸仁
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
