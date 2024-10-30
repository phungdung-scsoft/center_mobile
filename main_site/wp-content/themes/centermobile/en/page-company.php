<?php
/*
  Template Name: en-company
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
    <div class="img_company top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">Corporate information</h1>
        </div>
      </div>
    </div>

    <div class="nav_btn">
      <div class="wrapper">
        <div class="link_btns btn_blue2">
          <ul>
            <li><a href="#content">Business</a></li>
            <li><a href="#mission">Corporate Philosophy</a></li>
            <li><a href="#about">Corporate Profile</a></li>
            <li><a href="#document">Mid-term Business Plan</a></li>
          </ul>
        </div>
      </div>
    </div>

    <section class="content" id="content">
      <div class="wrapper">
        <h2>Business</h2>
        <ul>
          <li>
            <picture class="image">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/content1.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/content1.png" alt="" width="490" height="156">
            </picture>
            <div class="content_txt">
              <h3>About the Budget SIM Business on Low-cost SIM Services</h3>
              <p>By returning the "ad revenue obtained from the playback of advertisements" to users as points, and using these points for monthly mobile charges, we offer a budget SIM sales business that can reduce the charges to as low as 0 yen with the maximum discount.<br>
                <br>
                Not only relying on communication revenue from users, but also investing heavily in communication equipment with ad revenue from advertising sponsors to realize a comfortable communication environment.<br>
                <br>
                With the advertising fees from sponsors, we aim to achieve a phase where the cost of providing lines to users is exceeded, and we aim to realize a service where "mobile phones can be used for free every month", similar to TV.
              </p>
            </div>
          </li>
          <li>
            <picture class="image">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/content2.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/enassets/img/content2.png" alt="" width="490" height="156">
            </picture>
            <div class="content_txt">
              <h3>About the Franchise Business</h3>
              <p>Through the FC (Franchise) sales agreement, we provide the mechanism of Center Mobile and the right to sell SIM cards.<br>
                <br>You can sell a higher quality and cheaper service than other budget SIMs.<br>
                <br>In addition to a high acquisition rate, with a continuation rate of over 99% and a continuation reward of over 30%, you can steadily earn a "long and strong" continuous income.<br>
                <br>For sales companies, we provide support towards achieving goals, including current hearing, sharing of successful cases, proposing sales improvement strategies, and regular sales training.
              </p>
            </div>
          </li>
          <li>
            <picture class="image">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/content3.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/content3.png" alt="" width="490" height="156">
            </picture>
            <div class="content_txt">
              <h3>About the OEM Business</h3>
              <p>Through an OEM agreement, you can rebrand Center Mobile's mechanism and expand it as your own brand.<br>
                <br>Unlike the FC model, since it becomes a proprietary product, you can freely set the price, sales methods, and more.<br>
                <br>You can propose communication, which has the highest adoption and retention rates, to your users as your own brand.<br>
                <br>You can build proposals for new products to existing customers, as well as income from stock, etc.
              </p>
            </div>
          </li>
          <li>
            <picture class="image">
              <source srcset="<?php echo get_template_directory_uri(); ?>/en/assets/img/content4.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/en/assets/img/content4.png" alt="" width="490" height="156">
            </picture>
            <div class="content_txt">
              <h3>About the Advertising Business</h3>
              <p>In an era where we are transitioning from browser searches to app searches, we propose an entirely new form of advertising.<br>
                <br>As the diversification of users and platforms advances, it is becoming increasingly difficult for a single company to grasp user actions.<br>
                <br>Center Mobile combines multiple data to achieve efficiency and continuity, and by providing advertisements as entertainment, we promote an improvement in user experience.<br>
                <br>We will assist you in achieving the best results with the minimum budget.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="mission" id="mission">
      <div class="wrapper">
        <h2>Corporate Philosophy</h2>
        <div class="mission_txt">
          <ol>
            <li>Foster trust with people and value individuals.</li>
            <li>Proactively create unique, <br>one-of-a-kind services that have never existed before.</li>
            <li>Expand the possibilities of social infrastructure with forward-looking services and create new value.</li>
          </ol>
          <p>We aspire to be a company that brings happiness to everyone involved and contributes not only to ourselves but also to the betterment of society.</p>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="wrapper">
        <h2>Corporate Profile</h2>
        <table>
          <tr>
            <th>Corporate Name</th>
            <td>CENTER MOBILE Co., Ltd.</td>
          </tr>
          <tr>
            <th>Representative Director</th>
            <td>Tatsuya Nakagoshi</td>
          </tr>
          <tr>
            <th>URL</th>
            <td>https://centermobile.co.jp</td>
          </tr>
          <tr>
            <th>Establishment Date</th>
            <td>June 2, 2020</td>
          </tr>
          <tr>
            <th>Registered Capital</th>
            <td>30.7 million yen (including capital reserves)</td>
          </tr>
          <tr>
            <th>Headquarters Address</th>
            <td>507 Realize Sakaisuji Hommachi Building, 1-5-31 Kudarocho, Chuo-ku, Osaka City, Osaka Prefecture, 541-0056, Japan</td>
          </tr>
          <tr>
            <th>Carrier Classification</th>
            <td>Registered Electrical Communication Business Operator E-02-04531</td>
          </tr>
          <tr>
            <th>Business Description</th>
            <td>Communication Franchise Business<br>
              Communication OEM Business<br>
              Advertising Agency Business<br>
              Consulting Business related to Communications<br>
              Support and Repair Business for Smartphones and Tablets</td>
          </tr>
          <tr>
            <th>Bank</th>
            <td>Sumitomo Mitsui Banking Corporation</td>
          </tr>
        </table>

        <table>
          <tr>
            <th rowspan="2">Advisor</th>
            <td>ODIN INC<br>
              663-8166<br>
              5th Floor, Koshien Building, 1-25 Koshien Takamatsucho, Nishinomiya, Hyogo<br>
              Chairman: Yatofusa Kusaki<br>
              Formerly the Chief of Fukiai Police Station, Hyogo<br>
              President: Mitsu Sato<br>
              Formerly the Head of the Anti-Organized Crime Division, Hyogo</td>
          </tr>
        </table>

        <table>
          <tr>
            <th rowspan="4">Advisory Lawyer</th>
            <td>Iwamura, Muramoto, and Yamaguchi Law Office<br>
              530-0005<br>
              19th Floor, Nakanoshima Festival Tower, 2-3-18 Nakanoshima, Kita-ku, Osaka, Osaka Prefecture<br>
              Attorney: Yamaguchi Yousuke</td>
          </tr>
          <tr>
            <td>Law Firm Yodogawa & Yamakami Joint Venture<br>
              541-0046<br>
              9th Floor, Orbic Mido-Suji Building, 4-2-3 Hirano-cho, Chuo-ku, Osaka, Osaka Prefecture<br>
              Attorney: Seirou Minami</td>
          </tr>
          <tr>
            <td>TMI General Law Office<br>
              106-6123<br>
              23rd Floor, Roppongi Hills Mori Tower, 6-10-1 Roppongi, Minato-ku, Tokyo<br>
              Attorney: Mitsuo Abe</td>
          </tr>
        </table>
      </div>
    </section>

    <section class="document" id="document">
      <div class="wrapper">
        <h2>Mid-term Business Plan</h2>
        <p>You can check the mid-term business plan from here.</p>
        <div class="btn_outer btn_blue btn_pd">
          <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/<?php echo ($gl_point) ? 'businessplan' : 'businessplan_240612'; ?>.pdf" target="_blank">Mid-term Business Plan (PDF)</a>
        </div>
      </div>
    </section>




    <footer>
      <?php get_footer('en'); ?>
    </footer>


  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>