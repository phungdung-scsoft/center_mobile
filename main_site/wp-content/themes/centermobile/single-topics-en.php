<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body class="en-page">

  <!--ここから共通部分-->
  <?php get_template_part('en/inc/header'); ?>
  <!--ここまで共通部分-->

  <div class="container">
    <div class="img_oem top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">The Topics</h1>
        </div>
      </div>
    </div>

    <section>
      <div class="wrapper">
        <div class="news_inner">
          <h3><?php the_title(); ?></h3>
          <div class="date"><?php echo get_the_date('m.d.Y', $post); ?></div>
          <div class="news_contents">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <?php get_footer('en'); ?>
    </footer>


  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>