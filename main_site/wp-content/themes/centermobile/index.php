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

      <!-- <ul class="slider pc_only">
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_mv_cm_cs.png" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_mv_maimo_cs.png" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_mv_cm_cs.png" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_mv_maimo_cs.png" alt=""></li>
      </ul> -->
      <div class="mv_wrapper pc_only">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_mv_cm_cs.png" alt="">
      </div>

      <div class="mv_wrapper sp_tab_only">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_mv_cm_sp.png" alt="">
      </div>

      <a class="login_btn_top pc_only" href="//maimo.app/login"><p class="login_top">Maimo Login</p></a>

      <section class="point">
        <div class="wrapper wrapper2 mb-30">
          <h2>CM公開中!!</h2>
          <?php echo do_shortcode('[video id=639]'); ?>
        </div>
        <div class="wrapper wrapper2">
        <h2>センターモバイルの強み</h2>
        <ul class="point_lists">
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/point1.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/point2.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/point3.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/point4.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/point5.png" alt=""></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/point6.png" alt=""></li>
        </ul>
      </div>
      </section>

      <section class="plan">
        <div class="wrapper">
        <h2>選べる6つのプラン</h2>
        <ul class="plan_lists">
          <li>
            <div class="plan_title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon1.png" alt="">
            <h3><span>電話もインターネットも使える<br></span>音声SIMプラン</h3></div>
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon1.png" alt="">
            <h3><span>インターネットだけ利用<br></span>データSIMプラン</h3></div>
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
        <div class="btn_area">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>plan/">料金・サービスについて</a>
        </div>
      </div>
      </section>

      <section class="apply_w">
        <div class="wrapper">
        <h2>カンタンWEB申し込み</h2>
        <div class="apply_txt">
          <p>登録からプラン申し込み、<br class="sp_only">本人確認まですべてWEBで完結。<br>SIMカードがお手元に届けば<br class="sp_only">すぐにご利用いただけます。</p>
          <div class="btn_area">
            <a href="//maimo.app/summary/f0d11b60c874bd4c4ee2">お申し込みはこちら</a>
          </div>
        </div>
      </div>
      </section>

      <section class="youtube_wrapper">
        <h2>センターモバイル商品説明動画</h2>
      <div class="wrapper youtube">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZP7LCZBCbvs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </section>

            <?php $args = array(
          'posts_per_page' => 2,
          'category' => 10 );
          $posts = get_posts( $args );
          if( !empty( $posts ) ) :
          ?>
      <section class="media pc_only">
        <div class="wrapper">
        <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-archive/">メディア・掲載情報</a></h2>
        <ul>
          <?php
          foreach ( $posts as $post ): // ループの開始
          setup_postdata( $post ); // 記事データの取得
          ?>
          <a href="<?php the_permalink(); ?>">
          <li>
            <div class="media_left"><?php the_post_thumbnail(array(193,193), array('class' => 'left')); ?></div>
            <div class="media_right">
            <p class="date"><?php the_time('Y年m月d日') ?></p>
            <p class="media_tlt"><?php the_title(); ?></p>
            <?php the_excerpt(); ?>
          </div>
            </li>
          </a>
            <?php endforeach; // ループの終了
            wp_reset_postdata(); // 直前のクエリを復元する
            ?>
          </ul>
      </div>
      </section>
      <?php elseif( empty( $posts ) ):  //もし記事が空だったら　?>
<?php endif; ?>
<?php wp_reset_query(); ?>


      <?php $args = array(
          'posts_per_page' => 2,
          'category' => 10 );
          $posts = get_posts( $args );
          if( !empty( $posts ) ) :
          ?>
      <section class="media sp_tab_only">
        <div class="wrapper">
        <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-archive/">メディア・掲載情報</a></h2>
        <ul class="mslider">
          <?php
          foreach ( $posts as $post ): // ループの開始
          setup_postdata( $post ); // 記事データの取得
          ?>
          <a href="<?php the_permalink(); ?>">
          <li>
            <div class="media_left"><?php the_post_thumbnail(array(193,193), array('class' => 'left')); ?></div>
            <div class="media_right">
            <p class="date"><?php the_time('Y年m月d日') ?></p>
            <p class="media_tlt"><?php the_title(); ?></p>
            <?php the_excerpt(); ?>
          </div>
            </li>
          </a>
            <?php endforeach; // ループの終了
            wp_reset_postdata(); // 直前のクエリを復元する
            ?>
          </ul>
      </div>
      </section>
      <?php elseif( empty( $posts ) ):  //もし記事が空だったら　?>
<?php endif; ?>
<?php wp_reset_query(); ?>

      <section class="link">
        <div class="wrapper">
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>plan/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/link1.png" alt="">料金・サービス</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>fc/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/link2.png" alt="">FC・OEMをご検討の方</a></li>
          <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>oempartner/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/link3.png" alt="">OEMをご検討の方</a></li> -->
          <!-- <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/link4.png" alt="">広告出稿を<br class="sp_only">ご検討の方</a></li> -->
        </ul>
      </div>
      </section>

      <?php $args = array(
          'posts_per_page' => 5,
          'category' => 9 );
          $posts = get_posts( $args );
          if( !empty( $posts ) ) :
          ?>
      <section class="news">
        <div class="wrapper">
          <h2 class="news_h2">お知らせ</h2>
        <ul>
          <?php
          foreach ( $posts as $post ): // ループの開始
          setup_postdata( $post ); // 記事データの取得
          ?>
          <li>
            <?php the_time('Y年m月d日') ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endforeach; // ループの終了
            wp_reset_postdata(); // 直前のクエリを復元する
            ?>
          </ul>
        </div>
      </section>
      <?php elseif( empty( $posts ) ):  //もし記事が空だったら　?>
<?php endif; ?>
<?php wp_reset_query(); ?>

      <section class="apply">
        <div class="wrapper">
        <h2>カンタンWEB申し込み</h2>
        <div class="apply_txt">
          <p>登録からプラン申し込み、<br class="sp_only">本人確認まですべてWEBで完結。<br>SIMカードがお手元に届けば<br class="sp_only">すぐにご利用いただけます。</p>
          <div class="btn_area">
            <a href="//maimo.app/summary/f0d11b60c874bd4c4ee2">お申し込みはこちら</a>
          </div>
        </div>
      </div>
      </section>

      <section class="maimo">
        <div class="wrapper">
        <h2>会員専用アプリ Maimo<span>(マイモ)</span></h2>
        <div class="maimo_dl">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/maimo.png" alt="">
          <ul class="dl_btns">
            <li><a href="//apps.apple.com/us/app/maimo/id1554806667?itsct=apps_box_link&itscg=30200" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_apple.png" alt=""></a></li>
            <li><a href="//play.google.com/store/apps/details?id=jp.co.Maimo&hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn_google.png" alt=""></a></li>
          </ul>
        </div>
        <div class="btn_area">
        <a href="//maimo.app/login">Maimo(WEB) Login</a>
        </div>
      </div>
      </section>

      <footer>
        <?php get_footer(); ?>
      </footer>

    </div><!-- containerここまで -->
  </body>
