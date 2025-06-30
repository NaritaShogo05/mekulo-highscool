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
		"name": "<?= $name ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/<?= $last_segment ?>/"
	}]
}
</script>
</head>
<body class="newgrads highschool">
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
		太陽のエネルギーを「ためて、使う」未来のインフラをつくる仕事
	</h3>
	<p>
		株式会社人間電力（野村屋ホールディングス）は、太陽光発電や蓄電池を組み合わせた「再生可能エネルギー」の仕組みをつくる会社です。<br>
		太陽の光で発電するだけでなく、昼間に使いきれなかった電気を「蓄電池」にためておけば、夜や災害時にも使えるようになります。<br>
		この仕組みを、長野県から全国へと広げていくのが、私たち人間電力の役割です。<br>
		そして、その役割を社内で２つチームに分かれ、仕事を進めています。<br>
		建物に太陽光パネルを設置し、「電気をつくる」仕事を行う【ビルド事業部】<br>
		蓄電池（発電所のような設備）を導入し、「電気をためて活用する」仕組みを広げる【蓄電池事業部】<br>
		また、今回募集している職種は、下記の２職種になります。<br>
		太陽光や蓄電池の導入をお客様に提案する【営業職】<br>
		設置のための現場調査や図面作成などを行う【測量・設計職】<br>
		ここからは、２つの事業部で実際にどんな仕事をしているのかをご紹介します。
	</p>
	<h3>太陽光パネルを設置し、電気を「つくる」仕事（ビルド事業部）</h3>
	<p>
		太陽のエネルギーを活用するには、屋根に太陽光パネルを設置する工事が必要です。<br>
		この設置工事・設計を担当するのが「ビルド事業部」です。<br>
		人間電力では、提案・設計・施工までをすべて自社で一貫して対応しています。<br>
		工場や住宅など、建物の屋根に合ったパネルの配置を考え、安全で効率的な発電ができるように設計します。<br>
		工事の対象は、法人から一般のご家庭までさまざま。最近は「電気代を抑えたい」という理由から、一般家庭での設置が増えています。
	</p>
	<div class="images">
		<img src="work1.jpg" alt="" class="scene">
	</div>
	<h3>蓄電池を導入するための土地探しと申請業務（蓄電池事業部）</h3>
	<p>
		電気をためる「蓄電池（発電所のようなイメージ）」は、簡単にどこでも置けるわけではありません。<br>
		まずは、設置できる土地を探すところからスタートします。<br>
		人間電力では、地主さんと直接交渉をして土地を確保し、これまでに全国で100か所以上の設置場所を見つけてきました。<br>
		次に必要なのが「この土地で電気をためていいですよ」という許可をもらうための電力申請という仕事。<br>
		申請書類を正しく作成し、スムーズに通すことが大切です。<br>
		そして準備が整ったら、企業や投資家（ファンド）に向けて、
		「この土地でこんな発電所がつくれますよ」という提案営業を行い、買い手を探していきます。
	</p>
	<div class="images">
		<img src="work2.jpg" alt="" class="scene">
		<img src="<?= $company_base ?>second.jpg" alt="" class="scene">
		<img src="work4.jpg" alt="" class="scene">
	</div>
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
				<img src="employee1.jpg" alt="">
				<hgroup>
					<h3>秋吉さん</h3>
					<p>
						私が入社したきっかけは、福岡で野村社長と出会ったことでした。<br>
						社長との食事の席で、「九州で再生可能エネルギーの未来をつくりたい」という熱い想いを聞き、この方と一緒に働きたいと強く感じました。<br>
						その想いを胸に、思い切って長野県上田市へ移住しました。<br>
						現在は蓄電池事業部に所属し、電気をためて活用する蓄電池設備の提案営業を企業や投資家に対して行っています。<br>
						加えて、設置場所となる土地のオーナー様との交渉や、申請書類の作成など多岐にわたる業務も担当しています。<br>
						案件は規模が大きく難しいものも多いですが、その分やり遂げた時の達成感は格別で、毎日が充実した挑戦の連続です。
					</p>
				</hgroup>
			</div>
			<p>秋吉さん<br>(入社1年目)</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="employee2.jpg" alt="">
				<hgroup>
					<h3>北野さん</h3>
					<p>
						前職はホテルで結婚式や宴会の責任者を務めていましたが、将来への不安から新たな道を模索していた際に、紹介を通じて野村社長と出会いました。<br>
						現在はビルド事業部に所属し、太陽の光を利用して電気をつくる太陽光パネルの設置を担当しています。住宅や工場の屋根にパネルを設置するための提案から設計、現場との調整まで幅広く携わっています。<br>
						入社当初は何もわからず不安もありましたが、一つひとつ学びながら社内の仲間に説明できるようになったとき、自身の成長を実感し、大きな喜びを感じました。<br>
						最近では、「電気代を削減したい」というご家庭からの相談に応じ、最適なプランを提案する機会が増えています。法人のお客様とは半年以上かけてじっくり信頼関係を築き、提案を重ねています。<br>
						お客様の不安を安心に変えるこの仕事は非常にやりがいがあり、日々技術や知識が身につくことも大きな楽しみです。
					</p>
				</hgroup>
			</div>
			<p>北野さん<br>(入社3年目)</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="employee2.jpg" alt="">
				<hgroup>
					<h3>宮澤さん</h3>
					<p>
						前職でも測量や設計に携わっていましたが、もっと本格的にやってみたいという想いがずっとありました。<br>
						そんな時に見つけたのが、野村屋の求人でした。転職活動の中で「ここなら自分のやりたいことに正面から向き合えるかもしれない」と感じ、入社を決めました。<br>
						初めて社長と会ったのは面接のとき。社長というと年配のイメージがあったので、「若いな」と思ったのを覚えています。<br>
						現在は、主に太陽光発電設備の測量・設計を担当しています。用地担当者が仕入れてきた土地に対して測量を行い、図面を作成。その内容を社内外で確認、承認を得るところまでを一貫して担っています。<br>
						太陽光パネルの設置には、行政や地域住民との協議を重ねていく必要があります。正解がひとつではないので難しさもありますが、「これならいいですね」と合意をいただけた瞬間には大きなやりがいを感じます。
					</p>
				</hgroup>
			</div>
			<p>宮澤さん<br>(入社4年目)</p>
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
					<dd>測量・設計／営業</dd>
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
