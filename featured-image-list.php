<?php
/**
 * @package Blossom_Travel
 * Template Name: Featured Images List
 */
get_header();
?>
  <div class="page-menu mt-5 mb-5">
    <div class="retina-container">
      <div class="retina-content-container">

        <div class="row">
          <?php
            $ancestors = array();
            $ancestors = get_ancestors($post->ID,'page');
            $parent = (!empty($ancestors)) ? array_pop($ancestors) : $post->ID;
            if (!empty($parent)) :
              $kids = new WP_Query(
                array(
                  'post_parent'=>$parent,
                  'post_type' => 'page',
                  'ignore_sticky_posts' => true
                )
              );
              if ($kids->have_posts()) :
                while ($kids->have_posts()) :
                  $kids->the_post();
          ?>

                <div class="page-menu-card col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-start" style="padding-bottom: 36px;">

                    <a href="<?php the_permalink(); ?>">
                      <?php
                        if ( get_the_post_thumbnail()) echo get_the_post_thumbnail();
                        else get_header_image();
                      ?>
                      <figcaption>
                        <span>
                          <?php the_title(); ?>
                        </span>
                      </figcaption>
                    </a>
                </div>

          <?php
              endwhile;
            endif;
          endif;
          ?>

        </div>
      </div>
    </div>

  </div>

<?php
  get_footer();
?>