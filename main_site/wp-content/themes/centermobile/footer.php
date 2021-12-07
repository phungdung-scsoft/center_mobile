<?php wp_footer(); ?>
       <div class="footer_banner">
        <div class="wrapper">
          <a href="https://nippon-smes-project.com" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_banner.png"></a>
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
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>plan/">料金・サービス</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">企業情報</a></li>
                  <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">採用情報</a></li> -->
                  <li><a href="https://maimo.app/summary/f0d11b60c874bd4c4ee2">WEB申し込み</a></li>
                  <li><a href="//maimo.app/login">Maimo Login</a></li>
                </div>
                <div class="footer_nav_m">
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>fc/">FC・OEMをご検討の方</a></li>
                  <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">広告出稿をご検討の方</a></li> -->
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>media-archive/">メディア掲載一覧</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>policy/">プライバシーポリシー</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-top/">お問い合わせ</a></li>
                </div>
              </ul>
            </nav>
            <div class="footer_logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo1.png" alt="センターモバイルのロゴ">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_logo2.png" alt="マイモのロゴ">
            </div>
          </div>
          <p>Copyright (C) CENTER MOBILE All rights reserved.</p>
        </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!--自作のJS-->
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
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.bxslider.css">

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

  <script type="text/javascript">
    $(function() {
  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 2500,
    speed: 800,
    dots: true,
    arrows: false,
    centerMode: true,
    centerPadding: '10%',
    //レスポンシブでの動作を指定
    responsive: [{
      breakpoint: 1180,  //ブレイクポイントを指定
      settings: {
        centerPadding:'0',
      }
    }]
  });
});
//  $('.slider').slick({
//   autoplay: true,
//     autoplaySpeed: 2500,
//     speed: 800,
//     dots: true,
//     arrows: false,
//     centerMode: true,
//     centerPadding: '10%',
// });
 $('.mslider').slick({
  autoplay: true,
    autoplaySpeed: 2500,
    speed: 800,
    dots: true,
    arrows: false,
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
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
      });
    </script>

    <script>
      $('#manu a[href]').on('click', function(event) {
        $('.navToggle').trigger('click');
    });
    </script>

    <script src="assets/js/scrollreveal.min.js"></script>
