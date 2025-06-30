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
$description = '第三木材は、東御市にある木材専門の会社です。創業から140年以上、地元の木を使った住宅や市役所などの建築に関わってきました。「建築資材の流通販売」「木工事の請負」「県産材製品の加工・販売」「防腐・防火処理木材製品の加工・販売」の4事業を柱としており、木材を使ったさまざまな事業に挑戦しています。';//メタディスクリプションの追加
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
	<img alt="" class="fv_image" src=".jpg">
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
		100年先の暮らしをつくる
	</h2>
	<p>
		私たち第三木材は、東御市にある木材専門の会社です。創業から140年以上、地元の木を使った住宅や市役所などの建築に関わってきました。<br>
		「建築資材の流通販売」「木工事の請負」「県産材製品の加工・販売」「防腐・防火処理木材製品の加工・販売」の4事業を柱としており、木材を使ったさまざまな事業に挑戦しています。<br>
		木は年輪を重ねながら、少しずつ大きくなっていきます。会社も同じで、社員一人ひとりの成長があってこそ、長く続いていくものだと思っています。<br>
		これからも私たちは、一歩ずつ成長を重ねて、地域の未来を支えていきたいと考えています。
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
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		取材を通してまず感じたのは、第三木材のあたたかくて明るい雰囲気です。社員のみなさんの笑顔や声掛けがとても自然で、初めて訪れた私でも安心できるような、居心地のよさがありました。<br>
		若手の社員が一人でいると、先輩たちが「大丈夫？」「何かあった？」とすぐに気にかけてくれる環境があるそうです。そんな職場だからこそ、安心して働けるのだと感じました。<br>
		社内イベントも豊富で、BBQやたこ焼きパーティー、懇親会などが定期的に開かれています。もちろん参加は自由ですが、ほとんどの社員が自然と集まってくるそう。飲み会代やタクシー代、宿泊費もすべて会社が負担してくれるのも、ありがたいポイントですね。<br>
		さらにユニークなのが、社員の間でニックネームがあること！<br>
		営業部長は“太鼓のパパ”、営業課長は“じゅんちゃん”、代表は“なおちゃん”と、役職に関係なくフランクに呼び合う姿からも、チームとしてのあたたかさが伝わってきました。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		地域の木を、地域の建築へ
	</h3>
	<p>
		私たちは東御市で、<b>140年以上の歴史</b>を持つ木材専門の会社です。<br>
		「建築資材の流通販売」「木工事の請負」「県産材製品の加工・販売」「防腐・防火処理木材製品の加工・販売」の4事業を柱とし、自然豊かな信州の木を、住宅や公共施設などに使いながら、地域の建築を支えています。
	</p>
	<div class="images">
		<img src=".jpg" class="scene" alt="">
	</div>
	<p>
		地域の企業や職人、自治体などと協力して、地域を盛り上げ元気にすること。地域の技術を継承していくこと。地域の木材を有効活用して自然と共存していくこと。それが、第三木材で大切にしているテーマです。
	</p>
	<div class="images">
		<img src=".jpg" class="scene" alt="">
	</div>
	<p>
		「木を切らないといけないの？」と、不思議に思った人もいると思います。森は、人が手を加えずに放っておくと、荒れてしまうんです。<br>
		適切な数の木を切って、植えて、育てる。この“循環”こそが、自然を守り、未来へつなげていくことになります。<br>
		私たちは、自然との共存を考えながら、地域の木を正しく使い、次世代へ受け継いでいくという取り組みをしています。
	</p>
	<h3>
		建築もまるごと引き受ける
	</h3>
	<p>
		第三木材では、15年ほど前から「木工事の請負」も始めました。<br>
		住宅のリフォームから、美術館や学校のような大規模の建築まで、幅広く関わっています。<br>
		特徴的なのは、ほとんどが特注だということ。建物に合わせて、オーダーメイドで工事を行なっています。ゼネコン（大手建設会社）からも、「これは第三木材に任せないとわからない」と頼られる存在です。
	</p>
	<div class="images">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<p>
		また、大工さんの紹介ができるのも、地域密着の第三木材だからこそ。地域材の扱いに詳しい地元の大工さんと連携することで、工事がスムーズに進みます。
	</p>
	<h3>
		しっかり支える研修制度
	</h3>
	<p>
		入社後は、まず配送部・製造部を１か月ずつまわる研修があります。<br>
		自分の会社がどこで何をしているのか、配送場所や商品、現場で関わる人などを知ることで、その後の配属先でもスムーズに人間関係が築けるようになっています。<br>
		ビジネスマナーなども外部研修で学べるので、初めて社会に出る高校生も安心です。
	</p>
	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<p>
		やるときはやる、でも無理はしない。そんな働き方が根付いているのも第三木材の魅力のひとつ。上司も定時で帰ることが多く、社長も子育て中なので働き方に理解があります。<br>
		「自分がいないと止まってしまう」という仕組みではないからこそ、休みも取りやすく、プライベートも大切にできます。
	</p>
	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<p>
		また、ものづくりが好きな人が多いのも第三木材の特徴です。<br>
		お昼休みなどの空き時間に、廃材を使って棚や机を作る人も。子どものための小さなキッチンを作った人もいました。何か作り始めると、まわりが「そこ、こうしたら？」と自然と集まってくるような職場です。
	</p>
	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
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
					<h3>構造材</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>構造材</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>ウッドチップ</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>ウッドチップ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>製材</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>製材</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business4.jpg" alt="">
				</div>
				<hgroup>
					<h3>塗装</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>塗装</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business5.jpg" alt="">
				</div>
				<hgroup>
					<h3>サントミューゼ</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>サントミューゼ</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business6.jpg" alt="">
				</div>
				<hgroup>
					<h3>小諸市動物園</h3>
					<p>
						
					</p>
				</hgroup>
			</div>
			<p>小諸市動物園</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>10</span>億<span>5,400</span>万円</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>45</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>11</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>3.5</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>105</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2018</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>9</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.001, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 100, 'caption' => '100%', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<!--
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 4, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 1, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		-->
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 26, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 7, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<!--
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 3, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 39, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 39, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 36, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 18, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 16, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 151, 'caption' => "車・バイク99%", 'color' => '#E06A3A'],
						[ 'value' => 1, 'caption' => '電車・バス1%', 'color' => '#D04255'],
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
		-->
	</ul>	
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src=".jpg" alt="" class="scene">
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
					<li>建築資材の流通販売</li>
					<li>長野県産材製品の加工・販売</li>
					<li>建築一式工事</li>
					<li>大工工事の請負</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>島田直政</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>33名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15502.853358422022!2d138.33330409345766!3d36.341105445701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601db9dba2377fe1%3A0xfdfcfb68dfff8549!2zKOagqinnrKzkuInmnKjmnZA!5e0!3m2!1sja!2sjp!4v1751207554257!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-62-1202</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://dai3wood.co.jp/" target="<?= $co['slug'] ?>">https://dai3wood.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">島田直政</span></figcaption>
		</figure>
		<p>
			「ちょっとやってみたい」「興味がある」と思ったことには、ぜひ積極的に挑戦してみてほしいと思っています。知らなかったことを知る、できなかったことができるようになる。その積み重ねが、人生を豊かにしてくれるはずです。<br>
			私たちは、これからを担う若い世代が活躍できる場をもっと増やしたいと考えています。たとえば、職人さんを育てる学校や、新たな仕事につながる新規事業。将来的には、第三木材から10人の社長を誕生させることが目標です。新しい会社ができれば地域活性化にもつながりますし、会社経営は人生のいい勉強にもなります。もちろん社内起業も大歓迎！何かにチャレンジしてみたい人は、ぜひ一度見学に来てみてください。
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
			<a href="<?= $company_base ?>job_sales/">
				<figure>
					<img src="<?= $company_base ?>introduce2.jpg" alt="">
					<figcaption>法人営業</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_conmane/">
				<figure>
					<img src="job_hyoumen/fv.jpg" alt="" style="aspect-ratio: 3 / 2; object-fit: cover;">
					<figcaption>建築施工管理</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_carpenter/">
				<figure>
					<img src="second.jpg" alt="">
					<figcaption>建築大工</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_coating/">
				<figure>
					<img src="second.jpg" alt="">
					<figcaption>配送</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_processing/">
				<figure>
					<img src="second.jpg" alt="">
					<figcaption>木材加工</figcaption>
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
