<?php get_the_post_thumbnail() ? 
	$thumbnail = get_the_post_thumbnail_url(get_the_ID(),'full') :
	$thumbnail = get_header_image();?>
<div class="container mt-5">
	<?php the_content();?>
</div>
