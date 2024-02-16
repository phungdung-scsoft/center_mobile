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
          <h1 class="company_h1">割引の仕組み</h1>
          <p>Discount mechanism</p>
        </div>
      </div>
    </div>

    <div class="systemWrap">
      <div class="wrapper">
        <section class="textWrap">
          <h2 class="heading">なぜ、携帯電話の利用料金が最大割引で0円になるのか</h2>
          <div class="text">
            <p>広告スポンサーからの収益を利用者にポイントで還元。<br>
              1ポイント/1円相当として扱います。<br>
              ご契約者様は携帯電話の利用料金にポイントを割引利用ができ、携帯電話の利用料金を下げることができます。</p>
          </div>
        </section>
        <div class="imageWrap mb-30">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_system.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_system.png" alt="" width="812" height="453">
          </picture>
          <section class="pointEx">
            <h3 class="heading">ポイント利用例</h3>
            <p>音声SIM3GBプラン【¥1,408(税込)/月額】にお申込みの場合</p>
            <div class="pointCalc">
              <div class="cell">
                <p>ご利用料金</p>
                <p class="low">¥1,408</p>
              </div>
              <div class="cell">
                <p class="low">-</p>
              </div>
              <div class="cell">
                <p>ポイント利用</p>
                <p class="low">1,408pt</p>
              </div>
              <div class="cell">
                <p class="low">=</p>
              </div>
              <div class="cell">
                <p>お支払い金額</p>
                <p class="low">¥0</p>
              </div>
            </div>
          </section>
        </div>
        <div class="imageWrap">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/img_discount_1.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_discount_1.png" alt="1ポイント＝1円　センターモバイルでポイント還元できる広告は多岐に渡ります。" width="812" height="268">
          </picture>
        </div>
      </div>
    </div>

    <section class="point">
      <div class="wrapper">
        <h2>ポイントの貯め方</h2>
        <p class="mb-20">動画広告の視聴にはご契約者様専用アプリ「<?= $GLOBALS['gl_service']; ?>(<?= $GLOBALS['gl_service_jp']; ?>)」が必要です。</p>

        <div class="maimo">
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
        </div>

        <h3>動画視聴</h3>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_2.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>「CMを見る！」ボタンを押すと動画広告が再生されます。(※1)</p>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_3.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_3.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>5〜30秒の動画広告がランダムで再生されます。</p>
              <?php /*<p>動画広告の長さに関わらず1ポイント獲得できます。</p>
                <p>動画広告を最後まで視聴すると画面右上に×ボタンが表示されます。</p>
                <p>表示された×ボタンを押して動画広告を消してください。</p>
                <p class="sub">※上記操作を行わないとポイントが付与されない恐れがございます。</p>*/ ?>
            </div>
          </li>
          <li>
            <div class="cap">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_4_2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_4_2.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>1ポイント獲得となります。</p>
              <?php /*<p>画面に獲得ポイントが表示されます。</p>
                <p class="mb-20">ポイントが獲得でき、保有ポイントに加算されます。</p>
                <p>ご案内した動画広告以外にもポイントが貯まるとくな商品やサービスがございます。</p>
                <p>ご契約者様専用WEBサイトからもご確認いただけます。</p>*/ ?>
            </div>
          </li>
        </ul>
        <p class="sub mb-30">※1　通信状況により動画広告が視聴可能になるまで時間がかかる場合があります。<br>
          「CMを見る！」ボタンが灰色から青色になるまでお待ちください。<br>
          ※1　動画広告を見るためのデータ通信量は、広告により変動します。<br>
          目安としてのデータ通信量は、動画広告1000回視聴で約0.5GBになります。</p>

        <h3>アプリダウンロード</h3>
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
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cap_discount_2.png" alt="" width="300" height="643">
              </picture>
            </div>
            <div class="detail">
              <p>「DL・登録で貯める」ボタンを押すとポイント対象のアプリ一覧が表示されます。</p>
              <p>アプリごとに設定されている条件を達成すると、ポイントを獲得できるサービスです。</p>
            </div>
          </li>
        </ul>

        <h3>サービス申し込み</h3>
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
              <p>NTTフレッツ光の回線環境は変わらず、お得に使える！切替後、毎月300ポイント獲得</p>
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