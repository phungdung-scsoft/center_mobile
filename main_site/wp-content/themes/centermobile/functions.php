<?php
add_action('init', function () {
    add_theme_support('post-thumbnails');
});

function new_excerpt_mblength($length) {
    return 20;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');


/*********************************
 WPデフォルトのjQueryを解除、Google CDNのものを読み込む
**********************************/
function load_google_cdn() {
  if ( !is_admin() ){
    //jQueryを登録解除
    wp_deregister_script( 'jquery' );
    //Google CDNのjQueryを出力
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', array(), NULL, false );
  }
}
add_action( 'init', 'load_google_cdn' );

/*********************************
 404のとき、トップページへリダイレクト
**********************************/
add_action( 'template_redirect', 'is404_redirect_home' );
function is404_redirect_home() {
  if ( is_404() ) {
    wp_safe_redirect( home_url( '/' ) );
    exit();
  }
}

/*********************************
 タクソノミーの説明の番号順にソート
**********************************/
function taxonomy_orderby_description( $orderby, $args ) {
  if ( $args['orderby'] == 'description' ) {
    $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description', 10, 2 );

/*********************************
 トピックス一覧のみAll in one SEOのtitleタグ内容がおかしいので強制書き換え
**********************************/
function my_title($title){
  if(is_page('media-archive')){
    $title = 'トピックス | 株式会社センターモバイル';
  }
  return $title;
}
add_filter('aioseo_title', 'my_title');

/*********************************
 AIO SEOが出力する<link rel="prev/next">を削除
**********************************/
add_filter('aioseo_prev_link', '__return_empty_string');
add_filter('aioseo_next_link', '__return_empty_string');

/*********************************
 店舗の詳細ページを404に（現状アーカイブでしか記事項目を使用していないため）
**********************************/
//add_filter( 'store_rewrite_rules', '__return_empty_array' );

/*********************************
 サービス名変更に伴うグローバル変数設定
**********************************/
function gl_setup() {
  global $gl_path;        // パス等
  global $gl_service;     // サービス名称
  global $gl_service_jp;  // サービス名称カナ
  global $gl_light;       // ひかりサービス
  global $gl_electric;    // でんきサービス
  global $gl_wifi;        // Wi-Fiサービス
  global $gl_id;          // ID

  /*
  date_default_timezone_set('Asia/Tokyo');
  if (strtotime(date('Y-m-d H:i')) < strtotime('2022-09-04 12:00')) :
    $gl_path = "maimo";
    $gl_service = "Maimo";
    $gl_service_jp = "マイモ";
    $gl_light = "Maimoひかり";
    $gl_electric = "Maimoでんき";
    $gl_wifi = "Maimo Wi-fi";
    $gl_id = "Maimo ID";
  else :
    $gl_path = "plaio";
    $gl_service = "PLAIO";
    $gl_service_jp = "プレイオ";
    $gl_light = "PLAIOひかり";
    $gl_electric = "Maimoでんき";
    $gl_wifi = "PLAIO Wi-fi";
    $gl_id = "会員ID";
  endif;
  */
  $gl_path = "plaio";
  $gl_service = "PLAIO";
  $gl_service_jp = "プレイオ";
  $gl_light = "PLAIOひかり";
  $gl_electric = "Maimoでんき";
  $gl_wifi = "PLAIO Wi-fi";
  $gl_id = "会員ID";
}
add_action( 'after_setup_theme', 'gl_setup' );

/*********************************
 お問い合わせに同意書を読み込むコードを出力
**********************************/
function add_scripts() {
  if ( is_page('contact-2') || is_page('contact-business') || is_page('contact-contractor') || is_page('documentrequest') || is_page('coverage') || is_page('contact-outside') ) {
    wp_enqueue_style( 'pdf-css', get_template_directory_uri() . '/assets/css/imgchecksupport.css', '', '20230508', false );
    //wp_enqueue_script( 'pdf-js', 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js', '', '20230412', false );
    wp_enqueue_script( 'pdf-check-support', get_template_directory_uri() . '/assets/js/imgchecksupport.js', '', '20230508', false );
  }
}
add_action('wp_print_scripts', 'add_scripts');
?>
