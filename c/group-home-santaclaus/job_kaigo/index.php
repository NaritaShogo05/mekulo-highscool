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
		見守り、そっと手を差し伸べる
	</h3>
	<p>
		グループホームは、入居者さんが少人数で共同生活を送り、自宅で過ごしているような雰囲気で過ごせる施設です。そこで、入居者さんの生活を支えるのが、サンタクロースのスタッフです。<br>
		主な仕事内容は、食事の準備や部屋の掃除、洗濯、排せつ介助など、入居者さんの<b>日常生活のお手伝い</b>です。 あくまでも“お手伝い”なので、すべてをスタッフが代行するわけではありません。<br>
		たとえば食事の準備では、入居者さんにも食材のカットをお任せしたり、盛り付けをお願いしたりもします。  
	</p>
	<div class="images">
		<img src="../introduce1.jpg" alt="" class="scene">
		<img src="work2.jpg" alt="" class="scene">
	</div>
	<p>
		入居者さんが自分らしく生活できるように、できることは見守りながら、<b>必要な部分だけ</b>サポートします。
	</p>
	<div class="images">
		<img src="work3.jpg" alt="" class="scene">
	</div>
	<p>
		また、レクリエーションや季節ごとのイベントを企画することもあります。
	</p>
	<div class="images">
		<img src="work4.jpg" alt="" class="scene">
		<img src="../first.jpg" alt="" class="scene">
		<img src="work6.jpg" alt="" class="scene">
	</div>
	<p>
		毎月イベントを開催していて、節分のときは鬼になって大げさに倒れてみたり、クリスマスのときはサンタクロースになりきってみたり。入居者さんと一緒に<b>全力で楽しむ</b>のも、大切な仕事の一つです。
	</p>
	<div class="images">
		<img src="work7.jpg" alt="" class="scene">
		<img src="work8.jpg" alt="" class="scene">
	</div>
	<p>
		サンタクロースのスタッフは「今、誰か困っていないかな？」と、いつもまわりに目を向けながら、入居者さんの毎日を支えます。
	</p>
	<h3>まずは体験してみる</h3>
	<p>
		サンタクロースのスタッフは、早番（7-16時）・日勤（9-18時）・遅番（11-20時）・夜勤（17-10時）の4つのシフトで交代しながら働いています。入社後すぐに夜勤に入ることはなく、6か月ほど経験を積んでからお願いしています。<br>
		まずは、スタッフがどんな動きをしているのか、どんな入居者さんがいるのかを知るために、全てのシフトを3日間ずつ体験してもらいます。
	</p>
	<p>
		<b>1日目：まずは見学</b><br>
		先輩のそばで仕事の流れを見たり、入居者さんや他のスタッフとの関わり方を感じたりする日です。
	</p>
	<div class="images">
		<img src="../second.jpg" alt="" class="scene">
	</div>
	<p>
		<b>2日目：できそうなことをやってみる</b><br>
		ちょっとしたサポートや手伝いなど、自分ができそうなことにチャレンジします。もちろん先輩がそばにいるので安心です。
	</p>
	<div class="images">
		<img src="../introduce4.jpg" alt="" class="scene">
	</div>
	<p>
		<b>3日目：ひと通り一人でやってみる</b><br>
		実際に自分で仕事をしてみる日。ただし、わからないことがあればすぐに聞ける環境です。「やれるだけやってみよう！」という気持ちで大丈夫です。
	</p>
	<div class="images">
		<img src="work11.jpg" alt="" class="scene">
	</div>
	<p>
		スタッフ同士や入居者さんとの相性も大切。気の合わない人間関係で、無理にシフトを組むことはありません。 
	</p>
	<h3>
		夜勤ってどんな感じ？
	</h3>
	<p>
		夜勤の日は、出勤まで体力を温存します。昼過ぎに少し寝てから出勤するスタッフが多いです。<br>
		夜勤は、<b>入居者さんが寝ている時間</b>が中心の仕事です。静かな時間の中で、お部屋の見回りやトイレ誘導、コール対応などを行います。他のスタッフと交代で仮眠を取ることもあります。<br>
		夜勤が終わったら、<b>翌日は必ず休み</b>になります。家に帰ってゆっくりごはんを食べたり、お昼寝したりしてリズムを整える人もいれば、そのまま友達と遊びに行く人もいます。<br>
		日勤と夜勤では、仕事内容も働き方も違います。希望があれば、シフトを調整することも可能です。自分に向いている時間帯や役割を、自分のペースで見つけてください。  
	</p>
	<h3>まずは同じ空間で過ごして、入居者さんを知る</h3>
	<p>
		サンタクロースの仕事は、まず「入居者さんを知る」ことから始まります。<br>
		どんなことが好きなのか。どんなことが苦手なのか。
	</p>
	<div class="images">
		<img src="work12.jpg" alt="" class="scene">
		<img src="work13.jpg" alt="" class="scene">
	</div>
	<p>
		たとえば「耳が遠い」と一言で言っても、人によって対応の仕方は違います。<br>
		口元を見せながら話すと伝わりやすい人もいれば、大きな声でゆっくり話した方がいい人も。実際に関わってみないとわからないことばかりです。
	</p>
	<div class="images">
		<img src="work14.jpg" alt="" class="scene">
	</div>
	<p>
		いきなり入居者さんのお世話をするのではなく、まずは同じ空間で過ごして、よく知ることが大切です。<br>
		また、スタッフも人それぞれ。背の高さも声の大きさも、全く同じ人はいません。<br>
		だからこそ、「これが正解！」と決めつけず、いろんなやり方があるということを知ることが大事なんです。
	</p>
	<div class="images">
		<img src="../third.jpg" alt="" class="scene">
		<img src="work16.jpg" alt="" class="scene">
	</div>
	<p>
		また、介護の世界では、経験を積みながら資格をとっていくことができます。<br>
		「こんな資格を取りたい！」という希望があれば、シフトも調整しますし、資格取得のための費用も援助する制度があります。<br>
		ほかにも、認知症のケアに関する研修など、学べるチャンスはたくさんあります。外部の研修だけでなく、空き時間に受けられるオンライン研修も行っています。自分のペースで成長しながら、安心してステップアップしてください。
	</p>
	<h3>介護の世界</h3>
	<p>
		ここまで介護の“良い部分”をたくさん紹介しましたが、みなさんが想像しているような“大変なこと”も多い仕事です。<br>
		<b>「口腔ケア」</b>や<b>「入浴介助」</b>、<b>「排せつ介助」</b>といった体力が必要な場面もありますし、混乱した入居者さんが暴れたり、怒鳴ったりすることもあります。<br>
		でも、仲間と一緒に支え合って働けて、入居者さんの笑顔や「ありがとう」の一言に救われることもあります。<br>
		上手に気持ちを切り替えながら、自分なりのやりがいを見つけていけると、きっと楽しんで働けるでしょう。
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
				<li>
					<img src="gallery08.jpg" alt="">
				</li>
				<li>
					<img src="gallery09.jpg" alt="">
				</li>
				<li>
					<img src="gallery10.jpg" alt="">
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
				<img src="../introduce4.jpg" alt="">
				<hgroup>
					<h3>井出さん</h3>
					<p>
						もともと看護師を目指していたので、介護もできるかな？と思って入社しました。認知症の方と関わるのは初めてでしたが、毎日が新鮮で、想像していたよりもずっと楽しいです。<br>
						もちろん大変なこともあります。でも、同じ話を何度もしたり、予想外の反応が返ってきたり――そういうやりとりが、この仕事の面白さでもあると思っています。<br>
						家では犬と猫を2匹ずつ飼っていて、休日は一緒に散歩をしたり、ゲームをしたり。ひとりカラオケにもよく行きます！ロックやラップを思いっきり歌って、ストレス発散しています（笑）
					</p>
				</hgroup>
			</div>
			<p>中途入社<br>井出さん</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="employee2.jpg" alt="">
				<hgroup>
					<h3>武田さん</h3>
					<p>
						介護の仕事を始めて、もう19年になります。<br>
						出勤前にはいつも「今日はどんな様子かな」「どんな表情してるかな」と入居者さんのことを思い浮かべていて、毎日の楽しみになっています。<br>
						お休みの日は、家の掃除をしたり、孫と遊んだり。そんな時間も大切にしています。
					</p>
				</hgroup>
			</div>
			<p>中途入社<br>武田さん</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="employee3.jpg" alt="">
				<hgroup>
					<h3>佐藤さん</h3>
					<p>
						もともと介護の仕事をしていましたが、大きな施設より、もっとアットホームな場所で働きたいと思っていたときにサンタクロースを知りました。<br>
						小さいころ、おじいちゃんおばあちゃんと過ごす時間が多くて、病気になったときにお手伝いをしたことがあったんです。もしかしたら、あれが介護に興味を持つきっかけだったのかもしれません。<br>
						利用者さんとは、かしこまらずに自然体で話せる関係です。まるで自分のおじいちゃんおばあちゃんみたいで、冗談を言い合ったり、一緒に笑ったり、毎日が楽しいです。<br>
						お休みの日は、韓国ドラマをのんびり観てリフレッシュしています。
					</p>
				</hgroup>
			</div>
			<p>中途入社<br>佐藤さん</p>
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
					<dd>介護職員</dd>
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
					<dd>〒389-0603<br>
					長野県埴科郡坂城町大字南条657-1</dd>
				</div>
				<div>
					<dt>アクセス</dt>
					<dd>しなの鉄道テクノさかき駅から車で5分</dd>
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
					<dd>21.4日</dd>
				</div>
				<div>
					<dt>毎月の賃金</dt>
					<dd>現行</dd>
				</div>
				<div>
					<dt>基本給</dt>
					<dd>170,900円～</dd>
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
					<dd>170,900円</dd>
				</div>
				<div>
					<dt>特別に支払われる手当①</dt>
					<dd>夜勤手当（3,000円）</dd>
				</div>
				<div>
					<dt>特別に支払われる手当②</dt>
					<dd>会議手当（1回500円）</dd>
				</div>
				<div>
					<dt>賃金締切日</dt>
					<dd>月末</dd>
				</div>
				<div>
					<dt>通勤手当</dt>
					<dd>あり（月額12,000円まで）</dd>
				</div>
				<div>
					<dt>昇給</dt>
					<dd>あり</dd>
				</div>
				<div>
					<dt>賞与</dt>
					<dd>年2回（2か月分）</dd>
				</div>
			</dl>
			<h3>労働時間</h3>
			<dl>
				<div>
					<dt>就業期間</dt>
					<dd>シフト制<br>①7時00分〜16時00分<br>②9時00分〜18時00分<br>③11時00分〜20時00分<br>④17時00分〜翌10時00分</dd>
				</div>
				<div>
					<dt>時間外労働</dt>
					<dd>0時間</dd>
				</div>
				<div>
					<dt>休日</dt>
					<dd>週休2日制（シフト制）</dd>
				</div>
				<div>
					<dt>その他休日</dt>
					<dd>年間休日108日（2025年度計画）</dd>
				</div>
			</dl>
			<h3>保険・年金・定年等</h3>
			<dl>
				<div>
					<dt>加入保険等</dt>
					<dd>健康保険、雇用保険、労災保険、厚生年金</dd>
				</div>
				<div>
					<dt>企業年金</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>退職金制度</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>定年制</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>一律定年制</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>再雇用制度</dt>
					<dd>-</dd>
				</div>
				<div>
					<dt>勤務延長</dt>
					<dd>-</dd>
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
					<dd>51歳</dd>
				</div>
				<div>
					<dt>研修の有無</dt>
					<dd>なし</dd>
				</div>
				<div>
					<dt>自己啓発支援の有無</dt>
					<dd>
						〇資格取得支援<br>
						仕事に必要な資格について、取得費用を半額補助いたします。
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
					<dd>0時間</dd>
				</div>
				<div>
					<dt>前事業年度の有給休暇の平均取得日数</dt>
					<dd>6.7日</dd>
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
					<dd>老人福祉・介護事業</dd>
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
						2025年7月28日（月）10時00分～<br>
						2025年7月30日（水）10時00分～<br>
						別日はご相談ください。
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
						代表<br>
						高山賢仁
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
