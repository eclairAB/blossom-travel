<!DOCTYPE html>
<html>
  <div class="row">
    <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'explore-davao-oriental',
        'posts_per_page' => -1,
    );
    $arr_posts = new WP_Query( $args );
     
    if ( $arr_posts->have_posts() ) :
     
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <a href="<?php the_permalink(); ?>">
            <?php
            if ( has_post_thumbnail() ) :
                $image = the_post_thumbnail();
            endif;
            ?>
            <!-- <img src="<?php echo $image; ?>" class="explore-dav-or-thumbnail" draggable="false" /> -->

            <span class="explore-dav-or-caption">
              <?php the_title(); ?>
            </span>
          </a>
        </div>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</html>