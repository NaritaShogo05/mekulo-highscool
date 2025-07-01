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
$description = '宮下興業は長野市を中心に、足場工事や橋の補修をする会社です。特に得意としているのは「吊り足場」。この吊り足場は、空中に足場を吊り下げるようにして組み立てるので、高い技術と経験が必要です。';//メタディスクリプションの追加 
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
<body class="highschool kyasuteku">
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
		建物も橋も、まずは足場から
	</h2>
	<p>
		建物を建てるときも、橋を修理するときも、まず必要になるのが「足場」です。足場は、職人さんたちが安全に作業するための“土台”のようなもの。<br>
		私たち宮下興業では、その足場を現場ごとに最適な形で設置する仕事をしています。<br>
		みなさんが良く見かけるのは、建物のまわりに組まれた、上に向かって伸びる足場かもしれません。でも、私たちが特に得意としているのは、橋の下に向かって組む「吊り足場」という特殊な足場です。<br>
		この吊り足場は設置するのが難しく、対応できる業者が限られています。私たちは専門技術を活かして、長野県内はもちろん、北陸や関東など県外の橋の補修現場にも数多く関わっています。
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
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		宮下興業の現場では、作業中も明るくにぎやかな雰囲気が広がっています。<br>
		「楽しく、わいわいやってる感じですね」と話してくれたのは、実際に働いている社員さん。ゲームの話で盛り上がったり、自然と声をかけ合ったりしながら、チームで息を合わせて作業を進めています。<br>
		メンバーは若手が中心で、平均年齢は29歳。社長も36歳と若く、同世代が多いので話しやすい雰囲気です。実はちょっぴり人見知りな社員さんが多いのですが、こちらから話しかけると、すぐに心を開いてくれます。<br>
		現場は「住宅担当」と「橋担当」の2つの班に分かれていますが、忙しいときには班を越えてサポートし合うことも。自然と助け合う姿勢が根付いていて、そんな空気が、働きやすさにも繋がっています。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		橋の足場が得意！県外の現場にも。
	</h3>
	<p>
		私たちは長野市を中心に、足場工事や橋の補修をする会社です。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
		<img src="fourth.jpg" class="scene" alt="">
	</div>
	<p>
		建設現場や橋の補修工事では、まず「足場」を設置するところから工事が始まります。<br>
		私たちが特に得意としているのは「吊り足場」と呼ばれる、橋の下などの地面が使えない場所に設置する特殊な足場です。この吊り足場は、空中に足場を吊り下げるようにして組み立てるので、高い技術と経験が必要です。
	</p>
	<div class="images">
		<img src="first.jpg" class="scene" alt="">
		<img src="turi.jpg" class="scene" alt="">
	</div>
	<p>
		吊り足場を設置できる会社は少なく、宮下興業では長野県内はもちろん、北陸や関東などの遠方の現場にも出向いて設置を行なっています。県外の現場では、最大5日間ほどの泊まり込みになることもあります。
	</p>
	<h3>
		“職人の安全”を支える
	</h3>
	<p>
		宮下興業では、一般住宅やアパートの足場工事と、橋の補修・吊り足場の工事を担当しています。
	</p>
	<p><br><b>『一般住宅やアパートの足場工事』</b></p>
	<p>
		住宅の現場は、足場工事の中でも特に身近です。新築の家や、リフォーム中の建物の周りに足場を組み、安全な作業環境を整えます。
	</p>
	<div class="images">
		<img src="apart.jpg" class="scene" alt="">
	</div>
	<p>
		建物の形はそれぞれ違うので、足場の設計もパズルのように組み合わせていく必要があります。六角形、八角形、ハート形の建物まで、ピタッとはまる足場を作るのが職人の腕の見せどころです！
	</p>
	<div class="images">
		<img src="jyutaku.jpg" class="scene" alt="">
	</div>
	<p>
		住宅の現場は1日で組み上がることがほとんど。テンポよく作業が進みます。
	</p>
	<p><br><b>『橋の補修・吊り足場の工事』</b></p>
	<p>
		一方で、橋の補修に使われる「吊り足場」は、より高度な技術とチームワークが必要な仕事です。橋の下に足場を吊るして作業床を作るため、地面がない場所でも安全に作業できるようにします。
	</p>
	<div class="images">
		<img src="syokunin.jpg" class="scene" alt="">
	</div>
	<p>
		吊り足場は橋の補修工事で多く使われており、県内でこの工事ができる会社は10社もないという専門分野。<br>
		設置作業には1か月以上かかる大規模な現場もありますが、自分たちが組んだ足場で、古くなった橋がキレイに生まれ変わる。その達成感は格別です。
	</p>
	<h3>
		安全対策はバッチリ！
	</h3>
	<p>
		入社後は、まずは道具の名前や材料の運び方を覚えるところからスタート。半年ほどで仕事の流れがわかり、2～3年経験を積むとほとんどの作業が理解できるようになります。
	</p>
	<div class="images">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<p>
		足場の材料は、重いものだと1つ13キロほど。最初は驚くかもしれませんが、体を動かす仕事なので自然と力もついてきます。<br>
		また、安全装備を徹底しているので、「落ちたくても落ちれない」と言われるほどの安全対策が整っています。
	</p>
	<div class="images">
		<img src="firstview.jpg" class="scene" alt="">
	</div>
	<p>
		実は、会社の創業から今まで、誰も辞めていないんです。それだけ、仲間を大事にする文化が根付いているということ。<br>
		次は、あなたが仲間になる番です！私たちと一緒に働きましょう！
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="first.jpg" alt="">
				</div>
				<hgroup>
					<h3>吊り足場</h3>
					<p>
						橋や歩道橋など、地面から組み上げられない場所で使用される足場。上から吊り下げるので、専門的な技術が必要です。
					</p>
				</hgroup>
			</div>
			<p>吊り足場</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="apart.jpg" alt="">
				</div>
				<hgroup>
					<h3>くさび式足場</h3>
					<p>
						住宅や工場で使用される一般的な足場。ハンマーで叩いて組み立てます。
					</p>
				</hgroup>
			</div>
			<p>くさび式足場</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="hashi.jpg" alt="">
				</div>
				<hgroup>
					<h3>橋の補修</h3>
					<p>
						ひび割れなどの劣化部分を補修します。
					</p>
				</hgroup>
			</div>
			<p>橋の補修</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>1</span>億円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>31</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>7</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>20</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>105</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2017</span>年</p>
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
						[ 'value' => 0.01, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 100, 'caption' => '100%', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 0.01, 'caption' => '', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 3, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 3, 'caption' => '30代', 'color' => '#00AEEF'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 0.01, 'caption' => '', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 100, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 0.01, 'caption' => '', 'color' => '#FEE929'],
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
					<li>橋梁補修工事・とび工事</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>宮下卓也</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>6名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12525.931372603716!2d138.14072334455562!3d36.565136963818084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d83da1e3397b1%3A0x13fd81b29934701!2z5qCq5byP5Lya56S-5a6u5LiL6IiI5qWt!5e0!3m2!1sja!2sjp!4v1751334299659!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>026-214-5862</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://miyashita-k00.com/" target="<?= $co['slug'] ?>">https://miyashita-k00.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="comingsoon.png" alt="">
			<figcaption><span class="name">宮下卓也</span></figcaption>
		</figure>
		<p>
			こんにちは、代表の宮下です。<br>
			僕自身も現場に出ながら、みんなと一緒に仕事をしています。年齢も近いので、気軽に話しかけてもらえたら嬉しいです。<br>
			宮下興業では、「足場工事」や「橋の補修」を通じて、地域の安全や暮らしを支えています。大きな橋を直す仕事では、自分たちの仕事が“カタチ”として長く残ります。それがこの仕事の何よりのやりがいです。<br>
			吊り足場は技術的に難しい足場ですが、そのぶん面白い。全国でも対応できる会社が限られているからこそ、若いうちからこの技術を身につければ、どこに行っても通用する力になります。<br>
			運動部出身で、体を動かすのが好きな人は特に歓迎します！一緒に働ける日を楽しみにしています。
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
				その他の日時等も随時受け付けております。
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
					<dd>建設業（橋梁補修工事・とび工事）</dd>
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
					<dd>〒388-8005<br>
						長野県長野市篠ノ井横田４８８－３
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>篠ノ井駅から車で7分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋外での就労。<br>現場では喫煙所設置あり。
					</dd>
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
						中型免許・足場工事に必要な資格
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
					<dd>250,000円</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>250,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>職務手当(10,000円)</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>出張手当(1,000円)</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>月末</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>実費支給（上限あり）<br>月額15,000円まで</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（15万円～45万円）</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時00分〜17時30分
					</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>日、祝、その他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>
						第二・第四土曜日、年末年始、GW、お盆休暇
					</dd>
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
					<dd>なし</dd>
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
					<dd>
						7年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>31歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり<br>
						資格取得支援（全額）
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
					<dd>20時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>10日</dd>
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
					<dd>建設業</dd>
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
					    2025年〇月〇日（）〇時〇分～<br>
						2025年〇月〇日（）〇時〇分～<br>
						その他の日時等も随時受け付けております。
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
						宮下卓也
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