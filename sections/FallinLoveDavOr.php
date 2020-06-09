<!DOCTYPE html>
<html>
  <div class="row">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'fall-in-lov-dav-or',
        'posts_per_page' => -1,
    );
    $arr_posts = new WP_Query( $args );
     
    if ( $arr_posts->have_posts() ) :
     
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>

        <div id="s3-card" <?php post_class(); ?>>
          <a href="<?php the_permalink(); ?>">
              <div class="card-inner-container">
                <div id="s3_label">
                  <?php the_title(); ?>
                </div>

                <?php echo the_post_thumbnail('thumbnail', array('class' => 's3_image')); ?>
                <!-- <img src="" class="s3_image" draggable="false" /> -->
              </div>
          </a>
        </div>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</html>