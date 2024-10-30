<?php
/*
  Template Name: en-plan
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
    <div class="img_plan top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">Rates and services</h1>
        </div>
      </div>
    </div>

    <section class="plan">
      <div class="wrapper">
        <h2>Rate Plan</h2>
        <ul class="plan_lists">
          <li>
            <div class="plan_title">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" width="57" height="80" alt="">
              </picture>
              <h3 class="h3_1"><span>That allows for both phone calls <br>and internet usage.<br></span>Voice SIM Plan</h3>
            </div>
            <hr class="plan_hr">
            <table class="price_list">
              <tr>
                <td class="GB"><span>3</span>GB</td>
                <td class="price"><span>0〜1,280</span> yen per month<br>(1,408 yen including tax)</td>
              </tr>
              <tr>
                <td class="GB"><span>12</span>GB</td>
                <td class="price"><span>0〜1,780</span> yen per month<br>(1,958 yen including tax)</td>
              </tr>
              <tr>
                <td class="GB"><span>20</span>GB</td>
                <td class="price"><span>0〜2,480</span> yen per month<br>(2,728 yen including tax)</td>
              </tr>
              <tr>
                <td class="GB"><span>50</span>GB</td>
                <td class="price"><span>0〜3,980</span> yen per month<br>(4,378 yen including tax)</td>
              </tr>
            </table>
          </li>
          <li>
            <div class="plan_title">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" width="57" height="80" alt="">
              </picture>
              <h3 class="h3_1"><span>Internet Use Only.<br></span>Data SIM Plan</h3>
            </div>
            <hr class="plan_hr">
            <table class="price_list">
              <tr>
                <td class="GB"><span>3</span>GB</td>
                <td class="price"><span>0〜1,180</span> yen per month<br>(1,298 yen including tax)</td>
              </tr>
              <tr>
                <td class="GB"><span>12</span>GB</td>
                <td class="price"><span>0〜1,680</span> yen per month<br>(1,848 yen including tax)</td>
              </tr>
              <tr>
                <td class="GB"><span>20</span>GB</td>
                <td class="price"><span>0〜2,280</span> yen per month<br>(2,508 yen including tax)</td>
              </tr>
              <tr>
                <td class="GB"><span>50</span>GB</td>
                <td class="price"><span>0〜3,780</span> yen per month<br>(4,158 yen including tax)</td>
              </tr>
            </table>
          </li>
        </ul>

        <div class="setplan_wrap type2">
          <div class="plan_title">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" width="57" height="80" alt="">
            </picture>
            <h3 class="h3_1">24-Hour Unlimited Talk<br class="sp_only"> Set Plan</h3>
          </div>
          <hr class="plan_hr">
          <div class="setplan_price_wrap">
            <div class="setplan_price">
              <div class="markerTxtWrap">
                <p class="markerTxt"><span>770 yen OFF from the fixed price!</span></p>
              </div>
              <table class="price_list">
                <tr>
                  <td class="GB"><span>3</span>GB<br><span class="option"> + <br>24-hour unlimited calls</span></td>
                  <td class="price"><span>0〜2,980</span> yen per month <br>(3,278 yen including tax)</td>
                </tr>
              </table>
            </div>

            <div class="setplan_price">
              <div class="markerTxtWrap">
                <p class="markerTxt"><span>1,298 yen OFF from the fixed price!</span></p>
              </div>
              <table class="price_list">
                <tr>
                  <td class="GB"><span>20</span>GB<br><span class="option"> + <br>24-hour unlimited calls</span></td>
                  <td class="price"><span>0〜3,700</span> yen per month <br>(4,070 yen including tax)</td>
                </tr>
              </table>
            </div>
          </div>

          <div class="setplan_price_wrap">
            <div class="setplan_price">
              <div class="markerTxtWrap">
                <p class="markerTxt"><span>1,540 yen OFF from the fixed price!</span></p>
              </div>
              <table class="price_list">
                <tr>
                  <td class="GB"><span>50</span>GB<br><span class="option"> + <br>24-hour unlimited calls</span></td>
                  <td class="price"><span>0〜4,980</span> yen per month <br>(5,478 yen including tax)</td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="setplan_wrap">
          <div class="plan_title">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" width="57" height="80" alt="">
            </picture>
            <h3 class="h3_1">Cost-Effective Unlimited Plan</h3>
          </div>
          <hr class="plan_hr">
          <div class="setplan_price_wrap">
            <div class="setplan_price">
              <div class="markerTxtWrap">
                <p class="markerTxt"><span>748 yen OFF from the fixed price!</span></p>
              </div>
              <table class="price_list">
                <tr>
                  <td class="GB"><span>20</span>GB<br><span class="option">＋<br>5 minutes of unlimited calls</span></td>
                  <td class="price"><span>0〜2,700</span> yen per month <br>(2,970 yen including tax)</td>
                </tr>
              </table>
            </div>

            <div class="setplan_price">
              <div class="markerTxtWrap">
                <p class="markerTxt"><span>528 yen OFF from the fixed price!</span></p>
              </div>
              <table class="price_list">
                <tr>
                  <td class="GB"><span>20</span>GB<br><span class="option">＋<br>10 minutes of unlimited calls</span></td>
                  <td class="price"><span>0〜3,000</span> yen per month <br>(3,300 yen including tax)</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="btn_outer btn_blue btn_pd">
        <a href="//maimo.app/app_member/f0d11b60c874bd4c4ee2" target="_blank">Please apply here</a>
      </div>
    </section>


    <section class="plan option">
      <div class="wrapper">
        <h2>Plan Options</h2>
        <ul class="plan_lists">
          <li>
            <div class="plan_title">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" width="57" height="80" alt="">
              </picture>
              <h3 class="h3_1">Voice SIM Plan <br>Options</h3>
            </div>
            <hr class="plan_hr">
            <ul class="option_lists option_list">
              <li>
                <h4 class="h4_1">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/option1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/option1.png" alt="" width="61" height="61">
                  </picture>
                  5 minutes of unlimited calls
                </h4>
                <p>900 yen<br>
                  <span>(990 yen including tax)</span>
                </p>
              </li>
              <li>
                <h4 class="h4_1">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/option1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/option1.png" alt="" width="61" height="61">
                  </picture>
                  10 minutes of unlimited calls
                </h4>
                <p>1,000 yen<br>
                  <span>(1,100 yen including tax)</span>
                </p>
              </li>
              <li>
                <h4 class="h4_1">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/option1.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/option1.png" alt="" width="61" height="61">
                  </picture>
                  24-hour unlimited calls
                </h4>
                <p>2,400 yen<br>
                  <span>(2,640 yen including tax)</span>
                </p>
              </li>
              <li>
                <h4 class="h4_1">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/option2.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/option2.png" alt="" width="61" height="61">
                  </picture>
                  Answering machine
                </h4>
                <p>300 yen<br>
                  <span>(330 yen including tax)</span>
                </p>
              </li>
              <li>
                <h4 class="h4_1">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/option3.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/option3.png" alt="" width="61" height="61">
                  </picture>
                  Call waiting
                </h4>
                <p>300 yen<br>
                  <span>(330 yen including tax)</span>
                </p>
              </li>
              <li>
                <h4 class="h4_1">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/option4.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/option4.png" alt="" width="61" height="61">
                  </picture>
                  Gigabyte purchase
                </h4>
                <p>500 yen per 1GB<br>
                  <span>(550 yen including tax)</span>
                </p>
              </li>
            </ul>
          </li>
          <li>
            <div class="plan_title">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon2.png" alt="" width="57" height="80">
              </picture>
              <h3 class="h3_1">Data SIM Plan <br>Options</h3>
            </div>
            <hr class="plan_hr">
            <ul class="option_lists option_list">
              <li>
                <h4 class="h4_1">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/option4.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/option4.png" alt="" width="61" height="61">
                  </picture>
                  Gigabyte purchase
                </h4>
                <p>500 yen per 1GB<br>
                  <span>(550 yen including tax)</span>
                </p>
              </li>
            </ul>
          </li>

          <li class="option_list2">
            <table>
              <tr>
                <td class="name">Call charge</td>
                <td>11 yen per 30 seconds</td>
              </tr>
            </table>
          </li>

          <li class="option_list2">
            <table>
              <tr>
                <td class="name">SMS send</td>
                <td>from 3 yen per message</td>
              </tr>
            </table>
          </li>

          <li class="option_list2 last">
            <table>
              <tr>
                <td class="name">Tethering</td>
                <td>for free</td>
              </tr>
            </table>
          </li>
        </ul>
        <p class="sub">*After exceeding the unlimited call allowance, a call charge of 11 yen per 30 seconds will apply.<br>
          <span class="mgr-10">*Emergency calls: 110, 118, 119;</span>
          <span class="mgr-10">Telephone number information: 104;</span>
          <span class="mgr-10">Sender number notification: 184, 186;</span>Speed dialing: # Dial<br>
          <span class="mgr-10">Gas stove dial: 1416,</span>
          <span class="mgr-10">other free dial: 0120, 0800;</span>
          <span class="mgr-10">Navigation dial: 0570, etc.</span>There are some numbers that are not included in the unlimited call plan.
        </p>
      </div>
    </section>

    <section class="price_reason">
      <div class="wrapper">
        <h2>How does the cost go down?</h2>
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/plan1.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/plan1.png" alt="" width="980" height="252" loading="lazy">
        </picture>
        <p>Center Mobile reduces mobile charges by returning revenue from advertising sponsors to users, making it possible to use a mobile phone with a maximum discount of 0 yen.</p>
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/plan3.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/plan3.png" alt="" width="980" height="358" loading="lazy">
        </picture>
      </div>
    </section>

    <div class="btn_outer btn_blue">
      <a href="//maimo.app/app_member/f0d11b60c874bd4c4ee2" target="_blank">Please apply here</a>
    </div>

    <section class="attention">
      <div class="wrapper">
        <div class="attention_inner">
          <h4>Terms and Conditions</h4>
          <ul>
            <?php /*<li>決済日を起算に料金が発生します。<br>手続きの不備でSIMが届いていない状態でも料金が発生します。</li>
          <li>初月の月額基本料や通話定額オプションの月額料は日割りではなく、満額でかかります。</li>*/ ?>
            <li>If you exceed a total of 5GB of data communication within 3 days (excluding the current day), your communication will be throttled to a lower speed.</li>
            <li>It takes 2 months for call charges to be billed.<br>&lt;Example&gt; Call charges for usage in April will be billed in June.</li>
          </ul>
        </div>
      </div>
    </section>

    <div class="btn_outer btn_blue">
      <a href="//maimo.app/app_member/f0d11b60c874bd4c4ee2" target="_blank">Please apply here</a>
    </div>

    <footer>
      <?php get_footer('en'); ?>
    </footer>

  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>