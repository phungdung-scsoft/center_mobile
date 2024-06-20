<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body>

  <!--ここから共通部分 -->
  <?php get_template_part('inc/header'); ?>
  <!--ここまで共通部分-->

  <div class="container">
    <div class="img_oem top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">コラム</h1>
          <p>Column</p>
        </div>
      </div>
    </div>

    <section>
      <div class="wrapper">
        <div class="news_inner">
          <h3><?php the_title(); ?></h3>
          <div class="date">
            <?php
            $display_date = get_the_modified_date('Y年m月d日') ?: get_the_date('Y年m月d日');
            $display_date_iso = get_the_modified_date('c') ?: get_the_date('c');
            ?>
            <time datetime="<?php echo esc_attr($display_date_iso); ?>" itemprop="datePublished dateModified">
              <?php echo esc_html($display_date); ?>
            </time>
          </div>
          <div class="promotion">
            <p>本ページはプロモーションが含まれております</p>
            <p>情報に関しましては本ページの更新日やURL先のご確認をお願い致します</p>
          </div>
          <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
          <div class="news_contents">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <?php get_footer(); ?>
    </footer>


  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>