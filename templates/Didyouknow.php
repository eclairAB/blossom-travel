<?php
/**
 * Template Name: "Did you know" template
 */

get_header();?>

<div id="thumbnail-container" class="container mb-5">
	<img class="post-thumbnail" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" draggable="false" />

	<h1 class="thumbnail-title">
		<?php the_title(); ?>
	</h1>
</div>

<?php the_content();?>

<div style="margin: 19%;"></div>

<?php get_footer(); ?>

