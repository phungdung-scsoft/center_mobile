<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body id="pTop" class="website type-<?= $GLOBALS['gl_path']; ?>">
  <div class="hArea">
    <!-- header -->
    <header>
      <div class="hLogo">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo.png" alt="CENTER MOBILE" class="pc" width="138" height="75" loading="lazy">
        </picture>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="sp">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo_sp.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_logo_sp.png" alt="CENTER MOBILE" width="292" height="28" loading="lazy">
          </picture>
        </a>
      </div>
      <ul class="headerUl">
        <li class="sp">
          <a href="https://maimo.app/login" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_bnr_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_bnr_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?> Login" width="151" height="38">
            </picture>
          </a>
        </li>
        <li class="menuBtn sp">
          <div class="menu-trigger">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <nav class="gnav">
            <div class="gnav__wrap">
              <ul class="gnav__menu f700">
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>discount/">割引の仕組み</a></li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>plan/">料金・サービス</a></li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>app/">アプリの使い方</a></li>
                <li class="gnav__menu__item">
                  <a href="javascript:void(0);" class="accordion-parent">WEB申し込み</a>
                  <ul class="accordion-child">
                    <li><a href="https://hakaku.centermobile.co.jp/?direct=1" target="_blank">SIMを申し込む</a></li>
                    <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAXを申し込む</a></li>
                  </ul>
                </li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>company/">企業情報</a></li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>fc/">FC・OEM</a></li>
                <?php
                $count_posts = wp_count_posts();
                $post_number = $count_posts->publish;
                if ($post_number > 0) :
                ?>
                  <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>media-archive/">トピックス</a></li>
                <?php endif; ?>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>store/">店舗一覧</a></li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>media-appearances/">掲載メディア一覧</a></li>
                <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>contact-top/">お問い合わせ</a></li>
                <li class="gnav__menu__item">
                  <a href="javascript:void(0);" class="accordion-parent">お役立ちガイド</a>
                  <ul class="accordion-child">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>guide/mnp/">MNPとは？</a></li>
                  </ul>
                </li>
              </ul>
              <!-- <a href=""><?= $GLOBALS['gl_service']; ?> Login</a> -->
            </div><!--gnav-wrap-->
          </nav>
        </li>
      </ul>
    </header><!-- /header -->



    <!-- nav -->
    <nav class="pc">
      <ul>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>discount/">割引の仕組み</a></li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>plan/">料金・サービス</a></li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>app/">アプリの使い方</a></li>
        <li class="gnav__menu__item">
          <a href="javascript:void(0);" class="accordion-parent">WEB申し込み</a>
          <ul class="accordion-child">
            <li><a href="https://hakaku.centermobile.co.jp/?direct=1" target="_blank">SIMを申し込む</a></li>
            <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAXを<br>申し込む</a></li>
          </ul>
        </li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>company/">企業情報</a></li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>fc/">FC・OEM</a></li>
        <?php
        $count_posts = wp_count_posts();
        $post_number = $count_posts->publish;
        if ($post_number > 0) :
        ?>
          <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>media-archive/">トピックス</a></li>
        <?php endif; ?>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>store/">店舗一覧</a></li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>media-appearances/">掲載メディア一覧</a></li>
        <li class="gnav__menu__item"><a href="<?php echo esc_url(home_url('/')); ?>contact-top/">お問い合わせ</a></li>
        <li class="gnav__menu__item">
          <a href="javascript:void(0);" class="accordion-parent">お役立ちガイド</a>
          <ul class="accordion-child">
            <li><a href="<?php echo esc_url(home_url('/')); ?>guide/mnp/">MNPとは？</a></li>
          </ul>
        </li>
      </ul>
      <a href="https://maimo.app/login" target="_blank">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_bnr_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/h_bnr_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?> Login" width="151" height="38">
        </picture>
      </a>
    </nav>
    <!-- /nav -->
  </div>

  <div class="mainArea">
    <!-- <h1>CENTER MOBILE</h1> -->
    <!-- cover -->
    <div id="cover">
      <div class="slider">
        <div class="slider-item">
          <a href="https://wimax.plaio.jp/" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>_sp.webp" media="(max-width: 768px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>_sp.png" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>.png" alt="PLAIO WiMAX データ容量無制限 5G対応最新端末 月額1,180円〜 （税込1,298円〜） 乗り換えで最大40,000円キャッシュバック" width="2400" height="1200">
            </picture>
          </a>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>_sp.webp?1" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>_sp.png?1" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>.webp?1" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>.png?1" alt="携帯料金は自分で決める時代へ！" loading="lazy" width="2400" height="1200">
          </picture>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>_sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>_sp.png" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>.png" alt="インターネット無制限！新規も切り替えもとってもお得！<?= $GLOBALS['gl_light']; ?>" loading="lazy" width="2400" height="1200">
          </picture>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_5_<?= $GLOBALS['gl_path']; ?>_sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_5_<?= $GLOBALS['gl_path']; ?>_sp.png" media="(max-width: 768px)">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_5_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_5_<?= $GLOBALS['gl_path']; ?>.png" alt="CHARGE SPOT どこでも借りれて、いつでも充電し放題！全国30,000台以上設置！通常よりもお得なプランでご利用いただけます。" loading="lazy" width="2400" height="1200">
          </picture>
        </div>
      </div>

      <div class="thumb pc">
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_7_<?= $GLOBALS['gl_path']; ?>.png" alt="PLAIO WiMAX 持ち運び型・置き型どちらを選んでもデータ容量無制限" class="pc" loading="lazy" width="258" height="129">
          </picture>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_2_<?= $GLOBALS['gl_path']; ?>.png" alt="携帯料金は自分で決める時代へ！" class="pc" loading="lazy" width="258" height="129">
          </picture>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_4_<?= $GLOBALS['gl_path']; ?>.png" alt="インターネット無制限！新規も切り替えもとってもお得！<?= $GLOBALS['gl_light']; ?>" class="pc" loading="lazy" width="258" height="129">
          </picture>
        </div>
        <div class="slider-item">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_5_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img_mv_5_<?= $GLOBALS['gl_path']; ?>.png" alt="CHARGE SPOT どこでも借りれて、いつでも充電し放題！全国30,000台以上設置！通常よりもお得なプランでご利用いただけます。" class="pc" loading="lazy" width="258" height="129">
          </picture>
        </div>
      </div>
    </div>
    <!-- /cover -->


    <div id="main">
      <?php $args = array(
        'posts_per_page' => 4
      );
      $posts = get_posts($args);
      if (!empty($posts)) :
      ?>
        <section class="content11">
          <div class="inner">
            <h2>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con11_tit.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con11_tit.png" alt="Topics" width="236" height="72" loading="lazy">
              </picture>
            </h2>
            <ul>
              <?php
              foreach ($posts as $post) : // ループの開始
                setup_postdata($post); // 記事データの取得
              ?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <dl>
                      <?php if (has_post_thumbnail()) : //if文による条件分岐 アイキャッチが有る時 
                      ?>
                        <dt><?php the_post_thumbnail(array(193, 193), array('class' => 'left')); ?></dt>
                      <?php else : // アイキャッチが無い時 
                      ?>
                        <dt>
                          <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_topics.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_topics.png" alt="" width="193" height="193" loading="lazy" class="logo">
                          </picture>
                        </dt>
                      <?php endif; ?>
                      <dd>
                        <span class="date"><?php the_time('Y年m月d日') ?></span>
                        <p>
                          <?php the_title(); ?>
                        </p>
                      </dd>
                    </dl>
                  </a>
                </li>
              <?php
              endforeach; // ループの終了
              wp_reset_postdata(); // 直前のクエリを復元する
              ?>
            </ul>
            <a href="<?php echo esc_url(home_url('/')); ?>media-archive/">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01.png" alt="もっと詳しく" width="600" height="87" loading="lazy">
              </picture>
            </a>
          </div>
        </section>
      <?php elseif (empty($posts)) :  //もし記事が空だったら　
      ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

      <section class="content01 fuki">
        <div class="inner">
          <h2 class="mainTit">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con01_tit01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con01_tit01.png" alt="携帯料金最大で０円まで割引！" width="822" height="124">
            </picture>
          </h2>
          <a href="<?php echo esc_url(home_url('/')); ?>discount/" class="btn03">割引の仕組みはこちら</a>

          <div class="titImg">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con01_tit02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con01_tit02.png" alt="プランは簡単に大きく2つの料金プラン" width="826" height="154" loading="lazy">
            </picture>
          </div>

          <ul>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con01_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con01_img01.png" alt="電話もインターネットも使える音声SIMプラン　通話付きのプランです" width="516" height="297" loading="lazy">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con01_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con01_img02.png" alt="インターネットのみ使えるデータSIMプラン　テザリングやWiFiなしでノートPC PCやタブレットなどのデータ通信向けとして使いたい方にオススメ！" width="516" height="298" loading="lazy">
              </picture>
            </li>
          </ul>
        </div>
      </section>

      <section class="content02">
        <h2>
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con2_tit02.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con2_tit02.png" alt="使う容量を選ぶだけ" width="616" height="116" loading="lazy">
          </picture>
        </h2>
        <div class="inner">
          <ul class="capacityList">
            <li class="type1">
              <h3 class="heading">まずはオタメシ！</h3>
              <div class="capacityContent">
                <p class="capacity"><span>3</span>GB</p>
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span>音声SIMプラン</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>1,280</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 1,408円</p>
                      </div>
                    </div>
                    <p class="notes">通話付きのプランです</p>
                  </div>
                  <div class="plan data">
                    <h4 class="heading"><span>データSIMプラン</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>1,180</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 1,298円</p>
                      </div>
                    </div>
                    <p class="notes">通話アプリによる通話は可能です</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type2">
              <h3 class="heading">ヤスク使える！</h3>
              <div class="capacityContent">
                <p class="capacity"><span>12</span>GB</p>
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span>音声SIMプラン</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>1,780</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 1,958円</p>
                      </div>
                    </div>
                    <p class="notes">通話付きのプランです</p>
                  </div>
                  <div class="plan data">
                    <h4 class="heading"><span>データSIMプラン</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>1,680</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 1,848円</p>
                      </div>
                    </div>
                    <p class="notes">通話アプリによる通話は可能です</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type3">
              <h3 class="heading">普段使いにピッタリ！</h3>
              <div class="capacityContent">
                <p class="capacity"><span>20</span>GB</p>
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span>音声SIMプラン</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>2,480</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 2,728円</p>
                      </div>
                    </div>
                    <p class="notes">通話付きのプランです</p>
                  </div>
                  <div class="plan data">
                    <h4 class="heading"><span>データSIMプラン</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>2,280</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 2,508円</p>
                      </div>
                    </div>
                    <p class="notes">通話アプリによる通話は可能です</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type4">
              <h3 class="heading">タップリ使いたい！</h3>
              <div class="capacityContent">
                <p class="capacity"><span>50</span>GB</p>
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span>音声SIMプラン</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>3,980</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 4,378円</p>
                      </div>
                    </div>
                    <p class="notes">通話付きのプランです</p>
                  </div>
                  <div class="plan data">
                    <h4 class="heading"><span>データSIMプラン</span></h4>
                    <div class="planContent">
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>3,780</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 4,158円</p>
                      </div>
                    </div>
                    <p class="notes">通話アプリによる通話は可能です</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type5">
              <h3 class="heading">24時間かけ放題セットプラン</h3>
              <div class="capacityContent">
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span><span>3</span>GB＋<br class="sp"><span>24</span>時間かけ放題</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>定価より770円OFF</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>2,980</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 3,278円</p>
                      </div>
                    </div>
                    <p class="notes">通話付きのプランです</p>
                  </div>
                  <div class="plan voice">
                    <h4 class="heading"><span><span>20</span>GB＋<br class="sp"><span>24</span>時間かけ放題</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>定価より1,298円OFF</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>3,700</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 4,070円</p>
                      </div>
                    </div>
                    <p class="notes">通話付きのプランです</p>
                  </div>
                </div>
                <div class="planWrap jc-center">
                  <div class="plan voice">
                    <h4 class="heading"><span><span>50</span>GB＋<br class="sp"><span>24</span>時間かけ放題</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>定価より1,540円OFF</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>4,980</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 5,478円</p>
                      </div>
                    </div>
                    <p class="notes">通話付きのプランです</p>
                  </div>
                </div>
              </div>
            </li>
            <li class="type5">
              <h3 class="heading">お得なかけ放題セットプラン</h3>
              <div class="capacityContent">
                <div class="planWrap">
                  <div class="plan voice">
                    <h4 class="heading"><span><span>20</span>GB＋<br class="sp"><span>5</span>分かけ放題</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>定価より748円OFF</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>2,700</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 2,970円</p>
                      </div>
                    </div>
                    <p class="notes">通話付きのプランです</p>
                  </div>
                  <div class="plan voice">
                    <h4 class="heading"><span><span>20</span>GB＋<br class="sp"><span>10</span>分かけ放題</span></h4>
                    <div class="planContent">
                      <div class="markerTxtWrap">
                        <p class="markerTxt"><span>定価より528円OFF</span></p>
                      </div>
                      <div class="planContentInner">
                        <div class="monthly">
                          <div class="th"><span>月</span><span>額</span></div>
                          <div class="price">
                            <p class="max"><span>3,000</span>円</p>
                            <p class="min">〜<span>0</span>円</p>
                          </div>
                        </div>
                        <p class="tax">税込 3,300円</p>
                      </div>
                    </div>
                    <p class="notes">通話付きのプランです</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <a href="https://hakaku.centermobile.co.jp/?direct=1" class="cvBtn" target="_blank">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/cv_btn.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/cv_btn.png" alt="どのプランでどれだけ使っても最大で０円まで割引！お申込みはこちら" width="917" height="235" loading="lazy">
          </picture>
        </a>
      </section>

      <section class="content04">
        <div class="inner">
          <h2>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_tit.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_tit.png" alt="こんな方におすすめ あなたも新世代格安スマホはじめませんか？" width="667" height="118" loading="lazy">
            </picture>
          </h2>
          <div class="chArea">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_img01_sp.webp" media="(max-width: 768px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_img01_sp.png" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_img01.png" alt="データ制限が気になる・どこでもつながるSIMが欲しい・月々の料金が高くて困っている・格安SIMを使いたいけど、今のスマホをそのまま使いたい・仕事でも使うから通信速度が遅いと困る" width="754" height="260" loading="lazy">
            </picture>
          </div>
        </div>

        <div class="pnArea">
          <div>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_img02_sp.webp" media="(max-width: 768px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_img02_sp.png" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con4_img02.png" alt="携帯料金を安くして浮いたお金でお子様の習い事や家族旅行に" width="1530" height="436" loading="lazy">
            </picture>
          </div>
        </div>
      </section>

      <section class="content05">
        <div class="titArea fuki">
          <h2>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_tit.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_tit.png" alt="新時代を決める6つの特徴" width="742" height="145" loading="lazy">
            </picture>
          </h2>
        </div>
        <div class="inner">
          <ul>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img01_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img01_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img01.png" alt="特徴01 毎月の携帯料金が最大で0円まで割引" loading="lazy" width="1040" height="420">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img02_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img02_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img02.png" alt="特徴02 快適な高速通信環境" loading="lazy" width="1040" height="386">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img03_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img03_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img03.png" alt="特徴03 通話量がお得" loading="lazy" width="496" height="478">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img04_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img04_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img04.png" alt="特徴04 安心・安全のdocomo回線" loading="lazy" width="496" height="478">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img05_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img05_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img05.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img05.png" alt="特徴05 業界初技術特許出願中" loading="lazy" width="496" height="478">
              </picture>
            </li>
            <li>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img06_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img06_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img06.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con5_img06.png" alt="特徴06 新しい端末を買う必要無し！今のスマホをそのまま使える" loading="lazy" width="496" height="478">
              </picture>
              <p>
                ※APN設定が必要になります。<br>
                ※対応していない機種もございます。
              </p>
            </li>
          </ul>
          <a href="https://hakaku.centermobile.co.jp/?direct=1" class="cvBtn" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/cv_btn.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/cv_btn.png" alt="どのプランでどれだけ使っても最大で０円まで割引！お申込みはこちら" width="917" height="235" loading="lazy">
            </picture>
          </a>
        </div>
      </section>
      <section class="content06">
        <div class="inner">
          <h2>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con6_tit.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con6_tit.png" alt="センターモバイルでは携帯料金を最大で0円まで割引できます。※0円にするためには条件があります。" width="1040" height="255" loading="lazy">
            </picture>
          </h2>
          <dl>
            <dt>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con6_img_sp.webp" media="(max-width: 768px)" type="image/webp">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con6_img_sp.png" media="(max-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con6_img.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con6_img.png" alt="" loading="lazy" width="1045" height="664">
              </picture>
            </dt>
            <dd>
              <span>スポンサーの広告をみたり、サービスを利用</span>することで<span>ポイントが還元</span>されます。ポイントを<span>携帯料金に充てることで最大で0円まで割引</span>にすることが可能になります！
            </dd>
          </dl>

          <a href="<?php echo esc_url(home_url('/')); ?>discount/" class="btn03">割引の仕組みはこちら</a>
        </div>
      </section>

      <section class="content07">
        <div class="inner">
          <dl>
            <dt>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con7_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con7_img01.png" alt="" width="275" height="403" loading="lazy">
              </picture>
            </dt>
            <dd>
              <h3>
                TVや動画配信サイトが無料なのは、視聴者に広告を配信することで、スポンサーから広告料を受け取れるからです。
              </h3>
              <div class="txtArea">
                <p>
                  センターモバイルはその仕組みを携帯業界に取り込みました。
                </p>
                <p>
                  <span>会員様専用アプリ「<?= $GLOBALS['gl_service']; ?>」</span>ではお客様のニーズに合わせた広告の配信を行います。<br>
                  この<span>広告を視聴する</span>ことによって<span>お客様にポイントが貯まり、携帯料金に</span>ご利用いただくことが可能になります。
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>app/" class="btn03">アプリの使い方はこちら</a>
              </div>
            </dd>
          </dl>
          <div class="maimo">
            <h4>
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?>" width="228" height="212" loading="lazy">
              </picture>
            </h4>
            <div class="txtArea">
              <h5>会員専用アプリ <br class="sp"><?= $GLOBALS['gl_service']; ?>(<?= $GLOBALS['gl_service_jp']; ?>)</h5>
              <p>■広告を見ることでポイントを貯めて、携帯料金を節約</p>
              <p>■毎月の利用料金やデータ残量（ギガ）のチェック、ポイントの利用もアプリからできます。</p>
              <div class="ap">
                <a href="//apps.apple.com/us/app/maimo/id1554806667?itsct=apps_box_link&itscg=30200" target="_blank">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/app.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/app.png" alt="App Storeからダウンロード" width="148" height="54" loading="lazy">
                  </picture>
                </a>
                <a href="//play.google.com/store/apps/details?id=jp.co.Maimo&hl=ja" target="_blank">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/google.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/google.png" alt="Google Playで手に入れよう" width="182" height="54" loading="lazy">
                  </picture>
                </a>
              </div>
              <a href="https://maimo.app/login" target="_blank"><span>会員専用ページへ</span></a>
            </div>
          </div>
        </div>
      </section>

      <?php
      /*
    <section class="content08">
      <h2><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con8_tit.png" alt="動画でもっと詳しく"  width="618" height="80"></span></h2>
      <div class="inner">
        <iframe class="videoDefer" data-src="https://www.youtube.com/embed/ZP7LCZBCbvs?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>discount/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01.png" alt="もっと詳しく" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01_on.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01.png'" width="600" height="87"></a>
      </div>
    </section>
    */
      ?>

      <section class="content09">
        <div class="inner">
          <h2>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con09_tit.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con09_tit.png" alt="よくある質問" width="417" height="80" loading="lazy">
            </picture>
          </h2>
          <ul>
            <li>
              <div class="que">最大で0円まで割引ってどういうこと？</div>
              <div class="ans">
                <div class="txtAera">
                  ユーザーが会員専用アプリから<span>スポンサーの広告をみたり、サービスを利用</span>することで、センターモバイルに<span>広告収入が発生</span>します。<br>
                  その広告収入を<span>ポイントとしてユーザーに還元。</span>ユーザーはポイントを携帯料金に利用することで、<span>最大で0円まで割引にすることが可能</span>です。
                </div>
                <div class="imgArea">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con9_img01.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con9_img01.png" alt="携帯料金最大で0円まで割引が可能に！" width="333" height="238" loading="lazy">
                  </picture>
                </div>
              </div>
            </li>

            <li>
              <div class="que">どのような広告でポイントが貯まりますか？</div>
              <div class="ans">
                <div class="txtAera">
                  動画広告だけでなく、アプリダウンロードや商品の購入、インターネットなどのサービス利用申し込みでもポイントが貯まります。<br>
                  毎月支払うインターネット費用を<?= $GLOBALS['gl_service']; ?>で申し込めば、効率よくポイントが貯まります。
                </div>
                <div class="imgArea">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con9_img02.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con9_img02.png" alt="" width="370" height="369" loading="lazy">
                  </picture>
                </div>
              </div>
            </li>

            <li>
              <div class="que">郊外に住んでいるが、電波は届くのか？</div>
              <div class="ans">
                <div class="txtAera">
                  安心のdocomo回線ですので、docomoの電波が届く場所なら、問題なくご使用いただけます！
                </div>
                <div class="imgArea">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con9_img03.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con9_img03.png" alt="安心・安全のdocomo回線" width="420" height="386" loading="lazy">
                  </picture>
                </div>
              </div>
            </li>
          </ul>
          <!-- <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btn01.png" alt=""></a> -->
        </div>
      </section>

      <section class="content12">
        <div class="inCon01">
          <a href="https://hakaku.centermobile.co.jp/?direct=1" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_bnr_sp.webp" media="(max-width: 768px)" type="image/webp">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_bnr_sp.png" media="(max-width: 768px)">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_bnr.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_bnr.png" alt="お使いのスマホですぐに切り替え カンタンお申し込みはこちら" width="1160" height="380" loading="lazy">
            </picture>
          </a>
        </div>

        <div class="inCon02">
          <h3 class="fuki">
            <span>修理・画面コーティング</span>は<br class="sp">センターモバイル店舗で！
          </h3>
          <div class="inner">
            <dl>
              <dt>
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_img01.png" alt="センターモバイル店舗ではスマホ修理や画面のコーティングも行っております。" width="407" height="453" loading="lazy">
                </picture>
              </dt>
              <dd>
                <h4>
                  センターモバイル店舗では、<br><span>SIMの契約</span>や、<span>お客様のサポート</span>の他にも<span>スマホ修理</span>や<span>画面のコーティング</span>も<br class="sp">行っております。
                </h4>
                <p class="sp">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_img01_sp.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/con12_img01_sp.png" alt="センターモバイル店舗ではスマホ修理や画面のコーティングも行っております。" width="623" height="389" loading="lazy">
                  </picture>
                </p>
                <a href="<?php echo esc_url(home_url('/')); ?>store/">店舗一覧はこちら</a>
              </dd>
            </dl>
          </div>
        </div>
      </section>

      <div class="bnrArea">
        <ul class="inner">
          <li>
            <a href="https://hakaku.centermobile.co.jp/?direct=1" target="_blank">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/cv_bnr02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/cv_bnr02.png" alt="どれだけ使っても最大で0円まで割引！ WEB申し込み" width="312" height="91" loading="lazy">
              </picture>
            </a>
          </li>
          <li><a href="https://maimo.app/login" target="_blank" class="maiBtn"><?= $GLOBALS['gl_service']; ?> Login</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>contact-top/" class="conBtn">お問い合わせ</a></li>
        </ul>
      </div>
    </div><!-- /#main -->

    <div class="bNavMask"></div>
    <div class="bNavWebBalloon">
      <ul>
        <li><a href="https://hakaku.centermobile.co.jp/?direct=1" target="_blank">SIMを申し込む</a></li>
        <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAXを申し込む</a></li>
      </ul>
    </div>

    <div class="bNav sp">
      <ul>
        <li>
          <a href="javascript:void(0);" class="webRequestBtn">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnav_01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnav_01.png" alt="WEB申し込み" width="117" height="66" loading="lazy">
            </picture>
          </a>
        </li>
        <li>
          <a href="https://maimo.app/login" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnav_02_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnav_02_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?> Login" width="129" height="72" loading="lazy">
            </picture>
          </a>
        </li>
        <li>
          <a href="<?php echo esc_url(home_url('/')); ?>contact-top/">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnav_03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bnav_03.png" alt="お問い合わせ" width="111" height="62" loading="lazy">
            </picture>
          </a>
        </li>
      </ul>
    </div>

    <!-- <p id="pageTop"><a href="#pTop"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/pagetop_off.png" alt="ページトップへ"></a></p> -->


    <!-- footer -->
    <footer>
      <div class="fInner">
        <div class="navArea">
          <div class="inner">
            <ul>
              <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>discount/">割引の仕組み</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>plan/">料金・サービス</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>app/">アプリの使い方</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>company/">企業情報</a></li>
              <li><a href="https://maimo.app/login" target="_blank"><?= $GLOBALS['gl_service']; ?> Login</a></li>
              <li>
                WEB申し込み
                <ul>
                  <li><a href="https://hakaku.centermobile.co.jp/?direct=1" target="_blank">SIMを申し込む</a></li>
                  <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAXを申し込む</a></li>
                </ul>
              </li>
            </ul>

            <ul>
              <li><a href="<?php echo esc_url(home_url('/')); ?>fc/">FC・OEMをご検討中の方</a></li>
              <?php
              $count_posts = wp_count_posts();
              $post_number = $count_posts->publish;
              if ($post_number > 0) :
              ?>
                <li><a href="<?php echo esc_url(home_url('/')); ?>media-archive/">トピックス</a></li>
              <?php endif; ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>store/">店舗一覧</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>media-appearances/">掲載メディア一覧</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>policy/">プライバシーポリシー</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>contact-top/">お問い合わせ</a></li>
              <li>
                お役立ちガイド
                <ul>
                  <li><a href="<?php echo esc_url(home_url('/')); ?>guide/mnp/">MNPとは？</a></li>
                </ul>
              </li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>net/">インターネット回線ニュース</a></li>
            </ul>
          </div>
        </div>

        <div class="logoArea">
          <div class="inner">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/f_aicon01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/f_aicon01.png" alt="CENTER MOBILE" width="155" height="85" loading="lazy">
            </picture>
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/f_aicon02_<?= $GLOBALS['gl_path']; ?>.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/f_aicon02_<?= $GLOBALS['gl_path']; ?>.png" alt="<?= $GLOBALS['gl_service']; ?>" width="107" height="99" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
      <p class="recaptchaText">このサイトはreCAPTCHAによって保護されており、Googleの<a href="https://policies.google.com/privacy" target="_blank">プライバシーポリシー</a>と<a href="https://policies.google.com/terms" target="_blank">利用規約</a>が適用されます。</p>
      <p class="copyright"><small>Copyright (C) CENTER MOBILE All rights reserved.</small></p>
    </footer>
    <!-- /footer -->
  </div>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

  <?php wp_footer(); ?>

  <?php get_template_part('inc/chat'); ?>

</body>