<?php wp_body_open(); ?>
<?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-JNWWF18E56"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JNWWF18E56');
    gtag('config', 'UA-207144783-1');
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <?php if(get_post_meta($post->ID, 'noindex',true) == 'true'): ?>
    <meta name="robots" content="noindex">
  <?php endif; ?>
  <!--cssの読み込み-->
  <?php if ( is_home() || is_front_page() ) : ?>
    <title>株式会社センターモバイル | 新世代格安SIMのセンターモバイル。ケータイ料金が最大割引で0円。通常利用でも3GB 1,280円/月〜でお得にご利用いただけます。</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css?<?php echo date('Ymd-Hi'); ?>" media="screen,print">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css?<?php echo date('Ymd-Hi'); ?>" media="screen,print">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css?<?php echo date('Ymd-Hi'); ?>" media="screen,print">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
  <?php else : ?>
    <?php //topページ以外に出力 ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?<?php echo date('Ymd-Hi'); ?>">
    <?php
      $page = get_post( get_the_ID() );
      $slug = $page->post_name;
      $url = $_SERVER['REQUEST_URI'];
      if( strstr($url,'ufaq')==true ) :
        $slug = 'faq';  /* FAQ */
      elseif( strstr($url,'store')==true ) :
        $slug = 'store';  /* 店舗一覧、詳細 */
      elseif( is_single() ) :
        $slug = 'media-archive';  /* トピックス詳細 */
      endif;
    ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lower.css?<?php echo date('Ymd-Hi'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/<?php echo $slug; ?>.css?<?php echo date('Ymd-Hi'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
  <?php endif; ?>
  <!-- フォント -->
