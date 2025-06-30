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
$description = '有限会社ファインフォーミングは上田市真田町にあるアルミ部品メーカー。自動車や自転車部品を製造し、全国でも希少な鋳造と鍛造の一貫生産を実現。繊細さとスピード感、あなたの得意が活きる職場です！';//メタディスクリプションの追加 
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
	<img alt="" class="fv_image" src="fv_2.jpg">
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
		アルミの可能性を広げる部品メーカー、ファインフォーミング
	</h2>
	<p>
		ファインフォーミングの採用ページをご覧いただき、ありがとうございます。<br>
		私たちは、上田市真田町で、「アルミ鋳造鍛造法」という独自の技術を駆使し、自動車部品やマウンテンバイクなどの自転車部品を製造しているアルミ部品メーカーです。
	</p>
	<p>
		<ruby>「鋳造」<rt>ちゅうぞう</rt></ruby>とは、アルミを溶かして型に流し込み、部品を作る技法です。<br>
		「<ruby>鍛造<rt>たんぞう</rt></ruby>」とは、熱したアルミ部品を600tの圧力で叩いて、金属の強度を高める技法です。<br>
		ファインフォーミングでは、この「鋳造」×「鍛造」の技術を組み合わせることで、部品を生み出しています。<br>
		実は、鋳造鍛造法の鋳造と鍛造を1社で行なっているのは、全国を見ても当社のみ！<br>
		そんなファインフォーミングの仕事を、ぜひ覗いてみてください。
	</p>
	<div id="gallery">
	<div class="gallery_window">
			<img src="contents_05.jpg" alt="" class="fs show">
			<img src="contents_02.jpg" alt="" class="sc">
			<img src="contents_03.jpg" alt="" class="th">
			<img src="contents_04.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="contents_05.jpg" alt="" class="fs">
			<img src="contents_02.jpg" alt="" class="sc">
			<img src="contents_03.jpg" alt="" class="th">
			<img src="contents_04.jpg" alt="" class="fo">
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
	<h4 class="point">『職人技』の世界！</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['noguchi']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['noguchi']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		「大きな機械を操りながら、ダイナミックにモノをつくる」<br>
		そんな仕事、ちょっとワクワクしませんか？<br>
		ファインフォーミングは、全国でも珍しい鋳造×鍛造を行う会社です。<br>
		溶けた金属を型に流し、一瞬で製品に生まれ変わる鋳造。<br>
		600tもの圧力で熱した金属を叩き、強度が高い製品を生み出す鍛造。<br>
		どちらも迫力満点で、まさに“職人技”の世界です！ぜひ、応募前見学に訪れてみてください。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		キミはどっち派？鋳造と鍛造、それぞれの仕事スタイル！
	</h3>
	<p>
		私たちの会社では、大きく分けて二つの仕事があります。<br>
		一つ目は「鋳造」です。<br>
		鋳造はアルミを高温で溶かし、それを部品の型に流し込み、冷やして固める工法です。<br>
		二つ目の「鍛造」は、熱した金属に強い圧力をかけて、形を作る工法です。金属は叩くことで強くなる特性があるので、「鍛（きた）える」ことから「鍛造」と呼ばれています。<br>
		どちらも似たような漢字ですが、仕事のやり方や求められるスキルはまったく違います！<br>
		ぜひ、自分に合いそうだなと思う方をチェックしてみてください。
	</p>
	<h3>
		細かな作業が好きなら「鋳造」！
	</h3>
	<p>
		一見、ダイナミックに見える鋳造ですが、実は<strong>繊細な技術</strong>が求められます。
	</p>
	<div class="images">
		<img src="contents_01.jpg" class="scene" alt="">
		<img src="contents_02.jpg" class="scene" alt="">
	</div>
	<p>
		例えば、アルミを型に流し込むときに、勢いよく入れると空気を巻き込み、不良品になってしまいます。一方で、ゆっくりすぎると温度が下がってしまい、キレイに固まりません。<br>
		ちょうどいいスピードを見極める<strong>職人の感覚</strong>が必要なのです。さらに、アルミにゴミが入らないように注意するなど、<strong>細かいところまで気を配れる人</strong>が向いている仕事です！
	</p>
	<h3>
		スピード感が好きなら「鍛造」！
	</h3>
	<p>
		鍛造は、熱した金属を<strong>600tの圧力で叩き、強度を高めながら形を整えていく技術</strong>です。
	</p>
	<div class="images">
		<img src="contents_03.jpg" class="scene" alt="">
		<img src="contents_04.jpg" class="scene" alt="">
	</div>
	<p>
		この仕事では、機械から一定のリズムで出てくる金属に合わせて、素早く正確に作業することが求められます。タイミングがズレると、金属の温度が下がり、鍛造に失敗してしまうことも…。<br>
		そのため、スピード感をもって動ける人や、チームワークを大切にできる人が向いています！<br>
		スポーツ経験がある人は、そのリズム感やチームワークを活かせるかも！？
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="work01.jpg" alt="">
				</div>
				<hgroup>
					<h3>鋳造</h3>
					<p>
						金属をドロドロに溶かし、型に流し込んで製品を製造する技法です。当社では、アルミを使っています。
					</p>
				</hgroup>
			</div>
			<p>鋳造</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="work02.jpg" alt="">
				</div>
				<hgroup>
				<h3>鍛造</h3>
					<p>
						熱した金蔵に、強い圧力をかけて形を整え、製品を製造する技法です。当社は鋳造された部品をさらに鍛造し、より強い部品を作っています。この鋳造×鍛造を組み合わせて開発した技法を「アルミ鋳造鍛造法」と名付け、全国で唯一当社のみが扱える技術です。
					</p>
				</hgroup>
			</div>
			<p>鍛造</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
<p class="remark">（2025年2月実績）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>3</span>億<span>6</span>千万円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>44</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>7</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>19</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>115</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1994</span>年</p>
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
						[ 'value' => 10, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 90, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 90, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 10, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>年齢構成</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 60, 'caption' => '20代', 'color' => '#0073B7'],
						[ 'value' => 110, 'caption' => '30代', 'color' => '#00AEEF'],
						[ 'value' => 50, 'caption' => '40代', 'color' => '#00B398'],
						[ 'value' => 60, 'caption' => '50代', 'color' => '#009F6B'],
						[ 'value' => 60, 'caption' => '60代', 'color' => '#008C4A'],
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
				アルミ鋳造鍛造法による自動車、オートバイ等の部品製造加工
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>笹邉紀三子</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>34名（パート含む）（2025年3月現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9483.096910591945!2d138.2912041425021!3d36.4565768338294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dbd8a3c122eff%3A0xa90e5998351f1ec2!2z5pyJ6ZmQ5Lya56S-44OV44Kh44Kk44Oz44OV44Kp44O844Of44Oz44Kw!5e0!3m2!1sja!2sjp!4v1742978060989!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</dd>
		</div>
		<div>
		<dt>本社電話番号</dt>
			<dd>0268-61-5002</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://fine-f.co.jp/" target="<?= $co['slug'] ?>">https://fine-f.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>見出しが入ります</h3>
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="word">笹邉紀三子</span></figcaption>
		</figure>
		<p>
			サンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプル
		</p>
		<p>
			サンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプルテキストサンプルテキストサンプルサンプル
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
			<a href="<?= $company_base ?>job_cyuzo/">
				<figure>
					<img src="<?= $company_base ?>job_cyuzo/firstview.jpg" alt="">
					<figcaption>鋳造</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_tanzo/">
				<figure>
					<img src="job_tanzo/firstview.jpg" alt="">
					<figcaption>鍛造</figcaption>
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
