<section>
  <div class="container-fluid">
    <div id="thumbnail-container" class="container">
      <img class="post-thumbnail" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ? get_the_post_thumbnail_url(get_the_ID(),'full') : get_header_image(); ?>" draggable="false" />
      <span class="the-post-title">
        <?php the_title(); ?>
      </span>
    </div>
    <div id="exploredavor-container" class="row">

      <?php
        if (get_field('category_slug')) :
          $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'category_name' => get_field('category_slug'),
              'posts_per_page' => -1,
          );
          $arr_posts = new WP_Query( $args );
           
          if ( $arr_posts->have_posts() ) :
           
            while ( $arr_posts->have_posts() ) :
              $arr_posts->the_post();
              ?>

              <div id="post-<?php the_ID(); ?>" class="page_things_to_do_gallery_image_container" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>">
                  <?php
                  if ( has_post_thumbnail() ) :
                      $image = the_post_thumbnail('post-thumbnail', ['class' => 'page_things_to_do_gallery_image']);
                  endif;
                  ?>

                  <span id="page_things_to_do_gallery_caption">
                    <?php the_title(); ?>
                  </span>
                </a>
              </div>
              <?php
            endwhile;
          endif;
        endif;
      ?>
    </div>
  </div>
</section>
<div id="post-explore-davor">
  <h1>Explore more:</h1>
  <div>
    <!-- <?php echo do_shortcode('[psac_post_carousel autoplay=”false” show_category=”false” ]'); ?> -->
    <?php 
      if ( is_active_sidebar( 'slider-plugin' ) ) : //check the sidebar if used.
      dynamic_sidebar( 'slider-plugin' );  // show the sidebar.
      endif;
    ?>
  </div>
</div>