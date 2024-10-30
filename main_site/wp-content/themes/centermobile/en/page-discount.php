<?php
/*
  Template Name: en-discount
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
          <h1 class="company_h1">Mechanism of discount</h1>
        </div>
      </div>
    </div>

    <div class="systemWrap">
      <div class="wrapper">
        <section class="textWrap">
          <h2 class="heading">Why get a maximum discount of 0 yen on your cell phone usage?</h2>
          <div class="text">
            <p>We return the revenue from ad sponsors to users in the form of points.<br>
              We treat <?php echo ($gl_point) ? '1' : '10'; ?> points as equivalent to 1 yen.<br>
              Contracted customers can use points to discount their mobile phone usage charges, thereby reducing their mobile phone bills.</p>
          </div>
          <?php if (!$gl_point) : ?>
            <ul class="notes_list">
              <li>Please note that you can use your points in increments of 10 points. You cannot use points in amounts like 11 or 12 points.</li>
            </ul>
          <?php endif; ?>
        </section>
        <div class="imageWrap mb-30">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_system.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_system.png" alt="" width="812" height="453">
          </picture>
          <section class="pointEx">
            <h3 class="heading">Example of Points Usage</h3>
            <p>If you apply for the Voice SIM 3GB Plan [ ¥1,408 (including tax) / monthly ]</p>
            <div class="pointCalc">
              <div class="cell">
                <p>Usage Fee</p>
                <p class="low">¥1,408</p>
              </div>
              <div class="cell">
                <p class="low">-</p>
              </div>
              <div class="cell">
                <p>Points Used</p>
                <p class="low"><?php echo ($gl_point) ? '1,408' : '14,080'; ?>pt</p>
              </div>
              <div class="cell">
                <p class="low">=</p>
              </div>
              <div class="cell">
                <p>Payment Amount</p>
                <p class="low">¥0</p>
              </div>
            </div>
          </section>
        </div>
        <div class="imageWrap">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/img_discount_1<?php echo ($gl_point) ? '' : '_point'; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/img_discount_1<?php echo ($gl_point) ? '' : '_point'; ?>.png" alt="<?php echo ($gl_point) ? '1' : '10'; ?>Points = 1yen CENTER MOBILE offers a wide variety of advertisements that allow you to earn points." width="812" height="268">
          </picture>
        </div>
      </div>
    </div>

    <section class="point">
      <div class="wrapper">
        <h2>Ways to earn points</h2>
        <p class="mb-20">You will need the member-exclusive app '<?= $GLOBALS['gl_service']; ?>' to watch video ads.</p>

        <div class="maimo">
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
        </div>

        <h3>Video Viewing</h3>
        <ul class="capList">
          <?php /*<li>
              <div class="cap"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_1.png" alt=""></div>
              <div class="detail">
                <p>ご契約者様専用アプリ「<?= $GLOBALS['gl_service']; ?>(<?= $GLOBALS['gl_service_jp']; ?>)」を利用します。</p>
                <p class="mb-20">アプリから動画広告を視聴することでポイントを貯めることができます。</p>
                <p class="mb-20">まずはアプリをお使いの端末へインストールし、ログインしてください。</p>
                <p class="mb-20">※ログインに必要な電話番号とパスワードはご契約時にご指定のメールアドレスへお送りしております。</p>
                <p>まだアプリを端末へインストールされていない方は下記よりインストールをお願いいたします。</p>
                <div class="maimo">
                    <h2>会員専用アプリ <?= $GLOBALS['gl_service']; ?><span>(<?= $GLOBALS['gl_service_jp']; ?>)</span></h2>
                    <div class="maimo_dl mb-30">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?= $GLOBALS['gl_path']; ?>.png" alt="">
                      <ul class="dl_btns">
                        <li><a href="//apps.apple.com/us/app/maimo/id1554806667?itsct=apps_box_link&itscg=30200" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_apple.png" alt=""></a></li>
                        <li><a href="//play.google.com/store/apps/details?id=jp.co.Maimo&hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_google.png" alt=""></a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </li>*/ ?>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_2.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>By pressing the "CMを見る!" button, video ads will play. (*1)</p>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_3.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_3.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>A random video ad of 5 to 30 seconds will play.</p>
              <?php /*<p>動画広告の長さに関わらず1ポイント獲得できます。</p>
                <p>動画広告を最後まで視聴すると画面右上に×ボタンが表示されます。</p>
                <p>表示された×ボタンを押して動画広告を消してください。</p>
                <p class="sub">※上記操作を行わないとポイントが付与されない恐れがございます。</p>*/ ?>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_4_<?php echo ($gl_point) ? '2' : '2'; ?>.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_4_<?php echo ($gl_point) ? '2' : '2'; ?>.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>You will earn <?php echo ($gl_point) ? '1' : '5'; ?> points.</p>
              <?php /*<p>画面に獲得ポイントが表示されます。</p>
                <p class="mb-20">ポイントが獲得でき、保有ポイントに加算されます。</p>
                <p>ご案内した動画広告以外にもポイントが貯まるとくな商品やサービスがございます。</p>
                <p>ご契約者様専用WEBサイトからもご確認いただけます。</p>*/ ?>
            </div>
          </li>
        </ul>
        <p class="sub mb-30">*1 Depending on the communication conditions, it may take time for the video ads to become available for viewing.<br>
          Please wait until the "CMを見る!" button turns from gray to blue.<br>
          *1 The data communication volume required to watch video ads varies depending on the ad.<br>
          As a rough estimate, watching 1000 video ads will use approximately 0.5GB of data.</p>

        <h3>App Download</h3>
        <ul class="capList mb-30">
          <?php /*<li>
              <div class="cap"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_1.png" alt=""></div>
              <div class="detail">
                <p>ご契約者様専用アプリ「<?= $GLOBALS['gl_service']; ?>(<?= $GLOBALS['gl_service_jp']; ?>)」または、ご契約者様専用サイト「<?= $GLOBALS['gl_service']; ?>(<?= $GLOBALS['gl_service_jp']; ?>)」を利用します。</p>
                <p class="mb-20">まずはアプリをお使いの端末へインストールまたは、ご契約者様専用サイトへログインしてください。</p>
                <p class="mb-20">※ログインに必要な電話番号とパスワードはご契約時にご指定のメールアドレスへお送りしております。</p>
                <p>まだアプリを端末へインストールされていない方は下記よりインストールをお願いいたします。</p>
                <div class="maimo">
                    <h2>会員専用アプリ <?= $GLOBALS['gl_service']; ?><span>(<?= $GLOBALS['gl_service_jp']; ?>)</span></h2>
                    <div class="maimo_dl mb-30">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?= $GLOBALS['gl_path']; ?>.png" alt="">
                      <ul class="dl_btns">
                        <li><a href="//apps.apple.com/us/app/maimo/id1554806667?itsct=apps_box_link&itscg=30200" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_apple.png" alt=""></a></li>
                        <li><a href="//play.google.com/store/apps/details?id=jp.co.Maimo&hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_google.png" alt=""></a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </li>*/ ?>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_5.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_5.png" alt="" width="300" height="628">
              </picture>
            </div>
            <div class="detail">
              <p>By pressing the "DL・登録で貯める" button, a list of apps eligible for points will be displayed.</p>
              <p>This is a service where you can earn points by meeting the conditions set for each app.</p>
            </div>
          </li>
        </ul>

        <h3>Service Subscription</h3>
        <ul class="capList">
          <?php
          /*
            <li>
              <div class="cap"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_discount_2.png" alt="" width="294" height="147"></div>
              <div class="detail">
                <h4><?= $GLOBALS['gl_electric']; ?></h4>
                <p>導入費用0円！オリジナル電気に切替で毎月ご利用料金の6%分ポイント獲得</p>
                <p>例）10,000円の電気代で、毎月600ポイントを獲得。</p>
                //<!--p><?= $GLOBALS['gl_electric']; ?>なら、切替の工事や費用は不要で毎月の利用料金がオトクに！</p-->
                //<!--p>導入費用は0円で、大手の地域電力と比較して従量料金が最大5％お安く利用いただけます。契約期間の縛りや最低利用期間もありません。</p-->
              </div>
            </li>
            */
          ?>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_discount_3_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_discount_3_<?= $GLOBALS['gl_path']; ?>.jpg" alt="" width="294" height="147">
              </picture>
            </div>
            <div class="detail">
              <h4><?= $GLOBALS['gl_light']; ?></h4>
              <p>The NTT FLET'S fiber-optic line environment remains the same, and you can use it cost-effectively! After switching, earn <?php echo ($gl_point) ? '300' : '3,000'; ?> points per month.</p>
              <?php /*<p><?= $GLOBALS['gl_light']; ?>コラボレーションは、NTT 東日本・NTT 西日本の光ファイバー回線を使ってお安く提供する、インターネットサービスです。</p>
                <p>光ファイバー回線とプロバイダーがひとつになって、お得に使えます。</p>*/ ?>
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