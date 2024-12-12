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
  <?php get_template_part('en/inc/header-new'); ?>
  <div class="mainArea">
    <!-- main -->
    <div class="main">
      <div class="section-mv">
        <div class="mv-top img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_pc_en.png" class="pc" alt="MV" loading="lazy">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_sp_en.png" class="sp" alt="MV" loading="lazy">
        </div>
        <div class="mv_bottom">
          <div class="mv-text">
            <h1 class="mv-title">Maximum discount of 0 yen&nbsp;<br> for mobile charges</h1>
            <p class="mv-subtitle">Center Mobile's low-cost SIM</p>
          </div>
          <div class="mv-btn-group">
            <a href="#" class="mv-btn btn-common">
              Read more
            </a>
            <a href="https://hakaku.centermobile.co.jp/?direct=1&lang=ja" class="mv-btn btn-common" target="_blank">
            Apply on the web
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
          </div>
          <div class="mv_person en img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_person.png" alt="person">
          </div>
        </div>
      </div>
      <section class="section-topic">
        <div class="section-title">Topics</div>
        <div class="topic-slider">
          <div class="slide-item img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/topic_2.png" alt="topic" loading="lazy">
          </div>
          <div class="slide-item img-wrap">
            <a href="https://wimax.plaio.jp/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/topic_3.png" alt="topic" loading="lazy">
            </a>
          </div>
          <div class="slide-item img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/topic_2.png" alt="topic" loading="lazy">
          </div>
          <div class="slide-item img-wrap">
            <a href="https://wimax.plaio.jp/" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/topic_3.png" alt="topic" loading="lazy">
            </a>
          </div>
        </div>
      </section>
      <section class="section-service">
        <div class="section-title">Service</div>
        <div class="service-block service-1">
          <div class="service-img img-wrap">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_1_sp.png" media="(max-width: 1024px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_1.png" alt=service” loading="lazy">
            </picture>
          </div>
          <div class="service-content">
            <div class="service-icon img_wrap">
              <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_icon_1.png" alt="CENTER MOBILE">
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_icon_1_sp.png" alt="CENTER MOBILE">
            </div>
            <p class="service-title">Low-cost SIM Service　<br class="sp">Center Mobile</p>
            <p class="service-subtitle">Save up to 0 yen on mobile charges!</p>
            <p class="service-desc">A low-cost SIM service that allows you to save up to 0 yen by using points. You can earn points by watching ads, playing various games, downloading apps, and applying for services.</p>
            <a href="#" class="service-btn btn-common">
              Read more
            </a>
          </div>
        </div>
        <div class="service-block service-2">
          <div class="service-img img-wrap">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_2_sp.png" media="(max-width: 1024px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_2.png" alt=service” loading="lazy">
            </picture>
          </div>
          <div class="service-content">
            <div class="service-icon img_wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_icon_2.png" alt="PLAIO WiMAX">
            </div>
            <p class="service-title">Low-cost Wi-Fi service　<br class="sp">PLAIO WiMAX</p>
            <p class="service-subtitle">Unlimited data! High-speed communication!</p>
            <p class="service-desc">Unlimited data and 5G high-speed Wi-Fi&lt;PLAIO WiMAX>! Get even better deals when you subscribe with a SIM.</p>
            <a href="https://wimax.plaio.jp/" class="service-btn btn-common" target="_blank">
            Read more
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
          </div>
        </div>
        <div class="service-block service-3">
          <div class="service-img img-wrap">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_3_sp.png" media="(max-width: 1024px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_3.png" alt=service” loading="lazy">
            </picture>
          </div>
          <div class="service-content">
            <div class="service-icon img_wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_icon_3.png" alt="CENTER MOBILE">
            </div>
            <p class="service-title">Cheap Passport Service　<br class="sp">PLAIO Travel</p>
            <p class="service-subtitle">Enjoy travel and business trips at great prices! Enjoy lots of fun with the money you save!</p>
            <p class="service-desc">A travel service that allows you to book airline tickets with accommodation and Shinkansen tickets at low prices, making it possible to travel or go on business trips at a reasonable price.
            You can even use it for your family and it is very economical.</p>
            <?php /*
            <a href="https://maimo.app/travel" target="_blank" class="service-btn btn-common">
              詳しく見る
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
            */ ?>
          </div>
        </div>
      </section>
      <section class="section-news">
        <div class="section-title">News</div>
        <div class="news-block">
          <div class="news-tabs" id="newsTabs">
            <a id="tab1">Announcement</a>
            <?php /*
            <a id="tab2">IR News</a>
            */ ?>
          </div>
          <div class="news-container">
            <div class="container" id="tab1C">
              <ul class="news-list">
                <?php $args = array(
                  'posts_per_page' => 5
                );
                $posts = get_posts($args);
                if (!empty($posts)) :
                  foreach ($posts as $post) : // ループの開始
                    setup_postdata($post); // 記事データの取得
                ?>
                    <li class="news-item">
                      <a href="<?php the_permalink(); ?>">
                        <div class="news-item-info">
                          <div class="date"><?php the_time('d/m/Y') ?></div>
                          <div class="tag"><?php echo get_the_category()[0]->name; ?></div>
                        </div>
                        <p class="news-item-title"><?php the_title(); ?></p>
                      </a>
                    </li>
                  <?php
                  endforeach; // ループの終了
                elseif (empty($posts)) :  //もし記事が空だったら　
                  ?>
                  <li class="news-item">
                    <p class="news-item-title">お知らせはありません</p>
                  </li>
                <?php endif; ?>
              </ul>
              <?php
              if (!empty($posts)) :
              ?>
                <a href="<?php echo esc_url(home_url('/')); ?>en/media-archive/" class="news-btn btn-common">
                View List
                </a>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
            </div>
            <!--
            <div class="container" id="tab2C">
              <ul class="news-list">
                <?php $args = array(
                  'post_type' => 'ir',
                  'posts_per_page' => 5
                );
                $posts = get_posts($args);
                if (!empty($posts)) :
                  foreach ($posts as $post) : // ループの開始
                    setup_postdata($post); // 記事データの取得
                ?>
                    <li class="news-item">
                      <a href="<?php the_permalink(); ?>">
                        <div class="news-item-info">
                          <div class="date"><?php the_time('Y年m月d日') ?></div>
                          <div class="tag"><?php echo get_the_terms($post->ID, 'ir_category')[0]->name; ?></div>
                        </div>
                        <p class="news-item-title"><?php the_title(); ?></p>
                      </a>
                    </li>
                  <?php
                  endforeach; // ループの終了
                elseif (empty($posts)) :  //もし記事が空だったら　
                  ?>
                  <li class="news-item">
                    <p class="news-item-title">IRニュースはありません</p>
                  </li>
                <?php endif; ?>
              </ul>
              <?php
              if (!empty($posts)) :
              ?>
                <a href="<?php echo esc_url(home_url('/')); ?>en/ir/" class="news-btn btn-common">
                  一覧を見る
                </a>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
            </div>
            -->
          </div>
        </div>
      </section>

      <section class="section-about about-fc">
        <div class="about-block">
          <div class="about-content">
            <div class="about-title">FC/OEM</div>
            <div class="about-img img-wrap sp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_1.png" alt="about" loading="lazy">
            </div>
            <p class="about-desc">
            Center Mobile is engaged in FC and OEM business.<br>
            As a partner, we provide full support and consistent service.
            </p>
            <a href="<?php echo esc_url(home_url('/')); ?>en/fc/" class="about-btn btn-common">Read more</a>
          </div>
          <div class="about-img img-wrap pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_1.png" alt="about" loading="lazy">
          </div>
        </div>
      </section>

      <section class="section-about about-ir">
        <div class="about-block">
          <div class="about-content">
            <div class="about-title">IR Information</div>
            <div class="about-img img-wrap sp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_2.png" alt="about" loading="lazy">
            </div>
            <p class="about-desc">
            The latest IR materials and information for individual investors are posted.
            </p>
            <?php /*
            <a href="<?php echo esc_url(home_url('/')); ?>en/ir/" class="about-btn btn-common">詳しく見る</a>
            */ ?>
          </div>
          <div class="about-img img-wrap pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_2.png" alt="about" loading="lazy">
          </div>
        </div>
      </section>
      <section class="section-about about-recruit">
        <div class="about-block">
          <div class="about-content">
            <div class="about-title">Careers</div>
            <div class="about-img img-wrap sp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_3.png" alt="about" loading="lazy">
            </div>
            <p class="about-desc">
            At Center Mobile, we are looking for new graduates and graduates in a variety of positions.
            </p>
            <?php /*
            <a href="#" class="about-btn btn-common">詳しく見る</a>
            */ ?>
          </div>
          <div class="about-img img-wrap pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_3.png" alt="about" loading="lazy">
          </div>
        </div>
      </section>
    </div>
    <!-- /main -->
  </div>
  <?php get_template_part('en/inc/footer-new'); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>

  <?php wp_footer(); ?>

  <?php get_template_part('inc/chat'); ?>

</body>