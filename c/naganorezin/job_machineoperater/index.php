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
<body class="newgrads highschool naganorezin">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="operater.jpg">
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
	    身近なプラスチック製品を作る機械を動かす仕事
	</h3>
	<p>
	    マシンオペレーターは射出成型機の操作をする仕事です。<br>
		射出成型とは、プラスチックの粒を熱で溶かし、金型に流しいれて形を作る方法です。オペレーターはその機械を操作する人のことをいいます。<br>
        オペレーターの仕事は、操作パネルで温度や時間を設定して、スタートボタンを“ポチッ”としたら終わりという仕事ではありません。材料の補給、金型の交換、機械操作、製品品質の管理も大切な仕事です。
    </p>
	<div class="images">
		<img src="operater1.jpg" alt="" class="scene">
	</div>
	<h3>
		材料の補給
	</h3>
	<p>
	    ペレットと呼ばれるプラスチックの粒を、機械にセットするところから仕事が始まります。はじめから色が付いたプラスチックをつくるときは、ペレットに顔料や色のついたペレットを混ぜて作ります。25㎏程ある材料を持ち上げ、セットする必要があるので、ここは腕力が試されます。	
	</p>
	<div class="images">
		<img src="operater2.jpg" alt="" class="scene">
	</div>
	<h3>
		金型の取り換え
	</h3>
	<p>
	    製品によって成形する金型を取り換えます。一日に2～3回この作業があります。金型はとても重いので、クレーンを使って運搬し、機械に取り付けます。夜勤の人が日勤の人のために金型を替えて、翌日の準備をすることが多いです。	
	</p>
	<div class="images">
		<img src="operater3.jpg" alt="" class="scene">
	</div>
	<h3>機械の操作</h3>
	<p>
	    製品によって設定が異なるため、製品にあわせて設定を行います。初心者にもできることから慣れてもらいますが、3ヵ月くらいで基本的な操作を覚えてもらい、一年ほどかけて温度や時間の条件出しもできるようになってください。オペレーターの仕事は、機械を動かすだけでなく品質を管理することも含まれます。
	</p>
	<div class="images">
		<img src="operater4.jpg" alt="" class="scene">
	</div>
	<p>
	    マシンオペレーターは、一度の作業で多くの製品を作り続けることになります。作業の途中で「違和感」を感じたら、原因を発見し、早めに修正する必要があります。はじめは「あれ？」と思ったら、何でもすぐに相談してください。	
	</p>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
		<img src="operater.jpg" alt="">
	</li>
	<li>
		<img src="operater2.jpg" alt="">
	</li>
	<li>
		<img src="operater3.jpg" alt="">
	</li>
	<li>
		<img src="operater5.jpg" alt="">
	</li>
	<li>
		<img src="../gallery4.jpg" alt="">
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
				<img src="kobayashi.jpg" alt="">
				<hgroup>
					<h3>小林さん</h3>
					<p>
					    前職では射出成型機そのものを製造している会社で働いていました。稼ぎたくて夜勤で働く仕事を探していて、長野レジンを見つけました。夜勤があると、できるだけ入りたいと思っています。昼間は生まれたばかりの子どもと過ごす時間も大切にしています。<br>
                        夜勤では、翌日に備え金型の交換をしたり、出来上がった製品を梱包したりしています。
				    </p>
                    <p>
						仕事は機械や製品を覚えたりするところから始めていきます。はじめのうちは、製造する製品の金型を覚えることが大変でした。でも、少しずつステップアップすることができました。これから機械の条件出しなどを覚え、独り立ち間近と社長に言ってもらえました。<br>
                        職場の人がみんな優しくフレンドリーで、話しかけてくれるのでありがたいです。
                    </p>
				</hgroup>
			</div>
			<p>2020年中途入社<br>小林さん</p>
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
					<dd>3カ月（待遇の変更なし）</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒3861541<br>
					長野県上田市上室賀 1518</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd></dd>
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
					<dd>21日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>154,000円～210,000円</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>段取り手当：10,000円～</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>努力手当：10.000円～</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当③</dt>
					<dd>夜勤手当：15,000円～33,000円<br>
					※午後10時から翌午前5時まで深夜手当25％増し<br>
					※夜勤手当は1回1500円で、月10～22回あり</dd>
	            </div>
					<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>154,000円</dd>
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
					<dd>毎月20日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>実費支給 (上限月10,000円)</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり(業績等による)</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>あり(業績等による)</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>交替制　①8時30分〜17時00分 ②21時00分～6時00分<br>
					    ①,②の交替勤務 (試用期間中は①)</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均20時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>完全週休2日制（土日・祝日・他）</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日113日（2025年度計画）</dd>
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
					<dd>前年度:-人、2年度前：-人、3年度前：-人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:-人、2年度前：-人、3年度前：-人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:-人、2年度前：-人、3年度前：-人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:-人、2年度前：-人、3年度前：-人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						-年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>45歳</dd>
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
					<dd>-時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>-日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：-人、男性：-人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>-名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>-%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>-%</dd>
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
					<dd>1人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						2025年7月29日（火）14時00分～<br>
						2025年8月5日（火）14時00分～
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
					<dd>面接後-日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						-
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
