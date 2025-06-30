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
$title = $name . ' - ' . $co['company_name'] . '株式会社綿谷製作所の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$description = $meta_desc;
$canonical_url = 'https://works.mekulo.jp/hs/' . $co['slug'] . '/' . $last_segment . '/';
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
		機械を使い分ける
	</h3>
	<p>
		金属の塊を、図面通りの形に削り出す──それが、私たちの仕事です。
	</p><br>
    <p>
		使うのは、「工作機械」と呼ばれる加工用の機械。工場には23台もの機械が並んでいて、それぞれの機械に担当者がついています。
	</p>
	<div class="images">
		<img src="contents01.jpg" alt="" class="scene">
	</div>
	<p>
		中でもよく使うのが、「NC旋盤」という自動加工機。プログラムを入力すると15分ほど自動で動き、部品を正確に加工してくれます。<br>
        機械が動いている間は、機械の動きに異常がないかチェックしたり、次に加工する材料の洗浄を行ったりします。
	</p>
	<div class="images">
		<img src="contents02.jpg" alt="" class="scene">
	</div>
	<p>
		一方で、1つだけを素早く仕上げたいときは、自分で操作する「汎用旋盤」の出番。自分でハンドルを回して加工するので、速くて自由度が高いのが特徴です。<br>
        こんな風に、製品や数量に合わせて機械を使い分けるのも、必要な技術のひとつです。
	</p>
	<h3>
		機械の“プログラム”って何？
	</h3>
	<p>
		機械を正しく動かすためには、「どこをどう削るか」「どれくらいの速さで動かすか」などを細かく指示する“プログラム”が必要です。
	</p>
	<div class="images">
		<img src="contents04.jpg" alt="" class="scene">
	</div>
	<p>
		綿谷製作所には、自社で作った「マクロプログラム」という仕組みがあり、必要な数値を入れるだけで機械を動かせるようになっています。<br>
        最初は資料を見ながら、どこの数値を変えるとどうなるのか、先輩と一緒に機械を動かしながら練習していきます。
	</p>
    <h3>
		精度を追求する
	</h3>
	<p>
		加工の仕事で一番大切なのは、「公差（こうさ）」と呼ばれる決まりを守ることです。これは、作る部品が図面からどれくらいのズレまで許されるか、というルールです。<br>
        たとえば「0.001ミリ以内の誤差まで許容」といった感じで、とても細かい世界。ノギスやマイクロメーターという検査器具を使ってサイズを確認し、検査に通ったら次の工程へ。自分の加工した部品が先へ進んでいく瞬間は、何度経験しても気持ちが引き締まります。
	</p>
	<div class="images grid-images">
		<img src="contents05.jpg" alt="" class="scene">
		<img src="contents06.jpg" alt="" class="scene">
		<img src="contents07.jpg" alt="" class="scene">
	</div>
	<h3>
		ダイス工場
	</h3>
	<p>
		本社から車で5分ほどの場所にある「ダイス工場」では、ネジを作るための特殊な金型、「転造ダイス」を作っています。この金型で作られたネジはとても強く、大手企業の製品にも使われています。
	</p>
	<div class="images grid-images">
		<img src="daisu2.jpg" alt="" class="scene">
		<img src="daisu5.jpg" alt="" class="scene">
		<img src="daisu.jpg" alt="" class="scene">
		<img src="daisu3.jpg" alt="" class="scene">
	</div>
	<p>
		本社とは使っている機械が違うので、どんなところが違うのか、実際に経験してみてください。
	</p>
	<h3>
		簡単な作業からステップアップ！
	</h3>
	<p>
		入社後は、まず材料を機械にセットする「段取り」からはじめて、図面の読み方やプログラムの組み方も少しずつ覚えていきます。学校の勉強と違い、最初は戸惑うこともあるかもしれません。でも、先輩が丁寧に教えてくれるので安心してください。
	</p>
	<div class="images">
		<img src="contents08.jpg" alt="" class="scene">
	</div>
	<p>
	    1か月もすれば図面の基本がわかるようになり、1年ほどで穴あけなどの難しい加工にも挑戦することができます。<br>
        機械をマスターするには、10年かかるとも言われています。<br>
        その道のりこそが、この仕事の醍醐味かもしれません。じっくりコツコツと、技術を磨いていきましょう。
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
	<li>
		<img src="gallery10.jpg" alt="">
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
				<img src="miyashita.jpg" alt="">
				<hgroup>
					<h3>宮下さん</h3>
					<p>
						前の会社でも製造の仕事をしていましたが、スキルアップできる環境ではなくて…。もっと成長できる場所を探していたときに、綿谷製作所を見つけました。<br>
                        見学に来たときにびっくりしたのが、見たこともない機械がいっぱいあったこと。「これは絶対に自分のためになる！」と思って、入社を決めました。<br>
                        仕事の日は集中して、休みの日は畑でリフレッシュしています。大根などの野菜を育てていて、最近は肥料を入れたりしています。土いじりも、けっこう奥が深くて面白いんですよ。
                    </p>
				</hgroup>
			</div>
			<p>入社18年目<br>宮下さん</p>
		</li>
	</ul>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="akanuma.jpg" alt="">
				<hgroup>
					<h3>赤沼さん</h3>
					<p>
						入社後は電気組立や検査の仕事をしていましたが、自分の思っていた仕事と違ったので、上司に相談して部署を変えてもらいました。常に手を動かしていたい性格なので、ずっと動いている加工に変えてもらったんです。<br>
                        製造の経験はありましたが、工作機械を動かすのは初めてでした。加工するものによって条件が違うので、覚えるのは大変です。でも、加工は自分がどれだけ仕事したのかが目に見えるので、それがやりがいに繋がっています。<br>
                        休日はほぼ家事ですね（笑）主婦のような生活をしていて、彼女のお弁当も作っています。でも、こんな暮らしも悪くないなって思っています。
                    </p>
				</hgroup>
			</div>
			<p>入社5年目<br>赤沼さん</p>
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
					<dd>加工(マシニング・ダイス)</dd>
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
					<dd>〒3860404<br>
					長野県上田市上丸子1082</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>上田駅から車で20分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>-</dd>
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
					<dd>21日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>170,000円～</dd>
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
					<dd>-</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>皆勤手当（3,000円～）</dd>
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
					<dd>あり（上限なし）</dd>
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
					<dd>8時10分〜17時15分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均20時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制（土日・祝日・他）</dd>
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
					<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
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
						10年<br>
						※創業以降の実績
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>50歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						〇資格取得支援<br>
						業務に関係するの資格取得にかかる費用について、会社承認の上で、100%補助を行っています。
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
					<dd>20時間</dd>
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
						随時開催
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
					<dd>面接後５日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						専務取締役<br>
						内藤
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
<?php //include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
