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
        <p>代表挨拶</p>
      </div>
    </div>
    <div class="main-container">
      <div class="message">
        <div class="message-row">
          <div class="message-content">
            <p>私たちのビジョンは、携帯電話の料金を無料にすることで、誰もがより自由に、そしてより豊かに好きなことにお金を使える社会を実現することです。通信は現代社会の基盤であり、それを無料化することで、世界中の人々の生活の質を向上させると信じています。<br><br>
              私たちは新しい仕組みや技術の開発に挑戦し、革新的なスマートフォン端末や通信サービスを提供することで、これを実現します。この取り組みは単なる夢ではなく、私たちが目指す新しいスタンダードです。<br><br>
              常に先進的な技術と斬新なアイデアで世界をリードし、挑戦し続ける企業でありたいと考えています。この目標に向けて、社員一人ひとりが力を合わせ、皆様と共に明るい未来を築いていけることを心から願っています。<br><br>
              これからも変わらぬご支援とご期待を賜りますよう、よろしくお願い申し上げます。</p>
            <div class="message-name">
              <span>代表取締役社長</span>
              <span>浅野 遊</span>
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
            <td>¥30.7 million yen (including capital reserve)</td>
          </tr>
          <tr>
            <th>Head Office</th>
            <td>〒541-0056<br>1-5-31 Kyutaro-cho, Chuo-ku, Osaka<br>Realize Sakaisuji Honmachi Building 507</td>
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
              〒663-8166<br>
              Koshien Bldg. 5F, 1-25 Koshien-Takashio-cho, Nishinomiya-shi, Hyogo, Japan<br>
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
              〒530-0005<br>
              2-3-18 Nakanoshima, Kita-ku, Osaka City, Osaka Prefecture<br>
              Nakanoshima Festival Tower 19th Floor<br>
              Attorney at Law Yosuke Yamaguchi</td>
          </tr>
          <tr>
            <td>Yodoyabashi-Yamagami Godo<br>
              〒541-0046<br>
              4-2-3 Hiranomachi, Chuo-ku, Osaka-shi, Osaka<br>
              Obic Midosuji Building 9F<br>
              Attorney Yasuro Minami</td>
          </tr>
          <tr>
            <td>TMI Sogo Law Office<br>
              〒106-6123<br>
              6-10-1 Roppongi, Minato-ku, Tokyo<br>
              Roppongi Hills Mori Tower 23F<br>
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