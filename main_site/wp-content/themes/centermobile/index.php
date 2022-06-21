<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
</head>

<body id="pTop" class="website">
<div class="hArea">
	<!-- header -->
	<header>
		<div class="hLogo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/h_logo.png" alt="CENTER MOBILE" class="pc" width="138" height="75">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/h_logo_sp.png" alt="CENTER MOBILE" class="sp" width="292" height="28"></a>
		</div>
		<ul class="headerUl">
			<li class="sp"><a href="https://maimo.app/login" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/h_bnr.png" alt="Maimo Login" width="151" height="38"></a></li>
			<li class="menuBtn sp">
				<button class="menu-trigger" href="#">
					<span></span>
					<span></span>
					<span></span>
				</button>

			<nav class="gnav">
				<div class="gnav__wrap">
					<ul class="gnav__menu f700">
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/">割引の仕組み</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>plan/">料金・サービス</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>app/">アプリの使い方</a></li>
						<li class="gnav__menu__item"><a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2" target="_blank">WEB申し込み</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">企業情報</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>fc/">FC・OEM</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-archive/">トピックス</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>store/">店舗一覧</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/">お問い合わせ</a></li>
					</ul>
					<!-- <a href="">maimo Login</a> -->
				</div><!--gnav-wrap-->
			</nav>
			</li>
		</ul>
	</header><!-- /header -->



	<!-- nav -->
	<nav class="pc">
		<ul>
            <li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/">割引の仕組み</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>plan/">料金・サービス</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>app/">アプリの使い方</a></li>
						<li class="gnav__menu__item"><a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2" target="_blank">WEB申し込み</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">企業情報</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>fc/">FC・OEM</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-archive/">トピックス</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>store/">店舗一覧</a></li>
						<li class="gnav__menu__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/">お問い合わせ</a></li>
		</ul>
		<a href="https://maimo.app/login" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/h_bnr.png" alt="Maimo Login" width="151" height="38"></a>
	</nav>
	<!-- /nav -->
</div>

<div class="mainArea">
<!-- <h1>CENTER MOBILE</h1> -->
	<!-- cover -->
<div id="cover">
<ul class="slider pc">
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/mv_pc.png" alt="携帯料金は自分で決める時代へ！" class="pc" width="1725" height="863">
		</li>
		<li class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_2.png" alt="オリジナルブランドの新電力 Maimoでんき" class="pc" width="1725" height="863">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_2_sp.png" alt="オリジナルブランドの新電力 Maimoでんき" class="sp"> -->
		</li>

		<li class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_3.png" alt="Maimo Wi-Fi -世界中のどこでもつながる-" class="pc" width="1725" height="863">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_3_sp.png" alt="Maimo Wi-Fi -世界中のどこでもつながる-" class="sp"> -->
		</li>

		<li class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_4.png" alt="インターネット無制限！新規も切り替えもとってもお得！Maimoひかり" class="pc" width="1725" height="863">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_4_sp.jpg" alt="インターネット無制限！新規も切り替えもとってもお得！Maimoひかり" class="sp"> -->
		</li>
	</ul>
<?php /*	<ul class="slider pc">
		<li>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_cm_sp.png" alt="携帯料金は自分で決める時代へ！" width="1200" height="1200">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img2/mv_pc.png" alt="携帯料金は自分で決める時代へ！" class="pc"> -->
		</li>
		<li class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_2.png" alt="オリジナルブランドの新電力 Maimoでんき" class="pc">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_2_sp.png" alt="オリジナルブランドの新電力 Maimoでんき" class="sp"> -->
		</li>

		<li class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_3.png" alt="Maimo Wi-Fi -世界中のどこでもつながる-" class="pc">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_3_sp.png" alt="Maimo Wi-Fi -世界中のどこでもつながる-" class="sp"> -->
		</li>

		<li class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_4.png" alt="インターネット無制限！新規も切り替えもとってもお得！Maimoひかり" class="pc">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_4_sp.jpg" alt="インターネット無制限！新規も切り替えもとってもお得！Maimoひかり" class="sp"> -->
		</li>
	</ul>
*/ ?>

	<ul class="thumb pc">
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/mv_pc.png" alt="携帯料金は自分で決める時代へ！" class="pc" width="327" height="163">
		</li>
		<li class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_2.png" alt="オリジナルブランドの新電力 Maimoでんき" class="pc" width="327" height="163">
		</li>
		<li class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_3.png" alt="Maimo Wi-Fi -世界中のどこでもつながる-" class="pc" width="327" height="163">
		</li>
		<li class="pc">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/img_mv_4.png" alt="インターネット無制限！新規も切り替えもとってもお得！Maimoひかり" class="pc" width="327" height="163">
		</li>
	</ul>

	<ul class="sp">
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/mv_sp.png" alt="携帯料金は自分で決める時代へ！" class="sp" width="390" height="390">
		</li>
	</ul>
</div>
<!-- /cover -->


<div id="main">
	<section class="content01 fuki">
		<div class="inner">
			<h2 class="mainTit">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con01_tit01.png" alt="携帯料金最大割引で０円！" width="822" height="124">
			</h2>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/" class="btn03">割引の仕組みはこちら</a>

			<div class="titImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con01_tit02.png" alt="プランは簡単に大きく2つの料金プラン" width="826" height="154"></div>

			<ul>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con01_img01.png" alt="電話もインターネットも使える音声SIMプラン　通話付きのプランです" width="516" height="297"></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con01_img02.png" alt="インターネットのみ使えるデータSIMプラン　連絡はLINE等のみ、電話番号は必要ないという方にオススメ！通話アプリによる通話は可能です" width="516" height="298"></li>
			</ul>
		</div>
	</section>

	<section class="content02">
		<h2>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con2_tit02.png" alt="使う容量を選ぶだけ" width="616" height="116">
		</h2>
		<div class="inner">
      <ul class="capacityList">
        <li class="type1">
          <h3 class="heading">まずはオタメシ！</h3>
          <div class="capacityContent">
            <p class="capacity"><span>3</span>GB</p>
            <div class="planWrap">
              <div class="plan voice">
                <h4 class="heading"><span>音声SIMプラン</span></h4>
                <div class="planContent">
                  <div class="monthly">
                    <div class="th"><span>月</span><span>額</span></div>
                    <div class="price">
                      <p class="max"><span>1,280</span>円</p>
                      <p class="min">〜<span>0</span>円</p>
                    </div>
                  </div>
                  <p class="tax">税込 1,408円</p>
                </div>
                <p class="notes">通話付きのプランです</p>
              </div>
              <div class="plan data">
                <h4 class="heading"><span>データSIMプラン</span></h4>
                <div class="planContent">
                  <div class="monthly">
                    <div class="th"><span>月</span><span>額</span></div>
                    <div class="price">
                      <p class="max"><span>1,180</span>円</p>
                      <p class="min">〜<span>0</span>円</p>
                    </div>
                  </div>
                  <p class="tax">税込 1,298円</p>
                </div>
                <p class="notes">通話アプリによる通話は可能です</p>
              </div>
            </div>
          </div>
        </li>
        <li class="type2">
          <h3 class="heading">普段使いにピッタリ！</h3>
          <div class="capacityContent">
            <p class="capacity"><span>20</span>GB</p>
            <div class="planWrap">
              <div class="plan voice">
                <h4 class="heading"><span>音声SIMプラン</span></h4>
                <div class="planContent">
                  <div class="monthly">
                    <div class="th"><span>月</span><span>額</span></div>
                    <div class="price">
                      <p class="max"><span>2,480</span>円</p>
                      <p class="min">〜<span>0</span>円</p>
                    </div>
                  </div>
                  <p class="tax">税込 2,728円</p>
                </div>
                <p class="notes">通話付きのプランです</p>
              </div>
              <div class="plan data">
                <h4 class="heading"><span>データSIMプラン</span></h4>
                <div class="planContent">
                  <div class="monthly">
                    <div class="th"><span>月</span><span>額</span></div>
                    <div class="price">
                      <p class="max"><span>2,280</span>円</p>
                      <p class="min">〜<span>0</span>円</p>
                    </div>
                  </div>
                  <p class="tax">税込 2,508円</p>
                </div>
                <p class="notes">通話アプリによる通話は可能です</p>
              </div>
            </div>
          </div>
        </li>
        <li class="type3">
          <h3 class="heading">タップリ使いたい！</h3>
          <div class="capacityContent">
            <p class="capacity"><span>50</span>GB</p>
            <div class="planWrap">
              <div class="plan voice">
                <h4 class="heading"><span>音声SIMプラン</span></h4>
                <div class="planContent">
                  <div class="monthly">
                    <div class="th"><span>月</span><span>額</span></div>
                    <div class="price">
                      <p class="max"><span>3,980</span>円</p>
                      <p class="min">〜<span>0</span>円</p>
                    </div>
                  </div>
                  <p class="tax">税込 4,378円</p>
                </div>
                <p class="notes">通話付きのプランです</p>
              </div>
              <div class="plan data">
                <h4 class="heading"><span>データSIMプラン</span></h4>
                <div class="planContent">
                  <div class="monthly">
                    <div class="th"><span>月</span><span>額</span></div>
                    <div class="price">
                      <p class="max"><span>3,780</span>円</p>
                      <p class="min">〜<span>0</span>円</p>
                    </div>
                  </div>
                  <p class="tax">税込 4,158円</p>
                </div>
                <p class="notes">通話アプリによる通話は可能です</p>
              </div>
            </div>
          </div>
        </li>
      </ul>
		</div>
		<a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2" class="cvBtn" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/cv_btn.png" alt="どのプランでどれだけ使っても最大割引で０円！お申し込みはこちら" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/cv_btn_on.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/cv_btn.png'" width="900" height="231">
		</a>
	</section>

	<div class="content03">
		<div class="inner">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con3_img01.png" alt="おかげさまで３冠達成！！" width="1100" height="641">
		</div>
	</div>

	<section class="content04">
		<div class="inner">
			<h2>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con4_tit.png" alt="こんな方におすすめ あなたも新世代格安スマホはじめませんか？" width="667" height="118">
			</h2>
			<div class="chArea">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con4_img01.png" alt="データ制限が気になる・どこでもつながるSIMが欲しい・月々の料金が高くて困っている・格安SIMを使いたいけど、今のスマホをそのまま使いたい・仕事でも使うから通信速度が遅いと困る" class="pc" width="754" height="260">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con4_img01_sp.png" alt="データ制限が気になる・どこでもつながるSIMが欲しい・月々の料金が高くて困っている・格安SIMを使いたいけど、今のスマホをそのまま使いたい・仕事でも使うから通信速度が遅いと困る" class="sp" width="356" height="275">
			</div>
		</div>

		<div class="pnArea">
				<div class="pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con4_img02.png" alt="携帯料金を安くして浮いたお金でお子様の習い事や家族旅行に" width="1530" height="436"></div>
				<div class="sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con4_img02_sp.png" alt="携帯料金を安くして浮いたお金でお子様の習い事や家族旅行に" width="355" height="254"></div>
		</div>
	</section>

	<section class="content05">
		<div class="titArea fuki">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_tit.png" alt="新時代を決める6つの特徴" width="742" height="145"></h2>
		</div>
		<div class="inner">
			<ul>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img01.png" alt="特徴01 毎月の携帯料金が最大割引で0円" class="pc" width="1040" height="420">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img01_sp.png" alt="特徴01 毎月の携帯料金が最大割引で0円" class="sp" width="371" height="682">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img02.png" alt="特徴02 快適な高速通信環境" class="pc" width="1040" height="386">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img02_sp.png" alt="特徴02 快適な高速通信環境" class="sp" width="371" height="617">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img03.png" alt="特徴03 通話量がお得" class="pc" width="496" height="478">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img03_sp.png" alt="特徴03 通話量がお得" class="sp" width="371" height="450">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img04.png" alt="特徴04 安心・安全のdocomo回線" class="pc" width="496" height="478">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img04_sp.png" alt="特徴04 安心・安全のdocomo回線" class="sp" width="371" height="450">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img05.png" alt="特徴05 業界初技術特許出願中" class="pc" width="496" height="478">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img05_sp.png" alt="特徴05 業界初技術特許出願中" class="sp" width="371" height="450">
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img06.png" alt="特徴06 新しい端末を買う必要無し！今のスマホをそのまま使える" class="pc" width="496" height="478">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con5_img06_sp.png" alt="特徴06 新しい端末を買う必要無し！今のスマホをそのまま使える" class="sp" width="371" height="450">
					<p>
						※APN設定が必要になります。<br>
						※対応していない機種もございます。
					</p>
				</li>
			</ul>
			<a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2" class="cvBtn" target="_blank">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/cv_btn.png" alt="どのプランでどれだけ使っても最大割引で０円！お申し込みはこちら" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/cv_btn_on.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/cv_btn.png'" width="917" height="235">
			</a>
		</div>
	</section>
	<section class="content06">
		<div class="inner">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con6_tit.png" alt="センターモバイルでは携帯料金を最大割引で0円にすることを可能にしました" width="1040" height="255"></h2>
			<dl>
				<dt>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con6_img.png" alt="携帯料金最大割引で0円が可能に！" class="pc" width="1045" height="664">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con6_img_sp.png" alt="携帯料金最大割引で0円が可能に！" class="sp" width="371" height="660">
				</dt>
				<dd>
					<span>スポンサーの広告をみたり、サービスを利用</span>することで<span>ポイントが還元</span>されます。ポイントを<span>携帯料金に充てることで最大割引で0円</span>にすることが可能になります！
				</dd>
			</dl>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/" class="btn03">割引の仕組みはこちら</a>
		</div>
	</section>

	<section class="content07">
		<div class="inner">
			<dl>
				<dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con7_img01.png" alt="データ量がひとめで" width="275" height="403"></dt>
				<dd>
					<h3>
						TVや動画配信サイトが無料なのは、視聴者に広告を配信することで、スポンサーから広告料を受け取れるからです。
					</h3>
					<div class="txtArea">
						<p>
							センターモバイルはその仕組みを携帯業界に取り込みました。
						</p>
						<p>
							<span>会員様専用アプリ「Maimo」</span>ではお客様のニーズに合わせた広告の配信を行います。<br>
							この<span>広告を視聴する</span>ことによって<span>お客様にポイントが貯まり、携帯料金に</span>ご利用いただくことが可能になります。
						</p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>app/" class="btn03">アプリの使い方はこちら</a>
					</div>
				</dd>
			</dl>
			<div class="maimo">
				<h4><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/maimo.png" alt="Maimo" width="228" height="212"></h4>
				<div class="txtArea">
					<h5>会員専用アプリ  Maimo(マイモ)</h5>
					<p>■広告を見ることでポイントを貯めて、携帯料金を節約</p>
					<p>■毎月の利用料金やデータ残量（ギガ）のチェック、ポイントの利用もアプリからできます。</p>
					<div class="ap">
						<a href="//apps.apple.com/us/app/maimo/id1554806667?itsct=apps_box_link&itscg=30200" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/app.png" alt="App Storeからダウンロード" width="148" height="54"></a>
						<a href="//play.google.com/store/apps/details?id=jp.co.Maimo&hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/google.png" alt="Google Playで手に入れよう" width="182" height="54"></a>
					</div>
					<a href="https://maimo.app/login" target="_blank"><span>会員専用ページへ</span></a>
				</div>
			</div>
		</div>
	</section>

	<section class="content08">
		<h2><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con8_tit.png" alt="動画でもっと詳しく"  width="618" height="80"></span></h2>
		<div class="inner">
			<iframe class="videoDefer" data-src="https://www.youtube.com/embed/ZP7LCZBCbvs?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/btn01.png" alt="もっと詳しく" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/btn01_on.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/btn01.png'" width="600" height="87"></a>
		</div>
	</section>

	<section class="content09">
		<div class="inner">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con09_tit.png" alt="よくある質問" width="417" height="80"></h2>
			<ul>
				<li>
					<div class="que">最大割引で0円ってどういうこと？</div>
					<div class="ans">
						<div class="txtAera">
							ユーザーが会員専用アプリから<span>スポンサーの広告をみたり、サービスを利用</span>することで、センターモバイルに<span>広告収入が発生</span>します。<br>
							その広告収入を<span>ポイントとしてユーザーに還元。</span>ユーザーはポイントを携帯料金に利用することで、<span>最大割引で0円にすることが可能</span>です。
						</div>
						<div class="imgArea">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con9_img01.png" alt="携帯料金最大割引で0円が可能に！" width="333" height="238">
						</div>
					</div>
				</li>

				<li>
					<div class="que">どのような広告でポイントが貯まりますか？</div>
					<div class="ans">
						<div class="txtAera">
							動画広告だけでなく、アプリダウンロードや商品の購入、電気・インターネットなどのサービス利用申し込みでもポイントが貯まります。<br>
							毎月支払う電気代やインターネット費用をMaimoで申し込めば、効率よくポイントが貯まります。
						</div>
						<div class="imgArea">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con9_img02.png" alt="" width="370" height="369">
						</div>
					</div>
				</li>

				<li>
					<div class="que">郊外に住んでいるが、電波は届くのか？</div>
					<div class="ans">
						<div class="txtAera">
							安心のdocomo回線ですので、docomoの電波が届く場所なら、問題なくご使用いただけます！
						</div>
						<div class="imgArea">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con9_img03.png" alt="格安SIM業界速度ランキングNo.1　安心・安全のdocomo回線" width="420" height="386">
						</div>
					</div>
				</li>
			</ul>
			<!-- <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/btn01.png" alt=""></a> -->
		</div>
	</section>

	<section class="content10">
		<h2>CM公開中</h2>
		<div class="inner">
			<video src="https://centermobile.co.jp/wp-content/uploads/2021/09/centermobile_cm.mp4" oncontextmenu="return false;" controls="" controlslist="nodownload" playsinline="" width="80%" preload="auto"> </video>
		</div>
	</section>

	<section class="content11">
		<div class="inner">
			<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con11_tit.png" alt="Topics" width="236" height="72"></h2>
      <?php $args = array(
      'posts_per_page' => 3,
      'category' => 10 );
      $posts = get_posts( $args );
      if( !empty( $posts ) ) :
      ?>
			<ul>
        <?php
        foreach ( $posts as $post ): // ループの開始
        setup_postdata( $post ); // 記事データの取得
        ?>
				<li>
          <a href="<?php the_permalink(); ?>">
  					<dl>
              <?php if ( has_post_thumbnail() ): ?><!-- if文による条件分岐 アイキャッチが有る時-->
          			<dt><?php the_post_thumbnail(array(193,193), array('class' => 'left')); ?></dt>
          			<?php else: ?><!-- アイキャッチが無い時-->
          			<dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_topics.png" alt="" width="193" height="193"></dt>
          		<?php endif; ?>
  						<dd>
  							<span class="date"><?php the_time('Y年m月d日') ?></span>
  							<p>
  								<?php the_title(); ?>
  							</p>
  						</dd>
  					</dl>
          </a>
				</li>
        <?php endforeach; // ループの終了
        wp_reset_postdata(); // 直前のクエリを復元する
        ?>
			</ul>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>media-archive/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/btn01.png" alt="もっと詳しく" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/btn01_on.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/btn01.png'" width="600" height="87"></a>
      <?php elseif( empty( $posts ) ):  //もし記事が空だったら　?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
		</div>
	</section>

	<section class="content12">
		<div class="inCon01">
			<a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con12_bnr.png" alt="お使いのスマホですぐに切り替え カンタンお申し込みはこちら" class="pc" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/con12_bnr_on.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/con12_bnr.png'" width="1160" height="380"></a>
			<a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con12_bnr_sp.png" alt="お使いのスマホですぐに切り替え カンタンお申し込みはこちら" class="sp" width="351" height="491"></a>
		</div>

		<div class="inCon02">
			<h3 class="fuki">
				<span>修理・画面コーティング</span>は<br class="sp">センターモバイル店舗で！
			</h3>
			<div class="inner">
				<dl>
					<dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con12_img01.png" alt="センターモバイル店舗ではスマホ修理や画面のコーティングも行っております。" width="407" height="453"></dt>
					<dd>
						<h4>
							センターモバイル店舗では、<br><span>SIMの契約</span>や、<span>お客様のサポート</span>の他にも<span>スマホ修理</span>や<span>画面のコーティング</span>も<br class="sp">行っております。
						</h4>
						<p class="sp"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/con12_img01_sp.png" alt="センターモバイル店舗ではスマホ修理や画面のコーティングも行っております。" width="371" height="231"></p>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>store/">店舗一覧はこちら</a>
					</dd>
				</dl>
			</div>
		</div>
	</section>

	<div class="fBnr">
		<div class="inner">
			<div><a href="https://nippon-smes-project.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/footer_banner.png" alt="私たちの元気が、ニッポンの元気だ。　中小企業からニッポンを元気にプロジェクト" width="563" height="282"></a></div>
			<p>センターモバイルは『中小企業からニッポンを元気にプロジェクト』に参画しています。</p>
		</div>
	</div>

	<div class="bnrArea">
		<ul class="inner">
			<li><a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/cv_bnr02.png" alt="どれだけ使っても最大割引で0円 WEB申し込み"  onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/cv_bnr02_on.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img2/cv_bnr02.png'" width="312" height="91"></a></li>
			<li><a href="https://maimo.app/login" target="_blank" class="maiBtn">Maimo Login</a></li>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/" class="conBtn">お問い合わせ</a></li>
		</ul>
	</div>
</div><!-- /#main -->

<div class="bNav sp">
	<ul>
		<li><a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/bnav_01.png" alt="WEB申し込み" width="117" height="66"></a></li>
		<li><a href="https://maimo.app/login"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/bnav_02.png" alt="MaimoLogin" width="129" height="72"></a></li>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/bnav_03.png" alt="お問い合わせ" width="111" height="62"></a></li>
	</ul>
</div>

<!-- <p id="pageTop"><a href="#pTop"><img src="<?php echo get_template_directory_uri(); ?>/assets/img2/pagetop_off.png" alt="ページトップへ"></a></p> -->


<!-- footer -->
<footer>
	<div class="fInner">
	<div class="navArea">
		<div class="inner">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/">割引の仕組み</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>plan/">料金・サービス</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>app/">アプリの使い方</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">企業情報</a></li>
				<li><a href="https://maimo.app/login" target="_blank" >Maimo Login</a></li>
			</ul>

			<ul>
        <li><a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2" target="_blank" >WEB申し込み</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>fc/">FC・OEMをご検討中の方</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-archive/">トピックス</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>store/">店舗一覧</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>policy/">プライバシーポリシー</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/">お問い合わせ</a></li>
			</ul>
		</div>
	</div>

	<div class="logoArea">
		<div class="inner">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/f_aicon01.png" alt="CENTER MOBILE" width="155" height="85">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img2/f_aicon02.png" alt="Maimo" width="107" height="99">
		</div>
	</div>
</div>
	<p class="copyright"><small>Copyright (C) CENTER MOBILE All rights reserved.</small></p>
</footer>
<!-- /footer -->
</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

<?php wp_head(); ?>
</body>
