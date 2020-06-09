<?php
/**
 * @package WP_Bootstrap_Starter_Child
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>

	<div class="entry-summary">
		<?php 
			if( get_post_type() === 'page' || get_post_type() == 'post'):
				echo excerpt(25);
			elseif( get_post_type() === 'tagumcitypodcast' ):
				$excerpt = wp_trim_words( get_field('podcast_video_description'), $num_words = 25, $more = '...' );
        echo $excerpt;
			elseif( get_post_type() === 'tagumcitychannel' ):
				$excerpt = wp_trim_words( get_field('channel_video_description'), $num_words = 25, $more = '...' );
        echo $excerpt;
			elseif( get_post_type() === 'tagumpayfrontier' ):
				$excerpt = wp_trim_words( get_field('tagumpay_frontier_article'), $num_words = 25, $more = '...' );
        echo $excerpt;
			elseif( get_post_type() === 'tagumphotographer' ):
				$excerpt = wp_trim_words( get_field('tagum_photographer_article'), $num_words = 25, $more = '...' );
        echo $excerpt;
			endif;
		?>
	</div>
</article>
<!-- #post-## -->