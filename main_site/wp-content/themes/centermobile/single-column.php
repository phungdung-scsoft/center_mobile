<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body>

  <!--ここから共通部分 -->
  <?php get_template_part('inc/header'); ?>
  <!--ここまで共通部分-->

  <div class="container">
    <div class="img_oem top_image2">
      <div class="top_tlt">
        <div class="top_tlt_inner">
          <h1 class="company_h1">コラム</h1>
          <p>Column</p>
        </div>
      </div>
    </div>

    <section>
      <div class="wrapper">
        <div class="news_inner">
          <h3><?php the_title(); ?></h3>
          <div class="date">
            <?php
            $display_date = get_the_modified_date('Y年m月d日') ?: get_the_date('Y年m月d日');
            $display_date_iso = get_the_modified_date('c') ?: get_the_date('c');
            ?>
            <time datetime="<?php echo esc_attr($display_date_iso); ?>" itemprop="datePublished dateModified">
              <?php echo esc_html($display_date); ?>
            </time>
          </div>
          <div class="promotion">
            <p>本ページはプロモーションが含まれております</p>
            <p>情報に関しましては本ページの更新日やURL先のご確認をお願い致します</p>
          </div>
          <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
          <div class="news_contents">
            <?php the_content(); ?>
          </div>

          <!-- 関連記事のセクション -->
          <div class="related-posts">
            <div>
              <h3>関連記事</h3>
              <ul class="related-posts-list">
                <?php
                $the_id = get_the_ID();
                $not_in = [$the_id];
                $maxnum = 4;

                $args = [
                  'post__not_in'        => $not_in,
                  'post_type'           => get_post_type(),
                  'post_status'         => 'publish',
                  'no_found_rows'       => true,
                  'ignore_sticky_posts' => true,
                  'orderby'             => 'rand',
                  'posts_per_page'      => $maxnum,
                ];

                $categories = get_the_category($the_id);
                $cat_array  = [];

                foreach ($categories as $the_cat) {
                  array_push($cat_array, $the_cat->cat_ID);
                }
                if (!empty($cat_array)) {
                  $args['category__in'] = $cat_array;
                }

                $related_query = new WP_Query($args);

                if (!$related_query->have_posts()) :
                  echo '<li>関連記事がありません。</li>';
                else :
                  while ($related_query->have_posts()) : $related_query->the_post();
                ?>
                    <li class="related-post-item">
                      <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-thumbnail.png" alt="No Image">
                        <?php endif; ?>
                        <p class="related-post-title"><?php the_title(); ?></p>
                        <p class="related-post-date">
                          <?php
                          $display_date = get_the_modified_date('Y年m月d日') ?: get_the_date('Y年m月d日');
                          echo esc_html($display_date);
                          ?>
                        </p>
                      </a>
                    </li>
                <?php
                  endwhile;
                  wp_reset_postdata();
                endif;
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <?php get_footer(); ?>
    </footer>


  </div><!-- containerここまで -->

  <?php /*get_template_part('inc/chat');*/ ?>
</body>

</html>