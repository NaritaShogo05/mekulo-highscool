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
		熱した金属を叩いて強くする、ダイナミックなものづくり
	</h3>
	<p>
		鍛造職人の仕事は、高温に熱したアルミ鋳造部品を「鍛造プレス機」と呼ばれる機械でプレスし、自動車や自転車などに使われる重要な部品を製造することです。
	</p>
	<div class="images">
		<img src="contents01.jpg" alt="" class="scene">
	</div>
	<p>
		約600tもの圧力をかけて、一瞬で金属を鍛えます。<br>
		「叩いて強くする」<br>
		見た目はシンプルですが、実は奥が深く、ものづくりの技術が詰まっている仕事です。
	</p>
	<h3>
		二人一組で進める、チームプレイの仕事
	</h3>
	<p>
		鍛造の仕事は大きく分けて二つの工程があります。それが「鍛造工程」と「トリミング工程」です。
	</p>
	<div class="images">
		<img src="contents02.jpg" alt="" class="scene">
		<img src="contents03.jpg" alt="" class="scene">
	</div>
	<p>
		①鍛造工程：高温のアルミ鋳造部品を鍛造プレス機で成型する<br>
		②トリミング工程：製品として不要な部分をカットし、仕上げる<br>
		この工程を二人一組で担当し、1時間ごとに役割を交代しています。<br>
		特に鍛造工程では、一定のリズムで熱せられたアルミ鋳造部品が流れてくるので、スピード感と集中力が求められる工程です。
	</p>
	<h3>
		シンプルに見えて、実は奥が深い鍛造工程
	</h3>
	<p>
		鍛造工程は、一見「アルミ鋳造部品をプレスするだけ」に思えますが、実際には集中力と技術が必要になる工程です。<br>
		その一つに、「力加減」があります。<br>
		見た目はアルミ色ですが、実際には500℃程の高温で部品が流れてきます。<br>
		そのため、金ハシを使ってアルミ鋳造部品を持ち上げるのですが、強くつかみすぎると跡がついてしまい、不良品になってしまいます。職人の感覚が試される場面です。
	</p>
	<div class="images">
		<img src="contents04.jpg" alt="" class="scene">
	</div>
	<p>
		二つ目に、「離型剤の吹きかけ」です。<br>
		離型剤は、プレス前にスプレーを使って金型に吹きかけることで、製品が金型にくっつかないようにするためのものです。
	</p>
	<div class="images">
		<img src="contents05.jpg" alt="" class="scene">
		<img src="contents06.jpg" alt="" class="scene">
	</div>
	<p>
		これをプレス前に毎回吹きかけるのですが、近すぎても遠すぎても不良の原因になってしまいます。また、吹きかけすぎてもダメで、ちょうどよい吹きかけ具合と距離感があり、自分の中で一番うまく吹きかけられる感覚を掴むことが大切になります。<br>
		最後に「左右の手の連携」です。<br>
		左手では金ハシを使って、熱したアルミ鋳造部品を持ち、右手で離型剤を吹きかける。そして左手で金型の正しい位置に部品を設置し、両手を使ってプレスをする。
	</p>
	<div class="images">
		<img src="contents07.jpg" alt="" class="scene">
	</div>
	<p>
		スピード感が求められるため、全ての動作がスムーズでなければ不良品が生まれてしまいます。<br>
		特に最初は左手と右手が別々の動きをすることに、頭が混乱すると思います。
	</p>
	<h3>
		トリミング工程は、製品を仕上げる最後のステップ
	</h3>
	<p>
		鍛造が終わった製品は、トリミング工程に入ります。<br>
		専用のトリミング機械に製品を設置し、両手でボタンを押すことで、自動的に不要な部分をカットしてくれます。
	</p>
	<div class="images">
		<img src="contents08.jpg" alt="" class="scene">
	</div>
	<p>
		鍛造工程と比べると、シンプルで単純な工程ですが、製品の完成度を左右する大事な工程です。
	</p>
	<h3>
		入社後は、トリミング工程で仕事に慣れながら道具の練習をする
	</h3>
	<p>
		入社後は、以下のようなステップで仕事を覚えていきます。<br>
		①トリミング工程を担当しながら、ものづくりに携わる<br>
		②鍛造工程で使用する金ハシの使い方を練習する<br>
		③鍛造現場に入り、先輩に補助をしてもらいながら流れを覚える<br>
		④最終的には一人で鍛造工程も担えるようになる<br>
		特に、鍛造工程で使う金ハシの使い方を重点的に練習します。
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
				<img src="okubo.jpg" alt="">
				<hgroup>
					<h3>大久保祐希</h3>
					<p>
						坂城高校を卒業後、新卒で入社。もともと、アルバイト経験がなく、「工場なら自分でもできそうだ」と思い、入社を決めました。<br>
						鍛造では、部品を金型に入れる作業が重要なので、専用のハサミのような道具を使って、製品を正しい位置にセットする練習を重ねました。<br>
						ですが、最初は道具の扱いが難しく、3日間ほど練習をしてやっとコツを掴むことができました。<br>
						全ての動作がスムーズにいくと、鍛造後の製品も綺麗に仕上がるので、上手くできたと達成感を都度感じられることが、この仕事の面白いところです。
					</p>
				</hgroup>
			</div>
			<p>2013年新卒入社<br>大久保祐希</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="murofushi.jpg" alt="">
				<hgroup>
					<h3>室伏琉音</h3>
					<p>
						地元の高校を卒業後、自転車便やアパレルなどの仕事を経験し、ファインフォーミングに入社しました。<br>
						もともと、趣味でDIYをやっていたため、「鍛造」や「鋳造」というワードに惹かれて入社を決めました。<br>
						初めて仕事を見た時には、「単純作業なのかな」と感じたのですが、やってみたら全然違いました。<br>
						例えば、機械の近くに温度計があるのですが、その日の温度によって離型剤の吹き付け方がまるで変わります。変化に応じて微調整しながら工夫するため、気付いたら交代の時間になっていることが多いです。<br>
						毎日、生産予定数があるのですが、その日の不良件数がゼロで終えると、とっても気持ちいいです。
					</p>
				</hgroup>
			</div>
			<p>2022年中途入社<br>室伏琉音</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="kiuchi.jpg" alt="">
				<hgroup>
					<h3>木内亮</h3>
					<p>
						群馬県の製造業で働いた後、ハローワークでファインフォーミングを見かけ、入社しました。<br>
						幼少期時代から模型製作が好きで、ものづくりに携わる仕事がしたいという想いを持っていました。<br>
						前職は、仕事のルールに沿って進めていく単純な仕事だったのですが、鍛造はその日の温度や離型剤の使い方ひとつで品質が大きく変わるため、「技術を覚える」という面で非常に楽しく仕事をさせていただいています。<br>
						「技術を身に付けたい」と思っている人には、ピッタリの仕事だと思います。
					</p>
				</hgroup>
			</div>
			<p>2021年中途入社<br>木内亮</p>
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
					<dd>鋳造職人</dd>
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
					<dd>〒386-2203<br>
					長野県上田市真田町傍陽938</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>上田駅から車で25分</dd>
				</div>
				<div>
					<dt>受動喫煙対策</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>受動喫煙対策に関する特記事項</dt>
					<dd>屋外に喫煙室を設置しております</dd>
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
					<dd>170,000円～220,000円</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当①</dt>
					<dd>手袋手当（2,000円）</dd>
				</div>
				<div>
					<dt>定期的に支払われる手当②</dt>
					<dd>作業手当（22,000～35,000円）</dd>
				</div>
				<div>
					<dt>固定残業代</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>初任給</dt>
					<dd>165,000円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>皆勤手当（15,000円）</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>リーダー手当（10,000円）</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>毎月25日</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（15,000円）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり（前年度実績5,000円）</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>
						年2回（1か月分又は80,000～）
						※新規学卒者実績
					</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>8時00分〜16時55分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>月平均19時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制(土日・お盆休み・年末年始・ゴールデンウィークは休みとなります。)</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日115日（2025年度計画）</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>厚生年金保険、健康保険、雇用保険、労災保険、財形</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>あり（勤続年数5年以上）</dd>
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
					<dd></dd>
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
					<dd>7年</dd>
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
						あり<br>
						入社後、まずは安全教育を実施します。製造部長が講師となり、工場内での安全管理や作業の基本ルールを学びます。また、社長から給与明細の見方や社会保険料についての説明があり、働く上で必要な知識を身につけます。これらの研修を通じて、安心して仕事に取り組める環境を整えます。
					</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>なし</dd>
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
					<dd>
						フォークリフト、クレーン、玉掛けなど、業務に必要な資格の取得を会社が支援します。また、品質管理検定については会社負担で受験でき、合格するとお祝い金を支給する制度があります。スキルアップを目指す社員を積極的にサポートします。
					</dd>
				</div>
				<div>
					<dt>前年度の月平均所定外労働時間</dt>
					<dd>19時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>9日</dd>
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
						2025年7月30日（月） 10時30分～<br>
						2025年8月6日（水） 10時30分～
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
						代表取締役<br>
						笹邉 紀三子
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
