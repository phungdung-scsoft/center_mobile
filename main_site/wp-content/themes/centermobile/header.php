<?php wp_body_open(); ?>
<?php wp_head(); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <?php if(get_post_meta($post->ID, 'noindex',true) == 'true'): ?>
    <meta name="robots" content="noindex">
  <?php endif; ?>
  <!--ファビコン -->
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/f.png">
  <!--cssの読み込み-->
  <link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?<?php echo date('Ymd-Hi'); ?>" onload="this.rel='stylesheet'">
  <?php if ( is_home() || is_front_page() ) : ?>
    <?php //topページのみ出力 ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/assets/css/mv_slider.css?<?php echo date('Ymd-Hi'); ?>" onload="this.rel='stylesheet'">
    <link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css?<?php echo date('Ymd-Hi'); ?>" onload="this.rel='stylesheet'">
  <?php else : ?>
    <?php //topページ以外に出力 ?>
    <?php
      $page = get_post( get_the_ID() );
      $slug = $page->post_name;
      $url = $_SERVER['REQUEST_URI'];
      if( strstr($url,'ufaq')==true ) :
        $slug = 'faq';
      endif;
    ?>
    <link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/assets/css/lower.css?<?php echo date('Ymd-Hi'); ?>" onload="this.rel='stylesheet'">
    <link rel="preload" as="style" href="<?php echo get_template_directory_uri(); ?>/assets/css/<?php echo $slug; ?>.css?<?php echo date('Ymd-Hi'); ?>" onload="this.rel='stylesheet'">
  <?php endif; ?>
  <!-- フォント -->
