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
            <h1 class="company_h1">店舗一覧</h1>
            <p>Store</p>
          </div>
        </div>
      </div>

      <section>
        <div class="wrapper">
          <p class="store_anchor_head">都道府県</p>
          <?php // タクソノミー(カテゴリ)別に記事を一覧出力
        	$terms = get_terms('pref',
            array(
              'parent' => 0,
              'orderby' => 'description'
            )
          );
          ?>
          <div class="store_anchor">
            <ul>
              <?php
            	foreach ( $terms as $term ) :
          	    $args = array(
        	        'post_type' => 'store',
        	        'taxonomy' => 'pref',
        	        'term' => $term->slug,
        	        'posts_per_page' => -1,
        	        'no_found_rows' => true,
          	    );
          	    $query = new WP_Query($args); ?>
              <li><a href="#<?php echo esc_html( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php
        	foreach ( $terms as $term ) :
      	    $args = array(
    	        'post_type' => 'store',
    	        'taxonomy' => 'pref',
    	        'term' => $term->slug,
    	        'posts_per_page' => -1,
    	        'no_found_rows' => true,
      	    );
      	    $query = new WP_Query($args); ?>
      	    <h2 id="<?php echo esc_html( $term->slug ); ?>"><?php echo esc_html( $term->name ); ?></h2>
      	    <ul class="store_list">
      	    <?php if ( $query->have_posts() ) : ?>
    	        <?php while ( $query->have_posts() ) : $query->the_post();?>
                <li>
                  <a href="<?php the_permalink(); ?>" class="info-wrap">
                    <div class="image">
                      <?php if(has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>" width="154" height="103">
                      <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_cm_pc.png" alt="" width="154" height="103">
                      <?php endif; ?>
                    </div>
                    <div class="text-wrap">
                      <div class="text">
                        <h2><?php the_title(); ?></h2>
                        <?php if(get_field('所在地')) : ?>
                        <p class="address"><?php the_field('所在地'); ?></p>
                        <?php endif; ?>
                      </div>
                    </div>
                    <?php
                      $product = get_field('お取扱い商材');
                      if($product) :
                    ?>
                      <ul class="tagList">
                        <?php
                          rsort($product);
                          foreach($product as $child){
                            echo '<li class="'.$child['value'].'">'.$child['label'].'</li>';
                          }
                        ?>
                      </ul>
                    <?php endif; ?>
                  </a>
                </li>
    	        <?php endwhile;?>
    	        <?php wp_reset_postdata(); ?>
      	    <?php endif; ?>
      	    </ul>
        	<?php endforeach; ?>
        </div>
      </section>

      <footer>
        <?php get_footer(); ?>
      </footer>
    </div><!-- containerここまで -->

    <?php get_template_part('inc/chat'); ?>
  </body>
