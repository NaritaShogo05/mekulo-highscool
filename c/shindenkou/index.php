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
		電気がつく、その瞬間に立ち会える仕事
	</h2>
	<p>
		私たち信電工は、50年以上にわたって地域の電気工事を支えてきました。<br>
		電気工事士の仕事は、建物の中に電気を通すこと。照明やエアコン、コンセントなど、みなさんが毎日当たり前に電気を使うことができるのは、すべて電気工事士が電気を通した結果です。<br>
		私たちが手がけるのは、ビルや学校、工場など、東信地域の大きな建物が中心です。建物を建てる前の地下の配線や電柱工事から始まり、建物が完成するまで1～2年かけて同じ現場を担当することもあります。<br>
		だからこそ、最後に電気が通って明かりがつく瞬間は、何度経験しても感動するものです。
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
	<h4 class="point">技術よりも大切なこと</h4>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		取材を通して感じたのは、「技術よりもまず、人としての基本を大切にする」という考え方です。<br>
		たとえば、現場では必ず自分から挨拶をすること。「信電工の○○です」と名乗り、無言で作業を始めることのないよう徹底しています。<br>
		また、腰道具の中身が整っているかどうかも、仕事への姿勢が表れるポイント。道具がごちゃごちゃな人は仕事も雑になりがちですが、道具をきちんと整えている人は、現場もきれいで丁寧な仕事をするそうです。<br>
		当たり前のことを当たり前にやる。基本を守れる人こそ、まわりから信頼されて一人前になれる。そんな信念を感じる会社でした。
	</p>
</div>
<section class="content" id="about_company">
	<h3>
		まるでパズルのようなクリエイティブな仕事
	</h3>
	<p>
		信電工は、地域に根ざして50年以上。<br>
		学校や工場、ホテルなど、さまざまな建物に電気を届けてきた電気工事のプロフェッショナルです。
	</p>
	<div class="images">
		<img src="contents01.jpg" class="scene" alt="">
		<img src="fourth.jpg" class="scene" alt="">
	</div>
	<p>
		電気工事士の仕事は、ただ現場の電気を配線するだけではありません。<br>
		お客様から建物の設計図をいただいたら、まずは実際の作業に合わせて配線図を作成します。<br>
		建物の設計図を読み解きながら、空調や水道の配管を避けつつ、どのような電気配線ルートを通すかを考えることが仕事のスタートです。<br>
		クリエイティブな思考が必要で、まるで複雑なパズルを解くような感覚も、この仕事の醍醐味です。
	</p>
	<div class="images">
		<img src="contents02.jpg" class="scene" alt="">
	</div>
	<p>
		毎日当たり前に使っている「電気」ですが、その裏にはたくさんの工夫と技術が使われています。<br>
		私たちの仕事は、目に見えない電気を、見える「安心」に変えること。配線を整え、点灯試験や漏電検査などを繰り返しながら、安全に使える状態を作りあげていきます。
	</p>
	<div class="images">
		<img src="contents03.jpg" class="scene" alt="">
		<img src="third.jpg" class="scene" alt="">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<h3>
		スケールの大きな現場で活躍
	</h3>
	<p>
		信電工が担当する工事の約7割は、ホテルや工場などの大きな建物。何もない更地からスタートし、建物が完成するまで1～2年かけて、同じ現場に関わることもあります。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
		<img src="firstview.jpg" class="scene" alt="">
		<img src="contents07.jpg" class="scene" alt="">
	</div>
	<p>
		その場ですぐに直せることもあれば、一度パイプを作業場に持ち帰って加工・修理・製作して再設置することもあります。
	</p>
	<p>
		こうした大きな施設に電気を届けるには、家庭用とは比べものにならない量の電流を流す必要があります。そのため、使う電線も家庭用とは違います。<br>
		高圧電力を引き込み、変電施設を設置する場合などは、直径数センチもあるような太い電線を扱うこともあります。
	</p>
	<p>
		細い電線にたくさんの電流を流すと、発熱して劣化や火災の原因になることも。だからこそ、流す電流の量に合わせた適切な太さの電線を選ぶ必要があるのです。
	</p>
	<div class="images">
		<img src="contents08.jpg" class="scene" alt="">
		<img src="contents09.jpg" class="scene" alt="">
		<img src="contents10.jpg" class="scene" alt="">
	</div>
	<p>
		特に新築の建物では、電気を引き込むための「引き込み線」を設置するところから始めます。この作業では、手ではびくともしないほど固い電線を、ケーブルベンダという専用の工具で曲げていきます。力だけではどうにもならないからこそ、正しい工具と技術が欠かせません。
	</p>
	<h3>道具に性格が出る！？</h3>
	<p>
		道具の選び方や扱い方にも、その人らしさが表れると考えています。<br>
		よく使うペンチやドライバーは会社から支給されますが、1～2年も使えば刃こぼれしてきます。そうすると、「この色の道具がいい」「この形が使いやすい」と、だんだん自分好みの道具をそろえていく人も多いです。
	</p>
	<h3>
		入社後は、できることからステップアップ
	</h3>
	<p>
		電気工事の現場には、高所作業や重機の操縦、感電のリスクなど、危険を伴う作業もあります。<br>
		たとえば、高所作業ではフルハーネスを装着し、必ず二人一組で作業。重機を使うときは、周囲の安全確認を徹底します。こうした細かなルールを徹底することが、作業者自身の命を守ります。
	</p>
	<div class="images">
		<img src="contents11.jpg" class="scene" alt="">
		<img src="contents12.jpg" class="scene" alt="">
	</div>
	<p>
		とはいえ、入社後すぐに危険な作業をお願いすることはありません。<br>
		まずは1週間ほど、社内で安全についての勉強をします。DVDや冊子を使って、危険な場所や対策を学ぶところからスタートです。<br>
		現場に出てからは、先輩のアシスタントとして仕事の流れに慣れていきます。掃除や資材運び、道具の準備などを通して、仕事の流れや安全のルールも一つずつ覚えていきます。<br>
		電気の知識がなくても大丈夫。電気工事士をはじめ、現場で必要な資格はすべて全力でサポートします。
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
					<h3>配線盤</h3>
					<p>
						図面通りに正確な配線を行い、設備が安全に稼働するよう整えます。
					</p>
				</hgroup>
			</div>
			<p>配線盤</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>照明</h3>
					<p>
						学校などの照明設備も整えます。
					</p>
				</hgroup>
			</div>
			<p>照明</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business3.jpg" alt="">
				</div>
				<hgroup>
					<h3>電柱</h3>
					<p>
						電柱にのぼって作業することも。
					</p>
				</hgroup>
			</div>
			<p>電柱</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年1月1日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>2</span>億円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>40</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>13</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>30</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>100</span>日</p>
			<p class="at">※2025年計画</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1984</span>年</p>
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
						[ 'value' => 2, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 15, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 15, 'caption' => '男性：15名', 'color' => '#0062B5'],
						[ 'value' => 2, 'caption' => '女性：2名', 'color' => '#FF6E7E'],
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
					[ 'value' => 2, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 3, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 5, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 2, 'caption' => '60代', 'color' => '#008C4A'],
					[ 'value' => 1, 'caption' => '70代', 'color' => '#008BAA'],
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
					<li>一般電気設備</li>
					<li>屋内外電気工事</li>
					<li>照明設備など</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>両角正道</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>20名（2024年時点）</8dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d933.0335777255171!2d138.29556181370725!3d36.42629642621029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f70!3m3!1m2!1s0x601dbd007bc44c39%3A0x28f382b782c9294!2sREIWA%20co.%2Cltd.!5e0!3m2!1sja!2sjp!4v1750992543952!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0267-67-1270</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://shindenkou.jp/" target="<?= $co['slug'] ?>">https://shindenkou.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="message.jpg" alt="">
			<figcaption><span class="name">両角正道</span></figcaption>
		</figure>
		<p>
			私は、23歳のときに信電工に入社しました。<br>
			右も左もわからず不安なことばかりでしたが、先輩たちが丁寧に教えてくれたおかげで、少しずつ成長することができました。今の自分があるのは、誠実に指導してくれた先輩たちのおかげです。だからこそ、これから入ってくる人も同じように大切にする会社でありたいと強く思っています。<br>
			信電工は、家族経営ではありません。<br>
			「強い責任感を持って仕事に向き合える社員に、会社を託していく」<br>
			そんな考えを創業時から受け継いできました。そのため、社長を目指す道も、現場や管理職として専門性を追求する道も、すべての社員に公平に開かれています。<br>
			最初から特別な知識や経験は必要ありません。大切なのは、挨拶や報告などの基本をしっかり守ること。それが周りからの信頼につながり、やがて一人前として活躍できます。<br>
			信電工は、「真面目にコツコツと努力する人」をしっかり評価する会社です。<br>
			あなたの「成長したい」という気持ちを、私たちは全力で応援します。一緒に働ける日を楽しみにしています！
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
					<dd>電気業</dd>
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
					<dd>〒385-0021<br>
					長野県佐久市長泥1040-1</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>JR小梅線中佐都駅から徒歩15分</dd>
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
					<dd>あれば尚可<br>
						第2種電気工事免許
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
					<dd>21.6日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>170,000円</dd>
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
					<dd>170,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>技術手当5,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>住宅手当10,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当③</dt>
					<dd>役付手当10,000円</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月25日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>実費支給（上限あり：15,000円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（3カ月分）</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時00分〜17時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>20時間（納期による）
					</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>土・日・祝</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日106日<br>
						第2・4・5土曜日は休み<br>
						夏季休暇は8月13日～8月16日<br>
						年末年始休暇は12月30日～1月4日まで
					</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>雇用保険、労災保険、健康保険、厚生年金、厚生年金基金</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続３年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>62歳</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限年齢65歳）</dd>
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
					<dd>前年度:0人、2年度前：0人、3年度前：1人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：1人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり<br>
						新入社員安全衛生教育等
					</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>あり　業務に関する、会社が認めた資格についての取得費用の全額負担</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>なし
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
					<dd>23時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>6日</dd>
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
					<dd>0%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>電気工事士</dd>
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
						見学では、信電工の仕事について、詳しくご説明します。<br>
						その日に行なっている工事の内容によっては、実際の現場に足を運び、作業の様子を間近で見ることができる場合もあります。<br>
						教科書や映像ではわからない、現場ならではのリアルな空気を感じてみてください。
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>
						なし
					</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後7日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						小山 啓子
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
