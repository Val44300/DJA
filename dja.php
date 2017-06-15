<?php
/*
Template Name: DJA
*/
get_header();
?>
	<h2 style="text-align: center;"><?php the_title(); ?></h2>
	<div class="content">
	<?php
	while (have_posts()) {
		the_post();
		the_content();
	} ?>
	</div>

	<div class="container-fluid">
		<div class="row">
		<h3>Témoignages</h3>
				<?php $the_query = new WP_Query(array('category_name' => 'Temoignage'));
				setup_postdata( $post );
				while ( $the_query->have_posts()) { ?>
				<div class="col-md-3 col-sm-4 col-xs-12 dja bkg-lightgrey">
					<?php $the_query->the_post(); ?>
					<h4><?php the_title(); ?></h4>
					<?php
					if (has_post_thumbnail()) {
						?>
						<a href=<?php echo '"' . get_the_permalink() . '"'?>><img class="trombine" alt=""> src=<?php echo '"' . get_the_post_thumbnail_url() . '"'?>></a>
						<?php
					}
					 ?>
					</div> <?php
				} ?>
		</div>
	</div>	
<?php get_footer();