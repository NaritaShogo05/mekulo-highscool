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
			<img alt="" class="fv_image" src="first-view.jpg">
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
				いろんな部署で力をつける
			</h3>
			<p>
				職人は、入社後に配属先が決まり、さまざまな部署を経験しながら、少しずつ技術の幅を広げていきます。建具職人と家具職人は真田工場、サッシ職人は芳田工場で勤務します。
			</p>
			<div class="images">
				<img src="sanada.jpg" alt="" class="scene">
				<img src="kakou01.jpg" alt="" class="scene">
			</div>
			<p>
				どの工場でも「木を扱う」という共通点がありますが、それぞれに違う特徴があります。サッシは機械作業が中心、建具は昔ながらの伝統技。家具は、空間に合わせたものを造るのが特徴です。<br>
				造るものややり方は違っても、大事なのは「木を加工することが好き」という気持ち。職種にこだわらず、木と向き合いたい人にぴったりの環境です。
			</p><br>
			<p>
                また、会社のサポートで「木製建具技能士」などの資格取得も目指せます。技術を学びながら、着実にステップアップできる職場です。
			</p>
			<h3>
				建具職人の仕事
			</h3>
			<p>
				建具(たてぐ)って聞きなれないかもしれませんが、実はとても身近なもの。ドアや引き戸、玄関、障子。これ全部、建具です。私たちはそんな”生活の入口”を木で一つ一つ造ります。
			</p><br>
			<p>
				図面を受け取り、木材をだいたいの大きさに切り出していきます。<br>
                機械で厚みや幅を整え、表面を平らにします。そこにベニヤ板を貼って木目をきれいにし、周りを寸法に合わせて切ります。
			</p>
			<div class="images">
				<img src="kakou02.jpg" alt="" class="scene">
				<img src="kakou03.jpg" alt="" class="scene">
			</div>
			<p>
				切り口をきれいに見せるため、板を貼ったり、５ミリほどの木を貼ったりして仕上げです。簡単なものは半日、複雑なものは２、３日かかることもあります。
			</p>
			<div class="images">
				<img src="kakou04.jpg" alt="" class="scene">
				<img src="kakou05.jpg" alt="" class="scene">
				<img src="kakou06.jpg" alt="" class="scene">
			</div>
			<p>
				完成した建具は、現場まで運んで取り付けるまでが仕事です。建物によっては枠が傾いていることもあり、そんな時はその場で削って調整します。<br>
                多くの作業は機械を使いますが、かんなやノミなどの手仕事も大切。かんながけは木材によって難しさが変わり、刃を研いだり台を調整したり、お手入れも技の一つです。
			</p>
			<div class="images">
				<img src="kakou07.jpg" alt="" class="scene">
			</div>
			<h3>
				家具職人の仕事
			</h3>
			<p>
				皆さんの家にもある「家具」。私たちがよく手がけるのは、壁や床に固定する「取り付け家具」です。例えば大きな食器棚や学校のロッカー、下駄箱など。サイズや形により違いますが、完成までには一週間ほどかかります。
			</p><br>
			<p>
				まず図面を見て、全体のサイズから扉や引き出しなど、パーツの寸法を自分で計算します。
			</p>
			<div class="images">
				<img src="kakou08.jpg" alt="" class="scene">
			</div>
			<p>
				それぞれのパーツを機械で加工します。断面を切る、穴あけ、みぞ掘りなど機械の種類もさまざま。厚みを整えるなど基本的な作業なら、1週間ほどで慣れることができます。
			</p>
			<div class="images">
				<img src="kakou09.jpg" alt="" class="scene">
				<img src="kakou10.jpg" alt="" class="scene">
			</div>
			<p>
				パーツがそろったら組み立て。時には組んでみたらパーツ同士が合わない…なんてことも。一部の作り直しで済む場合もあれば、木目を合わせる家具は全て作り直すこともあります。<br>
                最後は仕上げ。かんなやサンドペーパーなど手作業での調整をするときもあります。<br>
				完成した家具は現場まで運び、取り付けます。新築の家や、学校の新校舎などに設置します。
			</p>
			<div class="images">
				<img src="../gallery05.jpg" alt="" class="scene">
			</div>
			<p>
				先輩の職人は、曲がった形やパーツが多い家具でも、寸法をぴったり合わせてきれいに仕上げます。そんな技を間近で見られるのも、この仕事のおもしろさです。
			</p>
			<h3>
				サッシ職人の仕事
			</h3>
			<p>
				私たちは、木材を使って、丈夫で長く使えるサッシ(窓枠)を造っています。
			</p>
			<div class="images">
				<img src="kakou11.jpg" alt="" class="scene">
				<img src="../busi05.jpg" alt="" class="scene">
			</div>
            <p>
				現場によってつくる枚数は異なり、少ないと2枚、多いと30～40枚。図面を受け取ってから完成まで、2～3週間かかります。
			</p><br>
			<p>
				まずは図面を読み解きます。内容を正確に読み取れるようになるには１年近くかかります。
			</p>
			<div class="images">
				<img src="kakou12.jpg" alt="" class="scene">
			</div>
			<p>
				材木を大体の寸法に切り、「ほぞ」と呼ばれるパズルのようなでっぱりを作ります。
			</p>
			<p>
                次は外周加工。ガラスをはめる”みぞ”などを専用の機械でつくり、段差があればかんなで削って整えます。<br>
				手作業も大切な仕事のひとつ。のこぎりやかんな、ノミなども使います。
			</p>
			<div class="images">
				<img src="../contents03.jpg" alt="" class="scene">
				<img src="kakou13.jpg" alt="" class="scene">
			</div>
            <p>
				切った材木を組み立てます。ほぞがぴったり合うと、思わず嬉しくなる瞬間です。逆に、うまくはまらないときは隙間にパテを詰めて調整します。まさに1ミリ以下の世界です。
			</p>
            <div class="images">
				<img src="../contents05.jpg" alt="" class="scene">
				<img src="../gallery02.jpg" alt="" class="scene">
			</div>
			<p>
				表面をサンダー(やすり機)でなめらかにし、塗装へ。ハンドルや車輪などの部品を取り付け、最後にパッキンやすべり止めを付けて完成です。
			</p>
			<div class="images">
				<img src="kakou14.jpg" alt="" class="scene">
				<img src="kakou15.jpg" alt="" class="scene">
			</div>
			<p>
				最初は先輩のそばで、面取りややすりがけ、工具の使い方を教わっていきます。覚えた作業が少しずつ形になり、窓として完成していく様子を見ると、ワクワクが広がります。
			</p>
			<h3>
				あせらず、一歩ずつ。職人への道
			</h3>
			<p>
				入社後、まずは道具を一式受け取ります。<br>
				でも、それだけで職人になれるわけではありません。この仕事は、一日や二日で覚えられるものではなく、とても奥の深い世界です。
				どの職人も、最初は先輩のお手伝いから。さまざまな部署を経験し、多くの先輩に教わりながら、最低でも３年。やっと「まあ作れるかも」と思えるようになっていきます。
			</p>
			<div class="images">
				<img src="kakou07.jpg" alt="" class="scene">
				<img src="kakou16.jpg" alt="" class="scene">
			</div>
			<p>
				でも、心配しなくて大丈夫。周りはみんな、技術と経験をもつ職人。だからこそ、わからないことは丁寧に教えてくれます。職場の雰囲気はあたたかく、堅苦しさはありません。一人ひとりが自分の作業に集中しつつ、自然と助け合える。そんな空気があります。
			</p><br>
			<p>
                木の香りが漂い、軽やかなBGMの流れる工場。うるさすぎず、静かすぎず、ちょうどいいにぎやかさ。そんな職場で、頼れる先輩たちがあなたを待っています。
			</p>
            <div class="images">
				<img src="kakou17.jpg" alt="" class="scene">
				<img src="kakou18.jpg" alt="" class="scene">
			</div>
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
							<img src="../first-view2.jpg" alt="">
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
						<li>
							<img src="gallery09.jpg" alt="">
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
				<img src="abe.jpg" alt="">
				<hgroup>
					<h3>阿部さん(2019年入社)</h3>
					<p>
						実家が建具や家具作りをしていて、母も以前この仕事に関わっていたので、修行のような気持ちでこの会社に入りました。入社から6年経ち、今ではある程度一人で仕事を進められる場面も増えています。<br>
                        現場では、思い通りにいかないことも多いです。建具を取り付ける際、枠にうまくはまらない時は、その場で削って調整します。手間はかかりますが、自分の工夫でぴったり収まると嬉しいです。そんな予想外のことへの対応も、この仕事の面白さだと思います。<br>
                        話しやすい人が多い職場なので、変に気をつかわずに働けるのもありがたいところです。<br>
						プライベートではドライブが趣味で、最近で群馬まで出かけました。仕事で使う刃物も時々研いで、大切にお手入れしています。
			        </p>
				</hgroup>
			</div>
			<p>建具職人 阿部さん</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="nakamura.jpg" alt="">
				<hgroup>
					<h3>中村さん(2021年入社)</h3>
					<p>
						高校の総合科に通っていた頃から、木に関わる仕事に興味を持ち、入社を決めました。<br>
						建具づくりを学んだあと、今年から家具づくりに挑戦しています。家具は建具より立体的で、また違った難しさがあります。建具や家具の図面は、高校で見た建築の図面とは全く違い、読みこなすまでに半年かかりました。今は家具の図面の勉強を続けている段階です。<br>
						初めてデスクを仕上げたときは、「自分の手で全部完成させた」って感じがして、今でもよく覚えています。<br>
						職場の雰囲気は皆さんあたたかいです。わからないことがあれば丁寧に教えてくれます。<br>
						休日は友達やクラブの仲間とバドミントンをして、体を動かして気分を切り替えています。
					</p>
				</hgroup>
			</div>
			<p>家具職人 中村さん</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="tanaka.jpg" alt="">
				<hgroup>
					<h3>田中さん(2002年入社)</h3>
					<p>
						木工に興味を持ち、「面白そう！」と思って入社しました。実際に働いてみると、「想像よりずっと奥が深い世界なんだ」と思いびっくりしました。<br>
						難しいのは、サッシを寸法通りにきれいに仕上げること。特に斜めに部品をくっつけるときは、うまくいかなくて苦労しました。でも、完成したときに「思った通りにできた！」と実感できると、手ごたえがあります。先輩に教えてもらいながら、少しずつ経験を積むことで、だんだん自信をもってできるようになりました。<br>
						作業でよく使う工具はインパクトドライバー。部品をしっかり固定するときに欠かせない道具で、作業の効率も上げてくれます。<br>				
						趣味は家庭菜園。休みの日は、野菜や花を育てながらゆったりと過ごしています。
					</p>
				</hgroup>
			</div>
			<p>サッシ職人 田中さん</p>
		</li>
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
