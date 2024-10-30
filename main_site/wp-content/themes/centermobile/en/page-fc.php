<?php
/*
  Template Name: en-fc
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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/mv_slider.css?<?php echo date('Ymd-Hi'); ?>">
  <!--ここまで共通部分-->
  <!-- ここからコンテンツ -->
  <div class="container">
    <div class="img_fc top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">Those considering FC and OEM</h1>
        </div>
      </div>
    </div>

    <div class="nav_btn">
      <div class="wrapper">
        <div class="link_btns btn_blue2 link_btns2">
          <ul>
            <li><a href="#franchise">Those considering the Franchise (FC) opportunity</a></li>
            <li><a href="#oem">Those considering OEM partnership</a></li>
          </ul>
        </div>
      </div>
    </div>

    <section class="partner" id="franchise">
      <div class="wrapper">
        <h2>Franchise Partner</h2>
        <div class="partner_inner partner_content">
          <picture class="fc1">
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc1.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc1.png" alt="" width="490" height="165">
          </picture>
          <div class="partner_txt">
            <p>Franchisees operate their stores as independent business owners, with the headquarters providing support in management.<br><br>As partners in a joint business venture, we aim to be a company that shares the same perspective and can grow together.</p>
            <div class="btn_outer btn_blue btn_pd">
              <a href="<?php echo esc_url(home_url('/')); ?>en/documentrequest/">Inquiries about the Franchise (FC)</a>
            </div>
          </div>
        </div>

        <div class="partner_inner">
          <h3>In order to be a company that walks alongside its franchisees</h3>
          <p class="indent">Center Mobile, as a new generation of budget smartphones within the telecommunications infrastructure industry, aims to challenge the conventional wisdom and solve problems with innovative proposals.</p>
        </div>

        <div class="partner_inner">
          <h4>Center Mobile's Strength</h4>
          <ul class="pr_lists">
            <li>
              <picture class="image">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc2_1.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc2_1.png" alt="" width="137" height="137">
              </picture>
              <p>Making indispensable mobile phones a business, it is anticipated that sales will be easy and revenue can be obtained from an early stage.<br><br>
                Also, by achieving a high repeat rate, it becomes easier to plan a sustained income.
              </p>
            </li>
            <li>
              <picture class="image">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc2_2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc2_2.png" alt="" width="137" height="137">
              </picture>
              <p>The user experience of a smartphone is directly linked to the user's stress levels.<br><br>
                To ensure a reliable and comfortable communication speed, we use the Docomo network and adopt our own bandwidth to realize a budget SIM that can be used without stress.
              </p>
            </li>
            <li>
              <picture class="image">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc2_3.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc2_3.png" alt="" width="137" height="137">
              </picture>
              <p>The cost is particularly important for the use of budget SIMs.<br><br>
                Center Mobile has a unique technology that allows us to propose reducing monthly mobile charges to as low as 0 yen, something no other company can imitate.
              </p>
            </li>
            <li>
              <picture class="image">
                <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc2_4.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/fc2_4.png" alt="" width="137" height="137">
              </picture>
              <p>Center Mobile is applying for patents to ensure that its business model cannot be replicated by other companies.<br><br>
                It is a one-of-a-kind business that can achieve differentiation in the communications industry that others cannot imitate.
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
          <h3>Communication with Franchise Owners</h3>
          <picture class="image">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fc3.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fc3.png" alt="" width="980" height="280">
          </picture>
          <ul class="info_list">
            <li>
              <h4>Opinion Exchange Meeting</h4>
              <p>We receive challenges and requests from franchise owners, conduct direct discussions with the headquarters, and provide answers on strategies and countermeasures.</p>
            </li>
            <li>
              <h4>Visits to Franchise Stores</h4>
              <p>We establish a [consultation room] to address various inquiries and work on strengthening communication with the owners.</p>
            </li>
          </ul>
          <div class="btn_outer btn_blue btn_pd">
            <a href="<?php echo esc_url(home_url('/')); ?>en/documentrequest/">Inquiries about the Franchise (FC)</a>
          </div>
        </div>
      </div>
    </section>

    <section class="partner" id="oem">
      <div class="about_cm">
        <p><span>What is Center Mobile's OEM</span><br><br>Refers to rebranding Center Mobile's services as your own and selling them.<br>
          <br>You can offer the communication business with the maximum discount of 0 yen as your own service.
        </p>
      </div>

      <div class="wrapper">
        <h2>OEM partner</h2>
        <div class="partner_inner">
          <picture class="image">
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/oem.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/oem.png" alt="">
          </picture>
          <p>Center Mobile's OEM allows you to sell the new generation of budget SIMs as your own service in Japan's first [Advertising x Budget SIM] telecommunications infrastructure business.<br><br>
            We want to be a company that embodies our philosophy of [making everyone involved happy] by allowing all users, contracting companies, and everyone involved with us to enjoy benefits equally.</p>
          <div class="btn_outer btn_blue btn_pd">
            <a href="<?php echo esc_url(home_url('/')); ?>en/documentrequest/">Inquiries about OEM</a>
          </div>
        </div>

        <div class="partner_inner">
          <h3>CENTER MOBILE x OEM</h3>
          <picture class="image">
            <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/plan3.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/plan3.png" alt="">
          </picture>
          <p>
            With Center Mobile's business model, mobile charges can be discounted to as low as 0 yen!<br><br>
            Mobile phones, a necessity of life, match all kinds of industries.<br><br>
            For companies with existing customers, it is possible to build a stronger relationship with them.<br><br>
            Also, by leveraging the strength of using advertising to make mobile charges available at a maximum discount of 0 yen, we aim to permeate this new common sense throughout society.
          </p>
        </div>

        <div class="partner_inner oem_partner_inner">
          <h3 class="template_h3">Three Freedoms in OEM Sales</h3>
          <ul class="info_list">
            <li>
              <h4>1. Freedom in Sales</h4>
              <p>Center Mobile provides products, systems, and business strategies.<br><br>
                Contracting companies can choose from a variety of sales methods, such as online, offline, and visiting sales, whatever they prefer.</p>
            </li>
            <li>
              <h4>2. Freedom in Pricing</h4>
              <p>Pricing becomes an important factor in advancing marketing.<br><br>To correctly convey the value of the product and promote it, including coexistence with existing products of the contracting company, the price is set freely at your discretion.</p>
            </li>
            <li>
              <h4>3. Freedom in Capital</h4>
              <p>The equipment investment required for the telecommunications business would normally be enormous.<br><br>With Center Mobile, it is possible to start with a small amount of capital.<br><br>We can propose a plan that matches the resources of the company, including the presence or absence of customer support costs.</p>
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
          <a href="<?php echo esc_url(home_url('/')); ?>en/documentrequest/">Inquiries about OEM</a>
        </div>

      </div>
    </section>






    <footer>
      <?php get_footer('en'); ?>

      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
      <script>
        $(window).on('load', function() {
          youtubeDef();
        });

        $(function() {
          $(window).scroll(function() {
            youtubeDef();
          });
        });

        function youtubeDef() {
          $('.videoDefer').each(function(index, element) {
            var ePos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > ePos - windowHeight) {
              var vimg = $('.videoDefer')[index];
              if (!$('.videoDefer').hasClass('show')) {
                if (vimg.getAttribute('data-src')) {
                  vimg.setAttribute('src', vimg.getAttribute('data-src'));
                }
                $('.videoDefer').addClass('show');
              }
            }
          });
        }

        $(function() {
          function sliderSetting() {
            var width = $(window).width();
            if (width <= 599) {
              $('.pr_lists').not('.slick-initialized').slick({
                autoplay: true,
                autoplaySpeed: 2500,
                speed: 800,
                dots: true,
                arrows: false,
              });
            } else {
              $('.pr_lists.slick-initialized').slick('unslick');
            }
          }
          sliderSetting();
          $(window).resize(function() {
            sliderSetting();
          });
        });
      </script>
    </footer>


  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>