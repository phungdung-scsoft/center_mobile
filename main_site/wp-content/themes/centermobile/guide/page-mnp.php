<?php
/*
  Template Name: mnp
  Template Post Type: page
  Template Path: guide/
  */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body>

  <!--ここから共通部分-->
  <?php get_template_part('inc/header'); ?>
  <!--ここまで共通部分-->

  <div class="container">
    <div class="wrapper">

      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <article class="guide_article">
            <div class="guide_article_inner">
              <h1 class="page_title"><?php the_title(); ?></h1>
              <p class="page_date">掲載日：2024年4月12日<?php /*the_time('Y年n月j日');*/ ?>　更新日：2024年4月12日<?php /*the_modified_date('Y年n月j日');*/ ?></p>

              <div class="guide_mv">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/mnp/img_mv.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/mnp/img_mv.png" alt="MNPとは？　図解付き　メリット　手順　注意点" width="800" height="450">
                </picture>
              </div>

              <div class="guide_section">
                <section class="index_section">
                  <h2 class="index_heading">目次</h2>
                  <ul class="index_list">
                    <li><a href="#agenda1">MNPとは</a></li>
                    <li><a href="#agenda2">MNPの乗り換え手順</a></li>
                    <li><a href="#agenda3">MNPのメリット</a></li>
                    <li><a href="#agenda4">MNPの注意点</a></li>
                    <li><a href="#agenda5">MNP手続きの準備チェックリスト</a></li>
                    <li><a href="#agenda6">まとめ</a></li>
                  </ul>
                </section>
              </div>

              <section class="guide_section" id="agenda1">
                <h2 class="guide_heading2">MNPとは</h2>
                <section class="guide_section">
                  <h3 class="guide_heading3">MNPとは電話番号を変えずに他社キャリアに乗り換えられる制度のこと</h3>
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/mnp/img_mnp_01.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/mnp/img_mnp_01.png" alt="" width="800" height="335">
                  </picture>
                  <p>MNPとは、電話番号を変えずにスマホのキャリアを他社に乗り換えられる制度のことです。</p>
                  <p>MNPという名称は「Mobile Number Portability」の略で「携帯電話番号ポータビリティ」と呼ばれる制度です。</p>
                  <p>MNPを利用すれば、今お使いの携帯電話番号を変更することなく、他社キャリアに乗り換えることができます。</p>
                  <p>MNPを利用せずに現在の携帯電話会社を解約し、他社キャリアで契約をすると、今お使いの電話番号は使用できなくなってしまいます。</p>
                  <p>携帯電話会社を他社に変えたいが電話番号を変更したくないという方が、気軽に携帯電話会社を変更することができる制度のことが「MNP」です。</p>
                </section>

                <section class="guide_section">
                  <h3 class="guide_heading3">MNPワンストップ方式について</h3>
                  <p>MNPはこれまでの制度が改善されたことにより、手軽に行うことが可能です。<br>
                    今までは、MNPの利用には手数料が必要でしたが、現在では手数料なしでMNPを利用することが可能です。</p>
                  <p>2023年5月からは、「MNPワンストップ方式」が開始されました。</p>
                  <p>今までは現在契約している携帯電話会社で「MNP予約番号」を取得し、新しく契約する携帯電話会社に提出し、契約の手続きを行うことが必要でしたが、現在は新しく契約する携帯電話会社での手続きだけで完結することができるようになりました。<br>
                    この仕組みを「MNPワンストップ方式」といいます。</p>
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/mnp/img_mnp_02.webp" type="image/webp">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/mnp/img_mnp_02.png" alt="" width="800" height="664">
                  </picture>
                  <p>※携帯電話会社によっては、「MNPワンストップ方式」が使用できないこともあります。<br>
                    対応しているかどうかはこちら※１をご確認ください。</p>
                  <p><a href="https://maimo.app/inquiry/list/487" target="_blank">※１ Q.MNPワンストップ方式に対応している事業者はどこですか</a></p>
                  <a href="https://maimo.app/inquiry/list/487" target="_blank" class="quote_anchor">
                    <section class="text_wrap">
                      <h4 class="quote_heading">Q&A｜センターモバイル</h4>
                      <div class="text">
                        <p>ワンストップ方式で乗り換え手続きが可能な事業に関しましては、下記となります。（※23年12月現在）<br>
                          ※転入元キャリア・転入先キャリアのどちらか一方でも対応していない場合、MNPワンストップを使った乗り換えは行えません。</p>
                      </div>
                      <p class="url">https://maimo.app/inquiry/list/487</p>
                    </section>
                    <picture class="image_wrap">
                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                    </picture>
                  </a>
                  <p>このようにMNPの手続きは、簡単にご利用いただけるようになっています。</p>
                  <p>具体的な手順につきましては、次項で詳細にご紹介いたします。</p>
                </section>
              </section>

              <section class="guide_section" id="agenda2">
                <h2 class="guide_heading2">MNPの乗り換え手順</h2>
                <p>MNPの乗り換え手順について、ご紹介していきます。<br>
                  現在ご契約中の携帯電話会社、新しくご契約する携帯電話会社どちらも「MNPワンストップ方式」対応であれば【<a href="#agenda2_1">MNPワンストップの手順</a>】をご確認ください。<br>
                  どちらか一方でも「MNPワンストップ方式」に対応していなければ、【<a href="#agenda2_2">MNPツーストップ方式の手順</a>】をご確認ください。</p>
                <section class="guide_section" id="agenda2_1">
                  <h3 class="guide_heading3">MNPワンストップ方式の手順</h3>
                  <section class="guide_section">
                    <h4 class="step_heading"><span class="number">STEP1</span>転入先で手続き</h4>
                    <p>本人確認書類、支払いに使用するクレジットカードまたは銀行口座情報をご用意の上、新しくご契約する携帯電話会社のホームページ上で契約の手続きを行います。<br>
                      センターモバイルでご契約をご希望であればこちら※2をご確認ください。</p>
                    <p><a href="https://sim.centermobile.co.jp/?direct=1" target="_blank">※2 商品・契約の選択</a></p>
                    <a href="https://sim.centermobile.co.jp/?direct=1" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">商品・契約の選択｜センターモバイル</h4>
                        <div class="text">
                          <p>ご契約前に準備してください<br>
                            【ご本人さま確認書類】<br>
                            以下のいずれかがご契約に必要です。<br>運転免許証、住民基本台帳カード、マイナンバーカード、健康保険証＋補助書類、在留カード、日本国パスポート＋補助書類</p>
                        </div>
                        <p class="url">https://sim.centermobile.co.jp/?direct=1</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p>※商品の選択後に「電話番号をそのまま利用する」を選択してください。</p>
                  </section>
                  <section class="guide_section">
                    <h4 class="step_heading"><span class="number">STEP2</span>回線の開通</h4>
                    <p>SIMカードの場合<br>
                      新しく契約する携帯電会社からSIMカードが届いたら、SIMカードを今お使いのSIMカードと入れ替えて、「SIMの有効化」「APN設定」を行ってください。<br>
                      詳細につきましては、SIMカード同梱の書類をご確認ください。<br>
                      センターモバイルでのご契約の方は以下をご確認ください。<br>
                      「SIMの有効化」につきましては、こちら※3をご確認ください。</p>
                    <p><a href="https://maimo.app/inquiry/list/337" target="_blank">※3 Q.SIMの有効化はどこから行ったらいいですか？</a></p>
                    <a href="https://maimo.app/inquiry/list/337" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">Q&A｜センターモバイル</h4>
                        <div class="text">
                          <p>MNP（のりかえ）でご契約頂いた方は、SIMカードご利用前に≪SIMの有効化≫を行う必要がございます。<br>
                            SIMカードが届きましたらMNP予約番号の有効期限内に必ず≪SIMの有効化≫を行って下さい。</p>
                        </div>
                        <p class="url">https://maimo.app/inquiry/list/337</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p>「APN設定」につきましては、こちら※4をご確認ください。</p>
                    <p><a href="https://maimo.app/inquiry/list/172" target="_blank">※4 Q.APN設定はどのように行いますか？【Android】</a></p>
                    <a href="https://maimo.app/inquiry/list/172" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">Q&A｜センターモバイル</h4>
                        <div class="text">
                          <p>インターネット接続するために通信設定（APN設定）が必要です。<br>
                            機種により設定手順が異なりますのでご注意ください。</p>
                        </div>
                        <p class="url">https://maimo.app/inquiry/list/172</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p><a href="https://maimo.app/inquiry/list/338" target="_blank">※4 Q.APN設定はどのように行いますか？【iPhone・iPad】</a></p>
                    <a href="https://maimo.app/inquiry/list/338" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">Q&A｜センターモバイル</h4>
                        <div class="text">
                          <p>SIMカードが届いたらインターネット接続するために通信設定（APN設定）を行って下さい。</p>
                        </div>
                        <p class="url">https://maimo.app/inquiry/list/338</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p>eSIMをご利用の場合<br>
                      回線開通の受付時間内なら即日回線を切り替えることができます。<br>
                      回線開通作業につきましては、各携帯電話会社様のご案内に従って行ってください。<br>
                      センターモバイルでの開通手順につきましては、こちら※5をご確認ください。</p>
                    <p><a href="https://maimo.app/esim/setting" target="_blank">※5 設定方法</a></p>
                    <a href="https://maimo.app/esim/setting" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">設定方法｜センターモバイル</h4>
                        <div class="text">
                          <p>eSIMキャリアアクティベーションに対応したiPhone端末の場合、QRコードを端末で読み込む必要はなく開通操作を行うことができます。</p>
                        </div>
                        <p class="url">https://maimo.app/esim/setting</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p>「MNPワンストップ方式」ではSTEP2まで完了され、新しい回線が開通した時点で、休回線につきましては、自動的にご解約となります。</p>
                  </section>
                </section>
                <section class="guide_section" id="agenda2_2">
                  <h3 class="guide_heading3">ツーストップ方式の手順につきまして</h3>
                  <p>現在ご契約中の携帯電話会社、新しくご契約予定の携帯電話会社のどちらか一方でも「MNPワンストップ方式」に対応していない場合は、以下の乗り換え手順です。</p>
                  <section class="guide_section">
                    <h4 class="step_heading"><span class="number">STEP1</span>現在ご契約中の携帯電話会社にてMNP予約番号を取得する</h4>
                    <p>「MNP予約番号」は現在ご契約中の携帯電話会社のホームページ、電話、店頭で取得が可能です。</p>
                    <p>※携帯電話会社様によっては、ホームページからの取得でも受付時間が限られていることがありますので、ご注意ください。</p>
                  </section>
                  <section class="guide_section">
                    <h4 class="step_heading"><span class="number">STEP2</span>新しくご契約予定の携帯電話会社での契約手続き</h4>
                    <p>本人確認書類、支払いに使用するクレジットカード、銀行口座情報とMNP予約番号をご準備の上、店頭もしくはホームページにてご契約手続きを行います。<br>
                      センターモバイルでご契約をご希望であればこちら※2をご確認ください。</p>
                    <p><a href="https://sim.centermobile.co.jp/?direct=1" target="_blank">※2 商品・契約の選択</a></p>
                    <a href="https://sim.centermobile.co.jp/?direct=1" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">商品・契約の選択｜センターモバイル</h4>
                        <div class="text">
                          <p>ご契約前に準備してください<br>
                            【ご本人さま確認書類】<br>
                            以下のいずれかがご契約に必要です。<br>運転免許証、住民基本台帳カード、マイナンバーカード、健康保険証＋補助書類、在留カード、日本国パスポート＋補助書類</p>
                        </div>
                        <p class="url">https://sim.centermobile.co.jp/?direct=1</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p>※商品の選択後に「電話番号をそのまま利用する」を選択してください。</p>
                  </section>
                  <section class="guide_section">
                    <h4 class="step_heading"><span class="number">STEP3</span>回線の開通</h4>
                    <p>SIMカードの場合<br>
                      新しく契約する携帯電会社からSIMカードが届いたら、SIMカードを今お使いのSIMカードと入れ替えて、「SIMの有効化」「APN設定」を行ってください。<br>
                      詳細につきましては、SIMカード同梱の書類をご確認ください。<br>
                      センターモバイルでのご契約の方は以下をご確認ください。<br>
                      「SIMの有効化」につきましては、こちら※3をご確認ください。</p>
                    <p><a href="https://maimo.app/inquiry/list/337" target="_blank">※3 Q.SIMの有効化はどこから行ったらいいですか？</a></p>
                    <a href="https://maimo.app/inquiry/list/337" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">Q&A｜センターモバイル</h4>
                        <div class="text">
                          <p>MNP（のりかえ）でご契約頂いた方は、SIMカードご利用前に≪SIMの有効化≫を行う必要がございます。<br>
                            SIMカードが届きましたらMNP予約番号の有効期限内に必ず≪SIMの有効化≫を行って下さい。</p>
                        </div>
                        <p class="url">https://maimo.app/inquiry/list/337</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p>「APN設定」につきましては、こちら※4をご確認ください。</p>
                    <p><a href="https://maimo.app/inquiry/list/172" target="_blank">※4 Q.APN設定はどのように行いますか？【Android】</a></p>
                    <a href="https://maimo.app/inquiry/list/172" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">Q&A｜センターモバイル</h4>
                        <div class="text">
                          <p>インターネット接続するために通信設定（APN設定）が必要です。<br>
                            機種により設定手順が異なりますのでご注意ください。</p>
                        </div>
                        <p class="url">https://maimo.app/inquiry/list/172</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p><a href="https://maimo.app/inquiry/list/338" target="_blank">※4 Q.APN設定はどのように行いますか？【iPhone・iPad】</a></p>
                    <a href="https://maimo.app/inquiry/list/338" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">Q&A｜センターモバイル</h4>
                        <div class="text">
                          <p>SIMカードが届いたらインターネット接続するために通信設定（APN設定）を行って下さい。</p>
                        </div>
                        <p class="url">https://maimo.app/inquiry/list/338</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p>eSIMをご利用の場合<br>
                      回線開通の受付時間内なら即日回線を切り替えることができます。<br>
                      回線開通作業につきましては、各携帯電話会社様のご案内に従って行ってください。<br>
                      センターモバイルでの開通手順につきましては、こちら※5をご確認ください。</p>
                    <p><a href="https://maimo.app/esim/setting" target="_blank">※5 設定方法</a></p>
                    <a href="https://maimo.app/esim/setting" target="_blank" class="quote_anchor">
                      <section class="text_wrap">
                        <h4 class="quote_heading">設定方法｜センターモバイル</h4>
                        <div class="text">
                          <p>eSIMキャリアアクティベーションに対応したiPhone端末の場合、QRコードを端末で読み込む必要はなく開通操作を行うことができます。</p>
                        </div>
                        <p class="url">https://maimo.app/esim/setting</p>
                      </section>
                      <picture class="image_wrap">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                      </picture>
                    </a>
                    <p>「MNPツーストップ方式」ではSTEP3まで完了され、新しい回線が開通した時点で、休回線につきましては、自動的にご解約となります。</p>
                  </section>
                </section>
              </section>

              <section class="guide_section" id="agenda3">
                <h2 class="guide_heading2">MNPのメリット</h2>
                <section class="guide_section">
                  <h3 class="guide_heading3">電話番号の変更なしで、携帯会社を変えることができる</h3>
                  <p>MNPは電話番号を変えることなく携帯電話会社を変更することができます。<br>
                    そのため、「料金プランを変更したいから乗り換えたいけど、電話番号を変えたくない」「携帯電話会社を変えて家族や友人、会社に新しい電話番号を連絡するのが面倒」「携帯電話会社を変えて、電話番号を登録しているサービス等に新しい電話番号を登録するのが面倒」といったお悩みを解決することができるサービスです。</p>
                </section>
                <section class="guide_section">
                  <h3 class="guide_heading3">MNPでの乗り換えでお得な特典を受けることができる</h3>
                  <p>多くの携帯電話会社では、MNPでの乗り換えをしてくれた方に特典を用意しています。</p>
                  <p>（例）<br>
                    ・ポイント付与<br>
                    ・ご利用料金の値引き<br>
                    ・機種代金の値引き</p>
                  <p>センターモバイルでは、以下の特典をご用意しています。<br>
                    他社からの乗り換えで、「実質2か月分0円」<br>
                    ※基本使用料2か月分のポイントバック<br>
                    ※毎月2日に請求確定時の利用プラン料金分をポイント付与</p>
                </section>
                <section class="guide_section">
                  <h3 class="guide_heading3">簡単に手続きができる</h3>
                  <p>前項でも解説させていただいた通り、ご自宅にいてもホームページ上から携帯電話会社を変えることができるので、簡単に手続きすることができます。</p>
                  <p>以前は手続きに事務手数料が発生することがあったのですが、現在は廃止されておりますので、自由に乗り換えすることができるようになりました。</p>
                  <p>このようにMNPを利用することによって、「簡単に」電話番号を変えることなく、携帯電話会社を変えることができ、お得な特典などもうけることができます。</p>
                </section>
              </section>

              <section class="guide_section" id="agenda4">
                <h2 class="guide_heading2">MNPの注意点</h2>
                <section class="guide_section">
                  <h3 class="guide_heading3">MNP予約番号には、「有効期限」がある</h3>
                  <p>「MNPツーストップ方式」で手続きを行う際に取得するMNP予約番号には、「予約した日を含めて15日間」という有効期限があります。<br>
                    この期限内に手続きを完了させることができなければ、MNP予約番号が無効となってしまうので注意が必要です。<br>
                    有効期限が過ぎてしまうと、再度MNP予約番号を取得する必要があります。</p>
                </section>
                <section class="guide_section">
                  <h3 class="guide_heading3">解約後にMNP手続きはできない</h3>
                  <p>MNPは契約中の携帯電話会社を解約した後に利用することはできません。<br>
                    なぜならMNPとは、今お使いの電話番号を持ち越す制度であるからです。<br>
                    そのため、MNPを利用する場合は必ず解約前に手続きを行うようにしてください。</p>
                </section>
                <section class="guide_section">
                  <h3 class="guide_heading3">受付時間内に手続きを行う必要がある</h3>
                  <p>MNPのご利用は各携帯電話会社の受付時間内に行う必要があります。<br>
                    店頭で行う場合には、店舗の営業時間内に出向く必要がありますし、オンラインで手続きを行うとしても、各社の受付時間が設定されているので確認が必要です。</p>
                  <p>センターモバイルの受付時間<br>
                    9:00〜19:30</p>
                </section>
                <section class="guide_section">
                  <h3 class="guide_heading3">キャリアメールは引き継ぐことができない</h3>
                  <p>MNPでは電話番号を引き継ぐことはできますが、MNPを利用してMNP前の携帯電話会社で使用されていたキャリアメール（例：○○＠docomo.ne.jp）については、引き継ぐことはできません。</p>
                  <p>ただし、キャリアメールをMNP後も引き続き利用されたい場合には、各社毎に「持ち運びサービス」というものがあり、そちらをご利用されることでキャリアメールを引き続きご利用することが可能です。</p>
                  <p>各社のサイトにてご確認ください。</p>
                  <p>ドコモ：<a href="https://www.docomo.ne.jp/service/docomo_mail_portability/" target="_blank">https://www.docomo.ne.jp/service/docomo_mail_portability/</a><br>
                    KDDI：<a href="https://www.au.com/mobile/service/aumail_portability/" target="_blank">https://www.au.com/mobile/service/aumail_portability/</a><br>
                    ソフトバンク：<a href="https://www.softbank.jp/mobile/service/mail-address-portability/" target="_blank">https://www.softbank.jp/mobile/service/mail-address-portability/</a></p>
                </section>
                <section class="guide_section">
                  <h3 class="guide_heading3">対応機種の確認が必要</h3>
                  <p>新しくご契約予定の携帯電話会社で、今ご使用されている携帯電話が必ずご使用いただけるとは限らないので、対応機種についてご確認する必要があります。</p>
                  <p>センターモバイルでご契約をご検討している方は、以下2点のご確認が必要です。<br>
                    センターモバイルはdocomo回線を使用しております。<br>
                    ・docomoの電波がキャッチできる地域にお住まいであること<br>
                    ・docomoの電波がキャッチできる機種をお持ちであること<br>
                    対応機種につきましては、こちら※6をご確認ください。</p>
                  <p><a href="https://maimo.app/inquiry/list/212" target="_blank">※6　SIMの対応機種は何ですか？</a></p>
                  <a href="https://maimo.app/inquiry/list/212" target="_blank" class="quote_anchor">
                    <section class="text_wrap">
                      <h4 class="quote_heading">Q&A｜センターモバイル</h4>
                      <div class="text">
                        <p>センターモバイルはdocomo回線を使用しています。<br>
                          ・ドコモの電波がキャッチできる地域にお住まいである事<br>
                          ・ドコモの電波がキャッチできる機種をお持ちである事<br>
                          センターモバイルのSIMをご利用頂くには、上記２点を満たす必要があります。<br>
                          また、SIMロック解除を済ませている事が前提です。<br>
                          端末について、下記にまとめを記載いたします。</p>
                      </div>
                      <p class="url">https://maimo.app/inquiry/list/212</p>
                    </section>
                    <picture class="image_wrap">
                      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.webp" type="image/webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guide/img_quote_thumbnail.png" alt="" width="262" height="200">
                    </picture>
                  </a>
                </section>
                <section class="guide_section">
                  <h3 class="guide_heading3">名義一致が必須</h3>
                  <p>MNPを利用する場合は、ご契約中の携帯電話会社とご契約予定の携帯電話会社で、契約者名義が同じである必要があります。</p>
                  <p>契約者名義が異なる場合は、基本的には回線の契約をすることができないためです。</p>
                  <p>（例）<br>
                    母親の名義で契約していた息子がA会社からMNPを利用して、B会社で息子の名義で契約することはできない</p>
                  <p>もしも新しくご契約予定の携帯電話会社にて違う名義でご契約したい場合には、契約中の携帯電話会社にて、名義変更の手続きを行っておく必要があります。</p>
                </section>
                <section class="guide_section">
                  <h3 class="guide_heading3">契約していた携帯電話会社の割引やキャリア決済は不可になる</h3>
                  <p>回線を乗り換えた後は、契約していた携帯電話会社でのセット割などの割引を受けることはできません。</p>
                  <p>例えば、以下のような割引を受けられていた場合は割引の適用がなくなってしまいます。<br>
                    ・家族割<br>
                    ・Wi-Fi等のネット回線のセット割<br>
                    ・電気のセット割</p>
                  <p>また携帯電話のご利用料金と一緒に商品の購入金額やサービスのご利用料金をお支払いする「キャリア決済」も使用できなくなるので、注意が必要です。</p>
                  <p>ただし、格安SIMに乗り換えすることによって、トータルでの通信費を安くする場合がございますので、これを機にご検討いただくことをおすすめいたします。</p>
                </section>
              </section>

              <section class="guide_section" id="agenda5">
                <h2 class="guide_heading2">MNP手続きのために準備すること</h2>
                <ol class="check_list">
                  <li>
                    <p class="check">MNP予約番号取得後に何日以内に手続きが必要か確認する</p>
                    <p>ご契約予定の携帯電話会社にて、MNP予約番号を取得してから何日以内に契約手続きが必要がどうか確認しておく必要があります。<br>
                      センターモバイルの場合は、「有効期限は有効期限日当日を含めて11日以上残してご提出」していただく必要があります。</p>
                  </li>
                  <li>
                    <p class="check">契約中の携帯電話会社を解約する前にMNPの手続きを行う必要がある</p>
                    <p>前項でもご紹介した通り、解約後はMNPの手続きを行うことができなくなってしまいますので、解約する前にMNPの手続きを行う必要があります。</p>
                  </li>
                  <li>
                    <p class="check">受付時間を確認しておく</p>
                    <p>前項でもご紹介した通り、ホームページ上のお手続きであったとしても、受付時間を設けている可能性があるので、事前に受付時間の確認をしておくことが必要です。</p>
                  </li>
                  <li>
                    <p class="check">キャリアメールを引き継ぎたい場合は、引き継ぎ方法の確認をしておく</p>
                    <p>キャリアメールについては、引き継ぐことができなくなるので、今後もご使用する場合は、引き継ぎ方法を確認しておくことが必要です。</p>
                  </li>
                  <li>
                    <p class="check">対応機種の確認をしておく</p>
                  </li>
                  <li>
                    <p class="check">SIMロック解除がなされているか確認しておく</p>
                  </li>
                  <li>
                    <p class="check">名義変更が必要な場合は名義変更を済ませておく</p>
                  </li>
                  <li>
                    <p class="check">契約中の携帯電話会社でのサービスが解約後どうなるか確認しておく</p>
                  </li>
                </ol>
                <p>上記を確認しておくことで、手続き時の不備を防ぐことができたり、何か損をすることを防ぐことができます。</p>
              </section>

              <section class="guide_section" id="agenda6">
                <h2 class="guide_heading2">まとめ</h2>
                <p>MNPとは、電話番号を変えずに他社キャリアに変更できる制度のことです。<br>
                  以下に今回のポイントをまとめております。<br>
                  ご参考にしていただき、より快適なスマホ生活をお送りいただければ幸いです。</p>
                <p>MNPの手順<br>
                  （MNPワンストップ方式の場合）<br>
                  ①ご契約予定の携帯電話会社での契約手続き<br>
                  ②回線の開通</p>
                <p>（MNPツーストップの場合）<br>
                  ①ご契約中の携帯電話会社にてMNP予約番号を取得する<br>
                  ②ご契約予定の携帯電話会社にて、ご契約手続き<br>
                  ③回線の開通</p>
                <p>MNPのメリット<br>
                  ①電話番号の変更なしで、携帯会社を変えることができる<br>
                  ②MNPでの乗り換えでお得な特典を受けることができる<br>
                  ③簡単に手続きができる</p>
                <p>MNPの注意点<br>
                  ①MNP予約番号には、「有効期限」がある<br>
                  ②解約後にMNP手続きはできない<br>
                  ③受付時間内に手続きを行う必要がある<br>
                  ④キャリアメールは引き継ぐことができない<br>
                  ⑤対応機種の確認が必要<br>
                  ⑥名義一致が必須<br>
                  ⑦契約していた携帯電話会社の割引やキャリア決済は不可になる</p>
              </section>

            </div>
          </article>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>

    <div class="floating_btn">
      <a href="https://sim.centermobile.co.jp/?direct=1" target="_blank">センターモバイルに<br>MNPで転入する方はこちら</a>
    </div>

    <footer>
      <?php get_footer(); ?>
    </footer>
  </div><!-- containerここまで -->

  <?php get_template_part('inc/chat'); ?>
</body>