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
      <div class="img_oem top_image2">
        <div class="top_tlt">
        <div class="top_tlt_inner">
        <h1 class="company_h1">トピックス</h1>
        <p>Topics</p>
        </div>
        </div>
      </div>

      <section>
        <div class="wrapper">
          <div class="btn_outer btn_blue btn_pd2">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>coverage/">メディア取材依頼フォーム</a>
          </div>
          <h2><?php the_title(); ?></h2>

          <ul class="topics_list">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $the_query = new WP_Query( array(
              'post_status' => 'publish',
              'post_type' => 'post', //　ページの種類（例、page、post、カスタム投稿タイプ名）
              'paged' => $paged,
              'posts_per_page' => 6, // 表示件数
              'orderby' => 'date',
              'order' => 'DESC'
            ) );
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
            ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <div class="posts_inner">
                    <h3><?php the_title(); ?></h3>
                    <p class="date"><?php the_date(); ?></p>
                    <?php if(has_post_thumbnail()): ?>
                      <img src="<?php the_post_thumbnail_url("medium"); ?>" alt="">
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/thumb_topics.png" alt="" width="240" height="240">
                    <?php endif; ?>
                  </div>
                </a>
              </li>
            <?php
              endwhile;
            else:
              echo '<li><p>記事がありません。</p></li>';
            endif;
            ?>
          </ul>

          <div class="pagination">
            <?php //ページリスト表示処理
              global $wp_rewrite;
              $paginate_base = get_pagenum_link(1);
              if(strpos($paginate_base, '?') || !$wp_rewrite->using_permalinks()){
                $paginate_format = '';
                $paginate_base = add_query_arg('paged','%#%');
              }else{
                $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
                user_trailingslashit('page/%#%/','paged');
                $paginate_base .= '%_%';
              }
              echo paginate_links(array(
                'base' => $paginate_base,
                'format' => $paginate_format,
                'total' => $the_query->max_num_pages,
                'mid_size' => 1,
                'current' => ($paged ? $paged : 1),
                'prev_text' => '← 前へ',
                'next_text' => '次へ →',
              ));
            ?>
          </div>
        </div>
      </section>

      <footer>
        <?php get_footer(); ?>
      </footer>


    </div><!-- containerここまで -->

    <?php get_template_part('inc/chat'); ?>
  </body>
