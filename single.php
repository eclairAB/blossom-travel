<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Blossom_Travel
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <?php 
        foreach((get_the_category()) as $category) {
          $catname =$category->cat_name;
        }
        $category = get_the_category(); 
        $category_parent_id = $category[0]->category_parent;
        if( $category_parent_id != 0 ) $catname = $category_parent_id;

        switch ($catname):
          case 'Explore Davao Oriental': 
            require 'single-templates/ExploreDavOr.php'; break;
          // Explore Davao Oriental child category
            case $catname > 0:
              require 'single-templates/SubExploreDavOr.php'; break;
          case 'Fall in love with Davao Oriental':
            require 'single-templates/FallinLoveDavOr.php'; break;

          default: require 'single-templates/Templatedefault.php';
        endswitch;
      ?>

      <?php require 'sections/section-5.php'; ?>
		</main><!-- #main -->
        <?php
        /**  
         * @hooked blossom_travel_author               - 15
         * @hooked blossom_travel_navigation           - 20
         * @hooked blossom_travel_related_posts        - 35
         * @hooked blossom_travel_comment              - 45
        */
        //do_action( 'blossom_travel_after_post_content' );
        ?>
        
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
