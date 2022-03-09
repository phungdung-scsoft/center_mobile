<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
</head>
  <body>

<!--ここから共通部分-->
<?php get_template_part('inc/header'); ?>
<!--ここまで共通部分-->

    <div class="container">
      <div class="img_oem top_image2">
        <div class="top_tlt">
          <div class="top_tlt_inner">
            <h1 class="company_h1">店舗情報</h1>
            <p>Store Information</p>
          </div>
        </div>
      </div>

      <section>
        <div class="wrapper">

          <?php
          if ( have_posts() ):
            while ( have_posts() ): the_post();
          ?>
            <h2><?php the_title(); ?></h2>
            <div class="store_information_wrap">
              <div class="image">
                <?php if(has_post_thumbnail()): ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>" width="450" height="319">
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_pc.png" alt="" class="noimage" width="450" height="319">
                <?php endif; ?>
              </div>
              <div class="information">
                <dl class="info_list">
                  <?php if(get_field('お知らせ')) : ?>
                  <dt class="address"><i class="fas fa-bullhorn"></i>お知らせ</dt>
                  <dd><?php the_field('お知らせ'); ?></dd>
                  <?php endif; ?>
                  <?php if(get_field('所在地')) : ?>
                  <dt class="address"><i class="fas fa-map-marker-alt"></i>所在地</dt>
                  <dd><?php the_field('所在地'); ?></dd>
                  <?php endif; ?>
                  <?php if(get_field('営業時間')) : ?>
                  <dt class="time"><i class="far fa-clock"></i>営業時間</dt>
                  <dd><?php the_field('営業時間'); ?></dd>
                  <?php endif; ?>
                  <?php if(get_field('電話番号')) : ?>
                  <dt class="tel"><i class="fas fa-phone"></i>電話番号</dt>
                  <dd><?php the_field('電話番号'); ?></dd>
                  <?php endif; ?>
                </dl>
                <?php if(get_field('Twitter') || get_field('Instagram') || get_field('Facebook')) : ?>
                  <ul class="sns_list">
                    <?php if(get_field('Instagram')) : ?><li><a href="<?php the_field('Instagram'); ?>" target="_blank" class="ig"><i class="fab fa-instagram"></i></a></li><?php endif; ?>
                    <?php if(get_field('Twitter')) : ?><li><a href="<?php the_field('Twitter'); ?>" target="_blank" class="tw"><i class="fab fa-twitter"></i></a></li><?php endif; ?>
                    <?php if(get_field('Facebook')) : ?><li><a href="<?php the_field('Facebook'); ?>" target="_blank" class="fb"><i class="fab fa-facebook-f"></i></a></li><?php endif; ?>
                  </ul>
                <?php endif; ?>
              </div>
            </div>
            <?php
            $user_id = get_field('ユーザーID');
            if (is_null($user_id) || empty($user_id)){
              $user_id = 99999;
            }
            $args = array(
              'numberposts' => 5, //表示する記事の数
              'post_type' => 'store-blog', //投稿タイプ名
              'author' => $user_id,  //投稿者ID
            );
            $customPosts = get_posts($args);
            ?>
            <?php if($customPosts) : ?>
              <ul>
              <?php foreach($customPosts as $post) : setup_postdata( $post ); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>store-blog/?author_id=<?= $user_id  ?>">ブログ一覧</a>-->
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>

          <a href="<?php echo esc_url( home_url( '/' ) ); ?>store/" class="return_btn">店舗一覧へ戻る</a>
        </div>
      </section>

      <footer>
        <?php get_footer(); ?>
      </footer>
    </div><!-- containerここまで -->
  </body>
