<?php get_header(); ?>
<div>
	<?php
	while(have_posts()) {
		the_post();
		the_title();
		the_content();
		} ?>
</div>


<?php get_footer();