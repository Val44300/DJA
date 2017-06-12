<?php
/*
Template Name: Contact
*/

get_header();
?>
	<div class="bkg-grey" id="contact">
		
			<div class="">
			<?php 
				while (have_posts()) {
					the_post();
	   		 		the_content();
				}
			?>
			</div>
			<?php
			if (has_post_thumbnail())
			{
				?>
				<div class="hidden-sm hidden-xs align-bottom-item">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php
			} ?>
			
		
	</div>

<?php get_footer();