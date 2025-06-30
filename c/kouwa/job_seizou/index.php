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
    <img alt="" class="fv_image" src="../first.jpg">
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
	<h3>信州のおいしさをお客様にお届け</h3>
	<p>
		スーパーでよく見かける、袋入りの総菜や瓶詰の果物。これらが、どうやって作られているか知っていますか？
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<p>
		企業によっては、すべて機械で自動的に作られていることもありますが、当社では、ひとつひとつの商品が手作りで作られています。
		これらの商品を作るために、入社後はまず選別工程と袋詰め工程を担当していただきます。
	</p>
	<div class="images">
		<img src="../third.jpg" alt="" class="scene">
		<img src="work3.jpg" alt="" class="scene">
	</div>
	<p>
		仕入れた食材の中に、痛んでいるものや食べられない部分が混ざっていないかをチェックし、使用できない食材や異物があれば取り除きます。
	</p>
	<div class="images">
		<img src="work4.jpg" alt="" class="scene">
	</div>
	<p>
		最初は判断が難しいかもしれませんが、隣にいる先輩がすぐに教えてくれるので安心です。<br>
		コンベヤに流れる異物を取りこぼしてしまっても大丈夫。同じ班の仲間がサポートしてくれます。
	</p>
	<p>
		商品によって、1つずつ袋に入れるものもあれば、重さをはかって入れるものもあります。
	</p>
	<div class="images">
		<img src="work5.jpg" alt="" class="scene">
		<img src="../introduce4.jpg" alt="" class="scene">
	</div>
	<p>
		1つずつ入れる場合は、材料や袋の持ち方に注意が必要です。<br>
		重さをはかる場合は正確にはかり、専用の道具を使って袋に詰めていきます 。最初はコツをつかむのが難しいですが、慣れるとスムーズに、一袋の分量もだんだんわかってきます。
	</p>
	<div class="images">
		<img src="work7.jpg" alt="" class="scene">
		<img src="work8.jpg" alt="" class="scene">
	</div>
	<h3>支えあいのチームワーク</h3>
	<p>
		選別や袋詰めの作業は、4人1組のチームで取り組んでいます。全員が同じ場所で作業をしているので、分からないことがあればすぐに周りの先輩に聞くことができます。<br>
		一人で悩むことなく、つまずきにくい環境が整っています。
	</p>
	<div class="images">
		<img src="../first.jpg" alt="" class="scene">
	</div>
	<h3>埃ひとつも許さない！</h3>
	<p>
		食品を扱う仕事だからこそ、工場内には髪の毛はもちろん、埃ひとつ持ち込めません。入室前には手洗いを徹底し、エアーシャワーを浴びます。
	</p>
	<div class="images">
		<img src="work10.jpg" alt="" class="scene">
	</div>
	<p>
		飲食店でのアルバイトや学校給食の配膳でも、衛生管理の大切さを教わりますよね。私たちはそれ以上に衛生管理を徹底し、安心・安全を追求しています。
	</p>
	<h3>
		「これおいしい！」を自分が考案！？ステップアップも
	</h3>
	<p>
		実は、私たちがこれまでに開発した商品は100種類以上！<br>
		定期的に社内で意見を出し合い、変化するニーズに対応した商品作りを心がけています。そこで、現場での経験を活かして、商品開発業務への異動も歓迎しています。
	</p>
	<div class="images">
		<img src="../introduce2.jpg" alt="" class="scene">
	</div>
	<p>
		また、フォークリフトを使った作業や力仕事の工程もあり、さまざまな資格を取得するチャンスがあります。資格取得にかかる費用は、会社が全額サポート！<br>
		少しでも興味があれば、気軽に相談してくださいね。
	</p>
	<div class="images">
		<img src="work12.jpg" alt="" class="scene">
	</div>
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
					<img src="gallery2.jpg" alt="">
				</li>
				<li>
					<img src="gallery3.jpg" alt="">
				</li>
				<li>
					<img src="../introduce5.jpg" alt="">
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
					<h3>柳澤さん</h3>
					<p>
						エステ業界で働いていましたが、ずっと食品関係の仕事をしてみたいと考えていました。会社見学をしたとき、「楽しそうだな、みんなテキパキ動いていていいな」と感じたので応募を決めました。<br>
						休日は、関東で行われる推しのライブに1人で参戦するなど、推し活を満喫しています。
					</p>
				</hgroup>
			</div>
			<p>2022年中途入社<br>柳澤さん</p>
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
					<dd>きのこや山菜・果実などの加工食品の製造</dd>
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
						〒389-0603<br>
						長野県埴科郡坂城町大字南条5181-3 （テクノさかき工業団地）
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>しなの鉄道テクノさかき駅から徒歩5分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋外喫煙場所設置</dd>
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
					<dd>21.1日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>高卒以上171,000～　1か月160時間勤務の場合、残業代別</dd>
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
					<dd>171,000円</dd>
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
					<dd>あり（月額10,000円まで）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（3カ月）</dd>
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
					<dd>月平均8時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制（土日・祝日・夏季休暇）</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日111日（2025年度計画）</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険、財形、確定拠出年金</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>退職金共済（勤続１年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>60歳</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>70歳まで</dd>
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
					<dd>前年度:2人、2年度前：0人、3年度前：1人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:1人、2年度前：0人、3年度前：4人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：2人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:2人、2年度前：0人、3年度前：2人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						13年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>47歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd></dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>
						あり<br>
						新人研修他
					</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり<br>
						会社が認めた資格について取得費用の全額補助
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
					<dd>8時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>12日</dd>
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
					<dd>30%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>4.2%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>食品製造職</dd>
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
						2025年7月29日（火） 10時00分～<br>
						2025年7月31日（木） 10時00分～<br>
						2025年8月6日（水） 10時00分～<br>
						2025年8月8日（金） 10時00分～
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
						総務 久保田
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
