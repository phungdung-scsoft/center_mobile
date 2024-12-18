<?php wp_footer(); ?>
<div class="footer_menu">
  <div class="wrapper">
    <div class="link_btns">
      <ul>
        <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=ja" target="_blank">WEB申し込み</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>contact-top/">お問い合わせ</a></li>
      </ul>
    </div>
    <div class="footer_nav">
      <nav>
        <div class="footer_nav_m">
          <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
            <li>
              会社情報
              <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>company/#greeting">代表挨拶</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>company/#company">会社概要</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>vision/">ビジョン</a></li>
              </ul>
            </li>
            <li>
              サービス
              <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>about-sim/">格安SIMについて</a></li>
                <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAX</a></li>
              </ul>
            </li>
            <li>
              ニュース
              <ul>
                <?php
                $count_posts = wp_count_posts();
                $post_number = $count_posts->publish;
                if ($post_number > 0) :
                ?>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>media-archive/">お知らせ</a></li>
                <?php endif; ?>
                <li><a href="<?php echo esc_url(home_url('/')); ?>media-appearances/">掲載メディア一覧</a></li>
              </ul>
            </li>
          </ul>
          <ul>
            <li>
              WEB申し込み
              <ul>
                <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=ja" target="_blank">SIMを申し込む</a></li>
                <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAXを申し込む</a></li>
              </ul>
            </li>
            <li>
              お役立ちガイド
              <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>guide/mnp/">MNPとは？</a></li>
              </ul>
            </li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>fc/">FC・OEM</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>store/">店舗情報</a></li>
            <?php
            $count_custom_post = wp_count_posts('ir')->publish;
            if ($count_custom_post > 0) :
            ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>ir/">IRニュース</a></li>
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
    <p class="recaptchaText">このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy" target="_blank">プライバシーポリシー</a>と<a href="https://policies.google.com/terms" target="_blank">利用規約</a>が適用されます。</p>
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