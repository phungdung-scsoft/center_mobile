<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body id="pTop" class="website type-<?= $GLOBALS['gl_path']; ?>">
  <?php get_template_part('inc/header-new'); ?>
  <div class="mainArea">
    <!-- main -->
    <div class="main">
      <div class="section-mv">
        <div class="mv-top img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_pc.png" alt="MV" loading="lazy">
        </div>
        <div class="mv_bottom">
          <div class="mv-text">
            <h1 class="mv-title">携帯料金が<br class="sp">最大割引で0円</h1>
            <p class="mv-subtitle">センターモバイルの格安SIM</p>
          </div>
          <div class="mv-btn-group">
            <a href="<?php echo esc_url(home_url('/')); ?>about-sim/" class="mv-btn btn-common">
              詳しく見る
            </a>
            <a href="https://hakaku.centermobile.co.jp/?direct=1&lang=ja" class="mv-btn btn-common" target="_blank">
              WEBから申し込む
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
          </div>
          <div class="mv_person img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_person.png" alt="person">
          </div>
        </div>
      </div>
      <section class="section-topic">
        <div class="section-title">トピックス</div>
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
        <div class="section-title">サービス</div>
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
            <p class="service-title">格安SIMサービス　<br class="sp">センターモバイル</p>
            <p class="service-subtitle">携帯料金最大で0円まで割引！</p>
            <p class="service-desc">ポイントを利用することで、最大0円まで割引可能な格安SIMサービス。広告視聴や各種ゲーム、アプリのダウンロード、サービスの申し込みなどでポイントを貯められます。</p>
            <a href="<?php echo esc_url(home_url('/')); ?>about-sim/" class="service-btn btn-common">
              詳しく見る
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
            <p class="service-title">格安Wi-Fiサービス　<br class="sp">PLAIO WiMAX</p>
            <p class="service-subtitle">データ無制限！高速通信！</p>
            <p class="service-desc">データ容量無制限・5G対応の高速通信Wi-Fi＜PLAIO WiMAX＞！SIMとセットで契約すると更にお得に。</p>
            <a href="https://wimax.plaio.jp/" class="service-btn btn-common" target="_blank">
              詳しく見る
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
            <p class="service-title">格安旅券サービス　<br class="sp">PLAIO トラベル</p>
            <p class="service-subtitle">旅行も出張もお得に行ける！浮いたお金でたくさん遊べる！</p>
            <p class="service-desc">宿泊付きの航空券や、新幹線チケットなどが格安で予約でき、お得に旅行や出張に行くことが可能なトラベルサービス。家族まで使えてとってもお得。</p>
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
        <div class="section-title">ニュース</div>
        <div class="news-block">
          <div class="news-tabs" id="newsTabs">
            <a id="tab1">お知らせ</a>
            <?php /*
            <a id="tab2">IRニュース</a>
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
                          <div class="date"><?php the_time('Y年m月d日') ?></div>
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
                <a href="<?php echo esc_url(home_url('/')); ?>media-archive/" class="news-btn btn-common">
                  一覧を見る
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
                <a href="<?php echo esc_url(home_url('/')); ?>ir/" class="news-btn btn-common">
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
            <div class="about-title">FC・OEM</div>
            <div class="about-img img-wrap sp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_1.png" alt="about" loading="lazy">
            </div>
            <p class="about-desc">
              センターモバイルではFC・OEM事業を展開しております。<br>
              ともに歩むパートナーとして充実したサポートと一貫したサービスを提供いたします。
            </p>
            <a href="<?php echo esc_url(home_url('/')); ?>fc/" class="about-btn btn-common">詳しく見る</a>
          </div>
          <div class="about-img img-wrap pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_1.png" alt="about" loading="lazy">
          </div>
        </div>
      </section>

      <section class="section-about about-ir">
        <div class="about-block">
          <div class="about-content">
            <div class="about-title">IR情報</div>
            <div class="about-img img-wrap sp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_2.png" alt="about" loading="lazy">
            </div>
            <p class="about-desc">
              最新のIR資料や個人投資家向けの情報を掲載しています。
            </p>
            <?php /*
            <a href="<?php echo esc_url(home_url('/')); ?>ir/" class="about-btn btn-common">詳しく見る</a>
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
            <div class="about-title">採用情報</div>
            <div class="about-img img-wrap sp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_3.png" alt="about" loading="lazy">
            </div>
            <p class="about-desc">
              センターモバイルでは、新卒/既卒を問わず、様々な職種の人材を募集しております。
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
  <?php get_template_part('inc/footer-new'); ?>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>

  <?php wp_footer(); ?>

  <?php get_template_part('inc/chat'); ?>

</body>