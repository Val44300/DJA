<?php get_header(); 

while (have_posts()) {
	 if (has_post_thumbnail()) {
	 	?>
	 	<div class="image-page">
	 		<?php the_post_thumbnail(); ?>
	 	</div>
	 	<?php
	 } ?>
	 <div class="content">
		<?php the_post();?>
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	 </div>
	 <?php
}?>


<?php
 get_footer();