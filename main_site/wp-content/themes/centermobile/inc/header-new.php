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
          <a href="<?php echo esc_url(home_url('/')); ?>about-sim/" class="nav-child">
            格安SIM
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
          </a>
          <a href="https://wimax.plaio.jp/" target="_blank" class="nav-child">
            PLAIO WiMAX
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
          </a>
          <?php /*
            <a href="https://maimo.app/travel" target="_blank" class="nav-child">
              PLAIO トラベル
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
            </a>
          */ ?>
        </div>
      </div>
      <div class="nav-item">
        <div class="nav-trigger">会社情報</div>
        <div class="nav-child-list">
          <a href="<?php echo esc_url(home_url('/')); ?>company/#greeting" class="nav-child">
            代表挨拶
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>company/#company" class="nav-child">
            会社概要
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
          </a>
          <a href="<?php echo esc_url(home_url('/')); ?>vision/" class="nav-child">
            ビジョン
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
          </a>
          <?php /*
            <a href="#" class="nav-child">
              役員紹介
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="#" class="nav-child">
              沿革
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            */ ?>
        </div>
      </div>
      <div class="nav-item">
        <div class="nav-trigger">ニュース</div>
        <div class="nav-child-list">
          <a href="<?php echo esc_url(home_url('/')); ?>media-archive/" class="nav-child">
            お知らせ
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
          </a>
          <?php /*
            <a href="<?php echo esc_url(home_url('/')); ?>ir/" class="nav-child">
              IRニュース
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            */ ?>
          <a href="<?php echo esc_url(home_url('/')); ?>media-appearances/" class="nav-child">
            掲載メディア一覧
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
          </a>
        </div>
      </div>
      <?php /*
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
            <a href="<?php echo esc_url(home_url('/')); ?>ir/" class="nav-child">
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
        */ ?>
      <a href="<?php echo esc_url(home_url('/')); ?>fc/" class="nav-item-last">
        FC・OEM
      </a>
      <a href="<?php echo esc_url(home_url('/')); ?>store/" class="nav-item-last">
        店舗情報
      </a>
    </div>
    <div class="hFunction">
      <div class="select-lang">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/earth_icon.svg" alt="earth">
        <select name="" id="">
          <option value="jp">Japanese</option>
          <option value="en">English</option>
          <?php /*
            <option value="kr">Korean</option>
            <option value="cn">Chinese</option>
            <option value="th">Thai</option>
            <option value="fr">French</option>
            <option value="sp">Spanish</option>
            */ ?>
        </select>
      </div>
      <a href="<?php echo esc_url(home_url('/')); ?>contact-top/" class="hBtn">お問い合わせ</a>
      <a href="https://maimo.app/login" target="_blank" class="loginBtn">PLAIO Login</a>
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
            <a href="<?php echo esc_url(home_url('/')); ?>about-sim/" class="nav-child">
              格安SIM
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="https://wimax.plaio.jp/" target="_blank" class="nav-child">
              PLAIO WiMAX
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
            </a>
            <?php /*
              <a href="https://maimo.app/travel" target="_blank" class="nav-child">
                PLAIO トラベル
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rectangle_icon.svg" alt="rectangle">
              </a>
              */ ?>
          </div>
        </div>
        <div class="nav-item">
          <div class="nav-trigger">会社情報<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_down_icon.svg" alt="arrow"></div>
          <div class="nav-child-list">
            <a href="<?php echo esc_url(home_url('/')); ?>company/#greeting" class="nav-child">
              代表挨拶
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="<?php echo esc_url(home_url('/')); ?>company/#company" class="nav-child">
              会社概要
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <a href="<?php echo esc_url(home_url('/')); ?>vision/" class="nav-child">
              ビジョン
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <?php /*
              <a href="#" class="nav-child">
                役員紹介
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              <a href="#" class="nav-child">
                沿革
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              */ ?>
          </div>
        </div>
        <div class="nav-item">
          <div class="nav-trigger">ニュース<img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_down_icon.svg" alt="arrow"></div>
          <div class="nav-child-list">
            <a href="<?php echo esc_url(home_url('/')); ?>media-archive/" class="nav-child">
              お知らせ
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
            <?php /*
              <a href="<?php echo esc_url(home_url('/')); ?>ir/" class="nav-child">
                IRニュース
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
              </a>
              */ ?>
            <a href="<?php echo esc_url(home_url('/')); ?>media-appearances/" class="nav-child">
              掲載メディア一覧
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_icon.svg" alt="arrow">
            </a>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/')); ?>fc/" class="nav-item-last">
          FC・OEM
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>store/" class="nav-item-last">
          店舗情報
        </a>
        <?php /*
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
              <a href="<?php echo esc_url(home_url('/')); ?>ir/" class="nav-child">
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
          */ ?>
        <div class="nav-item">
          <div class="nav-trigger">
            <div class="language">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/earth_icon.svg" alt="earth">
              Language
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/arrow_down_icon.svg" alt="arrow">
          </div>
          <div class="nav-child-list select-lang">
            <a href="javascript:void(0);" class="nav-child" data-lang="jp">
              Japanese
            </a>
            <a href="javascript:void(0);" class="nav-child" data-lang="en">
              English
            </a>
            <?php
            /*
              <a href="javascript:void(0);" class="nav-child" data-lang="kr">
                Korean
              </a>
              <a href="javascript:void(0);" class="nav-child" data-lang="cn">
                Chinese
              </a>
              <a href="javascript:void(0);" class="nav-child" data-lang="th">
                Thai
              </a>
              <a href="javascript:void(0);" class="nav-child" data-lang="fr">
                French
              </a>
              <a href="javascript:void(0);" class="nav-child" data-lang="sp">
                Spanish
              </a>
              */ ?>
          </div>
        </div>

        <a href="<?php echo esc_url(home_url('/')); ?>contact-top/" class="hBtn">お問い合わせ</a>
        <a href="https://maimo.app/login" target="_blank" class="loginBtn">PLAIO Login</a>
        <button class="closeBtn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/close_icon.svg" alt="close">閉じる</button>
      </div>
      <div class="gnav__overlay"></div>
    </div>

  </div>
  <!-- /nav -->
</div>