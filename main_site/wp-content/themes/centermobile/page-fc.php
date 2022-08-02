<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
</head>
  <body>

<!--ここから共通部分-->
<?php get_template_part('inc/header'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/mv_slider.css?<?php echo date('Ymd-Hi'); ?>">
<!--ここまで共通部分-->
      <!-- ここからコンテンツ -->
    <div class="container">
      <div class="img_fc top_image2">
        <div class="top_tlt">
        <div class="top_tlt_inner">
        <h1 class="company_h1">FC・OEMをご検討の方</h1>
        <p>Franchises・OEM</p>
        </div>
        </div>
      </div>

      <div class="nav_btn">
      <div class="wrapper">
      <div class="link_btns btn_blue2 link_btns2">
            <ul>
              <li><a href="#franchise">FCをご検討の方</a></li>
              <li><a href="#oem">OEMをご検討の方</a></li>
            </ul>
      </div>
    </div>
    </div>

      <section class="partner" id="franchise">
        <div class="wrapper">
          <h2>フランチャイズパートナー</h2>
          <div class="partner_inner partner_content">
            <img class="fc1" src="<?php echo get_template_directory_uri(); ?>/assets/img/fc1.png" alt="" width="490" height="165">
            <div class="partner_txt">
              <p>フランチャイズ加盟店様が独立した経営者として店舗の運営をし、本部が経営をサポートします。<br><br>共同事業のパートナーとして同じ目線に立ち、ともに成長できる企業でありたいと考えています。</p>
              <div class="btn_outer btn_blue btn_pd">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>documentrequest/">FCのお問い合わせ</a>
              </div>
            </div>
            </div>

            <div class="partner_inner">
            <h3>加盟店様と歩む企業であるために</h3>
            <p class="indent">センターモバイルは通信インフラ事業の中でも新世代格安スマホとして、今までの常識に一石を投じ、新しい提案での問題解決を目指します。</p></div>

            <div class="partner_inner">
            <h4>センターモバイルの強み</h4>
            <ul class="pr_lists">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc2_1.png" alt="" width="137" height="137">
                <p>生活にかかせない携帯を事業とし、販売しやすく早い段階からの収入の獲得が見込めます。<br><br>
                また高いリピート率を実現し、継続した収入として計画が立てやすくなっています。
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc2_2.png" alt="" width="137" height="137">
                <p>スマホの使用感はユーザーのストレスに直結します。<br><br>
                安心で快適な通信速度の為に、docomo回線を使用し、さらに独自帯域を採用することで、ストレスなく使用できる格安SIMを実現。
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc2_3.png" alt="" width="137" height="137">
                <p>格安SIMの使用に特に重要な料金。<br><br>
                センターモバイルは他社には真似できない技術で毎月携帯料金を最大割引で0円まで下げる提案が可能。
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc2_4.png" alt="" width="137" height="137">
                <p>センターモバイルのビジネスモデルは他社が真似できないように特許を出願しています。<br><br>
                通信業界で他社が真似できない差別化を図る事ができるオンリーワンのビジネスです。
                </p>
              </li>
            </ul>

            <ul class="pr_lists mslider">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc2_1.png" alt="" width="202" height="202">
                <p>生活にかかせない携帯を事業とし、販売しやすく早い段階からの収入の獲得が見込めます。<br><br>
                また高いリピート率を実現し、継続した収入として計画が立くなっています。
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc2_2.png" alt="" width="202" height="202">
                <p>スマホの使用感はユーザーのストレスに直結します。<br><br>
                安心で快適な通信速度の為に、docomo回線を使用し、さらに独自帯域を採用することで、ストレスなく使用できる格安SIMを実現。
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc2_3.png" alt="" width="202" height="202">
                <p>格安SIMの使用に特に重要な料金。<br><br>
                センターモバイルは他社には真似できない技術で毎月携帯料金を最大割引で0円まで下げる提案が可能。
                </p>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc2_4.png" alt="" width="202" height="202">
                <p>センターモバイルのビジネスモデルは他社が真似できないように特許を出願しています。<br><br>
                通信業界で他社が真似できない差別化を図る事ができるオンリーワンのビジネスです。
                </p>
              </li>
            </ul>

            </div>

              <div class="wrapper youtube">
                <div class="video_wrapper">
                  <iframe width="560" height="315" loading="lazy" class="videoDefer" data-src="https://www.youtube.com/embed/on62jfsUDnQ?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>


            <div class="partner_inner">
            <h3>加盟店オーナー様とのコミュニケーション</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc3.png" alt="" width="980" height="280">
            <ul class="info_list">
                <li>
                  <h4>意見交換会</h4>
                  <p>加盟店オーナー様からいただく課題、要望を受け、本部との直接の協議を行い、戦略や対策について回答します。</p>
                </li>
                <li>
                  <h4>加盟店への訪問</h4>
                  <p>様々な相談を受ける［相談室］を設け、オーナー様とのコミュニケーション強化に取り組んで行きます。</p>
                </li>
              </ul>
              <div class="btn_outer btn_blue btn_pd">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>documentrequest/">FCのお問い合わせ</a>
              </div>
            </div>
            </div>
      </section>

        <section class="partner" id="oem">
          <div class="about_cm">
        <p><span>センターモバイルのOEMとは</span><br><br>センターモバイルのサービスを自社のサービスにリブランディングし販売する事を指します。<br>
          <br>最大割引で0円の通信事業を自社のサービスとして展開することができます。</p>
      </div>

        <div class="wrapper">
          <h2>OEMパートナー</h2>
          <div class="partner_inner">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/oem.png" alt="">
              <p>センターモバイルのOEMは、日本で初の［広告×格安SIM］の通信インフラ事業として新世代の格安SIMを自社のサービスとして販売していただけます。<br><br>
              ユーザー様、契約企業様、弊社に関わる全ての人が一様にメリットを享受し、理念でもある［関わった人全てを幸せにする］を体現する会社でありたいと考えています。</p>
              <div class="btn_outer btn_blue btn_pd">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>documentrequest/">OEMのお問い合わせ</a>
            </div>
              </div>

            <div class="partner_inner">
            <h3>センターモバイル×OEM</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/plan3.png" alt="">
            <p>
              センターモバイルのビジネスモデルで携帯料金を最大割引で0円に！<br><br>
              生活必需品の携帯は、あらゆる業種にマッチします。<br><br>
              既存顧客様を抱える企業様には、顧客様とのより強固な関係性を構築することが可能といえます。<br><br>
              また広告活用で携帯料金が最大割引で0円で使える強みを活かし、世間に新常識を浸透させていきます。
            </p>
            </div>

            <div class="partner_inner oem_partner_inner">
            <h3 class="template_h3">OEM販売の3つの自由</h3>
            <ul class="info_list">
                <li>
                  <h4>1. 販売の自由</h4>
                  <p>センターモバイルは商材、システム、経営戦略を提供します。<br><br>
                  契約企業様はオンライン、オフライン訪問販売など多岐に渡る販売方法の中からお好きな方法を選択していただけます。</p>
                </li>
                <li>
                  <h4>2. 価格の自由</h4>
                  <p>価格はマーケティングをすすめる中で重要なファクターになります。<br><br>契約企業様の既存の商品との共存など商品の価値を正しく伝えてプロモーションするためにも価格は自由に決めていただいております。</p>
                </li>
                <li>
                  <h4>3. 資金の自由</h4>
                  <p>通信事業に必要な設備投資は、本来なら莫大なものになります。<br><br>センターモバイルなら小資金からのスタートも可能です。<br><br>顧客対応の有無など、企業様のリソースにマッチした費用でのご提案が可能です。</p>
                </li>
              </ul>
            </div>

            <!-- <div class="partner_inner stock">
            <h3>ストック収入としての魅力</h3>
            <img class="stock" src="<?php echo get_template_directory_uri(); ?>/assets/img/stock.png" alt="">
            <p>2016年以降、格安SIMが台頭する中でも<br>NTTdocomoの解約率は1%以下</p>
            <img class="tri" src="<?php echo get_template_directory_uri(); ?>/assets/img/tri.png" alt="">
            <p class="result">非常に長い期間でのストック収入になりやすい</p>
          </div> -->

          <div class="btn_outer btn_blue btn_pd">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>documentrequest/">OEMのお問い合わせ</a>
            </div>

            </div>
      </section>






      <footer>
        <?php get_footer(); ?>

        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
        <script>
        $(window).on('load',function(){
          youtubeDef();
        });

        $(function(){
          $(window).scroll(function (){
            youtubeDef();
          });
        });

        function youtubeDef(){
          $('.videoDefer').each(function(index, element){
            var ePos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > ePos - windowHeight){
              var vimg = $('.videoDefer')[index];
              if(!$('.videoDefer').hasClass('show')){
                if (vimg.getAttribute('data-src')) {
                  vimg.setAttribute('src', vimg.getAttribute('data-src'));
                }
                $('.videoDefer').addClass('show');
              }
            }
          });
        }

        $('.mslider').slick({
          autoplay: true,
          autoplaySpeed: 2500,
          speed: 800,
          dots: true,
          arrows: false,
        });
        </script>
      </footer>


    </div><!-- containerここまで -->

    <?php get_template_part('inc/chat'); ?>
  </body>
