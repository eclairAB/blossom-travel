<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blossom_Travel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
        <!-- <?php 
        /**
         * Before Posts hook
        */
        // do_action( 'blossom_travel_before_posts_content' );
        ?>
        
        <main id="main" class="site-main">

		<?php
		// if ( have_posts() ) :

			/* Start the Loop */
			// while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_format() );

			// endwhile;

		// else :

			// get_template_part( 'template-parts/content', 'none' );

		// endif; ?> -->

		<!-- </main> --><!-- #main -->
        
        <?php
        /**
         * After Posts hook
         * @hooked blossom_travel_navigation - 15
        */
        // do_action( 'blossom_travel_after_posts_content' );
        ?>

        <section id="s-one">
        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/src/waves.png" draggable="false" class="wave align-middle d-inline-block"/>

        	<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/src/surferdude.png" draggable="false" class="surfer align-middle d-inline-block"/> -->

					<div class="container">
						<!-- <p><?php //echo get_field('s1_header'); ?></p>	 -->

						<?php
							$value = get_sub_field( "s1_context" );

							if( $value ) {
							    echo $value;
							} else {
							    echo 'field empty';
							}
						?>
                            

						<?php while ( have_posts() ) : the_post(); ?>

							<h1><?php the_field('s1_header'); ?></h1>

						<?php endwhile; // end of the loop. ?>

					</div>
        </section>


        <section id="s-two">
        	<div class="container">

        		<?php 
              while( have_posts() ) : the_post();
                if( have_rows('section_two') ):
                  while( have_rows('section_two') ): the_row();
                    $s2_background = get_sub_field('s2_background');
                    $s2_label = get_sub_field('s2_label');
                    $s2_link = get_sub_field('s2_link');
            ?>
                <div class="_____ text-center col-12 col-sm-12 col-md-6 col-lg-3">
                    <div id="___">
                      <a href="<?php echo $s2_link; ?>" target="_self" rel="external">
                        <span class=" _______">
                          <img src="<?php echo $s2_background; ?>" alt="product-img" class="s2_background" draggable="false" />
                        </span>    
                        <span id="s2_label"><?php echo $s2_label; ?></span>
                      </a>
                    </div>
          			</div>
            <?php 
                  endwhile;
                endif; 
              endwhile;
            ?>

        	</div>
        </section>


        <section id="s-three" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/src/Mount-Hamiguitan2.jpg);">
        	<!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/src/Mount-Hamiguitan2.jpg"> -->

        	<div class="container">

	        	c
        	</div>
        </section>


        <section id="s-four">
        	<div class="container">

	        	d
        	</div>
        </section>


        <section id="s-five">
        	<div class="container">

	        	e
        	</div>
        </section>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();