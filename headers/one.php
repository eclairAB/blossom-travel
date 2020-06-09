<?php
/**
 * Header One
 * 
 * @package Blossom_Travel
 */

$ed_search = get_theme_mod( 'ed_header_search', true ); ?>
<div class="top-header">
  <div class="row">
    <div class="left col-12 col-md-6 order-2 order-md-1 d-flex">
      <?php 
        if ( is_active_sidebar( 'nav-links' ) ) : //check the sidebar if used.
        dynamic_sidebar( 'nav-links' );  // show the sidebar.
        endif;
      ?>
    </div>
    <div class="right col-12 col-md-6 order-1 order-md-2 d-flex align-items-center">
      <div class="flag image-container mr-0 ml-0 ml-md-auto" style="--aspect-ratio:16/9;">
        <img src="https://i.imgur.com/7zjtNGU.png" draggable="false" style="width: 25px; margin-right: 10px">
      </div>
      <a href="https://time.is/Philippines" id="time_is_link">  </a>
      <span id="Philippines_z42c" class="custom-text-thin date d-flex justify-content-center"></span>
      <script src="//widget.time.is/en.js" ></script>
      <script>
        time_is_widget.init({Philippines_z42c:{template:"DATETIME", date_format:"dayname, monthname dnum, year", time_format:"12hours:minutes:seconds AMPM"}});
      </script>
    </div>
  </div>
</div>
<header id="masthead" class="site-header header-one" itemscope itemtype="http://schema.org/WPHeader">
  <div class="container row">

    <!-- <div class="header-social">
      <?php blossom_travel_social_links(); ?>
    </div> -->
    <div class="toolbar-container row">
      <div>
        <img id="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/src/tourism_logo.png" draggable="false" class="align-middle d-inline-block" style="height: 4em;"/>
      </div>
      <div class="branding-container" style="align-self: center;">
        <?php blossom_travel_site_branding(); ?>
      </div>
      <div>
        <?php blossom_travel_primary_nagivation(); ?>
      </div>

      <div class="header-search">
        <!-- <?php if( $ed_search ) blossom_travel_header_search(); ?> -->
        <?php 
        // ip selector

          function ip() {
            $ip=['192.168.0.115', '192.168.8.103'];
            $index=0;
            try {
              if($ip) return 'http://'.$ip[$index].'/';
            } catch (Exception $e) {
              $index+=1;
              ip();
            }
          }
        ?>
        <!-- <form role="search" method="get" class="search-form" action="http://192.168.0.115/"> -->
        <form role="search" method="get" class="search-form" action=<?php ip();?>>
          <label style="margin-bottom: 0;">
            <span class="screen-reader-text">Search for:</span>
            <input type="search" class="search-field" placeholder="Search …" value="" name="s">
          </label>
          <input type="submit" class="search-submit" value="Search">
        </form>
      </div>
    </div>

    <div class="blur-bg"></div>
  </div>
</header>
