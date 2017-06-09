<?php get_header(); 

while (have_posts()) :
	 if (has_post_thumbnail()) {
	 	?>
	 	<div class="image-page">
	 		<?php the_post_thumbnail(); ?>
	 	</div>
	 	<?php
	 }
	 
	 the_post();
	 the_content();
endwhile; ?>


<?php
 get_footer();