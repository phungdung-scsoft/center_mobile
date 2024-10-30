<?php wp_footer(); ?>
<div class="footer_menu">
  <div class="wrapper">
    <div class="link_btns">
      <ul>
        <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">Web application</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>en/contact-top/">Contact us</a></li>
      </ul>
    </div>
    <div class="footer_nav">
      <nav>
        <div class="footer_nav_m">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/">TOP</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/discount/">Mechanism of discount</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/plan/">Rates and services</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/app/">How to use the app</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/company/">Corporate information</a></li>
            <li><a href="//maimo.app/login" target="_blank"><?= $GLOBALS['gl_service']; ?> Login</a></li>
            <!-- <li><a href="<?php echo esc_url(home_url('/')); ?>">採用情報</a></li> -->
            <li>
              Web application
              <ul>
                <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">Apply for SIM</a></li>
                <li><a href="https://wimax.plaio.jp/" target="_blank">Apply for PLAIO WiMAX</a></li>
              </ul>
            </li>
          </ul>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/fc/">Those considering FC and OEM</a></li>
            <!-- <li><a href="<?php echo esc_url(home_url('/')); ?>">広告出稿をご検討の方</a></li> -->
            <?php
            $count_custom_post = wp_count_posts('topics-en')->publish;
            if ($count_custom_post > 0) :
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/media-archive/">The Topics</a></li>
            <?php endif; ?>
            <?php
            $count_custom_post = wp_count_posts('column')->publish;
            if ($count_custom_post > 0) :
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/column/">Column</a></li>
            <?php endif; ?>
            <?php
            if (false) :
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/store/">List of stores</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/media-appearances/">List of published media</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/policy/">Privacy policy</a></li>
            <?php endif; ?>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/contact-top/">Contact us</a></li>
            <?php
            if (false) :
            ?>
              <li>
                A helpful guide
                <ul>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>en/guide/mnp/">What is MNP?</a></li>
                </ul>
              </li>
            <?php endif; ?>
            <?php
            $count_custom_post = wp_count_posts('ir-en')->publish;
            if ($count_custom_post > 0) :
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>en/ir/">IR news</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </nav>
      <div class="footer_logo">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo1.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo1.png" alt="CENTER MOBILE" width="194" height="91">
        </picture>
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo2_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo2_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?>" width="242" height="91">
        </picture>
      </div>
    </div>
    <p class="recaptchaText">This site is protected by reCAPTCHA and subject to Google's <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a>.</p>
    <p class="copyright">Copyright (C) CENTER MOBILE All rights reserved.</p>
  </div>
</div>

<script>
  $(".openbtn1").click(function() { //ボタンがクリックされたら
    $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与
  });
  $(function() {
    $('.accordion-parent').on('click', function() {
      $(this).next('.accordion-child').stop().slideToggle();
      $(this).toggleClass('active');
    })
  });

  //language_btn
  $(function() {
    let path = location.pathname;
    $('.language_btn').on('click', function() {
      if (path.match(new RegExp('/en/'))) {
        path = path.replace('/en/', '/');
      } else {
        path = path.replace(path, '/en' + path);
      }
      window.location.href = path;
      return false;
    });
  });
</script>

<!-- ＃リンクのスムーズスクロール -->
<script>
  $(function() {
    // #で始まるリンクをクリックしたら実行されます
    $('a[href^="#"]').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒で記述
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      if (window.matchMedia('(max-width: 1180px)').matches) {
        position = position - $('#header').height();
      }
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
      return false;
    });
  });
</script>