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
        <h2>PLAIOアプリに関するお問い合わせ</h2>
        <div class="lead-text">
          <p>以下メールアドレスよりお気軽にお問い合わせください。<br>
            お問い合わせいただいてから3営業日以内に担当者よりご連絡させていただきます。</p>
          <p class="address-anchor"><a href="m&#97;i&#108;t&#111;:in&#102;&#111;&#64;&#112;la&#105;&#111;&#46;jp">in&#102;&#111;&#64;&#112;la&#105;&#111;&#46;jp</a></p>
        </div>
      </div>
    </section>

    <footer>
      <?php get_footer(); ?>
    </footer>
  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>