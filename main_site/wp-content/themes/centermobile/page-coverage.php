<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
</head>
  <body>

<!--ここから共通部分-->
<?php get_template_part('inc/header'); ?>
<link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/assets/css/lower.css?<?php echo date('Ymd-Hi'); ?>" onload="this.rel='stylesheet'">
<!--ここまで共通部分-->
      <!-- ここからコンテンツ -->

    <div class="container">
      <div class="img_contact top_image2">
        <div class="top_tlt">
        <div class="top_tlt_inner">
        <h1 class="company_h1">メディア取材について</h1>
        <p>Coverage</p>
        </div>
        </div>
      </div>

      <section>
      <div class="wrapper">
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
