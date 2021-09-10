<?php
add_action('init', function () {
    add_theme_support('post-thumbnails');
});

function new_excerpt_mblength($length) {
    return 20;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

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
?>
