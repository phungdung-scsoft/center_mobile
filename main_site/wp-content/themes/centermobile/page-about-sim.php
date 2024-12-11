<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php
  /**

   * Template Name: about-sim

   */
  get_header(); ?>
</head>

<body>
  <?php get_template_part('inc/header-new'); ?>
  <div class="page-about-sim">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">ホーム</a></li>
        <li class="breadcrumb-item"><a href="/company">会社情報</a></li>
        <li class="breadcrumb-item active" aria-current="page">格安SIMについて</li>
      </ol>
    </nav>
    <div class="mv-common">
      <div class="mv-img img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/mv_sim.png" alt="MV" loading="lazy">
      </div>
      <div class="mv-tlt">
        <h1>Budget mobile plan</h1>
        <p>格安SIMについて</p>
      </div>
    </div>
    <div class="section-introduce main-container">
      <div class="sim-title">
        <h3>携帯料金が自分で下げれる新しい仕組み</h3>
        <p>A new system that allows you to lower your mobile phone bill by yourself.</p>
      </div>
      <p class="introduce-desc">
        テレビやインターネットなど、多くのサービスが無料で使えてるのであれば毎月の携帯料金も無料にできるはず！という発想から、広告収益によってユーザーが自分で料金を下げれるサービスを考案しました。
      </p>
    </div>
    <div class="banner-sim">
      <div class="banner-text">
        <h1 class="banner-title">携帯料金が<br class="sp">最大割引で0円</h1>
        <p class="banner-subtitle">センターモバイルの格安SIM</p>
      </div>
      <div class="banner-btn-group">
        <a href="https://sim.centermobile.co.jp/?utm_source=corporate" class="banner-btn btn-common" target="_blank">
          詳しく見る
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
        </a>
        <a href="https://hakaku.centermobile.co.jp/?direct=1&lang=ja" class="banner-btn btn-common" target="_blank">
          WEBから申し込む
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_blue_icon.svg" alt="rectangle">
        </a>
      </div>
      <div class="banner-person img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mv_person.png" alt="person">
      </div>
    </div>
    <div class="section-plan">
      <div class="plan-decor img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_plan_mobile.png" alt="MV" loading="lazy">
      </div>
      <div class="main-container">
        <div class="sim-heading">
          <h2>Mobile plan</h2>
          <p>料金プラン</p>
        </div>
        <div class="plan-list-top">
          <div class="plan-item">
            <div class="plan-title">
              <div class="title-big">音声SIM<span>プラン</span></div>
              <div class="title-small">電話もインターネットも使える</div>
            </div>
            <div class="plan-content">
              <div class="plan-row">
                <div class="plan-tag">3<span>GB</span></div>
                <div class="plan-price">
                  <div class="number">0〜1,280</div>
                  <div class="unit">円/月</div>
                  <div class="note">(税込 1,408円)</div>
                </div>
              </div>
              <div class="plan-row">
                <div class="plan-tag">12<span>GB</span></div>
                <div class="plan-price">
                  <div class="number">0〜1,780</div>
                  <div class="unit">円/月</div>
                  <div class="note">(税込 1,958円)</div>
                </div>
              </div>
              <div class="plan-row">
                <div class="plan-tag medium">20<span>GB</span></div>
                <div class="plan-price">
                  <div class="number">0〜2,480</div>
                  <div class="unit">円/月</div>
                  <div class="note">(税込 2,728円)</div>
                </div>
              </div>
              <div class="plan-row">
                <div class="plan-tag big">50<span>GB</span></div>
                <div class="plan-price">
                  <div class="number">0〜3,980</div>
                  <div class="unit">円/月</div>
                  <div class="note">(税込 4,378円)</div>
                </div>
              </div>
            </div>
          </div>
          <div class="plan-item">
            <div class="plan-title">
              <div class="title-big">データSIM<span>プラン</span></div>
              <div class="title-small">インターネットだけ利用</div>
            </div>
            <div class="plan-content">
              <div class="plan-row">
                <div class="plan-tag">3<span>GB</span></div>
                <div class="plan-price">
                  <div class="number">0〜1,180</div>
                  <div class="unit">円/月</div>
                  <div class="note">(税込 1,298円)</div>
                </div>
              </div>
              <div class="plan-row">
                <div class="plan-tag">12<span>GB</span></div>
                <div class="plan-price">
                  <div class="number">0〜1,680</div>
                  <div class="unit">円/月</div>
                  <div class="note">(税込 1,848円)</div>
                </div>
              </div>
              <div class="plan-row">
                <div class="plan-tag medium">20<span>GB</span></div>
                <div class="plan-price">
                  <div class="number">0〜2,280</div>
                  <div class="unit">円/月</div>
                  <div class="note">(税込 2,508円)</div>
                </div>
              </div>
              <div class="plan-row">
                <div class="plan-tag big">50<span>GB</span></div>
                <div class="plan-price">
                  <div class="number">0〜3,780</div>
                  <div class="unit">円/月</div>
                  <div class="note">(税込 4,158円)</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="plan-item">
          <div class="plan-title">
            <div class="title-big">お得なかけ放題<span>セットプラン</span></div>
          </div>
          <div class="plan-content bottom">
            <div class="plan-row">
              <div class="plan-tag bottom">3<span>GB</span></div>
              <div class="plan-plus">+</div>
              <div class="plan-call">24時間かけ放題</div>
              <div class="plan-price">
                <div class="number">0〜2,980</div>
                <div class="unit">円/月</div>
                <div class="note">(税込 3,278円)</div>
                <div class="sale">定価より770円OFF</div>
              </div>
            </div>
            <div class="plan-row">
              <div class="plan-tag medium bottom">20<span>GB</span></div>
              <div class="plan-plus">+</div>
              <div class="plan-line">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="plan-price-list">
                <div class="plan-price-item">
                  <div class="plan-call">24時間かけ放題</div>
                  <div class="plan-price">
                    <div class="number">0〜3,700</div>
                    <div class="unit">円/月</div>
                    <div class="note">(税込 4,070円)</div>
                    <div class="sale">定価より1,298円OFF</div>
                  </div>
                </div>
                <div class="plan-price-item">
                  <div class="plan-call outline">5分かけ放題</div>
                  <div class="plan-price">
                    <div class="number">0〜2,700</div>
                    <div class="unit">円/月</div>
                    <div class="note">(税込 2,970円)</div>
                    <div class="sale">定価より748円OFF</div>
                  </div>
                </div>
                <div class="plan-price-item">
                  <div class="plan-call outline">10分かけ放題</div>
                  <div class="plan-price">
                    <div class="number">0〜3,000</div>
                    <div class="unit">円/月</div>
                    <div class="note">(税込 3,300円)</div>
                    <div class="sale">定価より528円OFF</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="plan-row">
              <div class="plan-tag big bottom">50<span>GB</span></div>
              <div class="plan-plus">+</div>
              <div class="plan-call">24時間かけ放題</div>
              <div class="plan-price">
                <div class="number">0〜4,980</div>
                <div class="unit">円/月</div>
                <div class="note">(税込 5,478円)</div>
                <div class="sale">定価より1,540円OFF</div>
              </div>
            </div>
          </div>
        </div>
        <a href="https://hakaku.centermobile.co.jp/?direct=1&lang=ja" class="plan-btn btn-common" target="_blank">
          WEBから申し込む
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_white_icon.svg" alt="rectangle">
        </a>
      </div>


    </div>
    <div class="section-charge">
      <div class="main-container">
        <div class="sim-heading">
          <h2>Methods for lowering charges</h2>
          <p>料金を下げる方法</p>
        </div>
        <p class="introduce-desc">
          色んな方法で、「スキマ時間に」「楽しみながら」など自分のスタイルでポイントを獲得し、そのポイントが10pt＝1円として料金の割引に使用できます。<br>
          ポイントを貯めれば貯めるほど、携帯料金が0円に近づいていきます。
        </p>
        <div class="charge-title">
          <span>1</span>
          動画広告を見てポイントをゲット
        </div>
        <div class="charge-row charge-row1">
          <div class="charge-message">動画広告を<br>見る</div>
          <div class="charge-img charge-img-hightlight img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_charge1.png" alt="">
          </div>
          <div class="next-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/icon_next.svg" alt="next">
          </div>
          <div class="charge-img img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_charge2.png" alt="">
          </div>
          <p class="charge-desc">30-60秒前後でランダムで流れる動画広<br class="pc">告を閲覧することで5ptを獲得できます。</p>
        </div>
        <div class="charge-title">
          <span>2</span>
          ゲームしながらポイントを楽しくゲット
        </div>
        <div class="change-group">
          <div class="charge-row charge-row2">
            <div class="charge-message">広告を閲覧すると<br>ガチャが回せる</div>
            <div class="charge-img img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_charge3.png" alt="">
            </div>
            <div class="next-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/icon_next.svg" alt="next">
            </div>
            <div class="charge-img img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_charge4.png" alt="">
            </div>
          </div>
          <p class="charge-desc">5秒程度でスキップできる広告を閲覧することで、ガチャが回せ、回したガチャでポイントだけでなく追加ギガや特別なチケットも獲得できます。<br><br>
            たくさん追加ギガをゲットすれば、契約した容量の月額でそれ以上にたくさんギガが使えます。</p>
        </div>
        <div class="charge-app">
          <div class="app-title">
            <span>さらにアプリを使って色々プレイ！</span>
            <div class="line"></div>
          </div>
          <div class="app-row">
            <div class="app-item">
              <div class="app-img app-img1 img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_app1.png" alt="">
              </div>
              <p class="app-desc">みんながガチャやCMを見るを使えば使うほど、ジャックポットにポイントが貯まり一気に放出されるジャックポット機能も！当たったユーザーは一気に数か月分の月額が0円になる事も。</p>
            </div>
            <div class="app-item">
              <div class="app-img app-img2 img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_app2.png" alt="">
              </div>
              <p class="app-desc">「CMを見る」や「ガチャ」でゲットしたポイントはじゃんけんで倍々に増やすゲームにチャレンジできます。</p>
              <p class="app-note">※負けると獲得ポイントは0になります。</p>
            </div>
            <div class="app-item">
              <div class="app-img app-img3 img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_app3.png" alt="">
              </div>
              <p class="app-desc">毎週一部の方が大量ポイントを獲得。動画広告を見れば見るほど、当選しやすくなります。</p>
            </div>
          </div>
        </div>
        <div class="charge-title">
          <span>3</span>
          無料登録やダウンロード広告でポイントをゲット
        </div>
        <div class="charge-row charge-row3">
          <div class="charge-message">ダウンロードや<br>会員登録をする</div>
          <div class="charge-img img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_charge6.png" alt="">
          </div>
          <div class="charge-img img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_charge5.png" alt="">
          </div>
          <p class="charge-desc">アプリをダウンロードしたり、会員登録をしたりなど、いろんな条件をクリアすることでポイントを獲得！<br>
            定期的にチャレンジできる内容が更新されます。</p>
        </div>
        <div class="charge-title">
          <span>4</span>
          申込系広告でポイントをゲット
        </div>
        <div class="charge-row charge-row4">
          <div class="charge-message">サービスや<br>商品を利用する</div>
          <div class="charge-img-group">
            <div class="charge-img img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_charge7.png" alt="">
            </div>
            <div class="charge-img img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_charge8.png" alt="">
            </div>
          </div>
          <p class="charge-desc">掲載されているサービスや商品を利用することで、ポイントを獲得できます。<br>
            身の回りのサービスを置き換えていく事で、どんどん携帯代が安くなる仕組みです。</p>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('inc/footer-new'); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <?php get_template_part('inc/chat'); ?>
</body>