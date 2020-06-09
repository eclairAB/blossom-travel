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
            <?php
            if ( has_post_thumbnail() ) :
                $image = the_post_thumbnail();
            endif;
            ?>
              <div class="card-inner-container">
                <span id="s3_label">
                  <?php the_title(); ?>
                </span>

                <img src="<?php echo $image; ?>" class="s3_image" draggable="false" />
              </div>
          </a>
        </div>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</html>