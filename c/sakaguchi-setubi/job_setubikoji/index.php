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
		まずは現場へ駆けつける！
	</h3>
	<p>
		「水が漏れてる！」「変な音がする…」そんな連絡が入ったら、まずはすぐに現場へ向かいます。どこが悪くなっているのかを見て、その場で直せそうなら、工具を使ってすぐに作業スタート。たとえば、配管にヒビが入っていたら溶接でつなぎ直したり、ネジがダメになっていたら交換したり。その場で対応できるなら、それが一番早いし確実です。
	</p>
	<div class="images">
		<img src="../contents06.jpg" alt="" class="scene">
	</div>
	<p>
		でも、現場ではどうにもならないこともあります。そんなときは、配管を一度外して現場事務所に持ち帰ります。加工場で作業しますが、天気がよければ外で作業することもあります。
	</p>
	<div class="images">
		<img src="../contents07.jpg" alt="" class="scene">
		<img src="contents04.jpg" alt="" class="scene">
	</div>
	<p>
		パイプの長さを正確にカットしたり、ネジ山を新しく作ったり、バルブや部品を交換したりと、修理内容は現場ごとにさまざま。パズルのように組み合わさった配管にぴったり合うよう、必要な加工をひとつずつ手作業で進めていきます。
	</p>
	<div class="images">
		<img src="../contents10.jpg" alt="" class="scene">
		<img src="contents06.jpg" alt="" class="scene">
	</div>
	<p>
		パイプをちょうどいい長さにカットするパイプカッター、ネジを締めるスパナやレンチなど、加工の内容に応じて工具を使い分けます。ただ配管を交換するだけではなく、その場の状況に合わせて加工して、ぴったり合うように仕上げていく。そんな細かい作業を積み重ねていきます。
	</p>
	<div class="images">
		<img src="contents07.jpg" alt="" class="scene">
		<img src="contents08.jpg" alt="" class="scene">
	</div>
	<h3>
		現場によって全然違う！溶接はまさに職人技
	</h3>
	<p>
		“溶接”と言っても、現場によってやり方も求められる技術も全然違います。例えば、食品工場と機械系の工場では、同じ溶接でもまるで別物。<br>
		機械設備のある工場では、「とにかく早く、頑丈に！」が求められます。冷却水や空気を流す配管が多く、強度と耐久性が最優先。見た目が多少あらくても、漏れなければOK。配管の素材は鉄やステンレスが多く、アーク溶接や半自動溶接でガンガン火花を飛ばしながらスピード勝負！漏れなければOK、ですが実は溶接の中でアーク溶接が一番難しく、隙間なくきっちり溶接するには、熟練の技が必要なんです。
	</p>
	<div class="images">
		<img src="arkyousetu.jpg" alt="" class="scene">
	</div>
	<p>
		一方食品工場では、「とにかく清潔に！」が最優先。食品や飲料など人が口にするものを流す配管だから、見た目も中身もピカピカにします。配管の素材はステンレスが中心で、主にTIG溶接という火花の出ない、繊細で美しい仕上がりになる方法を使います。中に汚れが残らないように、内側の盛り上がりもできるだけ少なく。まさに職人の技が光る瞬間です。
	</p>
	<div class="images">
		<img src="../contents12.jpg" alt="" class="scene">
	</div>
	<h3>
		ちょっと変！？工具の呼び方
	</h3>
	<p>
		現場では、工具の不思議な呼び方があります。
	</p>
	<p>
		①イギリス②モンキー③ベビーサンダー<br>
		どの写真の工具が何番かわかりますか？
	</p>
	<div class="images grid-img">
		<img src="monkirenti.jpg" alt="" class="scene">
		<img src="baby.jpg" alt="" class="scene">
		<img src="motarenti.jpg" alt="" class="scene">
	</div>
	<p>
		正解は……
	</p>
	<div class="images">
		<img src="" alt="" class="scene">
	</div>
	<p>①イギリス</p>
	<p>
		正式名称はモーターレンチ。ボルトやナットを回すための工具です。<br>
		所説ありますが、アルファベットの「E」に似ているから「イギリス」だとか。
	</p>
	<div class="images">
		<img src="motarenti.jpg" alt="" class="scene">
	</div>
	<p>②モンキー</p>
	<p>
		正式名所はアジャスタブルレンチ。ボルトの大きさに合わせて挟む部分の幅を調整できる便利な工具です。<br>
		どことなく、サルの横顔に似ているような…？
	</p>
	<div class="images">
		<img src="monkirenti.jpg" alt="" class="scene">
	</div>
	<p>③ベビーサンダー</p>
	<p>
		正式名称はディスクグラインダー。パイプの切断やバリ取りに使います。<br>
		小さくて、飛び散る火花が雷（サンダー）を連想させるから「ベビーサンダー」だとか。
	</p>
	<div class="images">
		<img src="baby.jpg" alt="" class="scene">
	</div>
	<p>
		見た目や言いやすさで名前が決まるのも、職人の世界らしいですよね。こういうところも、現場に出ていく楽しみになるかもしれません。
	</p>
	<h3>とにかく手を動かしてみる！</h3>
	<p>
		入社して最初に渡されるのは、スパナやレンチ、メジャーといった基本の工具セット。まずは実際に触って、どう使うかを少しずつ覚えていきます。
	</p>
	<p>
		坂口設備の職人たちは、現場に出ながらどんどん成長していくスタイル。「まずはやってみる」「手を動かして覚える」ことを大切にしています。挑戦してみて、失敗しても大丈夫！頼れる先輩たちがそばにいて、しっかりフォローしてくれます。
	</p>
	<div class="images">
		<img src="senpai.jpg" alt="" class="scene">
	</div>
	<p>
		実は、社員のほとんどが普通科出身。「最初は何もわからなかった」という人ばかりなので、新人の気持ちをよくわかってくれます。<br>
		また、仕事を続けていくうちに、高所作業車や作業主任者、施工管理技士など、さまざまな資格にもチャレンジできます。しかも資格取得の費用は、会社が全額サポート！<br>
		実務経験が2年あれば、職長（現場リーダー）として働くこともできます。早い人では、入社数か月で現場の責任者になることも！<br>
		やる気次第で、どんどん出世できる環境が整っています。
	</p>
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
	<li>
		<img src="gallery07.jpg" alt="">
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
				<img src="yanagisawa.jpg" alt="">
				<hgroup>
					<h3>柳澤さん</h3>
					<p>
						もともと土木関係の仕事をしていましたが、子どもができたので収入をアップさせたくて転職しました。<br>
						入社後すぐに現場へ行き、仕事は現場で覚えていきました。「ここからここの配管やって」と一人で任されて、できた時は嬉しかったです。<br>
						狭い場所での作業など大変なところもありますが、みんなで和気あいあいと話しながらの仕事なので頑張れます。<br>
						休日は子どもと遊んだり、家族でお出かけしたりして楽しんでいます。
					</p>
				</hgroup>
			</div>
			<p>2023年中途入社<br>柳澤さん</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="kurashima.jpg" alt="">
				<hgroup>
					<h3>倉島さん</h3>
					<p>
						知り合いの紹介で、坂口設備を知りました。<br>
						入社後、最初の仕事は住宅の階段の工事で、配管以外の工事もするんだとびっくりしました。<br>
						今は、溶接がとにかく面白いです！初めはまっすぐに溶接するのがなかなか難しかったですが、だんだん綺麗にできるようになってきました。溶接はうまくなったのが目で見てわかりやすいので、練習しがいがあります。<br>
						休日は、温泉でのんびり過ごすのが好きです。
					</p>
				</hgroup>
			</div>
			<p>2022年中途入社<br>倉島さん</p>
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
					<dd>なし</dd>
				</div>
				<div>
					<dt>試用期間</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>試用期間中の労働条件</dt>
					<dd>同条件</dd>
				</div>
				<div>
					<dt>就業場所</dt>
					<dd>〒387-0017<br>長野県千曲市大字中233-3</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>屋代駅から車で10分</dd>
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
					<dd>22日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>195,800円</dd>
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
					<dd>195,800円</dd>
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
					<dd>実費支給（上限なし）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>あり</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8:00～17:00</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均30時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>日・他</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日100日<br>
						第2・第4の土曜日が休み
					</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、雇用保険、労災保険</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数1年以上）</dd>
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
						13年
					</dd>
				</div>
				<div>
					<dt>従業員の平均年齢</dt>
					<dd>40歳</dd>
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
						高所作業に関する資格支援<br>
						溶接技能に関する資格支援
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
					<dd>10日</dd>
				</div>
				<div>
					<dt>前事業年度の育児休業取得者数</dt>
					<dd>女性：0人、男性：0人</dd>
				</div>
				<div>
					<dt>前事業年度の出産者数</dt>
					<dd>男性:2名</dd>
				</div>
				<div>
					<dt>女性役員割合</dt>
					<dd>7%</dd>
				</div>
				<div>
					<dt>女性の管理職割合</dt>
					<dd>0%</dd>
				</div>
				<div>
					<dt>区分の名称</dt>
					<dd>配管工</dd>
				</div>
			</dl>
		</div>
		<div class="content selection">
			<h3>選考方法</h3>
			<dl>
				<div>
					<dt>求人数</dt>
					<dd>3人</dd>
				</div>
				<div>
					<dt>応募前職場見学</dt>
					<dd>
						2025年7月29日（火） 13時00分～、15時30分～<br>
						2025年8月5日（火） 13時00分～、15時30分～
					</dd>
				</div>
				<div>
					<dt>選考方法</dt>
					<dd>面接</dd>
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
						代表取締役<br>
						坂口吉一
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
