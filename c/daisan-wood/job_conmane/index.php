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
		責任ある段取りが、現場を支えている
	</h3>
	<p>
		第三木材では、木材を使った建築工事にも携わっています。<br>
		「施工管理」の主な仕事は、工事現場での工事が安全かつスムーズに進むように計画を立て、職人さんや作業内容をまとめることです。
	</p>
	<div class="images">
		<img src="../pc.jpg" alt="" class="scene">
	</div>
	<p>
		担当するのは、東信地域の別荘や店舗、市役所や保育園などの公共施設。ひとつひとつの建物がオーダーメイドで、マニュアル通りにいかないからこそ、細かい管理と調整が求められます。<br>
		工程、品質、コスト、安全──管理することはたくさんありますが、すべては「計画通り」に完成させるための大切な準備。現場の流れを整える“まとめ役”として、責任ある立場で現場を支えていく仕事です。
	</p>
	<div class="images">
		<img src="../sekou.jpg" alt="" class="scene">
	</div>
	<h3>
		繰り返しの中で、段取りの精度を磨く
	</h3>
	<p>
		入社後は先輩の現場について回りながら、図面の読み方や現場の流れを少しずつ学びます。<br>
		足りない材料を現場に届けに行っただけのつもりが、職人さんから「ここはこれで合ってる？」と聞かれて焦ることも。でも、そんな経験が、現場を見る力につながっていきます。
	</p>
	<div class="images">
		<img src="../first.jpg" alt="" class="scene">
	</div>
	<p>
		現場では建築工事だけでなく、電気屋さんの配線や水道屋さんの配管工事、材料の納品スケジュールなど、多くの要素が複雑に絡み合います。それらを調整し、計画通りに現場が動くように調整するのが、施工管理の一番大切な仕事。「段取り八分、仕事二分」という言葉があるくらい、段取りがうまくいけば、現場もスムーズに動いていきます。
	</p>
	<h3>
		時間をかけて、信頼される“まとめ役”へ
	</h3>
	<p>
		実際に現場を任されるまでには、3～5年ほどの時間がかかります。<br>
		その間、現場の段取り、職人さんや材料の手配、安全管理などをひとつずつ覚えていき、着実に力をつけていきます。<br>
		自分が組んだ予定どおりに、たくさんの職人さんたちが動いて、建物が形になっていく。その責任の重さにこそ、この仕事のやりがいがあります。<br>
		建築科で学んでいる人、図面を読む力を活かしたい人を、特に歓迎します！<br>
		「計画通り」がなによりうれしい――そんなあなたを待っています。
	</p>
	<div class="images">
	</div>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
		<img src="" alt="">
	</li>
	<li>
		<img src="" alt="">
	</li>
	<li>
		<img src="" alt="">
	</li>
	<li>
		<img src="" alt="">
	</li>
	<li>
		<img src="" alt="">
	</li>
		</ul>
		<div class="button left_btn">&lt;</div>
		<div class="button right_btn">&gt;</div>
		</div>
	</div>
</section>
<!--
<section class="g" id="employee_introduction">
	<h2>社員紹介</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="employee1.jpg" alt="">
				<hgroup>
					<h3>T・Kさん</h3>
					<p>
						車が好きなので、休みの日は友達とドライブをしたり、洗車をしたりすることが多いです。暇なら仕事をした方が、1日が早く終わって良いと考えているので、有給は使わず、病気やけがで会社に行けなくなったときのために取ってあります。
					</p>
				</hgroup>
			</div>
			<p>2019年中途入社<br>T・Kさん</p>
		</li>
	</ul>
</section>
-->
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
					<dd>建築施工管理</dd>
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
					<dd>3か月</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>
						〒386-0407
						長野県東御市加沢201-5
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>しなの鉄道 滋野駅から徒歩30分</dd>
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
					<dd>20.8日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>高卒以上188,000～</dd>
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
					<dd>188,000円</dd>
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
					<dd>毎月 15日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（月額20,000円まで）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり（新卒者の前年度実績：1,000円）</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回 （新卒者の前年度実績：3万円～15万円）</dd>
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
					<dd>月1時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>日・祝</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>
						年間休日115日<br>
						当社カレンダーによる<br>
						土曜日は月3～4日程度休み<br>
						年末年始休暇（8日程度）<br>
						夏季休暇（5日程度）
					</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>雇用保険、労災保険、健康保険、厚生年金保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続2年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり（一律65歳）</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり（一律65歳）</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限70歳まで）</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>あり（上限75歳まで）</dd>
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
					<dd>前年度:1人、2年度前：1人、3年度前：0人</dd>
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
					<dd>前年度:1人、2年度前：1人、3年度前：0人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						10.5年
					</dd>
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
						入社時：安全衛生教育
						入社後：OJT研修、外部研修（配属先により内容は異なる）
					</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり<br>
						業務に関する研修・講習・セミナー（費用は会社負担）<br>
						資格取得支援（費用を会社が補助）		
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd>
						あり<br>
						新入社員導入研修<br>
						月一回の面談、半年ごとの面談、年一回の面談
					</dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>3.5時間</dd>
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
					<dd>女性：0人、男性：0人</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>2.8%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>建築施工管理</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>1名</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接、適性検査</dd>
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
						総務部<br>
						宮下
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
                            <img src="<?= $company_base . $prop['image'] ?>" alt="" style="aspect-ratio: 3 / 2; object-fit: cover;">
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
