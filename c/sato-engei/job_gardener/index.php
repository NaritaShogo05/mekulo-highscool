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
		道具を使い分けて、植物をきれいに切りそろえる
	</h3>
	<p>
		造園の仕事でいちばん多いのは、お庭の木の手入れです。伸びすぎた木の枝を切りそろえたり雑草を取りのぞいたりすることで、1年中綺麗なお庭を保つだけでなく、虫や病気を防ぐこともできます。
	</p>
	<div class="images">
		<img src="contents01.jpg" alt="" class="scene">
		<img src="after.jpg" alt="" class="scene">
	</div>
	<p>
		太い枝はのこぎり、細い枝は剪定バサミなど、道具を使い分けます。
	</p>
	<div class="images">
		<img src="nokogiri.jpg" alt="" class="scene">
		<img src="senteibasami.jpg" alt="" class="scene">
	</div>
	<p>
		大きな木の枝を切るときは、一度離れたところから全体の形を確認して、切って、を繰り返すこともあります。
	</p>
	<div class="images">
		<img src="contents02.jpg" alt="" class="scene">
	</div>
	<p>
		また、公園の木や街路樹を管理するのも、私たちの大切な仕事です。<br>
		枯れた木が倒れる前に撤去したり、芝生の間から出てきた雑草を抜いたりします。
	</p>
	<div class="images">
		<img src="contents03.jpg" alt="" class="scene">
		<img src="../gallery3.jpg" alt="" class="scene">
	</div>
	<h3>
		チームでの作業
	</h3>
	<p>
		造園の仕事は、だいたい2～3人のチームで作業を行います。大きい現場では5人体制になることも。ひとりで現場を担当することはなく、必ずベテランの先輩と一緒に作業を行います。
	</p>
	<div class="images">
		<img src="contents07.jpg" alt="" class="scene">
		<img src="contents08.jpg" alt="" class="scene">
	</div>
	<p>
		その日の作業内容によって、1つの現場で終わることもあれば、2つの現場を回ることもあります。
	</p>
	<h3>
		まさに“職人”
	</h3>
	<p>
		庭木をきれいに整える「剪定」には、決まった設計図はありません。木の形や周りの景色を見て、どこをどう切るかを判断するのは、職人の腕の見せどころ。
	</p>
	<div class="images">
		<img src="../sentei.jpg" alt="" class="scene">
	</div>
	<p>
		写真に写っているのは、佐藤園芸の職人が使っているこだわりの腰道具です。
	</p>
	<div class="images">
		<img src="koshidougu.jpg" alt="" class="scene">
	</div>
	<p>
		木ばさみ、剪定ばさみ、のこぎりなど、いつも使う道具を腰につけて作業します。<br>
		全員が全く同じ道具を使っているわけではなくて、「これが一番使いやすい！」というお気に入りの道具を見つけています。毎日使う仕事道具なので、大切に手入れしながら使っています。
	</p>
	<div class="images">
		<img src="kibasami.jpg" alt="" class="scene">
	</div>
	<h3>
		冬の仕事も！
	</h3>
	<p>
		冬は、植物の成長がゆっくりになる時期。この時期のうちに、畑で育てている植物の手入れや在庫の管理を行います。
	</p>
	<div class="images">
		<img src="contents10.jpg" alt="" class="scene">
		<img src="jimusyo1.jpg" alt="" class="scene">
	</div>
	<h3>
		最初は手伝いから
	</h3>
	<p>
		入社してすぐは、先輩のサポートから始めます。道具の準備や後片づけをしながら、少しずつ現場に慣れていきます。
	</p>
	<div class="images grid-images">
		<img src="contents11.jpg" alt="" class="scene">
		<img src="contents12.jpg" alt="" class="scene">
		<img src=".jpg" alt="" class="scene">
	</div>
	<p>
		全く同じ形の植物はなく、特に木の枝を切りそろえる「剪定」では、職人のセンスが必要になります。職人によって、完成形も違います。<br>
		しかし、木の種類や成長度合いによって、基本の切り方は決まっています。先輩に教わりながら基本を覚え、そこから自分なりのセンスを磨いていってください。簡単な木であれば1か月、難しい木には1年ほどで挑戦することができます。
	</p>
	<div class="images">
		<img src="firstview.jpg" alt="" class="scene">
	</div>
	<p>
		チェーンソーで木を切る作業は、大胆に見えて、実はとても繊細な作業。切る場所や倒す方向を間違えると危ないので、経験を積んでから少しずつ任せていきます。
	</p>
	<div class="images">
		<img src="contents13.jpg" alt="" class="scene">
		<img src="contents14.jpg" alt="" class="scene">
	</div>
	<p>
		また、造園には『造園技能士』や『造園施工管理技士』という国家資格があります。経験を積みながら資格の取得を目指し、スキルを磨いてください。会社が全力でサポートします。
	</p>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
		<img src="../gallery1.jpg" alt="">
	</li>
	<li>
		<img src="../gallery2.jpg" alt="">
	</li>
	<li>
		<img src="../contents01.jpg" alt="">
	</li>
	<li>
		<img src="contents04.jpg" alt="">
	</li>
	<li>
		<img src="cyenso.jpg" alt="">
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
				<img src="kawashima.jpg" alt="">
				<hgroup>
					<h3>川島さん</h3>
					<p>
						中学生の時に、テレビで京都の庭特集をやっていたんです。庭師の方が手入れした庭がすごくきれいになっていて、「庭師ってすごい！かっこいい！」と思ったのがきっかけでした。 <br>
						天気に左右されるのは正直大変ですけど、剪定している時間は自分と向き合う時間というか、無心になれるんですよね。切り方にも個性が出るし、「やっぱ自分、うまいな～」って思うこともあって（笑）それでお客様にも喜んでもらえたら、本当にうれしいです。<br>
						休みの日は、よくドライブやショッピングに出かけます。彼女とオシャレなカフェや、おいしそうなケーキ屋さんに行って、外で気分転換することが多いです。
					</p>
				</hgroup>
			</div>
			<p>2016年新卒入社<br>川島さん</p>
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
					<dd>造園職人</dd>
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
					<dd>あり（3か月）</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒381-2247<br>
					長野県長野市青木島3-3-10</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>川中島駅から車で10分</dd>
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
					<dd>21.4日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>確定</dd>
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
					<dd>毎月20日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（上限20,000円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（1.8か月分）</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業時間</dt>
					<dd>7時30分～17時00分（休憩90分）</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均10時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>土曜、日曜、その他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日108日（2025年度計画）</dd>
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
					<dd>企業年金基金</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数1年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり（65歳）</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限年齢70歳）</dd>
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
						14年<br>
						※創業以降の実績
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
					<dd>新入社員研修、可能思考研修</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり<br>
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
					<dd>0%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>5.2%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>土木工事業（舗装工事業を除く）</dd>
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
						2025年7月29日（火）10時00分～、13時30分～<br>
						2025年8月8日（金）10時00分～、13時30分～<br>
						2025年8月20日（水）10時00分～、13時30分～
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接、学科試験（一般常識）</dd>
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
					<dd>
						佐藤寛
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
