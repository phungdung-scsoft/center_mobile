<?php
/*
  Template Name: en-vision
  Template Post Type: page
  Template Path: en/
  */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body class="en-page">
  <?php get_template_part('en/inc/header-new'); ?>
  <div class="page-vision">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/company">Company Information</a></li>
        <li class="breadcrumb-item active" aria-current="page">Vision</li>
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
        <h3>Realize the new common sense that mobile phones are free to use</h3>
        <p>Bringing to life the new norm of using mobile phones for free.</p>
      </div>
      <p class="introduce-desc">
        In addition to the current system of "making it fun to lower your mobile bill whenever you want"
      </p>
      <p class="introduce-desc note">
        ・Create an environment where users can passively watch video advertisements without actively going to watch them themselves.<br>
        ・Create a mechanism to deliver useful advertisements that better match the user's interests.<br>
        ・Create a system that allows users to earn more points.
      </p>
      <p class="introduce-desc">We aim to create a system that allows users to lower their cell phone bills to free of charge simply by using their phones as usual every day.
        We will continue to work hard to help stimulate consumption, savings, and investment by reducing cell phone bills to zero yen, which many people spend tens of thousands of yen a year on a daily basis.
      </p>
      <div class="line"></div>
    </div>
    <div class="section-philo">
      <div class="main-container">
        <div class="philo-heading">
          <h2>Company philosophy</h2>
          <p>企業理念</p>
        </div>
        <div class="vision-title philo">
          <h3>We want to be a company that makes everyone happy and improves not only ourselves but also society.</h3>
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
            <p>Fostering trust with people and valuing them</p>
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
            <p>Actively creating one-of-a-kind services that have never been seen before</p>
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
            <p>Expanding the possibilities of social infrastructure and creating new value through forward-looking services</p>
          </h4>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('en/inc/footer-new'); ?>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
  <?php get_template_part('inc/chat'); ?>
</body>