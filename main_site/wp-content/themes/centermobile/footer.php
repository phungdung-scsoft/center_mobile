<?php wp_footer(); ?>
        <div class="footer_menu">
          <div class="wrapper">
            <div class="link_btns">
              <ul>
                <li><a href="https://maimo.app/app_member/f0d11b60c874bd4c4ee2" target="_blank">WEB申し込み</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/">お問い合わせ</a></li>
              </ul>
            </div>
            <div class="footer_nav">
              <nav>
                <div class="footer_nav_m">
                  <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/">割引の仕組み</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>plan/">料金・サービス</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>app/">アプリの使い方</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">企業情報</a></li>
                    <li><a href="//maimo.app/login" target="_blank"><?=   $GLOBALS['gl_service']; ?> Login</a></li>
                    <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">採用情報</a></li> -->
                    <li>
                      WEB申し込み
                      <ul>
                        <li><a href="https://maimo.app/app_member/f0d11b60c874bd4c4ee2" target="_blank">SIMを申し込む</a></li>
                        <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAXを申し込む</a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>fc/">FC・OEMをご検討の方</a></li>
                    <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">広告出稿をご検討の方</a></li> -->
                    <?php
                      $count_posts = wp_count_posts();
                      $post_number = $count_posts->publish;
                      if($post_number > 0):
                    ?>
                      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-archive/">トピックス</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>store/">店舗一覧</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-appearances/">掲載メディア一覧</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>policy/">プライバシーポリシー</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/">お問い合わせ</a></li>
                  </ul>
                </div>
              </nav>
              <div class="footer_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo1.png" alt="CENTER MOBILE" width="194" height="91">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo2_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?>" width="242" height="91">
              </div>
            </div>
            <p class="recaptchaText">このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy" target="_blank">プライバシーポリシー</a>と<a href="https://policies.google.com/terms" target="_blank">利用規約</a>が適用されます。</p>
            <p class="copyright">Copyright (C) CENTER MOBILE All rights reserved.</p>
          </div>
        </div>

        <script>
        $(".openbtn1").click(function () {//ボタンがクリックされたら
          $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
          $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
        });
        $(function(){
          $('.accordion-parent').on('click', function(){
            $(this).next('.accordion-child').stop().slideToggle();
            $(this).toggleClass('active');
          })
        });
        </script>

        <!-- ＃リンクのスムーズスクロール -->
        <script>
        $(function(){
          // #で始まるリンクをクリックしたら実行されます
          $('a[href^="#"]').click(function() {
            // スクロールの速度
            var speed = 400; // ミリ秒で記述
            var href= $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top;
            if(window.matchMedia('(max-width: 1180px)').matches){
              position = position - $('#header').height();
            }
            $('body,html').animate({scrollTop:position}, speed, 'swing');
            return false;
          });
        });
        </script>
