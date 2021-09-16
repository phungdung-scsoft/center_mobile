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
      <?php
/*
Template Name: お問い合わせページのテンプレート
*/
?>

    <div class="container">
      <div class="img_contact top_image2">
        <div class="top_tlt">
        <div class="top_tlt_inner">
        <h1 class="company_h1">お問い合わせ</h1>
        <p>Contact</p>
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
