<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body id="pTop" class="website type-<?= $GLOBALS['gl_path']; ?>">
  <div class="hArea">
    <!-- header -->
    <div class="header-pc pc-flex">
      <div class="hLogo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo.png" alt="CENTER MOBILE" loading="lazy">
        </a>
      </div>
      <div class="nav-pc">
        <div class="nav-item">
          <div class="nav-trigger">サービス</div>
          <div class="nav-child-list">
            <a href="#" class="nav-child">
              格安SIM
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
            </a>
            <a href="#" class="nav-child">
              PLAIO WiMAX
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
            </a>
            <a href="#" class="nav-child">
              PLAIO トラベル
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
            </a>
          </div>
        </div>
        <div class="nav-item">
          <div class="nav-trigger">会社情報</div>
          <div class="nav-child-list">
            <a href="#" class="nav-child">
              代表挨拶
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="#" class="nav-child">
              会社概要
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="#" class="nav-child">
              役員紹介
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="#" class="nav-child">
              沿革
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
          </div>
        </div>
        <div class="nav-item">
          <div class="nav-trigger">ニュース</div>
          <div class="nav-child-list">
            <a href="#" class="nav-child">
              お知らせ
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="#" class="nav-child">
              IRニュース
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
          </div>
        </div>
        <div class="nav-item">
          <div class="nav-trigger">IR情報</div>
          <div class="nav-child-list nav-last">
            <a href="#" class="nav-child">
            株主・投資家の皆様へ
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="#" class="nav-child">
            業績ハイライト
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="#" class="nav-child">
            IRライブラリ
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="#" class="nav-child">
            IRカレンダー
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="#" class="nav-child">
            株式情報
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
          </div>
        </div>
        <a href="#" class="nav-item-last">
        採用情報
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
        </a>
      </div>
      <div class="hFunction">
        <div class="select-lang">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/earth_icon.svg" alt="earth">
          <select name="" id="">
            <option value="japanese">Japanese</option>
            <option value="english">English</option>
            <option value="korean">Korean</option>
          </select>
        </div>
        <a href="<?php echo esc_url(home_url('/')); ?>contact-top/" class="hBtn">お問い合わせ</a>
      </div>
    </div><!-- /header -->
    <div class="subHead pc"></div>

    <!-- nav -->
    <div class="header-sp sp">
      <div class="header-main">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hLogo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo_sp.png" alt="CENTER MOBILE" loading="lazy">
        </a>
        <div class="menu-trigger">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="text show">MENU</div>
          <div class="text close">閉じる</div>
        </div>
      </div>

      <div class="gnav">
        <div class="gnav__wrap">
          <div class="nav-item">
            <div class="nav-trigger">サービス<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_down_icon.svg" alt="arrow"></div>
            <div class="nav-child-list">
              <a href="#" class="nav-child">
                格安SIM
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
              </a>
              <a href="#" class="nav-child">
                PLAIO WiMAX
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
              </a>
              <a href="#" class="nav-child">
                PLAIO トラベル
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
              </a>
            </div>
          </div>
          <div class="nav-item">
            <div class="nav-trigger">会社情報<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_down_icon.svg" alt="arrow"></div>
            <div class="nav-child-list">
              <a href="#" class="nav-child">
                代表挨拶
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              <a href="#" class="nav-child">
                会社概要
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              <a href="#" class="nav-child">
                役員紹介
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              <a href="#" class="nav-child">
                沿革
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
            </div>
          </div>
          <div class="nav-item">
            <div class="nav-trigger">ニュース<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_down_icon.svg" alt="arrow"></div>
            <div class="nav-child-list">
              <a href="#" class="nav-child">
                お知らせ
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              <a href="#" class="nav-child">
                IRニュース
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
            </div>
          </div>
          <div class="nav-item">
            <div class="nav-trigger">IR情報<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_down_icon.svg" alt="arrow"></div>
            <div class="nav-child-list nav-last">
              <a href="#" class="nav-child">
              株主・投資家の皆様へ
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              <a href="#" class="nav-child">
              業績ハイライト
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              <a href="#" class="nav-child">
              IRライブラリ
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              <a href="#" class="nav-child">
              IRカレンダー
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              <a href="#" class="nav-child">
              株式情報
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
            </div>
          </div>
          <a href="#" class="nav-item-last">
          採用情報
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
          </a>
          <div class="nav-item">
            <div class="nav-trigger">
              <div class="language">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/earth_icon.svg" alt="earth">
                Language
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_down_icon.svg" alt="arrow">
            </div>
            <div class="nav-child-list">
              <a href="#" class="nav-child">
                English
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
              </a>
              <a href="#" class="nav-child">
                Japanese
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
              </a>
              <a href="#" class="nav-child">
                Korean
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
              </a>
            </div>
          </div>

          <a href="<?php echo esc_url(home_url('/')); ?>contact-top/" class="hBtn">お問い合わせ</a>
          <button class="closeBtn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/close_icon.svg" alt="close">閉じる</button>
        </div>
      </div>

    </div>
    <!-- /nav -->
  </div>
  
  <div class="mainArea">
    <!-- main -->
    <div class="main">
      <div class="section-mv">
        <div class="mv-top img-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_pc.png" alt="MV" loading="lazy">
        </div>
        <div class="mv_bottom">
          <div class="mv-text">
            <h1 class="mv-title">携帯料金が<br class="sp">最大割引で0円</h1>
            <p class="mv-subtitle">センターモバイルの格安SIM</p>
          </div>
          <div class="mv-btn-group">
            <a href="#" class="mv-btn btn-common">
            詳しく見る
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
            <a href="#" class="mv-btn btn-common">
            WEBから申し込む
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
            </a>
          </div>
          <div class="mv_person img-wrap">
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
                      <div class="date">2023年5月24日</div>
                      <div class="tag">お知らせ</div>
                    </div>
                    <p class="news-item-title">重要事項説明書の改定に伴うお知らせ</p>
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
                      <div class="date">2024年5月12日</div>
                      <div class="tag">決算関連</div>
                    </div>
                    <p class="news-item-title">2024年12月期第2四半期決算説明会　配信動画</p>
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
    <!-- footer -->
    <footer>
      <div class="footer-top">
        <div class="footer-col">
          <div class="footer-label">会社情報</div>
          <ul class="footer-list">
            <li><a href="#">代表挨拶</a></li>
            <li><a href="#">会社概要</a></li>
            <li><a href="#">役員紹介</a></li>
            <li><a href="#">沿革</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <div class="footer-label">サービス</div>
          <ul class="footer-list">
            <li><a href="#">センターモバイル<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle"></a></li>
            <li><a href="#">PLAIO WiMAX<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle"></a></li>
            <li><a href="#">PLAIO トラベル<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle"></a></li>
          </ul>
        </div>
        <div class="footer-col">
          <div class="footer-label">ニュース</div>
          <ul class="footer-list">
            <li><a href="#">お知らせ<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle"></a></li>
            <li><a href="#">IRニュース<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle"></a></li>
          </ul>
        </div>
        <div class="footer-col">
          <div class="footer-label">IR情報</div>
          <ul class="footer-list">
            <li><a href="#">IRニュース</a></li>
            <li><a href="#">株主・投資家の皆様へ</a></li>
            <li><a href="#">業績ハイライト</a></li>
            <li><a href="#">IRライブラリ</a></li>
            <li><a href="#">IRカレンダー</a></li>
            <li><a href="#">株式情報</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <div class="footer-label">FC・OEM<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle"></div>
          <ul class="footer-list">
            <li><a href="#">採用情報<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle"></a></li>
            <li><a href="#">店舗情報<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle"></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-middle">
        <a href="#">プライバシーポリシー</a>
        <a href="#">外部送信ポリシー</a>
        <a href="#">お問い合わせ</a>
      </div>
      <div class="footer-bottom">
        <div class="fLogo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/f_logo.png" alt="CENTER MOBILE">
          </a>
        </div>
        <div class="copy-right">Copyright ©CENTER MOBILE All rights reserved.</div>
      </div>
    </footer>
    <!-- /footer -->

    <!-- scroll to top -->
    <div id="toTop" class="scroll-to-top"></div>
    <!-- /scroll to top -->

  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/top.js"></script>

  <?php wp_footer(); ?>

  <?php get_template_part('inc/chat'); ?>

</body>