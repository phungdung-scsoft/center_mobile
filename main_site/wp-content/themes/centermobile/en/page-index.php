<?php
/*
  Template Name: en-index
  Template Post Type: page
  Template Path: en/
  */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body id="pTop" class="en-page website type-<?= $GLOBALS['gl_path']; ?>">
  <div class="hArea">
    <!-- header -->
    <header>
      <div class="hLogo">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo.png" alt="CENTER MOBILE" class="pc" width="138" height="75" loading="lazy">
        </picture>
        <a href="<?php echo esc_url(home_url('/')); ?>en/" class="sp">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo_sp.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo_sp.png" alt="CENTER MOBILE" width="292" height="28" loading="lazy">
          </picture>
        </a>
      </div>
      <ul class="headerUl">
        <li class="sp">
          <a href="https://maimo.app/login" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_bnr_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_bnr_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?> Login" width="151" height="38">
            </picture>
          </a>
        </li>
        <li class="menuBtn sp">
          <div class="menu-trigger">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <nav class="gnav">
            <div class="gnav__wrap">
              <ul class="gnav__menu f700">
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/discount/">Mechanism of discount</a></li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/plan/">Rates and services</a></li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/app/">How to use the app</a></li>
                <li class="gnav__menu__item">
                  <a href="javascript:void(0);" class="accordion-parent">Web application</a>
                  <ul class="accordion-child">
                    <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">Apply for SIM</a></li>
                    <li><a href="https://wimax.plaio.jp/" target="_blank">Apply for PLAIO WiMAX</a></li>
                  </ul>
                </li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/company/">Corporate information</a></li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/fc/">FC・OEM</a></li>
                <?php
                $count_custom_post = wp_count_posts('topics-en')->publish;
                if ($count_custom_post > 0) :
                ?>
                  <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/media-archive/">The Topics</a></li>
                <?php endif; ?>
                <?php
                $count_custom_post = wp_count_posts('column')->publish;
                if ($count_custom_post > 0) :
                ?>
                  <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/column/">Column</a></li>
                <?php endif; ?>
                <?php
                if (false) :
                ?>
                  <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/store/">List of stores</a></li>
                  <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/media-appearances/">List of published media</a></li>
                <?php endif; ?>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/contact-top/">Contact us</a></li>
                <?php
                if (false) :
                ?>
                  <li class="gnav__menu__item">
                    <a href="javascript:void(0);" class="accordion-parent">A helpful guide</a>
                    <ul class="accordion-child">
                      <li><a href="<?php echo esc_url(home_url('/')); ?>en/guide/mnp/">What is MNP?</a></li>
                    </ul>
                  </li>
                <?php endif; ?>
                <?php
                $count_custom_post = wp_count_posts('ir-en')->publish;
                if ($count_custom_post > 0) :
                ?>
                  <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/ir/">IR news</a></li>
                <?php endif; ?>
              </ul>
              <!-- <a href=""><?= $GLOBALS['gl_service']; ?> Login</a> -->
              <a href="javascript:void(0);" class="language_btn">
                <span>日本語</span>
              </a>
            </div><!--gnav-wrap-->
          </nav>
        </li>
      </ul>
    </header><!-- /header -->



    <!-- nav -->
    <nav class="pc">
      <ul>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/discount/">Mechanism of discount</a></li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/plan/">Rates and services</a></li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/app/">How to use the app</a></li>
        <li class="gnav__menu__item">
          <a href="javascript:void(0);" class="accordion-parent">Web application</a>
          <ul class="accordion-child">
            <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">Apply for SIM</a></li>
            <li><a href="https://wimax.plaio.jp/" target="_blank">Apply for PLAIO WiMAX</a></li>
          </ul>
        </li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/company/">Corporate information</a></li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/fc/">FC・OEM</a></li>
        <?php
        $count_custom_post = wp_count_posts('topics-en')->publish;
        if ($count_custom_post > 0) :
        ?>
          <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/media-archive/">The Topics</a></li>
        <?php endif; ?>
        <?php
        $count_custom_post = wp_count_posts('column')->publish;
        if ($count_custom_post > 0) :
        ?>
          <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/column/">Column</a></li>
        <?php endif; ?>
        <?php
        if (false) :
        ?>
          <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/store/">List of stores</a></li>
          <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/media-appearances/">List of published media</a></li>
        <?php endif; ?>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/contact-top/">Contact us</a></li>
        <?php
        if (false) :
        ?>
          <li class="gnav__menu__item">
            <a href="javascript:void(0);" class="accordion-parent">A helpful guide</a>
            <ul class="accordion-child">
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/guide/mnp/">What is MNP?</a></li>
            </ul>
          </li>
        <?php endif; ?>
        <?php
        $count_custom_post = wp_count_posts('ir-en')->publish;
        if ($count_custom_post > 0) :
        ?>
          <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>en/ir/">IR news</a></li>
        <?php endif; ?>
      </ul>
      <a href="https://maimo.app/login" target="_blank">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_bnr_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_bnr_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?> Login" width="151" height="38">
        </picture>
      </a>
      <a href="javascript:void(0);" class="language_btn">
        <span>日本語</span>
      </a>
    </nav>
    <!-- /nav -->
  </div>

  <div class="mainArea">
    <!-- <h1>CENTER MOBILE</h1> -->
    <!-- cover -->
    <div id="cover">
      <div class="slider">
        <div class="slider-item">
          <a href="https://wimax.plaio.jp/" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>_sp.webp" media="(max-width: 768px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>_sp.png" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>.png" alt="PLAIO WiMAX" width="2400" height="1200">
            </picture>
          </a>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>_sp.webp?1" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>_sp.png?1" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>.webp?1" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>.png?1" alt="The era of deciding your own mobile phone charges!" loading="lazy" width="2400" height="1200">
          </picture>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>_sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>_sp.png" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_light']; ?>" loading="lazy" width="2400" height="1200">
          </picture>
        </div>
      </div>

      <div class="thumb pc">
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>.png" alt="PLAIO WiMAX" class="pc" loading="lazy" width="258" height="129">
          </picture>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>.png" alt="The era of deciding your own mobile phone charges!" class="pc" loading="lazy" width="258" height="129">
          </picture>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_light']; ?>" class="pc" loading="lazy" width="258" height="129">
          </picture>
        </div>
      </div>
    </div>
    <!-- /cover -->


    <div id="main">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $the_query = new WP_Query(array(
        'post_status' => 'publish',
        'post_type' => 'topics-en', //　ページの種類（例、page、post、カスタム投稿タイプ名）
        'paged' => $paged,
        'posts_per_page' => 4, // 表示件数
        'orderby' => 'date',
        'order' => 'DESC'
      ));
      if ($the_query->have_posts()) :
      ?>
        <section class="content11">
          <div class="inner">
            <h2>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con11_tit.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con11_tit.png" alt="Topics" width="236" height="72" loading="lazy">
              </picture>
            </h2>
            <ul>
              <?php
              while ($the_query->have_posts()) : $the_query->the_post();
              ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <dl>
                      <?php if (has_post_thumbnail()) : //if文による条件分岐 アイキャッチが有る時 
                      ?>
                        <dt><?php the_post_thumbnail(array(193, 193), array('class' => 'left')); ?></dt>
                      <?php else : // アイキャッチが無い時 
                      ?>
                        <dt>
                          <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_topics.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_topics.png" alt="" width="193" height="193" loading="lazy" class="logo">
                          </picture>
                        </dt>
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
              <?php
              endwhile;
              wp_reset_postdata(); // 直前のクエリを復元する
              ?>
            </ul>
            <a href="<?php echo esc_url(home_url('/')); ?>en/media-archive/">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/btn01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/btn01.png" alt="Learn more" width="600" height="87" loading="lazy">
              </picture>
            </a>
          </div>
        </section>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

      <section class="content01 fuki">
        <div class="inner">
          <h2 class="mainTit">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con01_tit01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con01_tit01.png" alt="Get discounts up to 0 yen on your mobile phone charges!" width="822" height="87">
            </picture>
          </h2>
          <a href="<?php echo esc_url(home_url('/')); ?>en/discount/" class="btn03">Click here for the mechanism of discount</a>

          <div class="titImg">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con01_tit02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con01_tit02.png" alt="The plans are simple. There are two main pricing plans." width="826" height="154" loading="lazy">
            </picture>
          </div>

          <ul>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con01_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con01_img01.png" alt="Telephone and internet access available. Voice SIM plan. This is a plan with included calls." width="516" height="297" loading="lazy">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con01_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con01_img02.png" alt="Only available on the internet. Data SIM plan. Recommended for those who want to use it for data communication on a laptop or tablet without tethering or Wi-Fi!" width="516" height="298" loading="lazy">
              </picture>
            </li>
          </ul>
        </div>
      </section>

      <section class="content02">
        <h2>
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con2_tit02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con2_tit02.png" alt="Just choose the capacity you want to use" width="616" height="116" loading="lazy">
          </picture>
        </h2>
        <div class="inner">
          <ul class="capacityList">
            <li class="type1">
              <h3 class="heading">Try it first!</h3>
              <div class="capacityContent">
                <p class="capacity"><span>3</span>GB</p>
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span>Voice SIM plan</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>1,280</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">1,408 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">This is a plan with included calls</p>
                  </div>
                  <div class="plan data">
                    <h4 class="heading"><span>Data SIM plan</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>1,180</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">1,298 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">It is possible to make a call by the call app</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type2">
              <h3 class="heading">You can use cheaply!</h3>
              <div class="capacityContent">
                <p class="capacity"><span>12</span>GB</p>
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span>Voice SIM plan</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>1,780</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">1,958 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">This is a plan with included calls</p>
                  </div>
                  <div class="plan data">
                    <h4 class="heading"><span>Data SIM plan</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>1,680</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">1,848 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">It is possible to make a call by the call app</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type3">
              <h3 class="heading">Perfect for daily use!</h3>
              <div class="capacityContent">
                <p class="capacity"><span>20</span>GB</p>
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span>Voice SIM plan</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>2,480</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">2,728 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">This is a plan with included calls</p>
                  </div>
                  <div class="plan data">
                    <h4 class="heading"><span>Data SIM plan</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>2,280</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">2,508 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">It is possible to make a call by the call app</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type4">
              <h3 class="heading">I want to use it!</h3>
              <div class="capacityContent">
                <p class="capacity"><span>50</span>GB</p>
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span>Voice SIM plan</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>3,980</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">4,378 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">This is a plan with included calls</p>
                  </div>
                  <div class="plan data">
                    <h4 class="heading"><span>Data SIM plan</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>3,780</span>yen</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">4,158 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">It is possible to make a call by the call app</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type5">
              <h3 class="heading">24-Hour Unlimited Talk Set Plan</h3>
              <div class="capacityContent">
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span><span>3</span>GB + <br class="sp"><span>24</span>-hour unlimited calls</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>770 yen OFF from the fixed price!</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>2,980</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">3,278 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">This is a plan with included calls</p>
                  </div>
                  <div class="plan voice">
                    <h4 class="heading"><span><span>20</span>GB + <br class="sp"><span>24</span>-hour unlimited calls</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>1,298 yen OFF from the fixed price!</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>3,700</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">4,070 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">This is a plan with included calls</p>
                  </div>
                </div>
                <div class="planWrap jc-center">
                  <div class="plan voice">
                    <h4 class="heading"><span><span>50</span>GB + <br class="sp"><span>24</span>-hour unlimited calls</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>1,540 yen OFF from the fixed price!</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>4,980</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">5,478 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">This is a plan with included calls</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type5">
              <h3 class="heading">Cost-Effective Unlimited Plan</h3>
              <div class="capacityContent">
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span><span>20</span>GB + <br class="sp"><span>5</span> minutes of unlimited calls</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>748 yen OFF from the fixed price!</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>2,700</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">2,970 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">This is a plan with included calls</p>
                  </div>
                  <div class="plan voice">
                    <h4 class="heading"><span><span>20</span>GB + <br class="sp"><span>10</span> minutes of unlimited calls</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>528 yen OFF from the fixed price!</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>Monthly fee</span></div>
                          <div class="price">
                            <p class="max"><span>3,000</span>yen</p>
                            <p class="min">〜<span>0</span>yen</p>
                          </div>
                        </div>
                        <p class="tax">3,300 yen(including tax)</p>
                      </div>
                    </div>
                    <p class="notes">This is a plan with included calls</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" class="cvBtn" target="_blank">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/cv_btn.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/cv_btn.png" alt="No matter what plan you use, you can get a discount of up to 0 yen! Apply here" width="917" height="235" loading="lazy">
          </picture>
        </a>
      </section>

      <section class="content04">
        <div class="inner">
          <h2>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_tit.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_tit.png" alt="Recommended for - Why not try out the new generation of budget smartphones? -" width="667" height="118" loading="lazy">
            </picture>
          </h2>
          <div class="chArea">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_img01_sp.webp" media="(max-width: 768px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_img01_sp.png" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_img01.png" alt="I'm worried about data limits. I want a SIM that I can use anywhere. I'm worried about the high monthly fees. I want to use a low-cost SIM, but I want to keep using my current smartphone. I use it for work, so slow speeds are a problem." width="754" height="260" loading="lazy">
            </picture>
          </div>
        </div>

        <div class="pnArea">
          <div>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_img02_sp.webp" media="(max-width: 768px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_img02_sp.png" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con4_img02.png" alt="Reduce your mobile phone bills. With the money that was saved. For children's lessons and family trips." width="1530" height="436" loading="lazy">
            </picture>
          </div>
        </div>
      </section>

      <section class="content05">
        <div class="titArea fuki">
          <h2>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_tit.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_tit.png" alt="Six characteristics that define a new era" width="742" height="145" loading="lazy">
            </picture>
          </h2>
        </div>
        <div class="inner">
          <ul>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img01_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img01_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img01.png" alt="Features 01. Monthly mobile phone charges At most 0 yen discount" loading="lazy" width="1040" height="420">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img02_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img02_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img02.png" alt="Features 02. Comfortable High-speed communication environment" loading="lazy" width="1040" height="386">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img03_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img03_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img03.png" alt="Features 03. Cheap calling charges" loading="lazy" width="496" height="478">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img04_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img04_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img04.png" alt="Features 04. Safe and secure docomo network" loading="lazy" width="496" height="478">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img05_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img05_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img05.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img05.png" alt="Features 05. Industry first technology Patent pending" loading="lazy" width="496" height="478">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img06_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img06_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img06.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con5_img06.png" alt="Features 05. No need to buy a new device! You can use your current smartphone as it is" loading="lazy" width="496" height="478">
              </picture>
              <p>
                * You will need to set up the APN.<br>
                * There may also be models that are not supported.
              </p>
            </li>
          </ul>
          <a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" class="cvBtn" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/cv_btn.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/cv_btn.png" alt="No matter what plan you use, you can get a discount of up to 0 yen! Apply here" width="917" height="235" loading="lazy">
            </picture>
          </a>
        </div>
      </section>
      <section class="content06">
        <div class="inner">
          <h2>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con6_tit.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con6_tit.png" alt="At CENTER MOBILE You can get up to 0 yen off your mobile phone bill." width="875" height="273" loading="lazy">
            </picture>
          </h2>
          <dl>
            <dt>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con6_img_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con6_img_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con6_img.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con6_img.png" alt="" loading="lazy" width="1045" height="664">
              </picture>
            </dt>
            <dd>
              <span>By viewing sponsored ads or using services</span>, you can <span>accumulate points</span>. By applying these points to <span>your mobile charges, it is possible to get a discount up to 0 yen!</span>
            </dd>
          </dl>

          <a href="<?php echo esc_url(home_url('/')); ?>en/discount/" class="btn03">The mechanism of discount is here</a>
        </div>
      </section>

      <section class="content07">
        <div class="inner">
          <dl>
            <dt>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con7_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con7_img01.png" alt="" width="275" height="403" loading="lazy">
              </picture>
            </dt>
            <dd>
              <h3>
                TV and video streaming sites are free because they can receive advertising fees from sponsors by delivering ads to viewers.
              </h3>
              <div class="txtArea">
                <p>
                  Center Mobile has adopted that mechanism into the mobile industry.
                </p>
                <p>
                  In the <span>member-exclusive app "<?= $GLOBALS['gl_service']; ?>"</span>, we deliver ads tailored to your needs. <br>
                  By <span>watching these ads</span>, <span>you can accumulate points</span>, which can then be used to offset your mobile charges.
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>en/app/" class="btn03">Click here to view how to use the app</a>
              </div>
            </dd>
          </dl>
          <div class="maimo">
            <h4>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?>" width="228" height="212" loading="lazy">
              </picture>
            </h4>
            <div class="txtArea">
              <h5>Member-exclusive app <br class="sp"><?= $GLOBALS['gl_service']; ?></h5>
              <p>■Earn points by watching ads and save on your mobile charges.</p>
              <p>■You can check your monthly usage fees, data balance (gigabytes), and use your points all from the app.</p>
              <div class="ap">
                <a href="//apps.apple.com/us/app/maimo/id1554806667?itsct=apps_box_link&itscg=30200" target="_blank">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/app.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/app.png" alt="Download on the App Store" width="148" height="54" loading="lazy">
                  </picture>
                </a>
                <a href="//play.google.com/store/apps/details?id=jp.co.Maimo&hl=en" target="_blank">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/google.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/google.png" alt="GET IT ON Google Play" width="182" height="54" loading="lazy">
                  </picture>
                </a>
              </div>
              <a href="https://maimo.app/login" target="_blank"><span>To the member-exclusive page</span></a>
            </div>
          </div>
        </div>
      </section>

      <?php
      /*
    <section class="content08">
      <h2><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con8_tit.png" alt="動画でもっと詳しく"  width="618" height="80"></span></h2>
      <div class="inner">
        <iframe class="videoDefer" data-src="https://www.youtube.com/embed/ZP7LCZBCbvs?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01.png" alt="もっと詳しく" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01_on.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01.png'" width="600" height="87"></a>
      </div>
    </section>
    */
      ?>

      <section class="content09">
        <div class="inner">
          <h2>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con09_tit.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con09_tit.png" alt="FAQ" width="220" height="80" loading="lazy">
            </picture>
          </h2>
          <ul>
            <li>
              <div class="que">What does it mean by "discount up to 0 yen"?</div>
              <div class="ans">
                <div class="txtAera">
                  By <span>viewing sponsored ads or using services</span> from the member-exclusive app, <span>advertising revenue is generated</span> for Center Mobile.<br>
                  This advertising revenue is then <span>returned to users as points</span>.<br>
                  Users can apply these points to their mobile charges, <span>potentially reducing their bill to as low as 0 yen</span>.
                </div>
                <div class="imgArea">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con9_img01.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con9_img01.png" alt="" width="333" height="238" loading="lazy">
                  </picture>
                </div>
              </div>
            </li>

            <li>
              <div class="que">What kind of ads do you earn points?</div>
              <div class="ans">
                <div class="txtAera">
                  Not only video ads, but also app downloads, product purchases, and applications for internet and other services can earn you points.<br>
                  If you apply for your monthly internet fees through <?= $GLOBALS['gl_service']; ?>, you can efficiently accumulate points.
                </div>
                <div class="imgArea">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con9_img02.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con9_img02.png" alt="" width="370" height="369" loading="lazy">
                  </picture>
                </div>
              </div>
            </li>

            <li>
              <div class="que">I live in the suburbs, but does the radio wave reach?</div>
              <div class="ans">
                <div class="txtAera">
                  Because it is a safe docomo line, if the radio wave of docomo arrives, you can use it without problems!
                </div>
                <div class="imgArea">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con9_img03.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con9_img03.png" alt="Safe and secure docomo network" width="420" height="386" loading="lazy">
                  </picture>
                </div>
              </div>
            </li>
          </ul>
          <!-- <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01.png" alt=""></a> -->
        </div>
      </section>

      <section class="content12">
        <div class="inCon01">
          <a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con12_bnr_sp.webp" media="(max-width: 768px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con12_bnr_sp.png" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con12_bnr.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/con12_bnr.png" alt="On your smartphone Switch now Easy application here" width="1160" height="380" loading="lazy">
            </picture>
          </a>
        </div>

        <div class="inCon02">
          <h3 class="fuki">
            Repair and screen coating <br class="sp">at the center mobile store!
          </h3>
          <div class="inner">
            <dl>
              <dt>
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_img01.png" alt="センターモバイル店舗ではスマホ修理や画面のコーティングも行っております。" width="407" height="453" loading="lazy">
                </picture>
              </dt>
              <dd>
                <h4>
                  At Center Mobile stores, in addition to <span>SIM contract services</span> and <span>customer support</span>, we also offer <span>smartphone repairs</span> and <span>screen coating services</span>.
                </h4>
                <p class="sp">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_img01_sp.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_img01_sp.png" alt="センターモバイル店舗ではスマホ修理や画面のコーティングも行っております。" width="623" height="389" loading="lazy">
                  </picture>
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>en/store/">Find the list of stores here</a>
              </dd>
            </dl>
          </div>
        </div>
      </section>

      <div class="bnrArea">
        <ul class="inner">
          <li>
            <a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/cv_bnr02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/cv_bnr02.png" alt="No matter how much you use, you'll get a discount up to 0 yen! Online application" width="312" height="91" loading="lazy">
              </picture>
            </a>
          </li>
          <li><a href="https://maimo.app/login" target="_blank" class="maiBtn"><?= $GLOBALS['gl_service']; ?> Login</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>en/contact-top/" class="conBtn">Contact us</a></li>
        </ul>
      </div>
    </div><!-- /#main -->

    <div class="bNavMask"></div>
    <div class="bNavWebBalloon">
      <ul>
        <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">Apply for SIM</a></li>
        <li><a href="https://wimax.plaio.jp/" target="_blank">Apply for PLAIO WiMAX</a></li>
      </ul>
    </div>

    <div class="bNav sp">
      <ul>
        <li>
          <a href="javascript:void(0);" class="webRequestBtn">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/bnav_01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/bnav_01.png" alt="WEB Apply" width="117" height="66" loading="lazy">
            </picture>
          </a>
        </li>
        <li>
          <a href="https://maimo.app/login" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnav_02_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnav_02_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?> Login" width="129" height="72" loading="lazy">
            </picture>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>en/contact-top/">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/bnav_03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/top/bnav_03.png" alt="Contact" width="111" height="62" loading="lazy">
            </picture>
          </a>
        </li>
      </ul>
    </div>

    <!-- <p id="pageTop"><a href="#pTop"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/pagetop_off.png" alt="ページトップへ"></a></p> -->


    <!-- footer -->
    <footer>
      <div class="fInner">
        <div class="navArea">
          <div class="inner">
            <ul>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/">TOP</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/discount/">Mechanism of discount</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/plan/">Rates and services</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/app/">How to use the app</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/company/">Corporate information</a></li>
              <li><a href="https://maimo.app/login" target="_blank"><?= $GLOBALS['gl_service']; ?> Login</a></li>
              <li>
                Web application
                <ul>
                  <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">Apply for SIM</a></li>
                  <li><a href="https://wimax.plaio.jp/" target="_blank">Apply for PLAIO WiMAX</a></li>
                </ul>
              </li>
            </ul>

            <ul>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/fc/">Those considering FC and OEM</a></li>
              <?php
              $count_custom_post = wp_count_posts('topics-en')->publish;
              if ($count_custom_post > 0) :
              ?>
                <li><a href="<?php echo esc_url(home_url('/')); ?>en/media-archive/">The Topics</a></li>
              <?php endif; ?>
              <?php
              $count_custom_post = wp_count_posts('column')->publish;
              if ($count_custom_post > 0) :
              ?>
                <li><a href="<?php echo esc_url(home_url('/')); ?>en/column/">Column</a></li>
              <?php endif; ?>
              <?php
              if (false) :
              ?>
                <li><a href="<?php echo esc_url(home_url('/')); ?>en/store/">List of stores</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>en/media-appearances/">List of published media</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>en/policy/">Privacy policy</a></li>
              <?php endif; ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/contact-top/">Contact us</a></li>
              <?php
              if (false) :
              ?>
                <li>
                  A helpful guide
                  <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>en/guide/mnp/">What is MNP?</a></li>
                  </ul>
                </li>
              <?php endif; ?>
              <?php
              $count_custom_post = wp_count_posts('ir-en')->publish;
              if ($count_custom_post > 0) :
              ?>
                <li><a href="<?php echo esc_url(home_url('/')); ?>en/ir/">IR news</a></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>

        <div class="logoArea">
          <div class="inner">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/f_aicon01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/f_aicon01.png" alt="CENTER MOBILE" width="155" height="85" loading="lazy">
            </picture>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/f_aicon02_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/f_aicon02_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?>" width="107" height="99" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
      <p class="recaptchaText">This site is protected by reCAPTCHA and subject to Google's <a href="https://policies.google.com/privacy?hl=en-US" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms?hl=en-US" target="_blank">Terms of Service</a>.</p>
      <p class="copyright"><small>Copyright (C) CENTER MOBILE All rights reserved.</small></p>
    </footer>
    <!-- /footer -->
  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

  <?php wp_footer(); ?>

  <?php get_template_part('inc/chat'); ?>

</body>