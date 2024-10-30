<div class="side_menu pc_only type-<?= $GLOBALS['gl_path']; ?>">
  <a href="<?php echo esc_url(home_url('/')); ?>en/">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_pc.webp" type="image/webp">
      <img class="menu_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_pc.png" alt="" width="162" height="115">
    </picture>
  </a>
  <nav>
    <ul>
      <li><a href="<?php echo esc_url(home_url('/')); ?>en/discount/">Mechanism of discount</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>en/plan/">Rates and services</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>en/app/">How to use the app</a></li>
      <li>
        <a href="javascript:void(0);" class="accordion-parent">Web application</a>
        <ul class="accordion-child">
          <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">Apply for SIM</a></li>
          <li><a href="https://wimax.plaio.jp/" target="_blank">Apply for PLAIO WiMAX</a></li>
        </ul>
      </li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>en/company/">Corporate information</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>en/fc/">FC・OEM</a></li>
      <?php
      $count_custom_post = wp_count_posts('topics-en')->publish;
      if ($count_custom_post > 0) :
      ?>
        <li><a href="<?php echo esc_url(home_url('/')); ?>en/media-archive/">The Topics</a></li>
      <?php endif; ?>
      <?php
      $count_custom_post = wp_count_posts('column')->publish;
      if ($count_custom_post > 0) :
      ?>
        <li><a href="<?php echo esc_url(home_url('/')); ?>en/column/">Column</a></li>
      <?php endif; ?>
      <?php
      if (false) :
      ?>
        <li><a href="<?php echo esc_url(home_url('/')); ?>en/store/">List of stores</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>en/media-appearances/">List of published media</a></li>
      <?php endif; ?>
      <!-- <li><a href="">広告出稿をご検討の方</a></li>
            <li><a href="">採用情報</a></li> -->
      <li><a href="<?php echo esc_url(home_url('/')); ?>en/contact-top/">Contact us</a></li>
      <?php
      if (false) :
      ?>
        <li>
          <a href="javascript:void(0);" class="accordion-parent">A helpful guide</a>
          <ul class="accordion-child">
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/guide/mnp/">What is MNP?</a></li>
          </ul>
        </li>
      <?php endif; ?>
      <?php
      $count_custom_post = wp_count_posts('ir-en')->publish;
      if ($count_custom_post > 0) :
      ?>
        <li><a href="<?php echo esc_url(home_url('/')); ?>en/ir/">IR news</a></li>
      <?php endif; ?>
    </ul>
    <div class="btn_area">
      <a class="login_btn" href="//maimo.app/login" target="_blank">
        <p class="login"><?= $GLOBALS['gl_service']; ?> Login</p>
      </a>
      <a href="javascript:void(0);" class="language_btn">
        <span>日本語</span>
      </a>
    </div>
  </nav>
</div>

<div class="sp_tab_only">
  <header id="header">
    <h1>
      <a href="<?php echo esc_url(home_url('/')); ?>en/">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_sp.webp" type="image/webp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_sp.png" alt="CENTER MOBILE" width="221" height="42">
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
          <li><a href="<?php echo esc_url(home_url('/')); ?>en/discount/">Mechanism of discount</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>en/plan/">Rates and services</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>en/app/">How to use the app</a></li>
          <li>
            <a href="javascript:void(0);" class="accordion-parent">Web application</a>
            <ul class="accordion-child">
              <li><a href="https://hakaku.centermobile.co.jp/?direct=1&lang=en" target="_blank">Apply for SIM</a></li>
              <li><a href="https://wimax.plaio.jp/" target="_blank">Apply for PLAIO WiMAX</a></li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>en/company/">Corporate information</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>en/fc/">FC・OEM</a></li>
          <?php
          $count_custom_post = wp_count_posts('topics-en')->publish;
          if ($count_custom_post > 0) :
          ?>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/media-archive/">The Topics</a></li>
          <?php endif; ?>
          <?php
          $count_custom_post = wp_count_posts('column')->publish;
          if ($count_custom_post > 0) :
          ?>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/column/">Column</a></li>
          <?php endif; ?>
          <?php
          if (false) :
          ?>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/store/">List of stores</a></li>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/media-appearances/">List of published media</a></li>
          <?php endif; ?>
          <!--
                <li><a href="<?php echo esc_url(home_url('/')); ?>en/">広告出稿をご検討の方</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>en/">採用情報</a></li> -->
          <li><a href="<?php echo esc_url(home_url('/')); ?>en/contact-top/">Contact us</a></li>
          <?php
          if (false) :
          ?>
            <li>
              <a href="javascript:void(0);" class="accordion-parent">A helpful guide</a>
              <ul class="accordion-child">
                <li><a href="<?php echo esc_url(home_url('/')); ?>en/guide/mnp/">What is MNP?</a></li>
              </ul>
            </li>
          <?php endif; ?>
          <?php
          $count_custom_post = wp_count_posts('ir-en')->publish;
          if ($count_custom_post > 0) :
          ?>
            <li><a href="<?php echo esc_url(home_url('/')); ?>en/ir/">IR news</a></li>
          <?php endif; ?>
        </ul>
        <div class="btn_area btn_area_nav">
          <a class="login_btn" href="//maimo.app/login" target="_blank">
            <p class="login"><?= $GLOBALS['gl_service']; ?> Login</p>
          </a>
          <a href="javascript:void(0);" class="language_btn">
            <span>日本語</span>
          </a>
        </div>
      </div>
    </div>
  </nav>
</div>