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

/*********************************
 WordPress管理画面のメニュー項目編集
**********************************/
function remove_menus() {
  // 編集者
  if ( current_user_can( 'editor' ) ) {
    // サイドメニュー項目の削除
    remove_submenu_page( 'index.php', 'update-core.php' ); // ダッシュボード / 更新
    remove_submenu_page( 'index.php', 'admin.php?page=monsterinsights_reports' ); // ダッシュボード / Monster Insights
    remove_submenu_page( 'edit.php?post_type=store', 'edit-tags.php?taxonomy=pref&amp;post_type=store' ); // 店舗 / 都道府県
    remove_menu_page( 'edit.php' ); // 投稿
    remove_menu_page( 'upload.php' ); // メディア
    remove_menu_page( 'edit.php?post_type=page' ); // 固定
    remove_menu_page( 'edit.php?post_type=store-blog' ); // 店舗ブログ
    remove_menu_page( 'edit.php?post_type=ufaq' ); // FAQs
    remove_menu_page( 'edit.php?post_type=videoplayer' ); // HTML5 Video Player
    remove_menu_page( 'edit.php?post_type=wp_show_posts' ); // WP Show Posts
    remove_menu_page( 'monsterinsights_reports' ); // Monster Insights
    remove_menu_page( 'edit-comments.php' ); // コメント
    remove_menu_page( 'themes.php' ); // 外観
    remove_menu_page( 'plugins.php' ); // プラグイン
    remove_menu_page( 'users.php' ); // ユーザー
    remove_menu_page( 'profile.php' ); // プロフィール
    remove_menu_page( 'tools.php' ); // ツール
    remove_menu_page( 'options-general.php' ); // 設定
    remove_menu_page( 'wpcf7' ); // Contact Form 7

    // WordPress更新通知
    remove_action( 'admin_notices', 'update_nag', 3 );
  }
}
add_action( 'admin_menu', 'remove_menus', 999 );

function remove_admin_bar_menus( $wp_admin_bar ) {
  // 編集者
  if ( current_user_can( 'editor' ) ) {
    // アドミンバー(WordPress上部のバー)項目の削除
    //$wp_admin_bar->remove_menu( 'my-account' ); // こんにちは、[ユーザー名]さん
    $wp_admin_bar->remove_menu( 'user-info' ); // ユーザー / [ユーザー名]
    $wp_admin_bar->remove_menu( 'edit-profile' ); // ユーザー / プロフィールを編集
    //$wp_admin_bar->remove_menu( 'logout' ); // ユーザー / ログアウト

    $wp_admin_bar->remove_menu( 'wp-logo' ); // WordPressロゴ
    $wp_admin_bar->remove_menu( 'about' ); // WordPressロゴ / WordPressについて
    $wp_admin_bar->remove_menu( 'wporg' ); // WordPressロゴ / WordPress.org
    $wp_admin_bar->remove_menu( 'documentation' ); // WordPressロゴ / ドキュメンテーション
    $wp_admin_bar->remove_menu( 'support-forums' ); // WordPressロゴ / サポート
    $wp_admin_bar->remove_menu( 'feedback' ); // WordPressロゴ / フィードバック

    //$wp_admin_bar->remove_menu( 'site-name' ); // サイト名
    //$wp_admin_bar->remove_menu( 'view-site' ); // サイト名 / サイトを表示

    $wp_admin_bar->remove_menu( 'updates' ); // 更新

    $wp_admin_bar->remove_menu( 'comments' ); // コメント

    $wp_admin_bar->remove_menu( 'new-content' ); // 新規投稿
    $wp_admin_bar->remove_menu( 'new-post' ); // 新規投稿 / 投稿
    $wp_admin_bar->remove_menu( 'new-media' ); // 新規投稿 / メディア
    $wp_admin_bar->remove_menu( 'new-page' ); // 新規投稿 / 固定
    $wp_admin_bar->remove_menu( 'new-user' ); // 新規投稿 / ユーザー

    $wp_admin_bar->remove_menu( 'menu-toggle' ); // メニュー

    $wp_admin_bar->remove_menu( 'monsterinsights_frontend_button' ); // Monster Insights
  }
}
add_action( 'admin_bar_menu', 'remove_admin_bar_menus', 999 );

/*********************************
 ダッシュボードのクイックドラフト機能の停止（ダッシュボードを開くたびに、投稿に記事が勝手に追加されてしまうため）
**********************************/
function disable_quickpress() {
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
add_action('wp_dashboard_setup', 'disable_quickpress');

/*********************************
 自動更新メール通知の停止
**********************************/
//「Wordpress本体」の自動更新メール通知を停止する
add_filter('auto_core_update_send_email' , '__return_false');
// 「プラグイン」の自動更新メール通知を停止する
add_filter( 'auto_plugin_update_send_email', '__return_false' );
// 「テーマ」の自動更新メール通知を停止する
add_filter( 'auto_theme_update_send_email', '__return_false' );
?>
