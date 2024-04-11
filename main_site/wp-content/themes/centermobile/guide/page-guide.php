<?php
/*
  Template Name: guide
  Template Post Type: page
  Template Path: guide/
  */
?>

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
    <section>
      <div class="wrapper">

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <article class="guide_article">
              <h1 class="page_title"><?php the_title(); ?></h1>

            </article>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>

        <a href="<?php echo esc_url(home_url('/')); ?>store/" class="return_btn">店舗一覧へ戻る</a>
      </div>
    </section>

    <footer>
      <?php get_footer(); ?>
    </footer>
  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>