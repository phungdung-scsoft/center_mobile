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
        <div class="img_plan top_image2">
        <div class="top_tlt">
        <div class="top_tlt_inner">
        <h1 class="company_h1">料金プラン</h1>
        <p>Plan</p>
        </div>
        </div>
      </div>

      <section class="plan">
        <div class="wrapper">
        <h2>料金プラン</h2>
        <ul class="plan_lists">
          <li>
            <div class="plan_title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" width="57" height="80">
            <h3 class="h3_1"><span>電話もインターネットも使える<br></span>音声SIMプラン</h3></div>
            <hr class="plan_hr">
            <table class="price_list">
              <tr>
                <td class="GB"><span>3</span>GB</td>
                <td class="price"><span>0〜1,280</span>円/月(税込 1,408円)</td>
              </tr>
              <tr>
                <td class="GB"><span>20</span>GB</td>
                <td class="price"><span>0〜2,480</span>円/月(税込 2,728円)</td>
              </tr>
              <tr>
                <td class="GB"><span>50</span>GB</td>
                <td class="price"><span>0〜3,980</span>円/月(税込 4,378円)</td>
              </tr>
            </table>
          </li>
          <li>
            <div class="plan_title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" width="57" height="80">
            <h3 class="h3_1"><span>インターネットだけ利用<br></span>データSIMプラン</h3></div>
            <hr class="plan_hr">
            <table class="price_list">
              <tr>
                <td class="GB"><span>3</span>GB</td>
                <td class="price"><span>0〜1,180</span>円/月(税込 1,298円)</td>
              </tr>
              <tr>
                <td class="GB"><span>20</span>GB</td>
                <td class="price"><span>0〜2,280</span>円/月(税込 2,508円)</td>
              </tr>
              <tr>
                <td class="GB"><span>50</span>GB</td>
                <td class="price"><span>0〜3,780</span>円/月(税込 4,158円)</td>
              </tr>
            </table>
          </li>
        </ul>
      </div>
      <div class="btn_outer btn_blue btn_pd">
            <a href="//maimo.app/summary/f0d11b60c874bd4c4ee2">お申し込みはこちら</a>
      </div>
      </section>


      <section class="plan option">
        <div class="wrapper">
        <h2>プランオプション</h2>
        <ul class="plan_lists">
          <li>
            <div class="plan_title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" alt="" width="57" height="80">
            <h3 class="h3_1">音声SIMプラン<br>オプション</h3></div>
            <hr class="plan_hr">
            <ul class="option_lists option_list">
              <li>
                <h4 class="h4_1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/option1.png" alt="" width="61" height="61">
                5分かけ放題</h4>
                <p>900円<br>
                  <span>(税込 990円)</span></p>
              </li>
              <li>
                <h4 class="h4_1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/option1.png" alt="" width="61" height="61">
                15分かけ放題</h4>
                <p>1,200円<br>
                  <span>(税込 1,320円)</span></p>
              </li>
              <li>
                <h4 class="h4_1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/option2.png" alt="" width="61" height="61">
                留守番電話</h4>
                <p>300円<br>
                  <span>(税込 330円)</span></p>
              </li>
              <li>
                <h4 class="h4_1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/option3.png" alt="" width="61" height="61">
                割り込み通話</h4>
                <p>300円<br>
                  <span>(税込 330円)</span></p>
              </li>
            </ul>
            <br class="pc_only">
            <ul class="option_lists option_list">
              <li>
                <h4 class="h4_1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/option4.png" alt="" width="61" height="61">
                ギガ購入</h4>
                <p>500円 / 1GB<br>
                  <span>(税込 550円)</span></p>
              </li>
            </ul>
            </li>

            <li>
            <div class="plan_title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" alt="" width="57" height="80">
            <h3 class="h3_1">データSIMプラン<br>オプション</h3></div>
            <hr class="plan_hr">
            <ul class="option_lists option_list">
              <li>
                <h4 class="h4_1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/option4.png" alt="" width="61" height="61">
                ギガ購入</h4>
                <p>500円 / 1GB<br>
                  <span>(税込 550円)</span></p>
              </li>
            </ul>
          </li>

          <li class="option_list2">
            <table>
              <tr>
                <td class="name">通話料金</td>
                <td>11円 / 30秒</td>
              </tr>
            </table>
          </li>

          <li class="option_list2">
            <table>
              <tr>
                <td class="name">SMS送信</td>
                <td>3円〜 / 1通</td>
              </tr>
            </table>
          </li>

          <li class="option_list2 last">
            <table>
              <tr>
                <td class="name">テザリング</td>
                <td>無料</td>
              </tr>
            </table>
          </li>
        </ul>
        <p class="sub">※15分かけ放題は15分超過後は11円/30秒の通話料が発生します。<br><span class="mgr-10">※緊急通報：110、118、119</span><span class="mgr-10">電話番号案内：104</span>
        <span class="mgr-10">発信者番号通知：184、186</span>クイックダイヤル：＃ダイヤル<br>
        <span class="mgr-10">ガスコンロダイヤル：1416他</span>
        <span class="mgr-10">フリーダイヤル：0120、0800</span>
        <span class="mgr-10">ナビダイヤル：0570など</span>一部かけ放題対象外番号があります。</p>
      </div>
      </section>

      <section class="price_reason">
      <div class="wrapper">
        <h2>料金が下がる仕組み</h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan1.png" alt="" width="980" height="252">
      <p>センターモバイルは広告スポンサーからの収益をユーザーに還元することで、携帯料金を下げ、最大割引で0円で使える携帯を実現</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan3.png" alt="" width="980" height="358">
    </div>
    </section>

      <div class="btn_outer btn_blue">
            <a href="//maimo.app/summary/f0d11b60c874bd4c4ee2">お申し込みはこちら</a>
      </div>

      <section class="attention">
        <div class="wrapper">
        <div class="attention_inner">
        <h4>注意事項</h4>
        <ul>
          <?php /*<li>決済日を起算に料金が発生します。<br>手続きの不備でSIMが届いていない状態でも料金が発生します。</li>
          <li>初月の月額基本料や通話定額オプションの月額料は日割りではなく、満額でかかります。</li>*/ ?>
          <li>当日を含まない3日で合計5GBを超える通信をした場合、通信制限がかかり低速になります。</li>
          <li>通話料の請求には2ヶ月かかります。<br>＜例＞4月利用の通話料は、6月に請求が発生します。</li>
        </ul>
      </div>
      </div>
      </section>

      <div class="btn_outer btn_blue">
            <a href="//maimo.app/summary/f0d11b60c874bd4c4ee2">お申し込みはこちら</a>
      </div>




      <footer>
        <?php get_footer(); ?>
      </footer>


    </div><!-- containerここまで -->

    <?php get_template_part('inc/chat'); ?>
  </body>
