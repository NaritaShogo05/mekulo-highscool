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
$title = $name . ' - ' . $co['company_name'] . '株式会社フレアオリジナルの高卒求人情報';
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
<body class="highschool furea-original">
<?php include $highschool_base . 'tmpl_header.php'; ?>
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
		ロボットクリエーターとは？
	</h3>
	<p>
		この仕事は、ロボットアームなどの産業用ロボットが、それぞれの現場で活躍できるようにするのがゴール。「どう動かすか」や「どう作業させるか」などを、とことん考えて試行錯誤していきます。<br>
	</p>
	<p>
		特にハンドの質感や形、厚みや力加減はとても重要。表面がつるつるだとつかみにくく、ザラザラだと引っかかってしまうことも。力が強すぎると物を潰してしまうし、弱すぎると持ち上がりません。手でさわって確かめ、「どうしたら持ちやすいか？」などを考え、使いやすいロボットに仕上げる必要があります。
	</p>
	<div class="images">
		<img src="first_view.jpg" alt="" class="scene">
		<img src="robot1.jpg" alt="" class="scene">
	</div>
	<p>
		フレアオリジナルでは、組み立てや配線などの”作業だけ”に取り組むのではなく、一人ひとりがロボットを生み出す”ロボットクリエーター”だという考え方を大切にしています。
	</p>
	<h3>
		現場に合うロボットを考え、“体”をつくる
	</h3>
	<p>
		ロボットができるまでには、たくさんのステップがあります。<br>
       「こんな作業を自動化したい」「こういう動きをしてほしい」といった要望を聞き、「どんなロボットが必要か、どんなロボットを作るか？」と考えるところから始まります。<br>
	</p>
	<div class="images">
		<img src="robot02.jpg" alt="" class="scene">
		<img src="robot3.jpg" alt="" class="scene">
	</div>
	<p>
		「どんな機能か」「どの部品を使うか」など、ロボットの「体」の細かい仕様を決め、部品をそろえて組み立てはじめます。
		電気的な作業だけでなく、金属に穴をあけたり切ったりする、機械加工の作業もあります。様々な工夫を凝らして、要望に沿ったロボットを生み出します。
	</p>
	<div class="images grid-img">
		<img src="robot4.jpg" alt="" class="scene">
		<img src="robot5.jpg" alt="" class="scene">
		<img src="robot6.jpg" alt="" class="scene">
		<img src="robot7.jpg" alt="" class="scene">
	</div>
	<p>
		ロボットを組み立てたら、きちんと動くかどうか、何度も試して調整します。<br>これで体の部分はほぼ完成です。
	</p>
	<h3>
		電気系から、プログラムまで。現場で働くまでが、私たちの役目
	</h3>
	<p>
		ロボットの頭や神経にあたる電気系の部分も設計します。ロボットを動かすための回路を作り、部品を取り付けて配線。これでロボットの動きをコントロールできるようになります。
	</p>
	<div class="images">
		<img src="robot08.jpg" alt="" class="scene">
	</div>
	<p>
		次は、ロボットに「やること」を教えるプログラム作り。<br>「何を、どの順番でやるか」と「どう動くか」を細かく決めていきます。
		ここでボタンや表示など、操作画面も一緒に作ります。こうすることで、動きと操作がぴったり合い、スムーズに動かせるようになります。
	</p>
	<div class="images">
		<img src="robot09.jpg" alt="" class="scene">
		<img src="robot-10.jpg" alt="" class="scene">
	</div>
	<p>
		完成したロボットは、社内で動きを確認し、お客さまにもチェックしてもらいます。<br>問題がなければ、いよいよ現場にロボットを設置します。
	</p>
	<div class="images">
		<img src="robot-11.jpg" alt="" class="scene">
	</div>
	<p>
		現場で最終チェックをして、必要ならその場で調整や、バグを直す「デバッグ」を行います。<br>
        ロボットを作り、現場に送り出すまでを一貫して行う仕事です。
	</p>
	<div class="images">
		<img src="robot-12.jpg" alt="" class="scene">
	</div>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
	<li>
		<img src="robot1.jpg" alt="">
	</li>
	<li>
		<img src="robot5.jpg" alt="">
	</li>
	<li>
		<img src="robot02.jpg" alt="">
	</li>
	<li>
		<img src="robot08.jpg" alt="">
	</li>
	<li>
		<img src="robot09.jpg" alt="">
	</li>
	<li>
		<img src="robot13.jpg" alt="">
	</li>
	<li>
		<img src="../contents05.jpg" alt="">
	</li>
		</ul>
		<div class="button left_btn">&lt;</div>
		<div class="button right_btn">&gt;</div>
		</div>
	</div>
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
					<dd>ロボットクリエーター</dd>
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
					<dd>あり（待遇の変更なし）</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒3890602<br>
					長野県埴科郡坂城町中之条3080 第二工場</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>テクノさかき駅から徒歩13分</dd>
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
					<dd>電気的な知識、プログラム、工作、プラモデル、モノづくりが好きな人</dd>
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
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>180,000円～</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>資格手当</dd>
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
					<dd>資格取得手当（難易度による）</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>資格取得補助手当</dd>
				</div>
				<div>
					<dt>特別に支払われる手当③</dt>
					<dd>お手柄手当</dd>
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
					<dd>あり</dd>
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
					<dd>月平均20時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制（土日・その他）</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日115日</dd>
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
						 年<br>
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>35.1歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり
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
					<dd>あり</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>20時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>16日</dd>
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
					<dd>33%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>高卒</dd>
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
						可
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>書類選考、面接、適性検査、学科試験(一般常識、作文)</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後１０日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						専務取締役<br>
						田中奈美
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
