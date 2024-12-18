<div class="side_menu pc_only type-<?= $GLOBALS['gl_path']; ?>">
  <a href="<?php echo esc_url(home_url('/')); ?>">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_pc.webp" type="image/webp">
      <img class="menu_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_pc.png" alt="" width="162" height="115">
    </picture>
  </a>
  <nav>
    <ul>
      <li>
        <a href="javascript:void(0);" class="accordion-parent">会社情報</a>
        <ul class="accordion-child">
          <li><a href="<?php echo esc_url(home_url('/')); ?>company/#greeting">代表挨拶</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>company/#company">会社概要</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>vision/">ビジョン</a></li>
        </ul>
      </li>
      <li>
        <a href="javascript:void(0);" class="accordion-parent">サービス</a>
        <ul class="accordion-child">
          <li><a href="<?php echo esc_url(home_url('/')); ?>about-sim/">格安SIMについて</a></li>
          <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAX</a></li>
        </ul>
      </li>
      <li>
        <a href="javascript:void(0);" class="accordion-parent">ニュース</a>
        <ul class="accordion-child">
          <?php
          $count_posts = wp_count_posts();
          $post_number = $count_posts->publish;
          if ($post_number > 0) :
          ?>
            <li><a href="<?php echo esc_url(home_url('/')); ?>media-archive/">お知らせ</a></li>
          <?php endif; ?>
          <li><a href="<?php echo esc_url(home_url('/')); ?>media-appearances/">掲載メディア一覧</a></li>
        </ul>
      </li>
      <li>
        <a href="javascript:void(0);" class="accordion-parent">WEB申し込み</a>
        <ul class="accordion-child">
          <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=ja" target="_blank">SIMを申し込む</a></li>
          <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAXを<br>申し込む</a></li>
        </ul>
      </li>
      <li>
        <a href="javascript:void(0);" class="accordion-parent">お役立ちガイド</a>
        <ul class="accordion-child">
          <li><a href="<?php echo esc_url(home_url('/')); ?>guide/mnp/">MNPとは？</a></li>
        </ul>
      </li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>fc/">FC・OEM</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>store/">店舗情報</a></li>
    </ul>
    <div class="btn_area">
      <a class="login_btn" href="//maimo.app/login" target="_blank">
        <p class="login"><?= $GLOBALS['gl_service']; ?> Login</p>
      </a>
      <a href="javascript:void(0);" class="language_btn">
        <span>English</span>
      </a>
    </div>
  </nav>
</div>

<div class="sp_tab_only">
  <header id="header">
    <h1>
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_sp.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_sp.png" alt="センターモバイル" width="221" height="42">
        </picture>
      </a>
    </h1>
  </header>

  <div class="openbtn1">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <nav id="g-nav">
    <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
      <div class="g-nav-list-inner">
        <ul>
          <li>
            <a href="javascript:void(0);" class="accordion-parent">会社情報</a>
            <ul class="accordion-child">
              <li><a href="<?php echo esc_url(home_url('/')); ?>company/#greeting">代表挨拶</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>company/#company">会社概要</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>vision/">ビジョン</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="accordion-parent">サービス</a>
            <ul class="accordion-child">
              <li><a href="<?php echo esc_url(home_url('/')); ?>about-sim/">格安SIMについて</a></li>
              <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAX</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="accordion-parent">ニュース</a>
            <ul class="accordion-child">
              <?php
              $count_posts = wp_count_posts();
              $post_number = $count_posts->publish;
              if ($post_number > 0) :
              ?>
                <li><a href="<?php echo esc_url(home_url('/')); ?>media-archive/">お知らせ</a></li>
              <?php endif; ?>
              <li><a href="<?php echo esc_url(home_url('/')); ?>media-appearances/">掲載メディア一覧</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="accordion-parent">WEB申し込み</a>
            <ul class="accordion-child">
              <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=ja" target="_blank">SIMを申し込む</a></li>
              <li><a href="https://wimax.plaio.jp/" target="_blank">PLAIO WiMAXを申し込む</a></li>
            </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="accordion-parent">お役立ちガイド</a>
            <ul class="accordion-child">
              <li><a href="<?php echo esc_url(home_url('/')); ?>guide/mnp/">MNPとは？</a></li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>fc/">FC・OEM</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>store/">店舗情報</a></li>
        </ul>
        <div class="btn_area btn_area_nav">
          <a class="login_btn" href="//maimo.app/login" target="_blank">
            <p class="login"><?= $GLOBALS['gl_service']; ?> Login</p>
          </a>
          <a href="javascript:void(0);" class="language_btn">
            <span>English</span>
          </a>
        </div>
      </div>
    </div>
  </nav>
</div>