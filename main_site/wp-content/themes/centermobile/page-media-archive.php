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
        <h1 class="company_h1">トピックス</h1>
        <p>Topics</p>
        </div>
        </div>
      </div>

      <section>
      <div class="wrapper">
        <div class="btn_outer btn_blue btn_pd2">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>coverage/">メディア取材依頼フォーム</a>
            </div>
        <?php
if(have_posts()): while(have_posts()): the_post();?>
<h2><?php the_title(); ?></h2>

<?php the_content(); ?>

<?php endwhile; endif; ?>
      </div>
      </section>




      <footer>
        <?php get_footer(); ?>
      </footer>


    </div><!-- containerここまで -->
  </body>
