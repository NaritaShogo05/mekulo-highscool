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
    <img alt="" class="fv_image" src="firstview.jpg">
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
		平面から立体へ
	</h3>
	<p>
		鉄骨製造は、ビルや工場など、建物の「骨組み」である鉄骨を作る仕事です。<br>
        機械を使って材料を切ったり、穴をあけたり、溶接してつなげたり。図面をもとに、鉄の部品をどんどん形にしていきます。
	</p>
	<div class="images">
		<img src="contents01.jpg" alt="" class="scene">
		<img src="contents02.jpg" alt="" class="scene">
		<img src="../contents01.jpg" alt="" class="scene">
	</div>
	<p>
		まずは図面を見て、どんな材料を使うか、どの角度でつなぐかを確認します。
	</p>
	<div class="images">
		<img src="contents04.jpg" alt="" class="scene">
	</div>
	<p>
		次に印をつけ、加工機を使って鉄を切断します。
	</p>
	<div class="images">
		<img src="contents05.jpg" alt="" class="scene">
		<img src="contents06.jpg" alt="" class="scene">
	</div>
	<p>
		切断したら図面どおりに溶接して、ひとつの大きな鉄骨に仕上げていきます。
	</p>
    <div class="images">
		<img src="contents07.jpg" alt="" class="scene">
		<img src="contents08.jpg" alt="" class="scene">
	</div>
	<p>
		図面は平面ですが、実際の鉄骨は立体です。頭の中で完成形をイメージしながら作業するのは、最初はちょっと大変。でも、2～3年くらい経つと自然と体が動いてきます。
	</p>
	<div class="images">
		<img src="../gallery2.jpg" alt="" class="scene">
		<img src="contents10.jpg" alt="" class="scene">
	</div>
	<p>
		完成した鉄骨は、現場に運ばれます。
	</p>
	<p>
        基本的には、とび職の人たちが足場の上で組み立てていきますが、製造の自分たちも現場に行って設置・調整することがあります。高い場所での作業になるので、安全帯をつけて作業します。
	</p>
	<div class="images">
		<img src="../gallery4.jpg" alt="" class="scene">
	</div>
	<p>
		図面だったものが、どんどん目の前で形になっていく――そんな「ものづくりの楽しさ」を味わえる仕事です！
	</p>
	<h3>
		とにかく手を動かしてみる
	</h3>
	<p>
		入社後は、材料の切断や穴あけ、組み立て、溶接など、いろいろな作業を順番に経験していきます。最初は先輩たちの作業を見たり、説明を聞いたりしながら、自分の手で少しずつ挑戦してみます。
	</p>
	<p>
		とにかく手を動かしてやってみるのが、上達への一番の近道です。
	</p>
	<div class="images">
		<img src="contents12.jpg" alt="" class="scene">
	</div>
	<p>
		仕事はすべてオーダーメイド。同じ作業はほとんどないので、毎日が新鮮です。<br>
        だんだんとできることが増えて、3年ほどで仕事を任せられるようになります。<br>
        また、鉄骨製作管理技術者や溶接管理技術者など、さまざまな資格に挑戦することができます。資格を取れば手当もアップ！
	</p>
</section>
<section class="g">
	<h2>写真で雰囲気を知る</h2>
	<div class="NRGallery" data-width="640" data-height="480">
		<div class="image_area">
			<ul class="slides">
			<li>
		<img src="../contents03.jpg" alt="">
	</li>
	<li>
		<img src="../first-view.jpg" alt="">
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
				<img src="sato.jpg" alt="">
				<hgroup>
					<h3>佐藤さん</h3>
					<p>
						板や部品を図面どおりに取りつけて、次の工程に渡す「仮組」という工程を担当しています。平面の図面を見て、部品を立体に組み立てていくのは難しいですが、PCで3Dを確認することもできるので、少しずつ慣れてきます。感覚がつかめるまでには、だいたい1年くらいかかりました。
					</p>
					<p>
						現場で実際に自分が関わった鉄骨が建物になったときは、「ちゃんと建った、無事にできてよかった」と、ほっとします。インパクト（電動工具）で締め作業をしているときは、特に面白いです。
	                </p>
					<p>
						職場は和気あいあいとしていて、わからないことがあればすぐに聞けるし、先輩たちも優しく教えてくれます。
                        プライベートでは車いじりが趣味で、ジムニーに乗っています。テールランプを変えたり、山道をドライブしたりするのが楽しいです。
	                </p>
				</hgroup>
			</div>
			<p>2021年中途採用<br>佐藤さん</p>
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
					<dd>鉄骨製造職</dd>
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
					長野県佐久市中込３４００−７</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd></dd>
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
					<dd>普通自動車免許（AT限定可）</dd>
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
					<dd>22日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>220,000円～（諸手当含む）</dd>
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
					<dd>-</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月25日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>実費支給（上限あり）</dd>
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
					<dd>変形労働時間制 8時00分〜17時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均30時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制（日・祝日・その他）</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>当社年間休日カレンダーによる。年間休日101日</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、雇用保険、労災保険</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数1年以上）</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>あり（70歳）</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>あり（定年年齢70歳）</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>あり（上限年齢73歳）</dd>
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
					<dd>25年</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>51.4歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>あり（資格取得研修）</dd>
				</div>
				<div>
					<dt>研修内容</dt>
					<dd>各種資格に応じて</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						
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
					<dd>30時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>8日</dd>
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
					<dd>-</dd>
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
					<dd></dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						
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
					<dd>
						代表取締役
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
