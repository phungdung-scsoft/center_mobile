<?php
/*
  Template Name: en-contact-top
  Template Post Type: page
  Template Path: en/
  */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body class="en-page">

  <!--ここから共通部分-->
  <?php get_template_part('en/inc/header'); ?>
  <!--ここまで共通部分-->

  <!-- ここからコンテンツ -->
  <div class="container">
    <div class="img_contact top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">Contact us</h1>
        </div>
      </div>
    </div>

    <section>
      <div class="wrapper">
        <h2>Various inquiries</h2>
        <div class="lead-text">
          <p>We will contact you within three business days after receiving your inquiry.</p>
          <p>* We only accept inquiries related to our CENTER MOBILE. We cannot respond to any inquiries about our business partners or companies related to FC and OEM.</p>
          <p>* We acknowledge all inquiries received, but please understand that we may not be able to respond to those that do not meet our response criteria.</p>
        </div>
        <ul class="contact-list">
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>en/contact-2/">
              For individual customers, please click here
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>en/contact-business/">
              For corporate customers, please click here
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>en/contact-contractor/">
              For existing contract customers, please click here
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>en/documentrequest/">
              For information about FC and OEM, please click here
            </a>
          </li>
          <?php /*
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>coverage/">
              メディア取材についてはこちら
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-outside/">
              PLAIOサービスに関する<br>お問い合わせ
            </a>
          </li>
          */ ?>
        </ul>
      </div>
    </section>

    <footer>
      <?php get_footer('en'); ?>
    </footer>
  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>