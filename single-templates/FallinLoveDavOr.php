<div>
  <div class="container-fluid">
    <div id="thumbnail-container" class="container">
      <?php 
        global $post;
        $post_slug = $post->post_name;
      ?>
      <div class="arrow-left">
        <?php previous_post_link('%link','<img src="' . get_bloginfo("template_directory") . '/images/src/left-arrow.png" />', TRUE); ?>
      </div>

      <img class="post-thumbnail" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ? get_the_post_thumbnail_url(get_the_ID(),'full') : get_header_image(); ?>" draggable="false" />

      <div class="arrow-right">
        <?php next_post_link('%link','<img src="' . get_bloginfo("template_directory") . '/images/src/right-arrow.png" />', TRUE); ?>
      </div>
    </div>
    <div class="container love-davor-post-container">
      <div>
        <!-- <h1 id="love-davor-post-title"><?php the_title(); ?></h1> -->
      </div>
      <div id="love-davor-post-context">
        <?php the_content(); ?>
      </div>
      <div class="row mt-5">
        <div id="love-davor-snaps-container" class="col-md-8 col-sm-12 row">
          <?php
            while( have_posts() ) : the_post();
              if( have_rows('love_dav_or_snapshots') ):
                while( have_rows('love_dav_or_snapshots') ): the_row();
                  $love_dav_or_snapshot_image = get_sub_field('love_dav_or_snapshot_image');
          ?>

            <div class="love_dav_or_snapshot_image_container">
              <?php echo do_shortcode('
                [su_lightbox type="inline" src="#my-custom-popup" mobile="yes" class=""]

                  <img src="'.$love_dav_or_snapshot_image.'" alt="product-img" class="love_dav_or_snapshot_image" draggable="false" />

                [/su_lightbox]
                [su_lightbox_content id="my-custom-popup"]

                  <img src="'.$love_dav_or_snapshot_image.'" alt="product-img" class="love_dav_or_snapshot_image" draggable="false" />

                [/su_lightbox_content]'); ?>

            </div>
          <?php 
                endwhile;
              endif; 
            endwhile;
          ?>
        </div>

        <div class="col-md-4 col-sm-12">
          <?php if (get_field('love_dav_or_map_enabled')) :
              echo do_shortcode('[su_gmap responsive="yes" address="'.get_field('love_dav_or_map_address').'" zoom="11" class="google-map"]'); 
                endif;?>
        </div>
      </div>
    </div>
  </div>
</div>