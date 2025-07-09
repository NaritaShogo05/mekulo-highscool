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
    <img alt="" class="fv_image" src="first-view.jpg">
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
	<p>
		長野三洋化成の生産部は、ホース製造、まな板製造、成形製造、コンパウンド製造の４つの仕事に分かれています。<br>
        製品を製造する機械の操作、でき上った製品の検査、出荷準備、日々の機械のメンテナンスなどをおこないます。
	</p>
	<div class="images">
		<img src="seizou01.jpg" alt="" class="scene">
	</div>
	<p>
		「早番」「遅番」「夜勤」の３交代制で働きます。終業時間はローテーションで変わりますが、ほとんど残業もないので、自分の時間の計画が立てやすい職場環境です。<br>
         最初はさまざまな工程を体験していただき、あっているポジションを判断したのち、本格的に仕事をしていただきます。仕事は、基本的な作業からはじめ、徐々に技術を習得していただきます。<br>
	</p>
	<h3>
		ホースのトップメーカー
	</h3>
	<p>
		長野三洋化成の生産部は、ホース製造、まな板製造、成形製造、コンパウンド製造の４つの仕事に分かれています。製造されているホースは、日本全国のホームセンターで扱われていて、業界のトップメーカーです。
	</p>
	<div class="images">
		<img src="seizou02.jpg" alt="" class="scene">
	</div>
	<p>
		長野三洋化成では100種類を超えるホースを製造しているため、製法や材料も異なります。それぞれに最適な機械制御を行うだけではなく、ホースの巻き取りや箱詰めなども行っています。
	</p>
	<div class="images">
		<img src="seizou03.jpg" alt="" class="scene">
	</div>
	<h3>
		まな板製造
	</h3>
	<p>
		家庭用から飲食店などでも使われる業務用のまな板まで、様々な種類のまな板を生産しています。まな板の成形機械のオペレートはもちろん、成形されたまな板に不良がないかの確認をおこない、滑り止め加工や抗菌加工、商品の袋詰めまでをおこなっています。
	</p>
	<div class="images">
		<img src="seizou04.jpg" alt="" class="scene">
	</div>
	<h3>
		成形製造
	</h3>
	<p>
		金型にプラスチック原料を流し込み、固めて製品を作る射出成形という製法で、ホースリールや子供用のおもちゃ道具などを生産しています。ただ原料を流し込むだけでなく、流し込む際の温度や圧力などを細かく調整する必要があり、見かけ以上に繊細な仕事です。
	</p>
	<div class="images">
		<img src="seizou05.jpg" alt="" class="scene">
	</div>
	<h3>
		コンパウンド製造
	</h3>
	<p>
		自社のホースを生産するための原材料であるコンパウンドを生産し、袋詰めをします。製造されたコンパウンドは自社製品だけでなく、全国の企業に供給され、ホースをはじめとする樹脂製品の原材料として、モノづくりを支えています。
	</p>
	<div class="images">
		<img src="seizou06.jpg" alt="" class="scene">
	</div>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
		<img src="seizou06.jpg" alt="">
	</li>
	<li>
		<img src="../gallery01.jpg" alt="">
	</li>
	<li>
		<img src="../contents01.jpg" alt="">
	</li>
	<li>
		<img src="../contents02.jpg" alt="">
	</li>
	<li>
		<img src="seizou01.jpg" alt="">
	</li>
	<li>
		<img src="seizou02.jpg" alt="">
	</li>
	<li>
		<img src="seizou04.jpg" alt="">
	</li>
	<li>
		<img src="seizou05.jpg" alt="">
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
				<img src="terao.jpg" alt="">
				<hgroup>
					<h3>寺尾さん</h3>
					<p>
						まな板製造の機械操作を担当しています。<br>
                        以前、機械の調整がうまくいかず、でき上ったまな板が、全部反ってしまったことがありました。その時は本当にへこみました。でも、経験から季節や機械の状態によって製品の仕上がりが変わることを実感でき、毎回の調整の難しさを知ることができました。<br>
                        経験を積み、最近では、新しい製品の試作まで担当させてもらえるようになりました。<br>
                        四国で営業の仕事をしていたのですが、ウインタースポーツが好きで、長野に引っ越してきました。冬の休日はゲレンデに繰り出し、スノーボード三昧の生活を楽しんでいます。
					</p>
				</hgroup>
			</div>
			<p>寺尾さん</p>
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
					<dd>溶接作業</dd>
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
					<dd>3ヵ月</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒389-0511<br>
					長野県東御市滋野甲2305番地</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり(屋内禁煙)</dd>
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
					<dd>21.9日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>157,000円</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>地域手当（10,000円）</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>食事手当（7,000円）</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当③</dt>
					<dd>住宅手当（2,500円）</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>176,500円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>皆勤手当（5,000円）</dd>
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
					<dd>実費支給（上限なし）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>交代制（シフト制）<br>(1)8時10分〜17時15分<br>(2)16時00分〜0時30分<br>(3)0時15分〜8時45分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均10時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制（他）</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日120日</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険、財形保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>企業年金基金</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数3年以上）</dd>
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
					<dd>あり（上限年齢65歳）</dd>
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
					<dd>前年度:0人、2年度前：0人、3年度前：3人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：2人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：1人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						16.8年<br>
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>46歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>なし</dd>
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
					<dd>なし</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>10.9時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>17.5日</dd>
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
					<dd>製造職</dd>
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
						2025年8月4日（月） 10時00分～11時00分<br>
						2025年8月5日（火） 13時00分～14時00分
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
					<dd>面接後14日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						総務部<br>
						小河原
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
<section class="g nextpage">
    <h2>その他の職種を見てみる</h2>
    <ul class="image_navi">
        <?php foreach ($occupation as $key => $prop): ?>
            <?php if ($key !== $last_segment): // 現在のURLと異なる職種のみ表示 ?>
                <li>
                    <a href="<?= $company_base . $prop['url'] ?>">
                        <figure>
                            <img src="<?= $company_base . $prop['image'] ?>" alt="">
                            <figcaption><?= $prop['name'] ?></figcaption>
                        </figure>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
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
