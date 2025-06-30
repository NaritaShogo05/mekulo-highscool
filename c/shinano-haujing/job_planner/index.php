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
$title = $name . ' - ' . $co['company_name'] . '株式会社信濃ハウジングの高卒求人情報';
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
<body class="highschool shinano-haujing">
<?php //include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="first_view.jpg">
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
		理想の庭をつくるため、最初から最後まで関わる仕事
	</h3>
	<p>
		お庭プランナーは、お客さまにぴったりのお庭を提案し、形にする仕事です。<br>
		「車は何台停めたいか？」「どんなことをお庭で楽しみたいか？」などをヒアリングし、カタログや事例を見ながら簡単な図を描いて、イメージをつかみます。現地で土地の広さや日当たりなども確認し、細かくプランを決めていきます。
	</p>
	<div class="images">
	    <img src="planner08.jpg" alt="" class="scene">	
	    <img src="planner01.jpg" alt="" class="scene">
	</div>
	<p>
		当社では、家にいきなり訪問したり、電話で無理に勧めたりする営業は行いません。来店されたお客さまに真剣に向き合い、お庭づくりをサポートします。
	</p>
	<div class="images">
		<img src="planner02.jpg" alt="" class="scene">
	</div>
	<p>
		完成イメージが固まったら、図面と見積書を作成。デザインや予算など、納得いただけるまで何度も提案します。実はお客さまと話す時間より、図面や見積りに向き合う時間のほうが多いんです。
	</p>
	<div class="images">
		<img src="../first_view.jpg" alt="" class="scene">
	</div>
	<p>
	材料の注文や職人さんとの打ち合わせなど、工事の準備も仕事の一つ。工事中は進み具合を確認し、お客さまの質問に答えられるように現場の状況を把握します。
	</p>
	<div class="images">
		<img src="planner03.jpg" alt="" class="scene">
		<img src="planner4.jpg" alt="" class="scene">
	</div>
	<p>
		工事完了後に現場をチェックし、お客さまと仕上がりを確認。理想の形が実現できているか、一緒に確かめましょう。お客さまの想いをくみ取り、形にするのがこの仕事。「誰かのために何かしたい」と思う人に、向いているかもしれません。
	</p>
	<div class="images">
		<img src="planner05.jpg" alt="" class="scene">
	</div>
	<h3>
		できることが確実に増えていく
	</h3>
	<p>
		入社後の最初の3カ月は、現場で研修です。お客さまの質問に答えられるよう、実際の工事のやり方や流れを経験して学びます。
	</p>
	<div class="images">
		<img src="planner06.jpg" alt="" class="scene">
		<img src="planner07.jpg" alt="" class="scene">
	</div>
	<p>
		その後は、先輩プランナーと一緒に打ち合わせに参加。先輩の仕事を間近で見て、話し方や提案方法、「お客さまがどんなことを大切にしているのか」を肌で感じてみてください。やりとりのコツや、工夫が自然と身につきます。入社から5か月程で、一人でお客さまを担当できるようになります。
	</p>
	<div class="images">
		<img src="planner08.jpg" alt="" class="scene">
	</div>
	<p>
		現場研修の後は、図面作成にも挑戦。まず参考書でCADという図面作成ソフトの使い方を学び、先輩が作った図面をお手本に練習。最初からお客さまの前で図面を描くことはないので、安心です。<br>
		店長がサポートするので、分からないことはすぐ相談できます。研修中は現場が中心ですが、雨の日は社内でCAD練習など、バランスよく学べます。
	</p>
	<div class="images">
		<img src="planner09.jpg" alt="" class="scene">
		<img src="planner10.jpg" alt="" class="scene">
	</div>
	<p>
		住宅の内装・外装・外構と、幅広い分野を扱うので覚えることはたくさんあります。ですが、「いろんなことができるようになりたい」「学ぶことが楽しい」と思える人には、ぴったりの仕事です。
	</p>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
	<li>
		<img src="planner02.jpg" alt="">
	</li>
	<li>
		<img src="planner08.jpg" alt="">
	</li>
	<li>
		<img src="gallery01.jpg" alt="">
	</li>
	<li>
		<img src="planner01.jpg" alt="">
	</li>
	<li>
		<img src="planner03.jpg" alt="">
	</li>
	<li>
		<img src="planner4.jpg" alt="">
	</li>
	<li>
		<img src="planner09.jpg" alt="">
	</li>
	<li>
		<img src="planner05.jpg" alt="">
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
				<img src="katahira_.jpg" alt="">
				<hgroup>
					<h3>片平さん</h3>
					<p>
						小さい頃から人と話すのが好きで、前職は飲食店に勤めていました。家族との時間を大切にしたいと思い、営業職でも土日に希望休みが取れる信濃ハウジングに転職しました。<br>
                        営業は外に出る仕事というイメージがありましたが、日中に図面を描く時間もあり、残業も少なめ。自分で予定を立てて動けるので、定時の18時30分には帰宅できています。<br>
                        この職場の良いところは、見積りや設計図の作り方を、店長に直接教えてもらえるところです。分からないことがあればすぐ聞けて、いつもそばでサポートしてくれました。
					</p><br>
                    <p>
					    印象に残っているのは、お客さまから「お願いします」と言っていただき、契約が決まった瞬間。完成後に喜んでいただけたときは、本当にうれしかったです。
					</p>
				</hgroup>
			</div>
			<p>片平さん</p>
		</li>
	</ul>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="takizawa_.jpg" alt="">
				<hgroup>
					<h3>滝澤さん</h3>
					<p>
						以前の仕事で信濃ハウジングの現場に関わる機会がありました。社員さんの人柄や丁寧な対応、楽しそうに働く姿が印象的で、「こんな会社で働きたい」と思い入社を決めました。<br>
                        図面作成は未経験でしたが、分からないことは質問すれば1から丁寧に教えてもらえます。教え方も、それぞれのペースに合わせてくれるため、無理なく成長できます。過去の事例を参考にしながら、経験を活かした指導をしてくれるのがありがたいです。<br>
                        資格取得にも前向きで、受験費用は会社が負担するなど、挑戦を後押ししてくれます。
					</p><br>
                    <p>
						お客さまから「また頼みます」と言ってもらえたときや、予算と希望のバランスが難しい中でも、予算に合わせた良い提案ができたときに大きな達成感がありました。正解のない仕事だからこそ、毎回その現場にとっての“最善”を考えて取り組んでいます。<br>
					</p>
				</hgroup>
			</div>
			<p>滝澤さん</p>
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
					<dd>営業スタッフ</dd>
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
					<dd>3カ月（待遇の変更なし）</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒3890505<br>
					長野県東御市和１０５７－１</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>屋内禁煙</dd>
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
					<dd>あれば尚可(建設系の知識)</dd>
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
					<dt>毎月の賃金</dt>
					<dd>確定</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>200,000円～</dd>
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
					<dd>200,000円</dd>
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
					<dd>毎月15日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（上限あり）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年1回</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>9時00分〜18時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均5時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制(シフト制)</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日100日</dd>
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
						8年<br>
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>45歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>3カ月の新人研修</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						〇資格取得支援<br>
						エクステリアプランナー(1級、2級)
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
					<dd>5.8%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>11.7%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>その他の識別工事業</dd>
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
						2025年 月  日（ ）   時  分～<br>
						2025年 月  日（ ）   時  分～
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
					<dd>面接後７日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						代表取締役<br>
						中澤英樹
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
                            <img src="<?= $company_base . $prop['fv_url'] ?>" alt="">
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
