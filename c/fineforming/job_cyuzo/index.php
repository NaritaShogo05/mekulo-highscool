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
		溶かしたアルミを型に流し込み、製品を製造する
	</h3>
	<p>
		私たちの仕事は、約800度まで熱して溶かしたアルミを「金型」と呼ばれる製品の型に流し込み、固めることで自動車や自転車などに使われる部品を製造することです。
	</p>
	<div class="images">
		<img src="contents1.jpg" alt="" class="scene">
		<img src="contents2.jpg" alt="" class="scene">
	</div>
	<p>
		イメージとしては、溶かしたチョコレートを型に流し込んで固めるのと似ています。それのアルミ版と考えてもらうと分かりやすいと思います。<br>
		鋳造の工程は大きく分けて「鋳込み」と「湯口切断」の2つがあり、それぞれを専門に担当しています。<br>
		ここから先は、それぞれの具体的な内容についてご紹介します。
	</p>
	<h3>
		溶かしたアルミを金型に流し込む「鋳込み」
	</h3>
	<p>
		「鋳込み」は、溶かしたアルミを金型に流し込む工程です。<br>
		高温で重たいアルミを取り扱うため、「湯汲み」という道具を使い、慎重に金型へ流し込みます。<br>
		勢い良く流し込むと空気が混入して不良品（出荷できない部品）になり、逆に遅すぎると綺麗に固まらないため、何回も経験を積みながら、最適な感覚を掴んでいきます。
	</p>
	<div class="images">
		<img src="contents3.jpg" alt="" class="scene">
	</div>
	<p>
		湯汲みには3種類のサイズがあり、製造する部品の大きさによって使い分けます。<br>
		例えば、大きい製品は5kgの湯汲み、小さい製品は1kgの湯汲みを使用します。
	</p>
	<div class="images">
		<img src="contents4.jpg" alt="" class="scene">
	</div>
	<p>
		流し込んだ後は、製品が固まるまで待機する時間があるため、一人で複数の金型を担当します。5kgの製品は約3分、1kgの製品は約1分で固まります。<br>
		金型にアルミを流し込むと、自動的に金型が倒れ、製品が固まると自動で起き上がる仕組みになっています。そのため、機械が起き上がったら、足で金型を開けるボタンを踏み、製品を型から取り外して完成となります。
	</p>
	<div class="images">
		<img src="contents5.jpg" alt="" class="scene">
		<img src="contents6.jpg" alt="" class="scene">
	</div>
	<p>
		見た目はアルミの色をしていますが、実際にはとても高温なので、注意が必要です。<br>
		また、定期的にアルミインゴットを炉に入れ、アルミを溶かす仕事も行います。<br>
		勢いよく入れると、溶けたアルミが飛び散る恐れがあるため、ゆっくりとインゴットを炉の中に投下していきます。
	</p>
	<div class="images">
		<img src="contents7.jpg" alt="" class="scene">
		<img src="contents8.jpg" alt="" class="scene">
	</div>
	<h3>
		固まった製品を仕上げる「湯口切断」
	</h3>
	<p>
		アルミが固まった後は、「湯口切断」という工程に入ります。<br>
		湯口とは、アルミを流し込む際にできる不要な部分のことで、機械を使って切断し、出荷できる状態にまで製品を仕上げます。
	</p>
	<div class="images">
		<img src="contents9.jpg" alt="" class="scene">
		<img src="contents10.jpg" alt="" class="scene">
	</div>
	<p>
		金属を切断する機械なので、当然ながら取り扱いには注意が必要です。そのため、防護具をしっかりと身に着け、安全を確保しながら湯口切断を進めていきます。<br>
		初めて湯口切断を行う場合は、チップソーと呼ばれる機械を使用します。この機械は、製品を投入すると自動で切断してくれるため、人が直接刃に触れることなく、安全に作業ができます。
	</p>
	<div class="images">
		<img src="contents11.jpg" alt="" class="scene">
	</div>
	<p>
		湯口を切断した後は、「バリ取り」と呼ばれる仕上げ作業を行い、製品が完成します。<br>
		通常は、鋳込みと湯口切断はそれぞれの担当に分かれていますが、場合によっては一人で両方を担当することもあります。
	</p>
	<h3>
		入社後は、道具の使い方に慣れることから始めよう
	</h3>
	<p>
		この仕事では、高温のアルミを取り扱うため、初心者がすぐに現場で作業することはありません。<br>
		万が一、溶けたアルミを持った状態で転んでしまったりすれば、大きな事故につながる危険があるからです。
	</p>
	<div class="images">
		<img src="contents12.jpg" alt="" class="scene">
	</div>
	<p>
		そのため、まずは道具の使い方をマスターすることからスタートします。<br>
		①湯汲みを使って溶けたアルミをすくう練習<br>
		②アルミを運ぶ練習<br>
		③機械の操作を学ぶ<br>
		このような基本練習を重ね、少しずつ仕事に慣れていきます。<br>
		2～3週間ほどの訓練を経て、ようやく現場デビューとなります。
	</p>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
				<li>
					<img src="gallery01.jpg" alt="">
				</li>
				<li>
					<img src="gallery02.jpg" alt="">
				</li>
				<li>
					<img src="gallery03.jpg" alt="">
				</li>
				<li>
					<img src="gallery04.jpg" alt="">
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
				<img src="hoyano.jpg" alt="">
				<hgroup>
					<h3>保屋野朗光さん</h3>
					<p>
						前職では金属の切削加工をしていました。子供の頃からプラモデル作りやバイクいじりが好きで、ものづくりに興味を持っていました。<br>
						ファインフォーミングはハローワークで知りました。<br>
						「鋳造」と「鍛造」を一緒に行うのは珍しいなと思ったことが、応募したキッカケです。<br>
						今は鋳造の鋳込みを中心に仕事をしていますが、アルミを流し込む際の力加減に苦労しました。その日の金型のコンディションや温度によって、昨日と同じ力加減では綺麗に仕上がらないこともり、簡単な単純作業に見えて、意外と神経と集中力を使う仕事です。<br>
						そのため、だた黙々とやっている仕事ではなく、「技術」を身に付けられる仕事だなと実感しています。
					</p>
				</hgroup>
			</div>
			<p>2021年中途入社<br>保屋野朗光</p>
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
					<dd>鋳造職人</dd>
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
					<dd>〒386-2203<br>
					長野県上田市真田町傍陽938</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>上田駅から車で25分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋外に喫煙室を設置しております</dd>
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
					<dd>170,000円～220,000円</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>手袋手当（2,000円）</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>作業手当（18,000～22,000円）</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>165,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>皆勤手当（15,000円）</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>リーダー手当（10,000円）</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月25日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（15,000円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり（前年度実績5,000円）</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>
						年2回（1か月分又は80,000～）
						※新規学卒者実績
					</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時00分〜16時55分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均19時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制(土日・お盆休み・年末年始・ゴールデンウィークは休みとなります。)</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日115日（2025年度計画）</dd>
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
					<dd>なし</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数5年以上）</dd>
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
					<dd></dd>
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
					<dd>7年</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>44歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>
						あり<br>
						入社後、まずは安全教育を実施します。製造部長が講師となり、工場内での安全管理や作業の基本ルールを学びます。また、社長から給与明細の見方や社会保険料についての説明があり、働く上で必要な知識を身につけます。これらの研修を通じて、安心して仕事に取り組める環境を整えます。
					</dd>
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
					<dd>
						フォークリフト、クレーン、玉掛けなど、業務に必要な資格の取得を会社が支援します。また、品質管理検定については会社負担で受験でき、合格するとお祝い金を支給する制度があります。スキルアップを目指す社員を積極的にサポートします。
					</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>19時間</dd>
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
					<dd>66%</dd>
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
					<dd>1人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						2025年7月30日（月） 10時30分～<br>
						2025年8月6日（水） 10時30分～
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
						代表取締役<br>
						笹邉 紀三子
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
