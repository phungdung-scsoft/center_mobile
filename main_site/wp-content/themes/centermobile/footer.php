<?php wp_footer(); ?>
        <div class="footer_banner">
          <div class="wrapper">
            <a href="https://nippon-smes-project.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_banner.png" alt="中小企業からニッポンを元気にプロジェクト" width="563" height="282"></a>
            <p>センターモバイルは『中小企業からニッポンを元気にプロジェクト』に参画しています。</p>
          </div>
        </div>
        <div class="footer_menu">
          <div class="wrapper">
            <div class="link_btns">
              <ul>
                <li><a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2">WEB申し込み</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/">お問い合わせ</a></li>
              </ul>
            </div>
            <div class="footer_nav">
              <nav>
                <ul>
                  <div class="footer_nav_m">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/">割引の仕組み</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>plan/">料金・サービス</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>app/">アプリの使い方</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">企業情報</a></li>
                    <li><a href="//maimo.app/login">Maimo Login</a></li>
                    <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">採用情報</a></li> -->
                  </div>
                  <div class="footer_nav_m">
                    <li><a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2">WEB申し込み</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>fc/">FC・OEMをご検討の方</a></li>
                    <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">広告出稿をご検討の方</a></li> -->
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-archive/">トピックス</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>store/">店舗一覧</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>policy/">プライバシーポリシー</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/">お問い合わせ</a></li>
                  </div>
                </ul>
              </nav>
              <div class="footer_logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo1.png" alt="センターモバイルのロゴ" width="194" height="91">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo2.png" alt="マイモのロゴ" width="98" height="91">
              </div>
            </div>
            <p>Copyright (C) CENTER MOBILE All rights reserved.</p>
          </div>
        </div>

        <script>
        $(".openbtn1").click(function () {//ボタンがクリックされたら
          $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
          $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
        });

        $("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
          $(".openbtn1").removeClass('active');//ボタンの activeクラスを除去し
          $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
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
