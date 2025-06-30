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
				イメージを図面にする仕事
			</h3>
			<p>
				CADという設計ソフトを使い、家具や建具の大きさや形を図にし、職人さんが使う図面を作成します。<br>
				中でも家具は立体的なので、3Dで完成形をイメージすることが大切です。
			</p>
			<div class="images">
				<img src="sekkei01.jpg" alt="" class="scene">
			</div>
			<p>
				ドアがスッと開き、棚が使いやすい高さにあるのは、設計の細かい工夫のおかげ。家のつくりや部屋の広さに合わせて、サイズや取り付け位置を考え、空間に合う形を設計します。<br>
                設計の仕事は「こんなものがほしい！」というプランをもとに、まず空間のイメージを簡単な図にして提案するところから始まります。
                そのあと、取り付ける場所の壁や枠のサイズをもとに、お客さんや現場監督と打ち合わせを重ね、細かい部分まで調整していきます。
			</p>
			<div class="images">
				<img src="sekkei02.jpg" alt="" class="scene">
			</div>
			<p>
			     自分で現場に行ってサイズを測ることもありますが、行けないときは職人さんが測った寸法をもとに図面を作ります。取り付け場所のサイズや形をイメージして図面を作る作業が、特に難しい部分です。
			</p>
			<div class="images">
				<img src="sekkei03.jpg" alt="" class="scene">
			</div>
			<p>
				大きさや種類を相談し、サンプルで色や手ざわりを確かめながら、お客さんのイメージに近づける工夫をします。また、細かい寸法の調整や隙間の取り方にも注意が必要です。<br>
                この仕事の魅力は、自分が描いた図面が実際の建具や家具として形になること。自分のデザインがみんなの生活を便利にしていると考えると、ちょっと嬉しいと思いませんか？
			</p>
			<h3>
				一日の流れ
			</h3>
			<p>
				朝、会社に来たらまずはチームでその日の仕事を確認。忙しいときは、みんなで分担しながら進めます。
			</p>
			<div class="images">
				<img src="sekkei04.jpg" alt="" class="scene">
			</div>
			<p>
				自分の担当の図面を書いたり、お客さんや現場監督と打ち合わせに行ったりもします。設計室で一日中、集中して図面を描いていることもあります。
                職人さんから「この材料が足りない！」と頼まれたときには、発注も行います。
                ずっとパソコンの画面を見続けるのは疲れるので、少し立ち上がって体を動かしたり、気分転換をしたりしながら作業を続けます。
			</p>
			<div class="images">
				<img src="first_view.jpg" alt="" class="scene">
			</div>
			<p>
				まずはCADの操作を覚えるところからスタート。だんだんと経験を積むと、お客さんへのアイデアの提案や、使う木の種類や色、材料を決める仕事も任されるようになります。
			</p>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
						<li>
							<img src="sekkei01.jpg" alt="">
						</li>
						<li>
							<img src="gallery01.jpg" alt="">
						</li>
						<li>
							<img src="sekkei02.jpg" alt="">
						</li>
						<li>
							<img src="sekkei04.jpg" alt="">
						</li>
						<li>
							<img src="gallery02.jpg" alt="">
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
				<img src="yamagishi.jpg" alt="">
				<hgroup>
					<h3>山岸さん(2023年入社)</h3>
					<p>
						もともと建設系の会社で働いていました。<br>設計の仕事にもっと関わりたかったことと、家の中の空間づくりに興味があったのでこの会社に入りました。<br>
                        入社して約1年、今は設計の仕事をしながら、実物を現場で見て勉強しています。
                        家具の設計は特に難しいです。斜めの形の家具を担当したとき、板の長さが中途半端になってしまい、うまく組み合わせるのが大変でした。でも、書いた図面が形になり、現場に取り付けられるのを見ると、実際に使われる実感が湧いてわくわくします。<br>
                        印象に残っているのは、図書館のキッズルームで使う家具の設計です。曲線の部分があり、直線とは違って正確なサイズや形を図面にするのが難しく、細かい調整が必要でした。<br>
                        休日は外に出ることが多く、バドミントンやマラソンなど、スポーツを楽しんでリフレッシュしています。
					</p>
				</hgroup>
			</div>
			<p>設計職 山岸さん</p>
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
