<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blossom_Travel
 */
    
    /**
     * After Content
     * 
     * @hooked blossom_travel_content_end - 20
    */
    // do_action( 'blossom_travel_before_footer' );
    
    /**
     * Footer
     * 
     * @hooked blossom_travel_footer_start  - 20
     * @hooked blossom_travel_footer_top    - 30
     * @hooked blossom_travel_footer_bottom - 40
     * @hooked blossom_travel_back_to_top   - 45
     * @hooked blossom_travel_footer_end    - 50
    */
    // do_action( 'blossom_travel_footer' );
    
    /**
     * After Footer
     * 
     * @hooked blossom_travel_page_end    - 20
    */
    do_action( 'blossom_travel_after_footer' );

    wp_footer(); ?>
<body>
  <section id="footersection">

    <img id="footer-bg" src="<?php echo get_stylesheet_directory_uri(); ?>/images/src/seashore2.png" draggable="false" class="align-middle d-inline-block"/>

    <!-- floating yellow divider -->

    <div class="flex-column footer-subcontainer">
      <div class="float-div"></div>
      <div class="footer-container row">
        <div class="col-lg-2 col-md-12">
          <div class="first">
              <?php 
                if ( is_active_sidebar( 'footer-1' ) ) : //check the sidebar if used.
                dynamic_sidebar( 'footer-1' );  // show the sidebar.
                endif;
              ?>
          </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-12">
          <div class="second col-lg-12">
              <?php 
                if ( is_active_sidebar( 'footer-2' ) ) : //check the sidebar if used.
                dynamic_sidebar( 'footer-2' );  // show the sidebar.
                endif;
              ?>
          </div>
        </div>
        <div class="flex-column col-lg-6 col-sm-12">
          <div class="third col-lg-12">
              <?php 
                if ( is_active_sidebar( 'footer-3' ) ) : //check the sidebar if used.
                dynamic_sidebar( 'footer-3' );  // show the sidebar.
                endif;
              ?>
          </div>
          <div class="row col-lg-12" >
            <div class="row col-lg-6 col-sm-12">
              <div class="fourth col-lg-12 col-sm-6">
                <?php 
                  if ( is_active_sidebar( 'footer-4' ) ) : //check the sidebar if used.
                  dynamic_sidebar( 'footer-4' );  // show the sidebar.
                  endif;
                ?>
              </div>
              <div class="col-lg-12 col-sm-6">
                  <?php 
                  if ( is_active_sidebar( 'footer-5' ) ) : //check the sidebar if used.
                  dynamic_sidebar( 'footer-5' );  // show the sidebar.
                  endif;
                ?>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <?php 
                if ( is_active_sidebar( 'footer-6' ) ) : //check the sidebar if used.
                dynamic_sidebar( 'footer-6' );  // show the sidebar.
                endif;
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row footer-bottom">
        <div class="col-sm-12 col-md-6">
          Copyright 2020 Province of Davao Oriental
        </div>
        <div class="infosoft-link col-sm-12 col-md-6 row">
          <div>
            Developed by:
          </div>
          &nbsp;
          <div>
            <a style="color: #fec34a;" href="http://infosoftstudio.com/">INFOSOFT STUDIO</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>