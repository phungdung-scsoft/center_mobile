<?php
/*
  Template Name: en-app
  Template Post Type: page
  Template Path: en/
  */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body class="en-page">

  <!--ここから共通部分-->
  <?php get_template_part('en/inc/header'); ?>
  <!--ここまで共通部分-->
  <!-- ここからコンテンツ -->
  <div class="container">
    <div class="img_discount top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">How to use the <?= $GLOBALS['gl_service']; ?> app</h1>
        </div>
      </div>
    </div>

    <div class="systemWrap">
      <div class="wrapper">
        <section class="textWrap">
          <h2 class="heading">Exclusive app for contracted customers, <?= $GLOBALS['gl_service']; ?></h2>
          <div class="text">
            <p>This is the official Center Mobile app where you can check your billing amount, data balance, additional gigabyte purchases, and points.You can watch video ads from within the app.</p>
          </div>
        </section>
      </div>
    </div>

    <section class="point">
      <div class="wrapper">
        <h2>What is <?= $GLOBALS['gl_service']; ?> point</h2>
        <p>By watching ads, downloading apps, or subscribing to services, you can accumulate points.</p>
        <p>The accumulated points can be used as a discount on charges, with <?php echo ($gl_point) ? '1' : '10'; ?> points being equivalent to 1 yen. </p>
        <p class="mb-20">There is no expiration date for points, and they will not disappear.</p>
        <?php if (!$gl_point) : ?>
          <ul class="notes_list mb-30">
            <li>Please note that points can only be used in increments of 10 points. You cannot use points in amounts such as 11 or 12, so be careful.</li>
          </ul>
        <?php endif; ?>

        <h3>Current Points</h3>
        <p>You can check the number of points you have accumulated.</p>
        <p class="mb-20">Additionally, you can also review the history of points you have accumulated in the past.</p>
        <ul class="capList mb-30">
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_1.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>You can check the number of points you have accumulated.</p>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_2<?php echo ($gl_point) ? '' : ''; ?>.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_2<?php echo ($gl_point) ? '' : ''; ?>.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>You can check the history of your points.</p>
            </div>
          </li>
        </ul>

        <h2>This month's usage fee</h2>
        <p>You can check the usage fee.</p>
        <p>Additionally, you can review the breakdown.</p>
        <p class="mb-20">You can also check the details of past usage fees in a graph and compare them with the usage from the previous month.</p>
        <ul class="capList mb-30">
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_3_2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_3_2.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>You can check this month's usage fee.</p>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_4.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_4.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>You can check past usage fees.</p>
            </div>
          </li>
        </ul>

        <h2>Data Usage</h2>
        <p>You can check the remaining data for the current month.</p>
        <p class="mb-20">Additionally, you can purchase additional gigabytes directly from the app.</p>
        <ul class="capList">
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_5.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_5.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>You can check the data for this month.</p>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_6.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_app_6.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>You can purchase additional gigabytes.</p>
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
        <h2>Member-exclusive app <?= $GLOBALS['gl_service']; ?></h2>
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
      <?php get_footer('en'); ?>
    </footer>


  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>