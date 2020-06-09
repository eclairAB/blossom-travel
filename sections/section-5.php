<section id="s-five">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center" style="align-self: center;">
        <h1 id="s5_header">
          #ExperienceDavaoOriental
        </h1>
      </div>
      <div class="image_container ">
        <?php echo do_shortcode("[instagram-feed showheader=false showfollow=false]"); ?>
        <!-- <?php 
          while( have_posts() ) : the_post();
            if( have_rows('s5_card') ):
              while( have_rows('s5_card') ): the_row();
                $s5_image = get_sub_field('s5_image');
        ?>
          
          <div class="s5_image_container">
            <img src="<?php echo $s5_image; ?>" alt="product-img" class="s5_image" draggable="false" />
          </div>
        <?php 
              endwhile;
            endif; 
          endwhile;
        ?> -->
      </div>
    </div>
  </div>
</section>