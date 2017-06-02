<?php
/*
Template Name: Contact
*/

get_header();
?>
	<div class="container-fluid  bkg-grey" id="contact">
		<div class="row align-bottom">
			<div class="col-md-offset-2 col-md-4 col-sm-12 col-xs-12">
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
				<div class="col-md-2 hidden-xs hidden-sm align-bottom-item">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php
			} ?>
			
		</div>
	</div>

<?php get_footer();