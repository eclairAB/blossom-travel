<section>
  <div class="container-fluid">
    <div class="container flex-column">
      <div class="row justify-content-around my-5">
        <?php
          while( have_posts() ) : the_post();
            if( have_rows('sub_category_explore_snapshots') ):
              while( have_rows('sub_category_explore_snapshots') ): the_row();
                $sub_category_explore_snapshot_image = get_sub_field('sub_category_explore_snapshot_image');
        ?>

          <div class="sub_category_explore_snapshot_image_container">
            <?php echo do_shortcode('
              [su_lightbox type="inline" src="#my-custom-popup" mobile="yes" class=""]

                <div class="page_things_to_do_gallery_image_container">
                  <img src="'.$sub_category_explore_snapshot_image.'" alt="product-img" class="page_things_to_do_gallery_image" draggable="false" />
                </div>

              [/su_lightbox]
              [su_lightbox_content id="my-custom-popup"]


                <img src="'.$sub_category_explore_snapshot_image.'" alt="product-img" class="page_things_to_do_gallery_image" draggable="false" />


              [/su_lightbox_content]'); ?>

              <?php echo $yawa;?>
          </div>
        <?php 
              endwhile;
            endif; 
          endwhile;
        ?>
      </div>
      <div class="row">
        <div class="col-md-7 col-sm-12" style="font-weight: bold; font-size: large;">
          <?php the_content();?>
        </div>
        <div class="col-md-5 col-sm-12 green-rounded-border d-flex justify-content-center">
          <div class="d-inline-flex flex-column">
            <div>
              <i class="fas fa-search"></i>
              <?php the_field('sub_category_explore_location'); ?>
            </div>
            <div>
              <i class="fas fa-envelope"></i>
              <?php the_field('sub_category_explore_email'); ?>
            </div>
            <div>
              <i class="fas fa-phone"></i>
              <?php the_field('sub_category_explore_contact'); ?>
            </div>
            <div>
              <i class="fab fa-facebook-square mr-1"></i>
              <?php the_field('sub_category_explore_fb'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
