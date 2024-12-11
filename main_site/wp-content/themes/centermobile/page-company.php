
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php
  /**

 * Template Name: company

 */
   get_header(); ?>
</head>

<body>
  <?php get_template_part('inc/header-new'); ?>
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
      <div class="mv-tlt">
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
        <div class="company-title">会社概要</div>
        <table>
          <tr>
            <th>法人名</th>
            <td>株式会社センターモバイル</td>
          </tr>
          <tr>
            <th>代表取締役</th>
            <td>浅野 遊</td>
          </tr>
          <tr>
            <th>URL</th>
            <td>https://centermobile.co.jp</td>
          </tr>
          <tr>
            <th>設立日</th>
            <td>2020年6月2日</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>3,070万円(資本準備金を含む)</td>
          </tr>
          <tr>
            <th>本社所在地</th>
            <td>〒541-0056<br>大阪府大阪市中央区久太郎町1-5-31<br>リアライズ堺筋本町ビル507</td>
          </tr>
          <tr>
            <th>事業者区分</th>
            <td>届出電気通信事業者　E-02-04531</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>・個人向け通信サービス（移動通信サービスの提供、固定通信サービスの提供、インターネット接続サービスの提供）<br>
            ・通信フランチャイズ、OEM事業<br>
            ・広告代理店事業<br>
            ・通信に関するコンサルティング事業<br>
            ・スマホ、タブレットのサポート及び修理事業
            </td>
          </tr>
          <tr>
            <th>取引銀行</th>
            <td>りそな銀行<br>
              三菱UFJ銀行<br>
              三井住友銀行</td>
          </tr>
        </table>
        <table>
          <tr>
            <th rowspan="2">顧問</th>
            <td>株式会社オーディン<br>
              〒663-8166<br>
              兵庫県西宮市甲子園高潮町1-25 甲子園ビル5F<br>
              会長　箱崎 逸夫<br>
              元 兵庫県葺合警察署長<br>
              代表取締役　佐藤 満<br>
              元 兵庫県暴力団対策課</td>
          </tr>
        </table>
        <table>
          <tr>
            <th rowspan="4">顧問弁護士</th>
            <td>岩村・村本・山口法律事務所<br>
              〒530-0005<br>
              大阪府大阪市北区中之島二丁目3番18号<br>
              中之島フェスティバルタワー19階<br>
              弁護士　山口 要介</td>
          </tr>
          <tr>
            <td>弁護士法人 淀屋橋・山上合同<br>
              〒541-0046<br>
              大阪府大阪市中央区平野町4丁目2番3号<br>
              オービック御堂筋ビル9階<br>
              弁護士　南 靖郎</td>
          </tr>
          <tr>
            <td>TMI総合法律事務所<br>
              〒106-6123<br>
              東京都港区六本木6丁目10番1号<br>
              六本木ヒルズ森タワー23階<br>
              弁護士　阿部 洸三</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <?php get_template_part('inc/footer-new'); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <?php get_template_part('inc/chat'); ?>
</body>