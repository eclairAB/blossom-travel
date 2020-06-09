<?php
/**
 * Blog Section
 * 
 * @package Blossom_Travel
 */

include dirname(__FILE__).'/../variables.php';
?>

<?php echo do_shortcode($shortcode_slider); ?>

<div id="primary" class="content-area">

    <section id="s-one">
      <div class="container-fluid">
        <div class="col-12 text-center" style="align-self: center;">
          <h1 id="s2_header">
            Plan your trip
          </h1>
        </div>

        <!-- <?php echo do_shortcode("[pt_view id=ab368f6boh]"); ?> -->

        <?php require 'TabSection.php'; ?>
      </div>
    </section>

    <section id="s-two" style="background-image: url(<?php echo the_field('front-background-one-b');?>); margin-top: 30px"">
      <style type="text/css">
        #s-two::before { background-image: url(<?php echo the_field('front-background-one-a');?>) }
      </style>

      <div class="container-fluid flex-column" style="margin-top: 0 !important; padding: 0">
        <div class="col-12 text-center" style="padding-bottom: 10px; padding-top: 30px; align-self: center; background: white">
          <h1 id="s2_header">
            10 Municipalities 1 City
          </h1>
        </div>
        <div class="row">
          <div class="col-lg-5 col-md-12 row" style="place-self:flex-start; position: static; margin-top: 3%">
              <?php
                $args = array(
                    'post_type'       => 'post',
                    'post_status'     => 'publish',
                    'category_name'   => 'municipalities',
                    'posts_per_page'  => -1,
                    'orderby'         => 'date',
                    'order'           => 'ASC',
                );
                $arr_posts = new WP_Query( $args );

                if ( $arr_posts->have_posts() ) :

                  while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>

                    <div id="post-<?php the_ID(); ?>" class="col-md-6 col-xs-12 pl-0 pr-0">
                      <a href="<?php the_permalink(); ?>">

                        <span class="municipality-<?php the_ID(); ?>">
                          <i class="fas fa-map-pin"></i>
                          <span class="municipality-title">
                            <?php the_title(); ?>
                          </span>
                        </span>

                        <?php
                          if ( has_post_thumbnail() ) :
                              $image = the_post_thumbnail('post-thumbnail', ['class' => 'municipality-img']);
                          endif;
                        ?>
                      </a>
                    </div>
              <?php
                  endwhile;
                endif;
              ?>
          </div>
          <div class="davor-map-container col-md-3">
            <div class="chunk Boston"></div>
            <div class="chunk Cateel"></div>
            <div class="chunk Baganga"></div>
            <div class="chunk Caraga"></div>
            <div class="chunk Manay"></div>
            <div class="chunk Taragona"></div>
            <div class="chunk Lupon"></div>
            <div class="chunk Banaybanay"></div>
            <div class="chunk San_Isidro"></div>
            <div class="chunk Gov__Generoso"></div>
            <div class="chunk Mati"></div>
          </div>
          <div class="col-md-4" style="color: orange; font-size: 2em">
            <!-- this div is spacer for the absolute thumbnail -->
          </div>
        </div>
      </div>
    </section>


<!-- dummy section to fix white background of section 3 -->
    <section style="background-image: url(<?php echo the_field('front-background-two');?>); display: none !important;">
        <?php echo do_shortcode("[pt_view id=7a9cb38tfk]"); ?>
    </section>
<!-- dummy section to fix white background of section 3 -->


    <section id="s-three" style="background-image: url(<?php echo the_field('front-background-two');?>)">

        <div class="container">

          <div class="row">
            <div class="col-12 text-center" style="align-self: center;">
              <h1 id="s3_header">
                <span>
                  Fall in love with Davao Oriental
                </span>
              </h1>
            </div>
            <?php echo do_shortcode("[pt_view id=7a9cb38tfk]"); ?>
          </div>
        </div>
    </section>


    <section id="s-four" style="background-image: url(<?php echo the_field('front-background-three');?>)">
        <div class="container pt-5">

          <div class="row d-flex">
            <div class="col-md-6 col-sm-12 order-sm-0 order-xs-0 order-md-1">
            </div>
            <div id="post-content" class="col-md-6 col-sm-12 order-sm-1 order-xs-1 order-md-0 pt-5 pr-4 pb-4 pl-4">
              <?php while ( have_posts() ) : the_post(); ?>
                <h1 class="mb-4">
                  <?php the_field('front-featured-title'); ?>
                </h1>
                <p class="mb-5">
                  <?php the_field('front-featured-context'); ?>
                </p>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-8 col-md-10 col-lg-8">
                      <a href="<?php the_field('front-featured-button'); ?>" target="_self" rel="external">
                        <button class="btn btn-1 icon-info">
                          <span><?php the_field('front-featured-buttontext'); ?></span>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              <?php endwhile; // end of the loop. ?>
            </div>
          </div>

          <!-- <?php echo do_shortcode('
            [leaflet-map zoom=10 scrollwheel height="450"  lat=7.3172 lng=126.5420 tileurl=https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.jpg subdomains=abcd attribution="Map tiles by Stamen Design, under CC BY 3.0."]
            ');
            while( have_posts() ) : the_post();
                if( have_rows('s4_marker') ):
                  while( have_rows('s4_marker') ): the_row();
                    $s4_marker_latitude = get_sub_field('s4_marker_latitude');
                    $s4_marker_longitude = get_sub_field('s4_marker_longitude');
                    $s4_marker_tooltip = get_sub_field('s4_marker_tooltip');
                    echo do_shortcode('
            [leaflet-marker lat='.$s4_marker_latitude.' lng='.$s4_marker_longitude.']'.$s4_marker_tooltip.'[/leaflet-marker]');
              endwhile;
            endif;
          endwhile;?> -->
        </div>
    </section>


    <section id="s-five">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 text-center" style="align-self: center;">
            <h1 id="s5_header">
              <!-- <?php the_field('s5_header'); ?> -->
              #ExperienceDavaoOriental
            </h1>
          </div>
          <div class="image_container ">
            <?php echo do_shortcode("[instagram-feed showheader=false showfollow=false ]"); ?>
          </div>
        </div>
      </div>
    </section>
</div>
<script type="text/javascript">
$(document).ready(function(){
  // textArray would differ on local and on Remote
  let textArray = [
    '.municipality-<?php echo $textArray[0];?>',
    '.municipality-<?php echo $textArray[1];?>',
    '.municipality-<?php echo $textArray[2];?>',
    '.municipality-<?php echo $textArray[3];?>',
    '.municipality-<?php echo $textArray[4];?>',
    '.municipality-<?php echo $textArray[5];?>',
    '.municipality-<?php echo $textArray[6];?>',
    '.municipality-<?php echo $textArray[7];?>',
    '.municipality-<?php echo $textArray[8];?>',
    '.municipality-<?php echo $textArray[9];?>',
    '.municipality-<?php echo $textArray[10];?>'
  ];
  let mapArray = [
    '.chunk.Boston',
    '.chunk.Cateel',
    '.chunk.Baganga',
    '.chunk.Caraga',
    '.chunk.Manay',
    '.chunk.Taragona',
    '.chunk.Lupon',
    '.chunk.Banaybanay',
    '.chunk.San_Isidro',
    '.chunk.Gov__Generoso',
    '.chunk.Mati'
  ];
  let imgArray = [
    `${textArray[0]} ~ .municipality-img`,
    `${textArray[1]} ~ .municipality-img`,
    `${textArray[2]} ~ .municipality-img`,
    `${textArray[3]} ~ .municipality-img`,
    `${textArray[4]} ~ .municipality-img`,
    `${textArray[5]} ~ .municipality-img`,
    `${textArray[6]} ~ .municipality-img`,
    `${textArray[7]} ~ .municipality-img`,
    `${textArray[8]} ~ .municipality-img`,
    `${textArray[9]} ~ .municipality-img`,
    `${textArray[10]} ~ .municipality-img`
  ];
  $(textArray[0]).hover(function() {isHovered(0, 1);}, function() {isHovered(0, 2);});
  $(textArray[1]).hover(function() {isHovered(1, 1);}, function() {isHovered(1, 2);});
  $(textArray[2]).hover(function() {isHovered(2, 1);}, function() {isHovered(2, 2);});
  $(textArray[3]).hover(function() {isHovered(3, 1);}, function() {isHovered(3, 2);});
  $(textArray[4]).hover(function() {isHovered(4, 1);}, function() {isHovered(4, 2);});
  $(textArray[5]).hover(function() {isHovered(5, 1);}, function() {isHovered(5, 2);});
  $(textArray[6]).hover(function() {isHovered(6, 1);}, function() {isHovered(6, 2);});
  $(textArray[7]).hover(function() {isHovered(7, 1);}, function() {isHovered(7, 2);});
  $(textArray[8]).hover(function() {isHovered(8, 1);}, function() {isHovered(8, 2);});
  $(textArray[9]).hover(function() {isHovered(9, 1);}, function() {isHovered(9, 2);});
  $(textArray[10]).hover(function() {isHovered(10, 1);}, function() {isHovered(10, 2);});

  $(mapArray[0]).hover(function() {isHovered(0, 1);}, function() {isHovered(0, 2);});
  $(mapArray[1]).hover(function() {isHovered(1, 1);}, function() {isHovered(1, 2);});
  $(mapArray[2]).hover(function() {isHovered(2, 1);}, function() {isHovered(2, 2);});
  $(mapArray[3]).hover(function() {isHovered(3, 1);}, function() {isHovered(3, 2);});
  $(mapArray[4]).hover(function() {isHovered(4, 1);}, function() {isHovered(4, 2);});
  $(mapArray[5]).hover(function() {isHovered(5, 1);}, function() {isHovered(5, 2);});
  $(mapArray[6]).hover(function() {isHovered(6, 1);}, function() {isHovered(6, 2);});
  $(mapArray[7]).hover(function() {isHovered(7, 1);}, function() {isHovered(7, 2);});
  $(mapArray[8]).hover(function() {isHovered(8, 1);}, function() {isHovered(8, 2);});
  $(mapArray[9]).hover(function() {isHovered(9, 1);}, function() {isHovered(9, 2);});
  $(mapArray[10]).hover(function() {isHovered(10, 1);}, function() {isHovered(10, 2);});

  function isHovered(classHovered, x){ // x returns 1 onhover, 2 onexit

    if (x==1) {
      if ( $( window ).width() > 991) {
        hoverLoop(classHovered);
      }
    }
  }

  function hoverLoop(x) {
    i=0;
    while(i < textArray.length) {
      $(textArray[i]+' .municipality-title').css("padding-left", "0");
      $(textArray[i]+' .municipality-title').css("font-size", "2rem");

      $(mapArray[i]).css("background", "#32A0A0");
      $(mapArray[i]).css("transform", "scale(.5)");
      $(mapArray[i]).css("z-index", "4");

      $(imgArray[i]).css("display", "none");


      if (c_width(1570,1418)) {
        $(textArray[i]+' .municipality-title').css("font-size", "1.5rem");
      }
      if (c_width(1418,1283)) {
        $(textArray[i]+' .municipality-title').css("font-size", "1.4rem");
      }
      if (c_width(1283,992)) {
        $(textArray[i]+' .municipality-title').css("font-size", "1rem");
      }
      i++;
    }
    $(textArray[x]+' .municipality-title').css("padding-left", "5%");
    $(textArray[x]+' .municipality-title').css("font-size", "2.4rem");

    $(mapArray[x]).css("background", "#fec34a");
    $(mapArray[x]).css("transform", "scale(.6)");
    $(mapArray[x]).css("z-index", "14");

    $(imgArray[x]).css("display", "inline");


    if (c_width(1570,1418)) {
      $(textArray[x]+' .municipality-title').css("font-size", "1.9rem");
    }
    if (c_width(1418,1282)) {
      $(textArray[x]+' .municipality-title').css("font-size", "1.7rem");
    }
    if (c_width(1282,992)) {
      $(textArray[x]+' .municipality-title').css("font-size", "1.24rem");
    }
  }

  function c_width(x, y) {
    return $( window ).width() <= x && $( window ).width() >= y;
  }
});
</script>
