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
        <h2>各種お問い合わせ</h2>
        <div class="lead-text">
          <p>お問い合わせいただいてから3営業日以内に担当者よりご連絡させていただきます。</p>
          <p>※弊社CENTER MOBILEに関する事のみを受け付けております。弊社の取引先様や、FC・OEMの関連企業様については、一切のお答え致しかねます。</p>
          <p>※お問い合わせ頂いた内容は全て確認しておりますが、弊社の返信基準を満たさないものについても、一切の回答を致しかねますため、予めご了承下さい。</p>
        </div>
        <ul class="contact-list">
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-2/">
              個人のお客さまはこちら
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-business/">
              法人のお客さまはこちら
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-contractor/">
              ご契約者さまはこちら
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>documentrequest/">
              FC・OEMについてはこちら
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>coverage/">
              メディア取材についてはこちら
            </a>
          </li>
        </ul>
      </div>
    </section>

    <footer>
      <?php get_footer(); ?>
    </footer>
  </div><!-- containerここまで -->
</body>
