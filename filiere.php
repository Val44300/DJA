<?php

/*
Template Name: Filiere
*/

get_header('filiere');

while (have_posts()) {
	if (has_post_thumbnail()) {
		$background_image = get_the_post_thumbnail_url();
	} else {
		$background_image = '';
	} ?>
	 <div class="content" style="background: <?php echo "url('" . $background_image . "')"; ?>no-repeat; background-position: center; background-size: cover;">
		<?php the_post();?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	 </div>
	 <?php
}

get_footer();

