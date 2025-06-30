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
<?php include $base . '../tracking.php'; ?>
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
		"name": "<?= $job_title ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/<?= $cur_page ?>/"
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
				完璧な図面に仕上げる
			</h3>
			<p>
				「CADオペレーター」と聞くと、なんだか難しそうな印象があるかもしれません。でも実際は、設計者の図面を完璧に仕上げるための、重要なサポート役です。<br>
				まずは設計者が作成した組立図から、より細かい部品図を作成していきます。<br>
				部品は、１つの機械に何百と使われています。とても数が多いので、作成した後のチェックが欠かせません。
			</p>
			<div class="images">
				<img src="../contents03.jpg" alt="" class="scene">
			</div>
			<p>
			図面に漏れがないか、数字や形状に矛盾がないかチェックする。そうした細かい確認が、現場でのスムーズな組み立てや完成品の精度に直結しています。<br><br>
			他にも、PC上での図面の整理やエクセルを使った表の作成など、設計業務を支える大切な役割を担っています。つまり、機械設計者のサポート役として活躍するポジションです。<br>
			機械科出身でなくても、新しいことにチャレンジをすることが好きな方、納得しながら理屈を理解して行動できる方は大歓迎です！
			</p>
			<div class="images">
				<img src="cad01.jpg" alt="" class="scene">
				<img src="cad02.jpg" alt="" class="scene">
			</div>
			<h3>
				機械設計が初めてでも安心！
			</h3>
			<p>
				入社後は、「機械設計教室」という1カ月間の社内研修があります。<br>
				会長自らが講師となり、図面の基礎やCADの操作方法、部品の名称や役割などを、丁寧に教えてくださいます。<br>
				その後は、先輩がついてくれるOJT（実務研修）へ。部品図の作成や図面の整理、エクセルを使った表の作成など、先輩のすぐそばで実務を学びます。<br>
				使用するCADソフトは、パソコンの基本的な操作（マウスやキーボードの扱い）ができれば問題ありません。<br>
				CADオペレーターに必要なのは、観察力や注意力。細かいところに気付ける人は、どんどん成長していけるでしょう。
			</p>
			<h3>
				 設計者としての道も、ここから始まる
			</h3>
			<p>
				CADオペレーターとして設計補助の経験を積んでいくと、少しずつ「どうしてこの形なんだろう？」「他の案もあるのでは？」と、設計の根本に興味が湧いてくるかもしれません。<br>
				そんなときは、CADオペレーターの仕事から、より難しい図面を描く仕事へキャリアアップすることも可能です。<br>
				実際に当社には、CADオペレーターから始めて、構想設計や基本設計を担う設計者へと成長した社員もいます。
			</p>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
						<li>
							<img src="cad03.jpg" alt="">
						</li>
						<li>
							<img src="cad04.jpg" alt="">
						</li>
						<li>
							<img src="cad05.jpg" alt="">
						</li>
						<li>
							<img src="cad06.jpg" alt="">
						</li>
						<li>
							<img src="cad07.jpg" alt="">
						</li>
					</ul>
					<div class="button left_btn">&lt;</div>
		<div class="button right_btn">&gt;</div>
				</div>
			</div>
		</section>
		<section class="g" id="employee_introduction">
			<?php /*
	<h2>社員紹介</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="firstview.jpg" alt="">
				<hgroup>
					<h3>浦木さん</h3>
					<p>
						製造業からいろいろな業種に転職しましたが、また製造業に戻ってきました。わからないことを相談し合いながら解決する楽しさもあります。<br>
						バイクが好きなので、休みの日は仲間と一緒に旅行することが多いです。
					</p>
				</hgroup>
			</div>
			<p>2014年中途入社<br>浦木さん</p>
		</li>
	</ul>
</section>
*/?>
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
					<dd>機械設計補助</dd>
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
					<dd>〒3850051<br>
					長野県佐久市中込３３６８−３</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>北中込駅から車で2分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>建物内喫煙不可</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋外に喫煙所設置</dd>
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
					<dd>169,000円～（平均226,000円）</dd>
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
					<dd>169,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>皆勤手当（16,000円～）</dd>
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
					<dt>前年度の月平均所定労働時間</dt>
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
						2025年7月29日（火） 14時00分～<br>
						2025年8月5日（火） 14時00分～
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
