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
    <img alt="" class="fv_image" src="work4.jpg">
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
		木材加工ってなに？
	</h3>
	<p>
		「木材加工」と聞いて、ノコギリで木を切るような作業を思い浮かべた人も多いかもしれません。<br>
		ですが、この仕事の本質は“木を読むこと”です。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<p>
		木材はすべて同じように見えて、実はそれぞれ違った“クセ”があります。<br>
		乾燥で縮む木、湿気で反る木、節が多い木。1本1本性質が違うので、それを読み取って加工方法を変える必要があるのです。<br>
		たとえば、「この木は切ったあと右に反りそうだから、少し左寄りに切っておこう」。そんなふうに、加工後の変化まで先読みして微調整を行なう。まさに、観察と予測の力が問われる仕事です。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<p>
		また、加工といっても、単純な切断だけではありません。<br>
		高温のボイラーを使った乾燥処理や、耐久性を高めるための防腐加工も行なっており、扱う工程も幅広いのが特徴です。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<p>
		乾燥処理ひとつとっても、木材が均等に乾くように、空気の通り道を考えて積み上げ方を工夫しています。
	</p>
	<h3>
		最初は手作業から、ゆっくり技術を身につける
	</h3>
	<p>
		入社後すぐに機械を動かすのではなく、まずは木の特性を手で感じるための作業から始めます。<br>
		たとえば、補修作業。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<p>
		機械で加工すると、木材の節が取れたり、ヒビが入ったりします。危ないだけでなく見た目も良くないので、接着剤とおがくずを使って隙間を埋めていきます。<br>
		乾いたら余分な部分をヘラで削り、サンドペーパーでなめらかに整えていきます。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<p>
		作業に慣れてきたら、先輩と2人1組で加工機の操作を担当します。刃物の種類や角度、当たり具合などを、木の種類と状態に合わせて調整していきます。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<p>
		機械の操作といっても、実は最も職人技が求められる部分。ベテランでも、試行錯誤の連続です。
	</p>
	<h3>
		好奇心とこだわりを形に出来る場所
	</h3>
	<p>
		木材加工の世界に“ゴール”はありません。どこまで突き詰めるかは、自分次第。<br>
		基本的な仕事を覚えるまでは1～2年。その後は「刃物の調整を極めたい」「木のクセを見極めたい」など、それぞれの“職人の道”を歩んでいきます。
	</p>
	<div class="images">
		<img src="work2.jpg" alt="" class="scene">
		<img src="work3.jpg" alt="" class="scene">
	</div>
	<p>
		休憩時間には、小さな棚を作ったり、家族のために机を作ったり。そんな時間を楽しんでいる社員も少なくありません。<br>
		自分の手で作るのが好き、という気持ちがある人なら、きっとこの仕事に夢中になれるはずです。
	</p>
	<div class="images">
		<img src="work2.jpg" alt="" class="scene">
		<img src="work3.jpg" alt="" class="scene">
	</div>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
				<img src="gallery1.jpg" alt="">
			</li>
			<li>
				<img src="work7.jpg" alt="">
			</li>
			<li>
				<img src="work1.jpg" alt="">
			</li>
			<li>
				<img src="work6.jpg" alt="">
			</li>
			<li>
				<img src="gallery5.jpg" alt="">
			</li>
			<li>
				<img src="gallery6.jpg" alt="">
			</li>
			<li>
				<img src="gallery7.jpg" alt="">
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
				<img src="employee1.jpg" alt="" style="    object-fit: contain;">
				<hgroup>
					<h3>K・Mさん</h3>
					<p>
						休日は、友達とどこか遊びに行ったり、家でSwitchやPlayStationといったゲームをやったりすることがほとんどです。夜勤の週は土曜日の朝８～９時ぐらいに帰宅するので、１日寝て過ごして、日曜日に遊んでいます。体調不良になったときに有給がないと困るので、考えながら取得するようにしています。
					</p>
				</hgroup>
			</div>
			<p>2022年新卒入社<br>K・Mさん</p>
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
					<dd>金属加工</dd>
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
						長野県上田市長瀬１０５０
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>上田丸子線　上長瀬駅から徒歩15分</dd>
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
					<dd>高卒以上170,000～　1か月160時間勤務の場合、残業代別</dd>
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
					<dd>170,000円</dd>
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
					<dd>毎月　20日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（月額18,000円まで）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり（新卒者の前年度実績）3%</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回 4.5ヶ月分</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時20分〜17時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月20時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制</dd>
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
					<dd>厚生年金保険、健康保険、財形保険、雇用保険、労災保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>厚生年金基金</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続3年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり（一律60歳）</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり（一律60歳）</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限65歳まで）</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>あり（上限70歳まで）</dd>
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
					<dd>前年度:6人、2年度前：5人、3年度前：5人</dd>
				</div>
				<div>
					<dt>直近3年間の新卒者等離職者数</dt>
					<dd>前年度:2人、2年度前：1人、3年度前：2人</dd>
				</div>
				<div>
					<dt>男性の新卒者等採用数</dt>
					<dd>前年度:6人、2年度前：2人、3年度前：2人</dd>
				</div>
				<div>
					<dt>女性の新卒者等採用数</dt>
					<dd>前年度:0人、2年度前：3人、3年度前：3人</dd>
				</div>
				<div>
					<dt>平均継続勤務年数</dt>
					<dd>
						10年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>37歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>
						外部機関による研修・社内研修・メンタルヘルス教育・得意先、関連会社の見学
					</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり<br>
						通信教育費用を会社で負担
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
					<dd>28時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>10日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：2人、男性：1人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>女性：2人、男性：3人</dd>
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
					<dd>製造業</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>2名</dd>
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
					<dd>あり</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後7日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						総務部<br>
						吉池一樹
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
