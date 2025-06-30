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
    <img alt="" class="fv_image" src="firstview.jpg">
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
	<h3>
		ただの作業じゃない！電気工事士の職人技
	</h3>
	<p>
		電気工事とは、電気が安全に使えるように配線や設備を整える専門技術の仕事です。照明やコンセントなど建物の中にある電気設備を設置し、点検したり、壊れたところを修理したりするのが主な仕事です。
	</p>
	<div class="images">
		<img src="../gallery1.jpg" alt="" class="scene">
	</div>
	<p>
		当社で一番多い相談は、「電気がつかなくなった」というもの。<br>
		でも、いきなり現場で作業を始めるわけではありません。まずは事前調査を行い、作業計画を立ててから、チームで現場へ向かいます。
	</p>
	<div class="images">
		<img src="contents02.jpg" alt="" class="scene">
	</div>
	<p>
		事前調査では、テスター(電圧計)という機械を使って、建物の外から家の中まで、どこまで電気が通っているかを調べます。<br>
		例えば、電気メーター、分電盤、コンセントなどいろいろなポイントで測定して、どこに問題があるかを探っていきます。
	</p>
	<div class="images">
		<img src=".jpg" alt="" class="scene">
	</div>
	<p>
		調査が終わったら、社内で図面や資料を確認し、ケーブルの加工や必要な工具の積み込みを行います。ケーブルの加工では、ケーブルカッターやニッパーでケーブルを必要な長さに切断したり、圧着工具で圧着端子を取り付けたりします。
	</p>
	<div class="images">
		<img src="contents04.jpg" alt="" class="scene">
		<img src="contents05.jpg" alt="" class="scene">
	</div>
	<p>
		基本的な工具は車に入っているので、現場に向かうときに特殊なものだけ積み込みます。
	</p>
	<div class="images glid-images">
		<img src="contents06.jpg" alt="" class="scene">
		<img src="contents07.jpg" alt="" class="scene">
		<img src="contents08.jpg" alt="" class="scene">
	</div>
	<p>
		現場に到着したら、作業内容や役割、安全を確認してから工事に取り掛かります。1人で集中して作業を行うこともあれば、チームで協力して作業を進めることも。大きい分電盤や重い電線を設置するときは、2～3人のチームで工事を行います。
	</p>
	<div class="images">
		<img src="../gallery3.jpg" alt="" class="scene">
		<img src="contents10.jpg" alt="" class="scene">
	</div>
	<p>
		私たちの仕事は毎日変わります。ある日は一般住宅の電気の増設工事、ある日は街灯の取り換えなど、全く違う作業を行うこともあります。
	</p>
	<div class="images">
		<img src="contents11.jpg" alt="" class="scene">
		<img src="contents12.jpg" alt="" class="scene">
	</div>
	<p>
		また、当社では民間工事がほとんどで、お客様と直接やり取りをする機会があります。その中で「助かりました」「ありがとう」と感謝の言葉をいただくことも多く、自分の仕事が役に立っていることを実感できます。
	</p>
	<h3>
		手厚い教育体制で確実にスキルアップ
	</h3>
	<p>
		入社後は腰道具をつけてみて、仕事で使う工具の名前を覚えることから始めます。<br>
		腰道具は意外と重いので、はじめてつけたときはびっくりするかもしれません。でも、職人らしくてかっこいいですよね。
	</p>
	<div class="images">
		<img src="contents13.jpg" alt="" class="scene">
	</div>
	<p>
		電気工事士が持っている工具は、ペンチ、ドライバー、電工ナイフ、ニッパー、プライヤー、ラチェットなど、人それぞれ。「これは工具箱の中」「これは腰道具に着けておきたい」など、自分で使いやすいように工夫しています。
	</p>
	<p>
		工具の使い方を覚えたら先輩と一緒に現場に出て、こんな時はこの工具を使うなど、実際の作業を一つずつ学んでいきます。電気工事は適切に行えば安全な仕事ですが、不注意や準備不足から感電などのリスクにつながることもあります。そういった危険を防ぐためには、入念な準備と繰り返しの練習が欠かせません。安全に作業できるようになるまで、先輩がしっかりサポートします。
	</p>
	<div class="images">
		<img src="contents14.jpg" alt="" class="scene">
		<img src="contents15.jpg" alt="" class="scene">
	</div>
	<p>
		基礎を身につけることで、自然と応用力も養われていきます。3年くらいで一通りの電気工事を経験でき、早い人ならその頃には、一人前の電気工事士として活躍できるでしょう。
	</p>
</section>
		<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
		<img src="../firstview.jpg" alt="">
	</li>
	<li>
		<img src="gallery02.jpg" alt="">
	</li>
	<li>
		<img src="gallery04.jpg" alt="">
	</li>
	<li>
		<img src="contents15.jpg" alt="">
	</li>
	<li>
		<img src="contents14.jpg" alt="">
	</li>
	<li>
		<img src="gallery08.jpg" alt="">
	</li>
	<li>
		<img src="gallery10.jpg" alt="">
	</li>
	<li>
		<img src="gallery09.jpg" alt="">
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
						<img src="toyoda.jpg" alt="">
						<hgroup>
							<h3>豊田さん</h3>
							<p>YouTubeで山口電気の広告を見た日に、思い切って会社見学の電話をしました。社員のみなさんが優しくて、ここなら安心して働けると思いました。<br>
							休日は、よく他県までドライブします。「行きたい！」と思ったらすぐに行動するタイプです（笑）</p>
						</hgroup>
					</div>
					<p>2023年 (中途入社)<br>豊田さん</p>
				</li>
			</ul>
		</section>
		<section class="g requirements" id="recruitment_requirements">
			<h2>募集要項</h2>
			<div class="tabs">
				<button class="tab1">募集要項</button>
				<button class="ta2">青少年雇用情報</button>
				<button class="ta3">選考方法</button>
			</div>
			<div class="requirement">
				<div class="content recruitment">
					<h3>仕事内容</h3>
					<dl>
						<div>
							<dt>募集職種</dt>
							<dd>電気工事士</dd>
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
					<dd>3～6カ月（待遇の変更なし）</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒3810016<br>
					長野県長野市大字南堀24-1</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>附属中学前駅から徒歩7分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>建物内喫煙不可</dd>
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
				<h3>採用後の待遇</h3>
				<dl>
				<div>
					<dt>賃金形態</dt>
					<dd>月給</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>24日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>
						180,000円～
					</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当</dt>
					<dd>
						-
					</dd>
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
					<dd>資格手当（3,000～10,000円）</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>時間外勤務手当（基本給の125%）</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月月末</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（上限18,700円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>
						年１回
					</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>
						年２回（約２か月分）
					</dd>
				</div>
				</dl>
				<h3>労働時間</h3>
				<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時20分〜17時40分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均5時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>年間休日95日（日・祝日・他）<br>（2025年度計画）</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>第二・第四土曜日、年末年始、夏季休暇、他</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、財形保険、雇用保険、労災保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>企業年金基金</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数1年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり（60歳）</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり（定年年齢60歳）</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>あり</dd>
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
						15年<br>
						※創業以降の実績
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>48歳</dd>
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
					<dd>
						資格取得支援
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
					<dd>5時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>5日</dd>
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
					<dd>50%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>電気工事</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>1人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						2025年7月29日（火） 9時00分～、14時00分～<br>
						2025年8月5日（火） 9時00分～、14時00分～
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>書類選考、面接</dd>
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
						代表取締役社長<br>
						山口忠幸
					</dd>
				</div>
			</dl>
		</div>
	</div>
		<div>
			<a href="<?= $company_base ?>apply/#entry" class="btn_entry">
				<img src="<?= $highschool_base ?>flag.png" class="flag">
				<span>応募前見学情報を見る</span>
				<img src="<?= $highschool_base ?>arrow.svg">
			</a>
		</div>
		</section>
			</ul>
		</section>
	</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
