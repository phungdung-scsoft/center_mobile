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
  <?php get_template_part('en/inc/header-new'); ?>
  <div class="page-company">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">ホーム</a></li>
        <li class="breadcrumb-item"><a href="/company">会社情報</a></li>
        <li class="breadcrumb-item active" aria-current="page">会社概要</li>
      </ol>
    </nav>
    <div class="mv-common">
      <div class="mv-img img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/mv_company.png" alt="MV" loading="lazy">
      </div>
      <div class="mv-tlt" id="greeting">
        <h1>Company Profile</h1>
        <p>Message from the President</p>
      </div>
    </div>
    <div class="main-container">
      <div class="message">
        <div class="message-row">
          <div class="message-content">
            <p>Our vision is to create a society where everyone can spend their money more freely and richly on what they love by eliminating mobile phone charges. We believe that communication is the foundation of modern society, and by making it free, we can enhance the quality of life for people worldwide.<br><br>
              We aim to achieve this by striving to develop new systems and technologies, and by providing innovative smartphone devices and communication services. This effort is not just a dream, but a new standard we aim to achieve.<br><br>
              We aspire to be a company that leads the world with cutting-edge technology and bold ideas, continually pushing boundaries and embracing new challenges. We earnestly hope that every one of our employees will unite their efforts to achieve this goal and work hand in hand with you to build a bright future.<br><br>
              We sincerely request your continued support and trust.</p>
            <div class="message-name">
              <span>For Detailed Clarification</span>
              <span>Yu Asano</span>
            </div>
          </div>
          <div class="ceo-img img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_ceo.png" alt="代表取締役社長">
            <div class="signature-img img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_signature.png" alt="代表取締役社長">
            </div>
          </div>
        </div>
      </div>
      <div class="company" id="company">
        <div class="company-title">Corporate Profile</div>
        <table>
          <tr>
            <th>Corporate Name</th>
            <td>Center Mobile</td>
          </tr>
          <tr>
            <th>Representative Director</th>
            <td>Yu Asano</td>
          </tr>
          <tr>
            <th>URL</th>
            <td>https://centermobile.co.jp</td>
          </tr>
          <tr>
            <th>Date of Establishment</th>
            <td>June 2, 2020</td>
          </tr>
          <tr>
            <th>Capital</th>
            <td>¥30.7 million (including capital reserve)</td>
          </tr>
          <tr>
            <th>Head Office</th>
            <td>541-0056<br>507, Realize Sakaisuji-Honmachi Building, 1-5-31, Kyutaromachi, Chuo-ku, Osaka-shi, Osaka</td>
          </tr>
          <tr>
            <th>Business Category</th>
            <td>Notified Telecommunications Carrier E-02-04531</td>
          </tr>
          <tr>
            <th>Type of Business</th>
            <td>・Telecommunications franchise business<br>
              ・Telecommunications OEM Business<br>
              ・Advertising agency business<br>
              ・Telecommunications consulting business<br>
              ・Support and repair business for smartphones and tablets
            </td>
          </tr>
          <tr>
            <th>Banks</th>
            <td>Sumitomo Mitsui Banking Corporation</td>
          </tr>
        </table>
        <table>
          <tr>
            <th rowspan="2">Advisors</th>
            <td>Odin Co.<br>
              663-8166<br>
              Koshien Bldg. 5th floor, 1-25 Koshien-Takashio-cho, Nishinomiya-shi, Hyogo<br>
              Chairman Itsuo Hakozaki<br>
              Former Chief of Police, Thatchiai Police Station, Hyogo Prefecture<br>
              Representative Director Mitsuru Sato<br>
              Former Chief of Gang Control Division, Hyogo Prefectural Government</td>
          </tr>
        </table>
        <table>
          <tr>
            <th rowspan="4">Advisor Attorney at Law</th>
            <td>Iwamura, Muramoto & Yamaguchi Law Office<br>
              530-0005<br>
              Nakanoshima Festival Tower, 19th Floor, 2-3-18 Nakanoshima, Kita-ku, Osaka<br>
              Attorney at Law Yosuke Yamaguchi</td>
          </tr>
          <tr>
            <td>Yodoyabashi-Yamagami Godo<br>
              541-0046<br>
              9th floor, OBIC Midosuji Building, 4-2-3 Hiranomachi, Chuo-ku, Osaka City, Osaka<br>
              Attorney Yasuro Minami</td>
          </tr>
          <tr>
            <td>TMI Sogo Law Office<br>
              106-6123<br>
              Roppongi Hills Mori Tower 23th floor, 6-10-1 Roppongi, Minato-ku, Tokyo<br>
              Attorney Kozo Abe</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <?php get_template_part('en/inc/footer-new'); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <?php get_template_part('inc/chat'); ?>
</body>