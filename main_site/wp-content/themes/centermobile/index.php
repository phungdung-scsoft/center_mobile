<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body id="pTop" class="website type-<?= $GLOBALS['gl_path']; ?>">
  <?php get_template_part('inc/header-new'); ?>
  
  <div class="mainArea">
    <!-- main -->
    <div class="main">
      <div class="section-mv">
        <div class="mv-top img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_pc.png" alt="MV" loading="lazy">
        </div>
        <div class="banner-sim">
          <div class="banner-text">
            <h1 class="banner-title">携帯料金が<br class="sp">最大割引で0円</h1>
            <p class="banner-subtitle">センターモバイルの格安SIM</p>
          </div>
          <div class="banner-btn-group">
            <a href="#" class="banner-btn btn-common">
            詳しく見る
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
            <a href="#" class="banner-btn btn-common">
            WEBから申し込む
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
          </div>
          <div class="banner-person img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_person.png" alt="person">
          </div>
        </div>
      </div>
      <section class="section-topic">
        <div class="section-title">トピックス</div>
        <div class="topic-slider">
          <div class="slide-item img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/topic_1.png" alt="topic" loading="lazy">
          </div>
          <div class="slide-item img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/topic_2.png" alt="topic" loading="lazy">
          </div>
          <div class="slide-item img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/topic_3.png" alt="topic" loading="lazy">
          </div>
          <div class="slide-item img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/topic_1.png" alt="topic" loading="lazy">
          </div>
          <div class="slide-item img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/topic_2.png" alt="topic" loading="lazy">
          </div>
        </div>
      </section>
      <section class="section-service">
        <div class="section-title">サービス</div>
        <div class="service-block service-1">
          <div class="service-img img-wrap">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_1.png" alt="service" loading="lazy">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_1_sp.png" alt="service" loading="lazy">
          </div>
          <div class="service-content">
            <div class="service-icon img_wrap">
              <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_icon_1.png" alt="CENTER MOBILE">
              <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_icon_1_sp.png" alt="CENTER MOBILE">
            </div>
            <p class="service-title">格安SIMサービス　<br class="sp">センターモバイル</p>
            <p class="service-subtitle">携帯料金最大で0円まで割引！</p>
            <p class="service-desc">ポイントを利用することで、最大0円まで割引可能な格安SIMサービス。広告視聴や各種ゲーム、アプリのダウンロード、サービスの申し込みなどでポイントを貯められます。</p>
            <a href="#" class="service-btn btn-common">
            詳しく見る
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
          </div>
        </div>
        <div class="service-block service-2">
          <div class="service-img img-wrap">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_2.png" alt="service" loading="lazy">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_2_sp.png" alt="service" loading="lazy">
          </div>
          <div class="service-content">
            <div class="service-icon img_wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_icon_2.png" alt="PLAIO WiMAX">
            </div>
            <p class="service-title pc">格安Wi-Fiサービス　PLAIO WiMAX</p>
            <p class="service-title sp">格安Wi-Fiサービス PLAIO WiMAX</p>
            <p class="service-subtitle">データ無制限！高速通信！</p>
            <p class="service-desc">データ容量無制限・5G対応の高速通信Wi-Fi＜PLAIO WiMAX＞！SIMとセットで契約すると更にお得に。</p>
            <a href="#" class="service-btn btn-common">
            詳しく見る
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
          </div>
        </div>
        <div class="service-block service-3">
          <div class="service-img img-wrap">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_3.png" alt="service" loading="lazy">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_3_sp.png" alt="service" loading="lazy">
          </div>
          <div class="service-content">
            <div class="service-icon img_wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/service_icon_3.png" alt="CENTER MOBILE">
            </div>
            <p class="service-title pc">格安旅券サービス　PLAIO トラベル</p>
            <p class="service-title sp">格安旅券サービス PLAIO トラベル</p>
            <p class="service-subtitle">旅行も出張もお得に行ける！浮いたお金でたくさん遊べる！</p>
            <p class="service-desc">宿泊付きの航空券や、新幹線チケットなどが格安で予約でき、お得に旅行や出張に行くことが可能なトラベルサービス。家族まで使えてとってもお得。</p>
            <a href="#" class="service-btn btn-common">
            詳しく見る
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
          </div>
        </div>
      </section>
      <section class="section-news">
        <div class="section-title">ニュース</div>
        <div class="news-block">
          <div class="news-tabs" id="newsTabs">
            <a id="tab1">お知らせ</a>
            <a id="tab2">IRニュース</a>
          </div>
          <div class="news-container">
            <div class="container" id="tab1C">
              <ul class="news-list">
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2024年3月12日</div>
                      <div class="tag">プレスリリース</div>
                    </div>
                    <p class="news-item-title">【携帯料金最大0円まで割引】格安SIMサービスのセンターモバイル、鹿児島鴨池店が鹿児島県にオープン</p>
                  </a>
                </li>
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2023年4月24日</div>
                      <div class="tag">プレスリリース</div>
                    </div>
                    <p class="news-item-title">【携帯料金最大0円まで割引】東京初出店！格安SIMサービスのセンターモバイル、浅草店がオープン</p>
                  </a>
                </li>
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2023年5月24日</div>
                      <div class="tag">お知らせ</div>
                    </div>
                    <p class="news-item-title">重要事項説明書の改定に伴うお知らせ</p>
                  </a>
                </li>
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2023年8月1日</div>
                      <div class="tag">プレスリリース</div>
                    </div>
                    <p class="news-item-title">【携帯料金最大0円まで割引】岡山初出店！格安SIMサービスの「センターモバイル　大安寺店」をオープン</p>
                  </a>
                </li>
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2023年10月24日</div>
                      <div class="tag">お知らせ</div>
                    </div>
                    <p class="news-item-title">メンテナンス実施のお知らせ</p>
                  </a>
                </li>
              </ul>
              <a href="#" class="news-btn btn-common">
              一覧を見る
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
              </a>
            </div>
            <div class="container" id="tab2C">
              <ul class="news-list">
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2023年12月12日</div>
                      <div class="tag">決算関連</div>
                    </div>
                    <p class="news-item-title">2024年12月期第2四半期決算説明会　配信動画   ※外部サイトに遷移します</p>
                  </a>
                </li>
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2024年1月12日</div>
                      <div class="tag">IR資料</div>
                    </div>
                    <p class="news-item-title">第二回中間株主通信</p>
                  </a>
                </li>
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2024年5月12日</div>
                      <div class="tag">決算関連</div>
                    </div>
                    <p class="news-item-title">2024年12月期第2四半期決算説明会　配信動画</p>
                  </a>
                </li>
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2024年8月12日</div>
                      <div class="tag">決算関連</div>
                    </div>
                    <p class="news-item-title">2024年12月期第2四半期決算説明会　配信動画   ※外部サイトに遷移します</p>
                  </a>
                </li>
                <li class="news-item">
                  <a href="#">
                    <div class="news-item-info">
                      <div class="date">2024年9月12日</div>
                      <div class="tag">有報</div>
                    </div>
                    <p class="news-item-title">2024年12月期半期報告書（246KB）</p>
                  </a>
                </li>
              </ul>
              <a href="#" class="news-btn btn-common">
              一覧を見る
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
              </a>
            </div>
        </div>
        </div>
      </section>

      <section class="section-about about-fc">
        <div class="about-block">
          <div class="about-content">
            <div class="about-title">FC・OEM</div>
            <div class="about-img img-wrap sp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_1.png" alt="about" loading="lazy">
            </div>
            <p class="about-desc">
              センターモバイルではFC・OEM事業を展開しております。<br>
              ともに歩むパートナーとして充実したサポートと一貫したサービスを提供いたします。
            </p>
            <a href="#" class="about-btn btn-common">詳しく見る</a>
          </div>
          <div class="about-img img-wrap pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_1.png" alt="about" loading="lazy">
          </div>
        </div>
      </section>

      <section class="section-about about-ir">
        <div class="about-block">
          <div class="about-content">
            <div class="about-title">IR情報</div>
            <div class="about-img img-wrap sp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_2.png" alt="about" loading="lazy">
            </div>
            <p class="about-desc">
              最新のIR資料や個人投資家向けの情報を掲載しています。
            </p>
            <a href="#" class="about-btn btn-common">詳しく見る</a>
          </div>
          <div class="about-img img-wrap pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_2.png" alt="about" loading="lazy">
          </div>
        </div>
      </section>
      <section class="section-about about-recruit">
        <div class="about-block">
          <div class="about-content">
            <div class="about-title">採用情報</div>
            <div class="about-img img-wrap sp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_3.png" alt="about" loading="lazy">
            </div>
            <p class="about-desc">
              センターモバイルでは、新卒/既卒を問わず、様々な職種の人材を募集しております。
            </p>
            <a href="#" class="about-btn btn-common">詳しく見る</a>
          </div>
          <div class="about-img img-wrap pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about_3.png" alt="about" loading="lazy">
          </div>
        </div>
      </section>
    </div>
    <!-- /main -->
  </div>
  <?php get_template_part('inc/footer-new'); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>

  <?php wp_footer(); ?>

  <?php get_template_part('inc/chat'); ?>

</body>