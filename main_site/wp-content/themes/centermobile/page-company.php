<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body>

  <!--ここから共通部分-->
  <?php get_template_part('inc/header'); ?>
  <!--ここまで共通部分-->
  <!-- ここからコンテンツ -->
  <div class="container">
    <div class="img_company top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">企業情報</h1>
          <p>Company</p>
        </div>
      </div>
    </div>

    <div class="nav_btn">
      <div class="wrapper">
        <div class="link_btns btn_blue2">
          <ul>
            <li><a href="#content">事業内容</a></li>
            <li><a href="#mission">企業理念</a></li>
            <li><a href="#about">会社概要</a></li>
            <li><a href="#document">中期事業計画書</a></li>
          </ul>
        </div>
      </div>
    </div>

    <section class="content" id="content">
      <div class="wrapper">
        <h2>事業内容</h2>
        <ul>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content1.png" alt="" width="490" height="156">
            <div class="content_txt">
              <h3>格安SIM事業について</h3>
              <p>「広告が再生される事により得られる広告収益」をユーザーにポイントとして還元し、月々の携帯料金にをポイントを利用することで最大割引で0円まで下げる事ができる格安SIMの販売事業。<br>
                <br>
                ユーザーからの通信収益だけに留まらず、広告スポンサー様からの広告収益を通信設備に大幅に費用投資する事で、快適な通信環境を実現。<br>
                <br>
                広告スポンサー様の広告費により、ユーザーへの回線提供コストを超えるフェーズを迎えた先には、TVと同様に「毎月無料で使える携帯」というサービスの実現を目指します。
              </p>
            </div>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content2.png" alt="" width="490" height="156">
            <div class="content_txt">
              <h3>FC（フランチャイズ）事業について</h3>
              <p>FC販売契約にて、センターモバイルの仕組みとSIMの販売権を提供します。<br>
                <br>他の格安SIMより高品質かつ安いサービスを販売して頂くことが可能。<br>
                <br>高い獲得率に加えて、99%を超える継続率と、最大30%を超える継続報酬により「長くて太い」継続収入を安定的に得て頂くことができます。<br>
                <br>販売企業様に向けて、現状のヒアリング、成功事例の共有、売上向上策の提案、営業研修や定期研修など、目標達成に向けたサポートを行います。
              </p>
            </div>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content3.png" alt="" width="490" height="156">
            <div class="content_txt">
              <h3>OEM事業について</h3>
              <p>OEM契約にて、センターモバイルの仕組みをリブランディングしていただき、自社ブランドとして展開していただけます。<br>
                <br>FCと違い、自社商品としての展開になるので、価格、販売方法などは自由に設定いただけます。<br>
                <br>通信という普及率、継続率が最も高い商材を自社ブランドとして、ユーザー様に提案していただけます。<br>
                <br>既存顧客様への新商品の提案、ストックとしての収入などを構築することができます。
              </p>
            </div>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/content4.png" alt="" width="490" height="156">
            <div class="content_txt">
              <h3>広告事業について</h3>
              <p>ブラウザでの検索から、アプリでの検索に移ろうとする時代の中で、全く新しい広告の形を提案します。<br>
                <br>ユーザー、プラットフォームの多様化がすすみ1つの企業がユーザーのアクションを把握するのが難しくなりつつあります。<br>
                <br>センターモバイルは複数のデータを組み合わせ、効率化、継続化を実現し広告をエンターテイメントとして提供することでユーザー体験を向上を促します。<br>
                <br>最低限の予算で、最高の結果を得るお手伝いをいたします。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <section class="mission" id="mission">
      <div class="wrapper">
        <h2>企業理念</h2>
        <div class="mission_txt">
          <ol>
            <li>人との信頼を育み、人を大切にする</li>
            <li>積極性をもって今までにない<br>オンリーワンなサービスを創造する</li>
            <li>先を見据えたサービスで社会インフラの可能性を広げ、新しい価値を創造する</li>
          </ol>
          <p>関わった人全てを幸せにし、自らのみならず社会をより良くする企業でありたいと考えています。</p>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="wrapper">
        <h2>会社概要</h2>
        <table>
          <tr>
            <th>法人名</th>
            <td>株式会社センターモバイル</td>
          </tr>
          <tr>
            <th>代表取締役</th>
            <td>中越達也</td>
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
            <td>通信フランチャイズ事業<br>
              通信OEM事業<br>
              広告代理店事業<br>
              通信に関するコンサルティング事業<br>
              スマホ・タブレットのサポート及び修理事業</td>
          </tr>
          <tr>
            <th>取引銀行</th>
            <td>三井住友銀行</td>
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
    </section>

    <section class="document" id="document">
      <div class="wrapper">
        <h2>中期事業計画書</h2>
        <p>中期事業計画書はこちらからご確認ください。</p>
        <div class="btn_outer btn_blue btn_pd">
          <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/businessplan.pdf" target="_blank">中期事業計画書（PDF）</a>
        </div>
      </div>
    </section>




    <footer>
      <?php get_footer(); ?>
    </footer>


  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>