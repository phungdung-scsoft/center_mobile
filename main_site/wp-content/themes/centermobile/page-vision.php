
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php
  /**

 * Template Name: vision

 */
   get_header(); ?>
</head>

<body>
  <?php get_template_part('inc/header-new'); ?>
  <div class="page-vision">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">ホーム</a></li>
        <li class="breadcrumb-item"><a href="/company">会社情報</a></li>
        <li class="breadcrumb-item active" aria-current="page">ビジョン</li>
      </ol>
    </nav>
    <div class="mv-common">
      <div class="mv-img img-wrap">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/mv_vision.png" alt="MV" loading="lazy">
      </div>
      <div class="mv-tlt">
        <h1>Vision</h1>
        <p>ビジョン</p>
      </div>
    </div>
    <div class="section-introduce main-container">
      <div class="vision-title">
        <h3>携帯料金は無料で使う という新常識を実現する</h3>
        <p>Bringing to life the new norm of using mobile phones for free.</p>
      </div>
      <p class="introduce-desc">
        現在の「好きな時に楽しく携帯代を下げられる仕組み」に加えて
      </p>
      <p class="introduce-desc note">
      ・自分から積極的に動画を見に行かずとも、受動的に動画広告が見れる環境作り<br>
      ・よりユーザーの興味関心に合った有益な広告が届く仕組み作り<br>
      ・もっとたくさんポイントが貯まる仕組み作り
      </p>
      <p class="introduce-desc">を行い、毎日いつも通りスマホを使っているだけで、携帯代が無料まで下がる仕組みを目指します。普段多くの方が使っている年間数万円の携帯代を0円にすることで、消費の活性化やユーザーの貯蓄・投資の一助になる事を目指し、これからも精進いたします。</p>
      <div class="line"></div>
    </div>
    <div class="section-philo">
      <div class="main-container">
        <div class="philo-heading">
          <h2>Company philosophy</h2>
          <p>企業理念</p>
        </div>
        <div class="vision-title philo">
          <h3>関わった人全てを幸せにし、自らのみならず<br>
          社会をより良くする企業でありたいと考えています。</h3>
          <p>We aspire to be a company that brings happiness to everyone involved and<br class="pc"> contributes to making not only ourselves but society as a whole better.</p>
        </div>
      </div>
      <div class="philo-block">
        <div class="philo-content main-container">
          <div class="philo-img img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_philo1.png" alt="philo" loading="lazy">
          </div>
          <h4 class="philo-text">
            <span>1</span>
            <p>人との信頼を育み、人を大切にする</p>
          </h4>
        </div>
      </div>
      <div class="philo-block">
        <div class="philo-content main-container">
          <div class="philo-img img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_philo2.png" alt="philo" loading="lazy">
          </div>
          <h4 class="philo-text reverse">
            <span>2</span>
            <p>積極性をもって今までにないオンリーワンなサービスを創造する</p>
          </h4>
        </div>
      </div>
      <div class="philo-block">
        <div class="philo-content main-container">
          <div class="philo-img img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company/img_philo3.png" alt="philo" loading="lazy">
          </div>
          <h4 class="philo-text">
            <span>3</span>
            <p>先を見据えたサービスで社会インフラの可能性を広げ、<br class="pc">新しい価値を創造する</p>
          </h4>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('inc/footer-new'); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <?php get_template_part('inc/chat'); ?>
</body>