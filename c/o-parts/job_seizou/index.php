<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
include_once $company_base . '!data.php';
$current_url = $_SERVER['REQUEST_URI']; //現在のページのURLを表示
$last_segment = basename($current_url);//現在のURLから末尾の職種URLの綴りを取得
$catch_copy = $occupation[$last_segment]['catch_copy'] ?? '職種が見つかりません';//値があるか確認
$name = $occupation[$last_segment]['name'] ?? '不明な職種';
$meta_keywords = $occupation[$last_segment]['keyword'] ?? '';
$meta_desc = $occupation[$last_segment]['description'] ?? '';


// 現在のURLに一致しない職種を探す
$next_job = null; // 初期値
foreach ($occupation as $key => $job) {
    if ($key !== $last_segment) {
        $next_job = $job; // 最初に見つかった異なる職種をセット
        break; // ループを終了
    }
}


//========================================
// ページのメタデータ
$title = $name . ' - ' . $co['company_name'] . 'の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = $meta_desc;
$canonical_url = 'https://works.mekulo.jp/hs/' . $co['slug'] . '/' . $last_segment . '/';
$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php //include $base . '../tracking.php'; ?>
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
	},{
		"@type": "ListItem",
		"position": 4,
		"name": "<?= $name ?>",
		"item": "https://works.mekulo.jp/hs/<?= $co['slug'] ?>/<?= $last_segment ?>/"
	}]
}
</script>
</head>
<body class="newgrads highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="work1.jpg">
    <hgroup>
        <h1 class="catch"><?= $catch_copy ?></h1>
        <p class="fv-tag"><?= $name ?></p>
    </hgroup>
    <?php if (count($occupation) >= 2): // 配列数が2以上か確認し、無い場合は非表示にする ?>
        <a href="<?= $company_base . $next_job['url'] ?>/" class="btn">次の職種を見る</a>
    <?php endif; ?>
</div>
<section class="page-nav">
	<a href="#job_detail">
		<div class="btn">
			<img src="<?= $highschool_base ?>icon-1.png">
			<p>仕事内容</p>
		</div>
		<div class="btn-af">
			<span></span>
		</div>
	</a>
	<a href="#employee_introduction">
		<div class="btn">
			<img src="<?= $highschool_base ?>icon-2.png">
			<p>社員紹介</p>
		</div>
		<div class="btn-af">
			<span></span>
		</div>
	</a>
	<a href="#recruitment_requirements">
		<div class="btn">
			<img src="<?= $highschool_base ?>icon-3.png">
			<p>募集要項</p>
		</div>
		<div class="btn-af">
			<span></span>
		</div>
	</a>
</section>
<section class="g" id="job_detail">
	<h2>仕事内容</h2>
	<h3>ものづくりの全工程を担うクリエイティブ職</h3>
	<p>
		「総合製造職」は、ただ作業者として勤務する仕事ではありません。<br>
		アーチェリーやオーディオアンプ部品などの製造において、部品作りのすべてのプロセスを経験し、技術力と創造力を身につけて、最終的には全ての工程を自らの手でこなせる「ものづくりのエキスパート」を目指職種です。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
		<img src="work2.jpg" alt="" class="scene">
	</div>
	<p>
		「手に職を付けたい」「将来的には独立してみたい」「いろんなことに挑戦してみたい」そんなエネルギーあふれる高校生を募集しています。
	</p>
	<h3>まずは現場で部品製造に携わり、基礎を学ぶ</h3>
	<p>
		入社して最初の2～3年間は、部品製造に携わりながら、加工の仕組みや図面の見方、機械の操作方法、道具の使い方を学びます。<br>
		機械にも、穴を開けたり、削ったりなどの加工用途ごとに様々な種類があります。それぞれを実際に使いながら、現場で技術を習得していきます。
	</p>
	<div class="images">
		<img src="work3.jpg" alt="" class="scene">
		<img src="work4.jpg" alt="" class="scene">
	</div>
	<h3>プログラムを組んで、加工機械を操る</h3>
	<p>
		最新の加工機械は、すべてプログラムで操作されます。<br>
		プログラムを組むには、まず原点（スタート位置）を設定した後、図面に記載された寸法を基に、どの方向にどれだけ動かすかを「座標」で決めます。<br>
		例えば、机の上で部品を作るとしたら、机の角を原点として、そこから横に何ミリ、縦に何ミリ動かすかを設定します。<br>
		そして切削や穴あけといった加工動作にも「G〇〇」といった指示コードがありますので、これらを使ってプログラムを組み、機械に指示を出します。<br>
		最初は、すでに組まれたプログラムを見ながら、コードを少し変えてみて、どう動きが変わるのかを試しながら学んでいきます。
	</p>
	<div class="images">
		<img src="introduce6.jpg" alt="" class="scene">
	</div>
	<h3>治具の設計や見積もりの作成</h3>
	<p>
		プログラムを組めるようになった次は「治具設計」に挑戦します。<br>
		治具は加工品を固定し、効率良く、またより精度高く部品を加工するための補助工具です。<br>
		これらに関しては、この下にある「ものづくりの裏側大公開」で具体的な事例を紹介していますので、そちらをご確認ください。<br>
		治具設計ができるようになると、加工順序や時間を計算しながら、部品製作の見積もりを作成することができるようになります。
	</p>
	<div class="images">
		<img src="work7.jpg" alt="" class="scene">
	</div>
	<h3>実際のものづくり事例：アーチェリーの矢を支える「アローレスト」の製作裏側</h3>
	<p>
		アーチェリーメーカー様から、「アローレスト」を作りたいとご依頼を受けました。<br>
		アローレストとは、矢を安定させるための土台となるパーツのことです。
	</p>
	<div class="images">
		<img src="../first.jpg" alt="" class="scene">
	</div>
	<p>
		まずは試しに１～２個の部品を試作してみましたが、実際に使ってみると期待通りの性能を発揮せず、使い物になりませんでした。<br>
		そこからメーカーの設計担当者様と試行錯誤を重ね、改良を繰り返し、３回目の試作でようやく実用化に至るパーツが完成しました。
	</p>
	<div class="images">
		<img src="../fourth.jpg" alt="" class="scene">
	</div>
	<p>
		結果的には、厚さ2mm、横幅2cm程度の小さな部品となりました。大量生産を考えると、一個ずつを加工する方法では、手間も時間もかかるため、効率よく生産する方法を考える必要がありました。<br>
		そこで、長めの金属板（原材料）を用意し、4個分の部品を一度に製作できる専用治具を考案。そのおかげで、1個1個の材料を加工機械に取り付け、加工していたことが、4個同時に加工できるようになり、生産効率が大幅に向上しました。<br>
		現在では月に数千個単位で製造し、安定的にアローレスト部品を製造することができています。
	</p>
	<h3>実際のものづくり事例：アーチェリーの照準器を調整する「エレベーション」の製作裏側</h3>
	<p>
		照準器の高さを上下に調整するための「エレベーション」と呼ばれる部品製作のご相談をいただきました。<br>
		ダイヤルを回すことで、照準の高さを自在に調整できる、非常に精密な部品の一つです。<br>
		この部品は、スムーズにスライドができるように、左右の面の平行度を0.005mm以内に抑える必要がありました。もし平行度が少しでもズレてしまうと、スライドがうまく動かなくなってしまいます。
	</p>
	<div class="images">
		<img src="work10.jpg" alt="" class="scene">
	</div>
	<p>
		写真の通り、エレベーションは４つの面を加工する必要があります。<br>
		左右の面を削る際、片面の加工が終わった部品を機械から部品を取り外し、向きを変えて反対面を加工すると、どうしても平行度を0.005mm以内に保つのが難しくなります。<br>
		そこで、部品を取り外さず一度に４面を加工できる方法を考案し、平行度を保ったまま、加工することに成功しました。<br>
		総合製造職に求められるのは、こうした精度を実現するために、加工方法や手順をゼロから考え抜き、時には専用の工具を設計して現場で使えるようにすることです。<br>
		単なる作業ではなく、どんな困難にも挑戦し、自分の手で解決策を見つけていく力が求められます。
	</p>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
				<li>
					<img src="gallery1.jpg" alt="">
				</li>
				<li>
					<img src="../third.jpg" alt="">
				</li>
				<li>
					<img src="../second.jpg" alt="">
				</li>
				<li>
					<img src="../firstview.jpg" alt="">
				</li>
				<li>
					<img src="gallery5.jpg" alt="">
				</li>
			</ul>
			<div class="button left_btn">&lt;</div>
			<div class="button right_btn">&gt;</div>
		</div>
	</div>
</section>
<section class="g" id="employee_introduction">
	<h2>社員紹介</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="<?= $company_base ?>introduce3.jpg" alt="">
				<hgroup>
					<h3>藤原さん</h3>
					<p>
						ハローワークで偶然見つけたオーパーツの求人。家から近く、すぐに面接が決まり、入社しました。<br>
						現在は検査と出荷準備を担当し、自分で検査基準を考えながら仕事を進めることにやりがいを感じています。<br>
						大手企業のように決められた作業を繰り返すのではなく、納期を守りながら自分のペースで進められる点も魅力です。<br>
						また、社長との距離が近く、働き方についても相談しやすい環境が整っています。実際に、勤務時間を調整していただいたり、学級閉鎖の際には子供を職場に連れてきて仕事をしたりしたこともあり、柔軟に働ける職場です。
					</p>
				</hgroup>
			</div>
			<p>2015年中途入社<br>藤原さん</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="asakawa.jpg" alt="">
				<hgroup>
					<h3>浅川さん</h3>
					<p>
						千曲高校（夜間）卒業後、オーパーツに入社し、創業期から働いています。<br>
						現在は加工オペレーターとして、機械加工や仕上げ、バリ取りを担当。<br>
						細かな傷を見逃さないための注意力が求められる繊細な作業ですが、製品の仕上がりにこだわることで、大きなやりがいを感じています。
					</p>
				</hgroup>
			</div>
			<p>2012年中途入社<br>浅川さん</p>
		</li>
	</ul>
</section>
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
					<dd>総合製造職</dd>
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
					<dd>
						〒386-0002<br>
						長野県上田市住吉1128-1
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>上田駅から車で11分</dd>
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
					<dd>20日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>185,000円</dd>
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
					<dd>185,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>家族手当：3,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>役職手当：20,000円～60,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当③</dt>
					<dd>皆勤手当：15,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当④</dt>
					<dd>イデコ手当：1,500円</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月20日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>
						あり<br>
						年2回（3か月分）
					</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時15分～17時15分
					</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>あり<br>
						10時間
					</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>127日</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>お盆休み、年末年始、ゴールデンウォークは休日となります。</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>雇用保険、労災保険、健康保険、厚生年金、財形、上田商工会議所生命共済</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（3年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>70歳</dd>
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
						11.3年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>50歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>
						なし
					</dd>
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
					<dd>10時間</dd>
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
					<dd>66.6%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>総合製造職</dd>
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
						2025年8月4日 （月）13時00分～<br>
						2025年8月5日 （火）13時00分～<br>
						2025年8月6日（木） 13時00分～<br>
						2025年8月7日（金） 13時00分～
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
						大日方 新治
					</dd>
				</div>
			</dl>
		</div>
	</div>
	<div>
		<a href="../apply/#entry" class="btn_entry">
			<img src="../../../flag.png" class="flag">
			<span>応募前見学情報を見る</span>
			<img src="../../../arrow.svg">
		</a>
	</div>
</section>					
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php //include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
