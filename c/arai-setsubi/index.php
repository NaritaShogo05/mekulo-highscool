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
$title = $co['company_name'] . '株式会社 荒井設備の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = 'このページは株式会社荒井設備の企業紹介ページです。荒井設備は、給排水管やエアコン、換気扇など住宅設備の配管工事を中心に手掛けています。現場はチーム制で、多様な状況に対応しながら暮らしの基盤を支える仕事です！';//メタディスクリプションの追加 
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
		目立たないけど、必要な仕事
	</h2>
	<p>
		荒井設備の仕事は、配管工事をはじめとする「暮らしの土台づくり」。<br>
        給水管や排水管、エアコン、換気扇――私たちが取り付ける設備は、どれもみなさんの生活に欠かせないものばかりです。<br>
        でも、ただ「便利な生活を支える」だけではありません。<br>
        私たちが仕事をしているのは、家の壁の裏や地面の下、天井の奥。普段は目に見えない場所に、自分の手で作ったものが静かに残っていくんです。
        それってなんだかワクワクしませんか？
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="gallery01.jpg" alt="" class="fs show">
			<img src="gallery02.jpg" alt="" class="sc">
			<img src="contents03.jpg" alt="" class="th">
			<img src="gallery04.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="gallery01.jpg" alt="" class="fs">
			<img src="gallery02.jpg" alt="" class="sc">
			<img src="contents03.jpg" alt="" class="th">
			<img src="gallery04.jpg" alt="" class="fo">
		</div>
	</div>
	
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		暮らしを支える
	</h3>
	<p>
		荒井設備では、給排水工事といった配管工事を中心に、エアコンや換気扇といった住宅設備の取り付けなどを行なっています。<br>
		一般住宅はもちろん、長野県や東御市といった地方自治体から発注される公共工事にも携わっています。
	</p>
	<div class="images grid-img">
		<img src="contents01.jpg" class="scene" alt="">
		<img src="contents02.jpg" class="scene" alt="">
		<img src="contents03.jpg" class="scene" alt="">
	</div>
	<p>
		なかでも一番多いのが、「本管工事」と呼ばれる配管工事。<br>
		重機や工具を使って、給水管や水道管の引き込みを行ないます。
	</p>
	<div class="images">
		<img src="contents04.jpg" class="scene" alt="">
	</div>
	<p>
		現場は2～6人のチーム制。<br>
        いきなり工事をするわけではなく、通行止めの有無やガス管など他の配管が埋まっていないかの現地調査から始まります。地域住民への周知も、大事な仕事のひとつです。<br>
    </p><br>
	<p>
		重機が入れないような狭い現場では、手作業で地面を掘ることもあります。
        ときには、現場で溶接が必要になることも。
    </p><br>
	<p>
		その場の状況を見て判断することが多いので、決まったことをこなすより、いろんなことをやりたい人に向いている仕事です。
	</p>
	<h3>
		たとえば、こんな現場がある
	</h3>
	<p>
		・6年かけて完成させた、市営住宅の水道管工事。<br>
        ・築40年以上の団地の、洗面台や浴槽などのリフォーム工事。
	</p><br>
    <p>
		毎日違う現場で、毎回違う景色が待っています。
	</p>
	<div class="images">
		<img src="contents05.jpg" class="scene" alt="">
		<img src="contents06.jpg" class="scene" alt="">
	</div>
	<p>
		掘って、通して、つなぐ――なんて、簡単にはいきません。<br>
        現場での作業は、図面通りにいかないことばかり。曲がった管、固い地面、予想外の障害物。<br>
		そんなときこそ、「どうするか」を考えるのが、この仕事の面白さです。
	</p>
    <h3>
		経験０でも大丈夫！
	</h3>
	<p>
		最初は先輩と一緒に現場に出て、道具の名前や使い方、仕事の流れをひとつずつ覚えていきます。<br>
        作業を見て、やってみて、わからなければ質問する。その繰り返しが大切です。<br>
        3年もすれば、一人前として活躍できるでしょう。
	</p><br>
	<p>
        荒井設備の社員は、穏やかな人ばかり。
		休憩中は、車の中で好きな音楽を聴いたり、外の景色を楽しんだり。そんなちょっと自由な空気も、私たちの仕事の魅力かもしれません。
	</p>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark"></p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>2</span>億<span>805</span>万円</p>
		<p class="year"></p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>48</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>16</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num">月<span>3</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>126</span>日</p>
			<p class="at"></p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1974</span>年</p>
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
						[ 'value' => 0.01, 'caption' => '', 'color' => '#2378C7'],
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
						[ 'value' => 30, 'caption' => '女性', 'color' => '#FF6E7E'],
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
					[ 'value' => 10, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 10, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 30, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 30, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 20, 'caption' => '60代', 'color' => '#008C4A'],
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
							[ 'value' => 0.01, 'caption' => '', 'color' => '#FEE929'],
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
					<li>管工事業</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>荒井浩正</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>10名（男性 7名／女性 3名、役員、パート・アルバイト含む）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6425.202445926768!2d138.311116!3d36.37043700000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dbbdc83a61157%3A0xd33688d7940dbeaf!2z5pel5pys44CB44CSMzg5LTA1MDUg6ZW36YeO55yM5p2x5b6h5biC5ZKM77yR77yY77yR77yY4oiS77yT!5e0!3m2!1sja!2sus!4v1751264781203!5m2!1sja!2sus" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-62-1615</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://arai-facility621615.storeinfo.jp/" target="<?= $co['slug'] ?>">https://arai-facility621615.storeinfo.jp/g</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="arai.jpg" alt="">
			<figcaption><span class="name">荒井浩正</span></figcaption>
		</figure>
		<p>
			私たちの仕事は、地面の下や壁の裏――人の目には見えないところを整える仕事です。派手さはないけれど「なくてはならない」存在。人の暮らしを支える、大事な役割を担っています。
		</p><br>
		<p>
            現場では、毎回違う状況や課題に向き合います。決まった正解があるわけじゃないからこそ、自分なりの工夫や判断が武器になります。<br>
			型にはまらず、自由な感性を持っている人ほど、この仕事を楽しめると思います。
		</p>
		<p>
			体を動かすのが好きな人、知らないことにワクワクできる人、そんな人を歓迎します！
            少しでも「やってみたい」と思ったら、まずは現場を見てください。最初は何もわからなくて当然です。<br>一歩ずつ、手を動かしながら覚えていきましょう。
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
<section class="g requirements" 
id="recruitment_requirements">
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
					<dd>配管工・普通作業員</dd>
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
					<dd>なし</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd></dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒389-0505<br>
					長野県東御市和1818-3</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>しなの鉄道大屋駅から車で5分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋内禁煙<br>
					喫煙室設置</dd>
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
					<dt>基本給</dt>
					<dd>197,000円</dd>
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
					<dd>197,000円</dd>
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
					<dd>固定（25日）</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（上限4,200円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（賞与額10万円～50万円）
					</dd>
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
					<dd>なし</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>土・日・祝</dd>
				</div>
				<div>
					<dt>その他</dt>
					<dd>
						年末年始、お盆休みなど。会社カレンダーによる。
					</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>雇用保険、労災保険、健康保険、厚生年金</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>確定拠出年金</dd>
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
					<dd>あり（65歳）</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限75歳）</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>あり（上限70歳）</dd>
				</div>
				<div>
					<dt>入居可能住宅</dt>
					<dd>-</dd>
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
					<dd>20年</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>46歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり<br>
						新人社員研修
					</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>あり<br>
						労働基準協会主催の安全衛生講習・特別講習・技能講習や各種検定試験を支援します。
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>あり</dd>
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
					<dt>前年度の月平均所定労働時間</dt>
					<dd>5時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>7.5日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：0人、男性：0人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>0人</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>30%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>30%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>管工事業</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>-人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						2025年〇月〇日（）〇時〇分～<br>
						2025年〇月〇日（）〇時〇分～
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
					<dd>経理</dd>
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
