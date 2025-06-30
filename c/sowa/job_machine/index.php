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
	<h3>「ペレットって何？」から始めよう！</h3>
	<div class="images">
		<img src="<?= $company_base ?>business1.jpg" alt="" class="scene">
	</div>
	<p>
		相和の主な仕事は、プラスチック製品のもとになる「ペレット」という材料をつくることです。<br>
		原料を混ぜて、溶かして、押し出して、カットして──米粒みたいな小さな粒が、次々に生まれていきます。できたペレットは、車の部品や食品のパッケージ、化粧品の容器などに使われ、あなたの身の回りに広がっています。
	</p>
	<h3>マシンオペレーターの仕事</h3>
	<p>
		この仕事を一言でいうと、“機械の相棒”。<br>
		ペレット製造の現場では、機械を止めないことが大事。そのために、材料を入れたり、設定を確認したり、袋詰めをしたり、清掃や点検も行います。ミスが起きないように、ルール通りにコツコツ進めることが大切です。
	</p>
	<div class="images">
		<img src="work2.jpg" alt="" class="scene">
	</div>
	<p>
		最初は「材料を入れる」「袋詰めをする」といった簡単な作業からスタート。だいたい3か月くらいで一通りのことができるようになります。フォークリフトの資格も会社負担で取れますよ。
	</p>
	<div class="images">
		<img src="work3.jpg" alt="" class="scene">
		<img src="work4.jpg" alt="" class="scene">
	</div>
	<h3>働き方</h3>
	<p>
		当社の仕事は、一度機械を動かし始めたら24時間連続生産します。3交代で働きます。1勤が8時から17時、2勤が13時から22時まで。で、3勤が22時から翌朝8時までという形です。シフトを組み週単位で働く時間が変わっていきます。毎週金曜日にはすべての機械を解体し洗浄します。週が明けたら再び機械を組みなおして動かします。写真は機械の組み立て完了を示す札ですが、一つずつ確認しながら組み立てていきます。
	</p>
	<div class="images">
		<img src="work5.jpg" alt="" class="scene">
	</div>
	<p>
		トラブル対応など一通りの仕事ができるようになるまでは、夜勤はありません。
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
					<img src="<?= $company_base ?>introduce7.jpg" alt="">
				</li>
				<li>
					<img src="<?= $company_base ?>introduce5.jpg" alt="">
				</li>
				<li>
					<img src="gallery4.jpg" alt="">
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
				<img src="employee1.jpg" alt="">
				<hgroup>
					<h3>小林明人さん</h3>
					<p>
						前職も製造業で残業が多くて大変でした。ここに転職して、体も楽になったし、時間の使い方に余裕ができました。最初は不安でしたが、先輩たちがみんな親切で、“教えるのが好きな人”が多い職場です。だから、質問しやすくて、仕事もすぐに覚えられました。<br>
						24時間稼働の工場なので、夜勤もありますが、昼間の時間が自由に使えるので、神社めぐりに出かけたり、自分の趣味も楽しめます。<br>
						工場の中を見てもらって、『ここならやっていけそう』って思えたら、ぜひ仲間になってください！
					</p>
				</hgroup>
			</div>
			<p>2021年中途入社<br>小林明人さん</p>
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
					<dd>マシンオペレーター</dd>
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
						〒389-0505<br>
						長野県東御市和７９２８
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>東部湯の丸インター駅から車5分</dd>
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
					<dd>
						必須<br>
						<ul>
							<li>
								仕事に関する知識は全く必要ありません。安心してください。
							</li>
							<li>入社後、基礎から学ぶことができます。しっかりと先輩がつきますので不安な事は聞いてください。</li>
							<li>会社は見はらしいのいい丘の上にあります。</li>
						</ul>
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
					<dd>21日</dd>
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
					<dd>毎月　20日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（月額 15,000円まで）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回又は 3ヶ月分</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>
						<ul>
							<li>8時00分〜17時00分</li>
							<li>13時00分〜22時00分</li>
							<li>22時00分〜7時00分</li>
						</ul>
					</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均10.4時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>土日</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日112日</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>健康保険、厚生年金保険、雇用保険、労災保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり(勤続3年以上)</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>一律60歳</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限　65歳まで）</dd>
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
					<dd>前年度:1人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:1人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:1人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>6年</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>42.5歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>
						社内研修、社外研修、資格取得研修
					</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり<br>
						業務に資するとして会社が認めた資格について取得費用の一部負担
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
					<dd> 10.4時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>9日</dd>
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
					<dd>製造業</dd>
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
						2025年8月20日（水） 10時00分～<br>
						2025年8月20日（水） 13時30分～<br>
						2025年8月21日（木） 10時00分～<br>
						2025年8月21日（木） 13時30分～
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接、適性検査</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後５日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						代表取締役社長<br>
						関　俊樹
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
<?php include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
