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
<body class="newgrads highschool sohfu">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="fv.jpg">
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
	<h3>ダクト設置のプロ</h3>
	<p>
		ダクト職人は、県内に約200人しかいない珍しい仕事です。<br>
		一枚の金属板を筒の形に組み立てて、それを現場で繋げていく。簡単そうに聞こえますが、現場ごとにダクトの形も設置方法も違い、同じ作業はひとつもありません。<br>
		設計図を見ながらチームで考えて、試行錯誤しながら形にしていく。「知らない」「わからない」ことにワクワクできる人なら、きっとこの仕事を楽しめるはずです。
	</p>
	<div class="images">
		<img src="../first.jpg" alt="" class="scene">
	</div>
	<h3>職人の技</h3>
	<p>
		ダクト職人は、「腰道具」と呼ばれるさまざまな工具を身につけて作業します。ナラシハンマーやラチェットレンチと呼ばれる工具を使いながら、チームで声を掛け合い、素早くダクトを設置していきます。 
	</p>
	<p>
		取り付けの技術は1on1の個別指導ではなく、周りのみんなで教え合います。昔は「見て覚えろ」と言われることもありましたが、今はしっかり教える環境が整っています。<br>
		3年もすれば仕事の流れがわかり、5年ほどで一人前の職人に。小規模の現場なら、リーダーを任されることもあります。
	</p>
	<div class="images">
		<img src="work2.jpg" alt="" class="scene">
	</div>
	<p>
		また、ダクト職人にはさらなるスキルアップの道もあります。国家資格の取得には10年の実務経験が必要ですが、現場の監督業務の仕事を行うことも可能です。<br>
		「職人として活躍する」「監督としてマネジメントを学ぶ」など、自分の目標に合わせて成長できます。技術を磨き、自分だけのキャリアを築いていきましょう。
	</p>
	<h3>まずはダクト作りから</h3>
	<p>
		入社後は、まず工場内で安全面を学び、作業に必要な道具の使い方を覚えることから始めます。
	</p>
	<div class="images">
		<img src="work3.jpg" alt="" class="scene">
	</div>
	<p>
		ダクト職人の仕事は、取り付けだけではありません。工場で金属板を加工し、ダクトを組み立てる工程も大切な仕事のひとつです。最初は工場で作業を行いながら、ダクトがどのように作られているのかをしっかり学びます。
	</p>
	<div class="images">
		<img src="../firstview.jpg" alt="" class="scene">
	</div>
	<p>
		基礎を身につけたら、実際の現場へ。先輩と一緒に作業をしながら、取り付けの技術を学び、経験を積んでいきます。しっかりとしたサポート体制のもとで、一歩ずつ職人としての力を身につけていきましょう。
	</p>
	<div class="images">
		<img src="work5.jpg" alt="" class="scene">
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
					<img src="gallery2.jpg" alt="">
				</li>
				<li>
					<img src="gallery3.jpg" alt="">
				</li>
				<li>
					<img src="gallery4.jpg" alt="">
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
				<img src="comingsoon.png" alt="">
				<hgroup>
					<h3>工藤さん</h3>
					<p>
						高校は工業科ではなかったので、入社後はすべてが初めての経験でした。今では大きい現場を任せられるようになって、成長を実感しています。<br>
						社員同士の仲が良く、社員旅行も楽しみのひとつです。前回は2泊3日で北海道を満喫しました。
					</p>
				</hgroup>
			</div>
			<p>2013年新卒入社<br>工藤さん</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="comingsoon.png" alt="">
				<hgroup>
					<h3>佐野さん</h3>
					<p>
						今は工場でダクトを作っています。入社4か月で、基本的なダクトは一通り作り方を覚えました作れるようになりました。初めて自分で完成させられたときは、「私にもできるんだ！」とすごく嬉しかったです。今後は、より品質を高めていきたいです。<br>
						社長も社員のみなさんも、気さくで話しかけやすいです。 
					</p>
				</hgroup>
			</div>
			<p>2024年中途入社<br>佐野さん</p>
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
					<dd>現場作業員</dd>
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
					<dd>期間中は日給制</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>
						〒386-2201<br>
						長野県上田市真田町長2411-12
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>上田駅から上田バス菅平線（渋沢線）湯の平バス停から徒歩5分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>会社内に喫煙室を設けています。</dd>
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
					<dd>月給190,000円</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>22.5日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>190,000円</dd>
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
					<dd>190,000円</dd>
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
					<dd>月末</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（上限30,000円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（3.5か月分）</dd>
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
					<dd>月平均6時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>日曜・土曜隔週</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>当社カレンダーによる</dd>
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
					<dd>あり（勤続3年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>60歳</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（70歳まで）</dd>
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
						17.6年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>44.5歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>
						〇雇入時教育<br>
						〇特別教育<br>
						〇技能講習（玉掛け、高所作業車　など）
					</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						〇資格取得支援<br>
						業務に必要な資格の取得費用について、全額補助いたします。
					</dd>
				</div>
				<div>
					<dt>メンター制度の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>キャリアコンサルティング制度の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>社内検定等の有無</dt>
					<dd>
						1級建築板金（ダクト鈑金）<br>
						技能士（実務経験7年以上）
					</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>7時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>15.1日</dd>
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
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>現場作業員</dd>
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
						2025年7月29日（火） 10時30分～、<span class="br">13時30分～</span><br>
						2025年7月31日（木） 10時30分～、<span class="br">13時30分～</span><br>
						2025年8月7日（木） 10時30分～、<span class="br">13時30分～</span><br>
						2025年8月21日（木） 10時30分～、<span class="br">13時30分～</span>
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>書類選考、面接</dd>
				</div>
				<div>
					<dt>選考旅費</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>選考結果通知</dt>
					<dd>面接後5日以内</dd>
				</div>
				<div>
					<dt>選考担当者</dt>
					<dd>
						金子 慎也
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
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
