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
$title = $name . ' - ' . $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';

$keywords = $meta_keywords;
$description = $meta_desc;

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/' . $last_segment . '/';

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
<?php if ($keywords) { ?>
<meta name="keywords" content="<?= $keywords ?>">
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
		"name": "新卒求人特集",
		"item": "https://works.mekulo.jp/highschool/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/"
	},{
		"@type": "ListItem",
		"position": 4,
		"name": "<?= $name ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/<?= $last_segment ?>/"
	}]
}
</script>
</head>
<body class="newgrads highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="../first_view.jpg">
    <hgroup>
        <h1 class="catch"><?= $catch_copy ?></h1>
        <p class="fv-tag"><?= $name ?></p>
    </hgroup>
		<a href="https://youtu.be/qNsTy_NF_VY" class="video-linkk" target="root">
			<img src="<?= $highschool_base ?>with-video.png" alt="">
		</a>
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
		機械設計と制御設計
	</h3>
	<p>
		「機械を設計する」と聞いて、どんな仕事を思い浮かべますか？<br>
設計には大きく分けて２つの分野があります。機械そのものの形を考える「機械設計」と、その機械をどう動かすかを決める「制御設計」。<br>
入社後の研修を終えたら、あなたの適性や希望に応じて、どちらかの分野に配属されます。
	</p>
	<h4>
		機械設計
	</h4>
	<p>
		「こんな機械を作ってほしい！」というお客様の要望をもとに、その機械がどんな形で、どう動いて、どんな素材で作られるべきかを考え、設計図に落とし込むのが機械設計の仕事です。<br>
		どんな部品をどこに配置して…と、部品を把握することが求められます。<br>
		たとえば、「鉄を削る機械」を作るなら、材料をどうやって固定するか、どんな刃を使うか、どのくらいの力で動かすか、材料を裏返すときはどうするか、安全性やコストは…そういった細かい部分まで一つひとつ考え、正確な図面を描いていきます。<br>
		図面が正しくなければ、工場で機械を組み立てることができません。設計図は、ものづくりに欠かせない“説明書”です。
	</p>
	<h4>
		制御設計
	</h4>
		<p>形が完成しただけでは、機械は動きません。<br>
		「いつ」「どこを」「どのように」動かすのか──機械の“動き方”をプログラムで指示するのが、制御設計の役割です。<br>
		制御設計者は、電気信号を流したり電圧を変えたりするための電気回路を作り、パソコンで動作プログラムを作成します。そして、現場で組み立てられた機械にプログラムを組み込み、思い通りに動くかどうかを確認します。<br>
		1年のうち、約4割は現場での調整作業。うまく動かないときは原因を探り、プログラムを修正して、思い通りの動きを実現していきます。<br>
		自分の組んだプログラムで、想像通りに機械が動く。その瞬間は、何度経験してもワクワクするものです。
</p>
<div class="images">
		<img src="../contents03.jpg" alt="" class="scene">
	</div>
<h3>
	機械の知識を、技術の武器に変える研修
</h3>
<p>
	入社後は、1か月間の社内研修「機械設計教室」で、図面の読み方やCADソフト（設計ソフト）の使い方、制御の基礎などをじっくり学びます。<br>
	その後は、先輩がマンツーマンでサポートするOJT研修に入り、実際の業務を通してスキルを身につけていきます。現場経験を重ねながら、いずれはお客様との打ち合わせや、自分が中心となって設計を担当することも目指せます。
</p>
<div class="images">
		<img src="seigyo01.jpg" alt="" class="scene">
</div>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
		<img src="seigyo02.jpg" alt="">
	</li>
	<li>
		<img src="../first_view.jpg" alt="">
	</li>
	<li>
		<img src="../contents03.jpg" alt="">
	</li>
	<li>
		<img src="seigyo03.jpg" alt="">
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
				<img src="takeuchi.jpg" alt="">
				<hgroup>
					<h3>竹内さん</h3>
					<p>
						私は、制御設計の仕事を担当しています。<br>
						これは、機械がちゃんと動くようにプログラムをつくったり、調整したりする仕事です。お客様の工場に行って、実際の機械に制御プログラムを入れたり、オプション品を取り付けたりして、全体の動きを調整しています。<br>
						毎回、機械を作る人の希望や機械の種類がちがうので、いろいろなことにチャレンジできるのが楽しいし、やりがいを感じます！<br>
						会社のまわりは自然がたくさんあって、休憩中にのんびり散歩することが多いです。ひとりの時間を大切にしたい人にもぴったりな環境だと思います。<br>
						お休みの日は、家族とゆっくりすごしたり、仕事について調べたり、勉強したりして、自分のペースで過ごしています。
					</p>
				</hgroup>
			</div>
			<p>新卒7年目<br>竹内さん</p>
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
					<dd>機械設計・制御設計</dd>
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
					<dd>あり</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒386-1211<br>
					長野県上田市下之郷813-83<br>（上田リサーチパーク内）</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>別所線 下之郷駅から徒歩20分</dd>
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
					<dd>必須<br>機械科or電気科</dd>
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
					<dd>20.5日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>確定</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>190,000円</dd>
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
					<dd>190,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当</dt>
					<dd>皆勤手当、精勤手当、資格手当など</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月15日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（月額50,000円まで）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>あり（初年度1回、次年度以降2回）</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時30分〜17時30分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均18時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制（土日・祝日・他）</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年末年始、GW、お盆休暇<br>年5回の土曜出勤有（内、2日は午前半日勤務）</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、雇用保険、労災保険、財形保険、その他</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数3年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>65歳</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり</dd>
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
					<dd>前年度:2人、2年度前：1人、3年度前：0人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:1人、2年度前：1人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:2人、2年度前：1人、3年度前：0人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						15年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>39歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり<br>
				新入社員研修。オンラインによる人間力を高めるための社員研修やグループワーク。社員主催で実施する技術力向上勉強会など。</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>あり<br>
				人事評価を用いて、来期の目的と目標の設定・前期の課題の洗い出しと改善方法の検討を行い、検討内容を基に上長による相談を実施</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd>あり<br>
				年1回上長と半期面談および査定面談を実施し、人事評価に基づいた目的と目標・課題を確認し成長を支援する。</dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd>あり<br>
				年1回機械設計の技能検定実施。結果に基づく個人指導。</dd>
				</div>
				<div>
					<dt>前年度の月平均所定労働時間</dt>
					<dd>18時間</dd>
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
					<dd>20%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>機械設計業</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>3人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						2025年7月29日(火)　10時00分～11時30分<br>
						2025年7月30日(水)　10時00分～11時30分<br>
						2025年8月5日(火)　10時00分～11時30分<br>
						2025年8月6日(水)　10時00分～11時30分
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接、適性検査、その他（SPI、形状認識）</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後3日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						大井一政</dd>
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
<?php //include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
