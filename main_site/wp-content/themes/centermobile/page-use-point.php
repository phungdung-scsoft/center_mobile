<!DOCTYPE html>
<html class="pc" <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="robots" content=”noindex,nofollow”>
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
  <meta name="viewport" content="width=device-width">
  <meta name="format-detection" content="telephone=no">
  <title>ポイントの利用について</title>
  <meta name="description" content="">
  <style type="text/css">
    body {
      font-family: "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", "メイリオ", Meiryo, Osaka, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
      font-size: 12px;
      background-color: #eaeaea;
    }

    #content {
      background-color: white;
      line-height: 1.5;
      width: 100%;
      max-width: 540px;
      padding: 20px;
      margin: 30px auto;
      box-sizing: border-box;
    }

    h2 {
      margin-top: 30px;
      margin-bottom: 10px;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body>
  <div id="content">
    <h1>ポイントの利用について</h1>
    <p>株式会社センターモバイル（以下、「当社」といいます。）が提供するサービス（以下、「本サービス」といいます。）における、ポイント利用方法について以下のとおり定めます。</p>
    <p>本サービスを利用する会員は、当社が定める方法により保有するポイントを<?php echo ($gl_point) ? '1' : '10'; ?>ポイント1円相当分として携帯料金の割引に使うことができます。</p>
    <?php if (!$gl_point) : ?>
      <p>ご利用ポイント数は10ポイント単位でご利用いただけます。11ポイントや12ポイントではご利用いただけませんのでご注意ください。</p>
    <?php endif; ?>
    <p>ポイントには有効期限はありません。</p>
    <p>本サービスから得たポイントは、当月分の携帯料金に利用することができます。過去の携帯料金には利用することができません。</p>
    <p>ポイントが利用できる期間は、決済方法によって変わります。ポイントが利用できる期間は下記の通りです。</p>

    <p>毎月3日〜7日23:59</p>
    <p>上記に記載したポイント利用期間以外は、ポイント利用をすることができません。</p>
    <p>当社が提供する本サービスを退会すると、ポイントは失効します。<br>再度本サービスに登録しても、過去に得たポイントは復活することはできません。</p>
    <p>ポイントの利用は会員本人のみが利用できます。第三者にポイントを付与することはできません。</p>
    <p>ポイントは換金することはできません。</p>
  </div>
  <?php wp_footer(); ?>
</body>

</html>