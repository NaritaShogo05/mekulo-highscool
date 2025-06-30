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
		"name": "<?= $job_title ?>",
		"item": "https://works.mekulo.jp/hs/<?= $co['slug'] ?>/<?= $cur_page ?>/"
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
				塗装で決まる、木製品の仕上がり
			</h3>
			<p>
				サッシや建具、家具の見た目や手触りを決めるのが、最後の仕上げとなる「塗装」の工程。
				塗装職人は、色やツヤを整え、木製品に命を吹き込む大切な役割です。
			</p>
			<div class="images">
				<img src="tosou01.jpg" alt="" class="scene">
			</div>
			<p>
				少数精鋭の職人たちは、真田工場と芳田工場を行き来し、連携して作業を進めています。
			</p>
			<div class="images">
				<img src="tosou02.jpg" alt="" class="scene">
			</div>
			<p>
				使う塗料はウレタンやオイル、指定された塗料などさまざま。<br>
				スプレーやはけ、ローラーといった道具を使い分け、塗りやすさや仕上げの難しさも製品によって異なります。
			</p>
			<div class="images">
				<img src="tosou03.jpg" alt="" class="scene">
				<img src="tosou04.jpg" alt="" class="scene">
			</div>
			<p>
				設計士さんや建築業者さんと話しながら、納期に合わせて作業の順番を組み立てます。
				塗ったあとに乾かす時間も必要なので、その合間に別の製品を塗るなど、段取りも大切です。
			</p>
			<h3>
				仕事の流れ(スプレー塗装)
			</h3>
			<p>
				スプレー塗装は空気中に塗料が飛ぶため、安全に気をつけて丁寧に仕上げることが大切。防毒マスクとエプロンを着け、ホコリや粉を吸い取る集塵機(しゅうじんき)のある専用の部屋で作業します。<br>	
				塗料は工具でしっかり混ぜ、スプレーに入れて吹き付けます。
			</p>
			<div class="images">
				<img src="tosou05.jpg" alt="" class="scene">
				<img src="tosou06.jpg" alt="" class="scene">
			</div>
			<p>
				乾かした後、表面のざらつきをペーパーで削り、削ったカスを吹き飛ばしてから重ね塗りします。ムラを防ぎ、ざらつきを整えるため、この工程を2〜3回繰り返します。
			</p>
			<div class="images">
				<img src="tosou07.jpg" alt="" class="scene">
				<img src="tosou08.jpg" alt="" class="scene">
				<img src="tosou09.jpg" alt="" class="scene">
			</div>
			<p>
				時間がかかる作業も多く、じっくり丁寧に進めることが求められます。仕上がりを手で確かめながら、念入りに仕上げます。全ての工程を終えたら、しっかり乾燥させて完成です。
			</p>
			<h3>
				はけを握るようになるまで
			</h3>
			<p>
				塗装の現場は少数精鋭。だからこそ、まわりが自然と気にかけてくれる環境があり、困ったときにはすぐに声をかけやすい雰囲気があります。
			</p>
			<div class="images">
				<img src="tosou10.jpg" alt="" class="scene">
				<img src="tosou11.jpg" alt="" class="scene">
			</div>
			<p>
				はじめは簡単な作業からスタート。1〜2か月ほどで、はけを握ることができるようになります。この仕事は、見て覚え、やって覚えていくことの積み重ね。一人前になるには、少しずつ経験を積み、場数を踏んでいくことが大切です。
			</p>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
						<li>
							<img src="tosou01.jpg" alt="">
						</li>
						<li>
							<img src="gallery01.jpg" alt="">
						</li>
						<li>
							<img src="gallery02.jpg" alt="">
						</li>
						<li>
							<img src="tosou06.jpg" alt="">
						</li>
						<li>
							<img src="tosou10.jpg" alt="">
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
					<h3>小林さん(2007年入社)</h3>
					<p>
						もともとは建築塗装の仕事をしていましたが、ご縁があって今の会社に入社しました。<br>
                        仕事で難しいのは、お客さまのイメージと実際の仕上がりをうまくすり合わせること。特に色味は好みによって細かく変わるので、希望に合うように調整する工夫が欠かせません。そのぶん、仕上がったものを見て喜んでもらえたときは、やっていてよかったと感じます。<br>
                        一人前になるには、向き不向きよりも経験が大事。下積みを重ねていく中で、少しずつ身についていくものだと思っています。<br>
                        休日は高校のサッカー部のコーチとして活動しています。生徒たちと一緒に体を動かすことが良い気分転換です。
		            </p>
				</hgroup>
			</div>
			<p>塗装職人 小林さん</p>
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
					<dd>木製建具、家具、木製サッシ製造</dd>
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
					<dd>あり(3カ月間)</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒3860151<br>
					長野県上田市芳田１０５２（芳田工場）及び<br>
                    上田市真田町長５５８９（真田工場）</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>
						真田工場：バス停「幸村の郷」から徒歩5分<br>
						芳田工場：「バス停」 漆戸から徒歩5分
					</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>喫煙室設置</dd>
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
					<dd>普通自動車運転免許 必須	</dd>
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
					<dd>180,000円</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>180,000円～</dd>
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
					<dd>実費支給（上限 18,000円）</dd>
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
					<dd>8時00分〜17時15分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均10時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制（土日・他）</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>
						お盆、年末年始等<br>
						祝日は出勤日となります。
					</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、雇用保険、労災保険、財形保険</dd>
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
					<dd>あり（定年年齢60歳）</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限年齢66歳）</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>あり（上限年齢66歳）</dd>
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
					<dd>前年度:0人、2年度前：0人、3年度前：1人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：1人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：0人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						 12.5年<br>
						※創業以降の実績
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>42.8歳</dd>
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
						あり<br>
						技能検定等資格取得支援
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
					<dd>6.6時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>12.8日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：1人、男性：0人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>2名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>建具製造業</dd>
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
						2025年8月4日（月）10時00分～<br>
						2025年8月5日（火）10時00分～<br>
						※その他の日程は相談して下さい。
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接(1回)</dd>
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
						取締役常務<br>
						秋山 隆太郎
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
