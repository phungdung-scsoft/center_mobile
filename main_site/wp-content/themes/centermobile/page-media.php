<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
</head>
  <body>

<!--ここから共通部分-->
<?php get_template_part('inc/header'); ?>


    <div class="container">
      <div class="img_oem top_image2">
        <div class="top_tlt">
        <div class="top_tlt_inner">
        <h1 class="company_h1">メディア・掲載情報</h1>
        <p>Media</p>
      </div>
    </div>
  </div>

  <section>
      <div class="wrapper">
         <?php
  $args = array(
            'posts_per_page' => 3,
            'paged' => get_query_var( 'paged', 1 ),
            'category' => 10,
        );
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>
  <p>
    <div class="media_left"><?php the_post_thumbnail(array(193,193), array('class' => 'left')); ?></div>
    <a href="<?php the_permalink(); ?>"><?php echo get_the_date( $format, $post ); ?><span class="archive_tlt"><?php the_title(); ?></span></a>
  </p>
<?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>

<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php wp_reset_query(); ?>

      </div>
      </section>




      <footer>
        <?php get_footer(); ?>
      </footer>


    </div><!-- containerここまで -->
  </body>
