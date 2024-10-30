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
    <div class="img_ir top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">IRニュース</h1>
          <p>IR News</p>
        </div>
      </div>
    </div>

    <section>
      <div class="wrapper">
        <h2>IRニュース一覧</h2>

        <?php if (have_posts()) : ?>
          <ul class="topics_list">
            <?php while (have_posts()) : the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="posts_inner">
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                    <?php else : ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_topics.png" alt="" width="240" height="240" class="logo">
                    <?php endif; ?>
                    <p class="date"><?php the_time('Y年m月d日'); ?></p>
                    <h3><?php the_title(); ?></h3>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>

          <div class="pagination">
            <?php
            the_posts_pagination(array(
              'mid_size' => 1,
              'prev_text' => '← 前へ',
              'next_text' => '次へ →',
            ));
            ?>
          </div>
        <?php else : ?>
          <p><?php esc_html_e('IRニュースが見つかりませんでした。', 'textdomain'); ?></p>
        <?php endif; ?>
      </div>
    </section>

    <footer>
      <?php get_footer(); ?>
    </footer>
  </div><!-- containerここまで -->

  <?php /*get_template_part('inc/chat');*/ ?>
</body>

</html>