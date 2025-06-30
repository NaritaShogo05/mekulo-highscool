<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
include_once $company_base . '!data.php';
$current_url = $_SERVER['REQUEST_URI']; //現在のページのURLを表示
$last_segment = basename($current_url);//現在のURLから末尾の職種URLの綴りを取得
$catch_copy = $occupation[$last_segment]['catch_copy'] ?? '職種が見つかりません';//値があるか確認
$name = $occupation[$last_segment]['name'] ?? '不明な職種';
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
<body class="newgrads highschool aceworkers">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="<?= $company_base ?>first.jpg">
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
		エース・ワーカーズの職人技！外壁塗装とシーリング防水！
	</h3>
	<p>
		エース・ワーカーズでは、入社するときに「塗装」か「シーリング防水」どちらかを選んで仕事を始めます。ただ、冬は気温や湿度の影響で乾燥が必要な「塗装」の仕事が少なくなるため、「シーリング防水」の仕事もやります。なので、どちらを選んでも、両方の技術を身につける必要があります。<br>
		1つの道から入り、2つの技術を極める。これが、職人としての成長ルートです。
	</p>
	<h3>外壁塗装って、実は奥が深い！</h3>
	<p>
		ただペンキを塗るだけじゃありません！<br>
		見た目を美しく仕上げるのはもちろんですが、それ以上に大事なのは「建物を守る」ことです。<br>
		まず高圧洗浄で、古い汚れやカビを徹底的に落とします。ここで手を抜けば、どんなに良い塗料を使っても長持ちしません。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<p>
		次に、シーリング防水や下地の処理をし、長持ちする基盤を作ります。<br>
		それから、「下塗り → 中塗り → 仕上げ塗り」と丁寧に塗り重ねていきます。<br>
		塗り方もいろいろで、ローラーやハケ、スプレーガンなどの道具を使い分けます。高い所は長いローラーで塗ったり、足場の上で作業したりすることもあります。
	</p>
	<div class="images">
		<img src="work2.jpg" alt="" class="scene">
		<img src="<?= $company_base ?>second.jpg" alt="" class="scene">
		<img src="work4.jpg" alt="" class="scene">
	</div>
	<p>
		1つ1つの工程を丁寧にやれば、見た目がキレイになるだけではなく、雨や風から建物を守ってくれて、建物が長持ちします！エース・ワーカーズは、こうした工程を絶対に省かない「本気の塗装」をしています。
	</p>
	<div class="images">
		<img src="work5.jpg" alt="" class="scene">
	</div>
	<h3>シーリング防水ってなに？</h3>
	<p>
		建物には、外壁と窓のすき間とか、水まわりのすき間がありますよね。<br>
		そこから水や空気が入らないように、すき間をピタッとふさぎ、雨漏りやひび割れを防ぐのが「シーリング防水」です。
	</p>
	<div class="images">
		<img src="<?= $company_base ?>business1.jpg" alt="" class="scene">
	</div>
	<p>
		使うのはシーリング材と呼ばれる材料で、最初は液体ですが、時間が経つとゴムのような柔らかい素材になります。
	</p>
	<div class="images">
		<img src="work7.jpg" alt="" class="scene">
	</div>
	<p>
		古くなったシーリング材をきれいに取り除き、表面を清掃して乾燥させることで、新しいシーリング材がしっかりくっつきます。また、場所に合ったシーリング材を選ぶことで、工事後のトラブルを防ぐことができます。
	</p>
	<div class="images">
		<img src="<?= $company_base ?>introduce1.jpg" alt="" class="scene">
	</div>
	<p>
		準備ができたら、シーリングガンという専門の道具を使って、すき間に新しいシーリング材を入れていきます。ムラなく、きれいに塗っていくのがポイントです。温度や湿度の条件を確認しながら、シーリング材がしっかり固まるように時間をおきます。<br>
		最後に、表面を平らに整えて、見た目も機能性もバッチリに仕上げます。
	</p>
	<div class="images">
		<img src="<?= $company_base ?>introduce4.jpg" alt="" class="scene">
	</div>
	<p>
		「ただ埋めるのではなく、守るために仕上げる」<br>
		ここにも、確かな技術と責任感が求められます。
	</p>
	<h3>入社後の流れ</h3>
	<p>
		まず入社したら、「養生（ようじょう）」という現場の保護作業から始めます。これは、防水や塗装をする前に周りの物が汚れないように、養生テープでしっかりとカバーする仕事です。きれいに仕上げるためにとても大切な作業です。<br>
		下の写真だと、緑の部分が養生テープでカバーした状態になります。
	</p>
	<div class="images">
		<img src="work10.jpg" alt="" class="scene">
	</div>
	<p>
		同時に、下地の処理や道具の扱いも少しずつ学んでいきます。
	</p>
	<div class="images">
		<img src="work11.jpg" alt="" class="scene">
	</div>
	<p>
		最初からすべて任せることはありません。先輩たちが一つひとつ丁寧に教えます。技術だけでなく、仲間とのチームワークも、仕事には欠かせません。<br>
		やる気とセンスがあれば、3年で一人前。地道に積み上げた技術が、自分の力として現場で光ります。
	</p>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
		<img src="work1.jpg" alt="">
	</li>
	<li>
		<img src="gallery2.jpg" alt="">
	</li>
	<li>
		<img src="work5.jpg" alt="">
	</li>
	<li>
		<img src="work10.jpg" alt="">
	</li>
	<li>
		<img src="<?= $company_base ?>fourth.jpg" alt="">
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
				<img src="hsan.jpg" alt="">
				<hgroup>
					<h3>Hさん</h3>
					<p>
						現場に着いたら、1日の流れを確認してから作業をスタートします。今日の天気、気温、明日の予報までチェックし、ただ言われた通りではなく、「どう進めたら一番きれいに仕上がるか」、「どうすれば納期に間に合うか」。そんなことを自分で考えながら進めていくのが、この仕事の面白さです。<br>
						ひとくちに防水・塗装といっても、仕事内容が現場によりさまざまなので、経験の少ない作業内容にチャレンジできる機会が多いです。そのたびにスキルアップしていけるのが楽しく、技術を向上させるチャンスに恵まれていると感じています。<br>
						現場からは直行直帰なので、帰ったらすぐ“自分の時間”。趣味に没頭するのもよし、のんびりするのもよし。オンとオフがしっかり分けられるのも魅力です。
					</p>
				</hgroup>
			</div>
			<p>Hさん<br>(入社11年目)</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="employee2.jpg" alt="">
				<hgroup>
					<h3>Yさん</h3>
					<p>
						経験が浅い仕事や、初めて経験する作業でも、一から指導してもらえるので安心です。<br>
						「これどうやるの？」って聞けば、先輩たちが丁寧に教えてくれます。<br>
						学びながら技術を高めていけるのがいいところだと思います。また、日々の施工内容についても細かい指示をもらえて、迷わず目の前の作業に集中できます。<br>
						仕事は自宅から現場まで直行直帰、作業着とヘルメット、社用車が1人1台貸与されたりと、福利厚生がしっかりしていて安心です。
					</p>
				</hgroup>
			</div>
			<p>Yさん<br>(入社10年目)</p>
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
					<dd>現場職人</dd>
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
					<dd>6カ月</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>
						〒387-0006<br>
						長野県千曲市大字粟佐1555
					</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>屋代駅から徒歩10分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり（屋内禁煙）</dd>
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
					<dd>日給</dd>
				</div>
				<div>
					<dt>月平均労働日数</dt>
					<dd>22.9日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>206,100円～</dd>
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
					<dd>206,100円</dd>
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
					<dd>固定（月末）</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>
						あり<br>
						2024年度実績：1カ月あたり8.931円～24.732円
					</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>あり　業績等により支給しない場合あり</dd>
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
					<dd>月平均15時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>日</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>
						年末年始休暇・お盆休暇、会社カレンダーによる<br>
						年間休日90日
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
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>
						あり（1年以上）
					</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり（60歳）</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（65歳まで）</dd>
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
						8年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>32歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>新入社員は、先輩社員の指導のもと実務を通して社会人としてや建設業の基本、業務を覚えていきます。</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						あり<br>
						資格所得のための支援制度あり。
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
					<dd>15時間</dd>
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
					<dd>0%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>-</dd>
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
						2025年8月4日（月）10時00分～<br>
						2025年8月5日（火）10時00分～<br>
						<p style="margin-left: 0; padding-left: 0;">※他の日程はお問い合わせください。</p>
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
					<dd>松本</dd>
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
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
<?php include $base . '../footer.php' ?>
</body>
