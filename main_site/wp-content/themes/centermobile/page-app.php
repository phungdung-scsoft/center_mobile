<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body>

  <!--ここから共通部分-->
  <?php get_template_part('inc/header'); ?>
  <!--ここまで共通部分-->
  <!-- ここからコンテンツ -->
  <div class="container">
    <div class="img_discount top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1"><?= $GLOBALS['gl_service']; ?>アプリの使い方</h1>
          <p>How to use the <?= $GLOBALS['gl_service']; ?> app</p>
        </div>
      </div>
    </div>

    <div class="systemWrap">
      <div class="wrapper">
        <section class="textWrap">
          <h2 class="heading">ご契約者様専用アプリ <?= $GLOBALS['gl_service']; ?>(<?= $GLOBALS['gl_service_jp']; ?>)</h2>
          <div class="text">
            <p>ご請求額・データ残量の確認、ギガ追加購入、ポイントの確認などを行えるセンターモバイル公式のアプリです。<br>
              アプリから動画広告を見る事が出来ます。</p>
          </div>
        </section>
      </div>
    </div>

    <section class="point">
      <div class="wrapper">
        <h2><?= $GLOBALS['gl_service']; ?>ポイントとは</h2>
        <p>CMを見たりアプリをダウンロードしたり、サービスを申し込んだりする事で、ポイントが貯まります。</p>
        <p>貯まったポイントは1ポイント1円相当として、料金の割引に利用できます。 </p>
        <p class="mb-30">ポイントには期限がなく、消滅することはありません。</p>

        <h3>保有ポイント</h3>
        <p>貯めたポイント数が確認できます。</p>
        <p class="mb-20">また、過去に貯めたポイントの履歴も確認できます。</p>
        <ul class="capList mb-30">
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_1.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>貯めたポイント数が確認できます。</p>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_2.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>ポイントの履歴が確認できます。</p>
            </div>
          </li>
        </ul>

        <h2>今月のご利用料金</h2>
        <p>ご利用料金が確認できます。</p>
        <p>また、内訳の確認をすることができます。</p>
        <p class="mb-20">過去のご利用料金をグラフで詳しく確認することができ、前月のご利用額との比較できます。</p>
        <ul class="capList mb-30">
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_3_2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_3_2.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>今月のご利用料金が確認できます。</p>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_4.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_4.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>過去のご利用料金が確認できます。</p>
            </div>
          </li>
        </ul>

        <h2>データ使用量</h2>
        <p>当月のデータ残量が確認できます。</p>
        <p class="mb-20">また、ギガの追加購入もアプリから行う事が出来ます</p>
        <ul class="capList">
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_5.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_5.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>今月のデータが確認できます。</p>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_6.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_6.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>ギガの追加購入ができます。</p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <?php /*<section class="pointSampleList">
        <div class="wrapper">
          <h2>割引シミュレーション</h2>
          <div class="sampleList">
            <div class="sampleListItem">
              <div class="title">音声SIM3GBプラン 1,408円</div>
              <p>動画広告：1,008pt<br>
                アプリダウンロード：100pt<br>
                サービス申し込み：300pt</p>
              <p>上記獲得で<br>
                1,408pt = 携帯利用料が無料<span class="sub">(※1)</span></p>
              <p>1日の動画視聴時間は<br>
                1,008pt ÷ 30日 = 34回/日<br>
                34回 × 15秒<span class="sub">(※2)</span> = 510秒</br>
                <span class="bold">510秒 = 約9分/日</span></p>
            </div>
            <div class="sampleListItem">
              <div class="title">音声SIM20GBプラン 2,728円</div>
              <p>動画広告：2,328pt<br>
                アプリダウンロード：100pt<br>
                サービス申し込み：300pt</p>
              <p>上記獲得で<br>
                2,728pt = 携帯利用料が無料<span class="sub">(※1)</span></p>
              <p>1日の動画視聴時間は<br>
                2,328pt ÷ 30日 = 78回/日<br>
                78回 × 15秒<span class="sub">(※2)</span> = 1,170秒</br>
                <span class="bold">1,170秒 = 約20分/日</span></p>
            </div>
            <div class="sampleListItem">
              <div class="title">音声SIM50GB 4,378円</div>
              <p>動画広告：3,978pt<br>
                アプリダウンロード：100pt<br>
                サービス申し込み：300pt</p>
              <p>上記獲得で<br>
                3,978pt = 携帯利用料が無料<span class="sub">(※1)</span></p>
              <p>1日の動画視聴時間は<br>
                3,978pt ÷ 30日 = 133回/日<br>
                133回 × 15秒<span class="sub">(※2)</span> = 1,995秒<br>
                <span class="bold">1,995秒 = 約34分/日</span></p>
            </div>
          </div>
          <p class="sub">※1データ通信料以外の通話料金、オプション料金が発生しない場合のシミュレーションです。<br>通話料金、オプション料金が発生する場合は更にポイントの取得が必要となります。</p>
          <p class="sub">※2動画広告は5-30秒のものがランダムで配信されます。<br>今回のシミュレーションは参考として15秒で計算しております。</p>
        </div>
      </section>*/ ?>

    <section class="maimo">
      <div class="wrapper">
        <h2>会員専用アプリ <?= $GLOBALS['gl_service']; ?><span>(<?= $GLOBALS['gl_service_jp']; ?>)</span></h2>
        <div class="maimo_dl mb-30">
          <picture class="image">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_app_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_app_<?= $GLOBALS['gl_path']; ?>.png" alt="" width="132" height="122">
          </picture>
          <ul class="dl_btns">
            <li>
              <a href="//apps.apple.com/us/app/maimo/id1554806667?itsct=apps_box_link&itscg=30200" target="_blank">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/btn_apple.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_apple.png" alt="" width="148" height="54">
                </picture>
              </a>
            </li>
            <li>
              <a href="//play.google.com/store/apps/details?id=jp.co.Maimo&hl=ja" target="_blank">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/btn_google.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_google.png" alt="" width="182" height="54">
                </picture>
              </a>
            </li>
          </ul>
        </div>
        <div class="btn_outer btn_blue">
          <a href="//maimo.app/login" target="_blank"><?= $GLOBALS['gl_service']; ?>(WEB) Login</a>
        </div>
      </div>
    </section>

    <?php /*<section class="attention">
        <div class="wrapper">
        <div class="attention_inner">
        <h4>注意事項</h4>
        <ul>
          <li>当日を含まない3日で合計5GBを超える通信をした場合、通信制限がかかり低速になります。</li>
          <li>通話料の請求には2ヶ月かかります。<br>＜例＞4月利用の通話料は、6月に請求が発生します。</li>
        </ul>
      </div>
      </div>
    </section>*/ ?>




    <footer>
      <?php get_footer(); ?>
    </footer>


  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>