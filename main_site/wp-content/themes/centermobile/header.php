<?php wp_body_open(); ?>
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JNWWF18E56"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-JNWWF18E56');
  gtag('config', 'UA-207144783-1');
</script>
<!-- Clarity -->
<script type="text/javascript">
  (function(c, l, a, r, i, t, y) {
    c[a] = c[a] || function() {
      (c[a].q = c[a].q || []).push(arguments)
    };
    t = l.createElement(r);
    t.async = 1;
    t.src = "https://www.clarity.ms/tag/" + i;
    y = l.getElementsByTagName(r)[0];
    y.parentNode.insertBefore(t, y);
  })(window, document, "clarity", "script", "fc1l9z6054");
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="format-detection" content="telephone=no">
<?php if (get_post_meta($post->ID, 'noindex', true) == 'true') : ?>
  <meta name="robots" content="noindex">
<?php endif; ?>
<!--cssの読み込み-->
<?php if (is_home() || is_front_page() || is_page('en')) : ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css?<?php echo date('Ymd-Hi'); ?>" media="screen,print">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css?<?php echo date('Ymd-Hi'); ?>" media="screen,print">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css?<?php echo date('Ymd-Hi'); ?>" media="screen,print">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<?php else : ?>
  <?php //topページ以外に出力 
  ?>
  <?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
  $url = $_SERVER['REQUEST_URI'];
  if (strstr($url, 'ufaq') == true) :
    $slug = 'faq';  /* FAQ */
  elseif (strstr($url, 'store') == true) :
    $slug = 'store';  /* 店舗一覧、詳細 */
  elseif (strstr($url, 'guide') == true) :
    $slug = 'guide';  /* ガイド */
  elseif (strstr($url, 'column') == true) :
    $slug = 'post-type-column';  /* インターネット回線ニュース */
  elseif (strstr($url, 'ir') == true) :
    $slug = 'ir';  /* IRニュース */
  elseif (is_single()) :
    $slug = 'media-archive';  /* トピックス詳細 */
  endif;
  ?>
  <?php
  // リニューアル前後のページのcss切り替え
  if ((strstr($url, 'company') && !strstr($url, 'en')) || (strstr($url, 'vision')) || (strstr($url, 'about-sim'))) :
  ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?<?php echo date('Ymd-Hi'); ?>">
  <?php else : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/old_style.css?<?php echo date('Ymd-Hi'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lower.css?<?php echo date('Ymd-Hi'); ?>">
  <?php endif; ?>

  <?php
  // enのみ旧レイアウトの場合は出し分け
  if (strstr($url, 'en/company')) :
  ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/en/assets/css/<?php echo $slug; ?>.css?<?php echo date('Ymd-Hi'); ?>">
  <?php else : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/<?php echo $slug; ?>.css?<?php echo date('Ymd-Hi'); ?>">
  <?php endif; ?>
<?php endif; ?>
<!-- フォント -->