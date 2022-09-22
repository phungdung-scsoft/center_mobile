<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <?php get_header(); ?>
</head>
  <body>

    <!--ここから共通部分-->
<?php get_template_part('inc/header'); ?>
<!--ここまで共通部分-->
      <!-- ここからコンテンツ -->
    <div class="container">
      <div class="img_identity top_image2">
        <div class="top_tlt">
        <div class="top_tlt_inner">
        <h1 class="identity_h1">ご本人確認書類について</h1>
        <p>Identity Verification Documents</p>
        </div>
        </div>
      </div>

    <section class="content">
      <div class="wrapper">
        <h2>ご本人確認書類について</h2>
        <p>音声SIMをご契約いただく際には不正契約防止のため必ずご契約者さまのご本人さま確認（画像のアップロード）が必要です。</p>
      </div>
    </section>

    <section class="content">
      <div class="wrapper">
        <h2>画像アップロードによる本人確認</h2>
        <p>ご本人さま確認書類の画像をアップロードいただき書類審査を行います。</p>
        <p class="attention_box">※ご本人確認書類の偽造・加工修正は法令違反です。偽造や加工修正が確認された場合、ご契約いただけません。</p>

        <h3>1点で受付できる本人確認書類</h3>
        <ul class="list">
          <li>運転免許証<span class="sub_text">（※1）</span></li>
          <li>運転経歴証明書<span class="sub_text">（※1）</span></li>
          <li>住民基本台帳カード<span class="sub_text">（※1）</span></li>
          <li>マイナンバーカード<span class="sub_text">（※2）</span></li>
          <li>障害者手帳<span class="sub_text">（※3）</span></li>
          <li>在留カード<span class="sub_text">（※1）（※4）</span></li>
          <li>特別永住者証明書<span class="sub_text">（※1）（※4）</span></li>
          <li>外国人登録証明書<span class="sub_text">（※1）（※4）</span></li>
        </ul>
        <p class="sub">（※1）両面提出必須（※2）表面のみ提出（※3）顔写真つき（※4）期限が1年以上残っているもの</p>

        <h3>2点で受付できる本人確認書類</h3>
        <p>①健康保険証<span class="sub_text">（※1）</span>またはパスポート<span class="sub_text">（※2）</span></p>
        <p>②住民票または公共料金の領収書<span class="sub_text">（※3）</span></p>
        <p class="attention">上記 ①＋② 両方の提出が必要です。</p>
        <p class="sub">（※1）両面提出必須（※2）新旧ともに国内で発行された有効期限内のもの（※3）電気,ガス,水道,NHKなど 発行より3ヶ月以内のもの</p>

        <h3>法人確認書類</h3>
        <p>①個人確認書類</p>
        <p>②法人確認書類<span class="sub_text">（※1）</span></p>
        <p>③所属名刺</p>
        <p class="attention">上記 ①＋②＋③ 全ての提出が必要です。</p>
        <p class="sub">（※1）登記簿謄本,履歴事項全部証明書,印鑑証明書 発行より3ヶ月以内のもの1点</p>

        <h4>ご本人さま確認時のご注意</h4>
        <ul class="list">
          <li>運転免許証の表面のみの提出は不備になります。<br />必ず両面の提出をお願いいたします。</li>
          <li>確認書類の有効期限にお気をつけください。</li>
          <li>加工した写真、被写体が綺麗に写っていない写真は不備になります。</li>
          <li class="attention">本人確認書類には一部付箋等で隠した物をアップロードしてください。<br />隠されていない写真は破棄いたします。<br />不備扱いとなりますのでご注意ください。</li>
        </ul>
      </div>
    </section>




      <footer>
        <?php get_footer(); ?>
      </footer>


    </div><!-- containerここまで -->

    <?php get_template_part('inc/chat'); ?>
  </body>
