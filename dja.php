<?php
/*
Template Name: DJA
*/
get_header();

while (have_posts()) {
	if (has_post_thumbnail()) {
		$background_image = get_the_post_thumbnail_url();
	} else {
		$background_image = '';
	}
?>
	<div class="content" style="background: <?php echo 'url(' . $background_image . ') no-repeat; background-size: cover;'?>">
		<h2 style="text-align: center;"><?php the_title(); ?></h2>
		<?php 
		the_post();
		the_content();
		?>
		</div><?php
} ?>
	
	<div style="text-align: center;">
		<h3>Témoignages</h3>
			<?php $the_query = new WP_Query(array('category_name' => 'Temoignage', 'posts_per_page' => 20));
			setup_postdata( $post );
			while ( $the_query->have_posts()) { ?>
				<div class="trombine-container">
					<?php $the_query->the_post(); ?>
					<h4><?php the_title(); ?></h4>
					<?php
					if (has_post_thumbnail()) {
						?>
						<a href=<?php echo '"' . get_the_permalink() . '"'?>><img class="trombine" alt="" src=<?php echo '"' . get_the_post_thumbnail_url() . '"'?>></a>
						<?php
					}
					 ?>
				</div> <?php
			} ?>
	</div>
	
<?php get_footer();