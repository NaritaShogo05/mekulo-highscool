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
<body class="newgrads highschool kitazawa-doken">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="../second.jpg">
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
		工事現場をスムーズに進める指揮官！
	</h3>
	<p>
		土木工事を行うとき、実際に作業をするのは重機のオペレーターや土木作業員さんたちです。でも、その工事がスムーズに進むように全体を管理するのが「土木施工管理」の仕事です。<br>
		文化祭の実行委員長を思い浮かべてみてください。みんなの作業の様子を見て回り、把握して指示を出すことで、文化祭が成功します。こうした人がいないと、文化祭の準備が間に合わなくなったり、足りないものが出てきたりするかもしれません。施工管理も同じです。現場全体をまとめ、工事がスムーズに進むように職人さんに指示を出すのが役割です。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
		<img src="work2.jpg" alt="" class="scene">
	</div>
	<p>
		まず、設計図や完成予定日をもとに、どの作業をいつまでに終わらせるかの計画を立てて書類にまとめます。大きな工事だと、ファイル一冊分になることもあります。
	</p>
	<div class="images">
		<img src="../job_kentikusekou/work3.jpg" alt="" class="scene">
		<img src="../job_kentikusekou/work4.jpg" alt="" class="scene">
	</div>
	<p>
		その計画に合わせて、職人さんに作業の連絡をしたり、必要な材料を発注したりします。工事が始まる前には、作業の拠点となる「現場事務所」という仮設の建物を準備するのも施工管理の仕事です。現場事務所は、作業員さんとの朝礼や休憩にも使われます。
	</p>
	<div class="images">
		<img src="work5.jpg" alt="" class="scene">
		<img src="work6.jpg" alt="" class="scene">
	</div>
	<p>
		工事が始まったら、図面通りに、計画通りに工事が進んでいるかをチェックします。予定通りにいかないこともあるので、そんなときは調整が必要です。
	</p>
	<div class="images">
		<img src="work7.jpg" alt="" class="scene">
		<img src="../introduce1.jpg" alt="" class="scene">
		<img src="work9.jpg" alt="" class="scene">
	</div>
	<p>
		施工管理の役割は、「実際につくる人」ではなく「把握してまとめる人」。工事現場を支え、成功へ導く工事の指揮官です！
	</p>
	<h3>
		自然を相手にする
	</h3>
	<p>
		私たちは、橋や道路、川などの土木工事の施工管理を行っています。特に県や市から依頼される公共工事が多く、自然を相手にするダイナミックな工事が特徴です。
	</p>
	<div class="images">
		<img src="../firstview.jpg" alt="" class="scene">
		<img src="../first.jpg" alt="" class="scene">
	</div>
	<p>
		土木工事は天気に大きく左右されるので、スケジュール調整が一番重要な仕事です。雨が降ると作業ができなくなったり、大雨の後は流れ込んだ土砂をどかす復旧作業が必要になったりすることもあります。そんな状況でも、納期に間に合うように作業員の増員を検討したり、資材の納品スケジュールを調整したりしながら進めていきます。
	</p>
	<div class="images">
		<img src="work12.jpg" alt="" class="scene">
		<img src="work13.jpg" alt="" class="scene">
	</div>
	<p>
		地域のインフラを支え、“当たり前”の生活を守る。そんな仕事をできるのが、土木施工管理です。
	</p>
	<h3>
		資格取得を目指す
	</h3>
	<p>
		施工管理をするには、『施工管理技士』と呼ばれる国家資格が必要になります。北澤土建では、入社後に資格を取得できるように会社全体でサポートしています。<br>
		まずは、先輩と一緒に現場で仕事を学びながら経験を積んでいきます。最初は先輩のお手伝いから始めて、仕事の流れを覚えていきます。<br>
	</p>
	<p>
		上司や先輩、周りの職人さんたちも優しく教えてくれるので、安心してスキルを身につけてください。
	</p>
	<div class="images">
		<img src="work10.jpg" alt="" class="scene">
	</div>
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
					<h3>金澤さん</h3>
					<p>
						北澤土建のことは求人票で知りました。高校生のときは「とにかく給料がいいところ！」しか考えていなかったです(笑)<br>
						土木工事はとにかく天候に左右される仕事です。今は道路工事を担当していますが、雨が降ると作業ができなくなることもあります。そんなときは、作業員さんとのコミュニケーションが大切です。「復旧作業にどのくらい時間がかかるか」「どこまでなら進められるか」などを確認しながら、計画を立て直します。<br>
						大変なことも多いですが、その分、完成した時の達成感は格別です！<br>
						以前は土曜出勤もありましたが、今はほとんど休みになったので、プライベートの時間もしっかり確保できます。
					</p>
				</hgroup>
			</div>
			<p>1995年新卒入社<br>金澤さん</p>
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
					<dd>施工管理（土木）</dd>
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
					<dd>なし</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒389-0502<br>
					長野県上田市武石沖471-1</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>-</dd>
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
					<dd>210,000円～</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>現場手当（20,000円）</dd>
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
					<dd>210,000円</dd>
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
					<dd>-</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（上限なし）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>年1回</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（2.5か月分）</dd>
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
					<dd>月平均10時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制（土日・祝日・夏季休暇）</dd>
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
					<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>企業年金基金</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり（65歳）</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>-</dd>
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
						17年<br>
						※創業以降の実績
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>48歳</dd>
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
						仕事に必要な資格について、取得費用を全額補助いたします。
						〇各種講習会への参加<br>
						協会などが主催する「1級土木施工管理試験の講習」「ドローンの操縦方法」など。
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
					<dd>建設業</dd>
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
						2025年7月28日（月）10時00分～<br>
						2025年7月30日（水）10時00分～<br>
						2025年8月4日（月）10時00分～<br>
						2025年8月6日（水）10時00分～<br>
						2025年8月8日（金）10時00分～
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
						代表取締役社長<br>
						北澤隆洋
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
