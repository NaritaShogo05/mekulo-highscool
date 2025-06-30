<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
include_once $company_base . '!data.php';
$current_url = $_SERVER['REQUEST_URI']; //現在のページのURLを表示
$last_segment = basename($current_url);//現在のURLから末尾の職種URLの綴りを取得
$catch_copy = $occupation[$last_segment]['catch_copy'] ?? '職種が見つかりません';//値があるか確認
$name = $occupation[$last_segment]['name'] ?? '不明な職種';
$meta_keywords = $occupation[$last_segment]['meta_keyword'] ?? '';
$meta_desc = $occupation[$last_segment]['meta_desc'] ?? '';


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
				製品ごとに機械を調整する
			</h3>
			<p>
				工場には、機械が13ラインあります。ラインによって作る製品が違います。それぞれの機械のクセや製品に合わせて設定を行い、ネジを緩めるなどの微調整を行う仕事です。<br>
				機械操作スタッフは、1人で約6台の機械を担当します。たくさんの製品を作るので、頻繁に機械の調整を行う必要があります。
			</p>
			<div class="images">
				<img src="contents01.jpg" alt="" class="scene">
			</div>
			<p>
				主にドライバーやスパナを使用し、「どうすれば不良を減らせるか？」を考えながら、細かい調整を繰り返します。<br>
				例えば、機械の速度を変更したり、包装に具材を入れる部分を広げたり狭めたりすることで、具材が包装に挟まる不良を減らすことができます。
			</p>
			<div class="images">
				<img src="contents02.jpg" alt="" class="scene">
				<img src="contents03.jpg" alt="" class="scene">
			</div>
			<p>
				別の製品に切り替えるときは、包装のロールを交換します。ロールにはそれぞれクセがあるので、交換後はそのクセを見極めて調整します。<br>
				また、機械に具材が挟まったり、具材の量が違ったりすると、機械からエラー音が鳴ることもあります。そんな時こそ、焦らず落ち着いて機械と向き合い、原因を突き止めて対処することが大切です。
			</p>
			<div class="images">
				<img src="contents04.jpg" alt="" class="scene">
			</div>
			<p>
				かやくの種類や具材によって、細かい調整や工夫が欠かせません。状況に応じた臨機応変な対応が求められる仕事です。 
			</p>
			<h3>
				じっくり経験を積む
			</h3>
			<p>
				入社後は、先輩と二人三脚で仕事を覚えていきます。特別な資格は必要ありませんが、作業の流れや機械の調整方法を一つずつ丁寧に習得していくことが大切です。
			</p>
			<div class="images">
				<img src="contents05.jpg" alt="" class="scene">
			</div>
			<p>
				最初は工場全体の流れを学び、徐々に「この状況ではこう調整する」といったコツを覚えていきます。一通りの仕事ができるようになるまでは、約2年。じっくりと経験を積みながら成長できます。<br>
				また、3か月ごとに機械の点検を行い、安全性や性能を確認しています。最近の機械は内部構造が見えにくいものが多いですが、当社では独自の機械を使っていて内部がよく見えるので、機械が好きな人には特に面白い仕事だと思います。
			</p>
			<div class="images">
				<img src="contents06.jpg" alt="" class="scene">
			</div>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
        <li>
				<img src="gallery02.jpg" alt="">
			</li>
        <li>
				<img src="gallery03.jpg" alt="">
			</li>
			<li>
				<img src="gallery04.jpg" alt="">
			</li>
			<li>
				<img src="gallery05.jpg" alt="">
			</li>
			<li>
				<img src="gallery06.jpg" alt="">
			</li>
			<li>
				<img src="gallery07.jpg" alt="">
			</li>
			<li>
				<img src="gallery08.jpg" alt="">
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
				<img src="kikuchi.jpg" alt="">
				<hgroup>
					<h3>菊地さん</h3>
					<p>
						もともと機械オペレーターの仕事に興味があり、ハローワークで見つけたのが入社のきっかけです。<br>
						機械の不具合に対しては、ある程度パターンで覚えることができますが、そのパターンが通用しないことも多いです。そんな時は、よく先輩に助けてもらっています。<br>
						一言で「かやく」と言ってもいろいろな種類があり、「こんなのも具材になるんだ！」というのを見るのが面白いです。最近では、おまけのイチゴが入っているものも作りました。<br>
						春から秋にかけてはキャンプをするのが好きです。他の季節はドライブを楽しんでいます。
					</p>
				</hgroup>
			</div>
			<p>2015年中途入社<br>菊地さん</p>
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
					<dd>機械操作スタッフ</dd>
				</div>
				<div>
					<dt>雇用形態</dt>
					<dd>正社員</dd>
				</div>
				<div>
					<dt>雇用期間</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>契約更新の可能性</dt>
					<dd>-</dd>
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
					<dd>〒386-1101<br>
						長野県上田市下之条42
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>別所線上田原駅から徒歩10分</dd>
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
					<dd>-</dd>
				</div>
				<div>
					<dt>転勤の可能性</dt>
					<dd>-</dd>
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
					<dd>-</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>21.6日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>162,000円～</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>残業手当</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd></dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>162,000円</dd>
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
					<dd>毎月月末</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり(上限月額15,000円)</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>年1回</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業時間</dt>
					<dd>8:15～17:00</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均8時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>日・祝日・その他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日120日（2025年度計画）</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、雇用保険、労災保険、財形</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>（勤続年数3年以上）</dd>
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
					<dd>あり（上限65歳まで）</dd>
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
					<dd>前年度:人、2年度前：人、3年度前：人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						16年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>36歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>1か月間の社内研修</dd>
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
					<dd></dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd></dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>8時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>7日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：0人、男性：0人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>33%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd></dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>3名</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						2025年7月30日（水） 10時30分～12時00分<br>
						2025年8月6日（水）10時30分～12時00分
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>書類選考、面接</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd></dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						原田 孝子
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
