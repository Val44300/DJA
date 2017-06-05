<?php
/*
Template Name: DJA
*/
get_header();
?>
	<div class="container-fluid bkg-grey">
		<h2><?php the_title(); ?></h2>

		<?php $the_query = new WP_Query(array('category_name' => 'Programme'));
		setup_postdata( $post );
		?>
		<div class="row">

		<?php
		while ($the_query->have_posts()) {
			$the_query->the_post();
			?>
				<div class="col-md-offset-1 col-md-3 col-sm-6 col-xs-12 bkg-lightgrey">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div> <?php
		}
		?>
		
			<div class="col-md-offset-1 col-md-3 col-sm-6 col-xs-12 dja bkg-lightgrey">
				<?php
				$the_query2 = new WP_Query(array('category_name' => 'Projets'));
				setup_postdata( $post );

				while ($the_query2->have_posts()) {
					$the_query2->the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<?php the_content(); 
				} ?>

			</div>

			<div class="col-md-offset-1 col-md-3 col-sm-6 col-xs-12 dja bkg-lightgrey">
				<h3>Témoignages</h3>

				<?php $the_query3 = new WP_Query(array('category_name' => 'Temoignages'));
				setup_postdata( $post );
				while ( $the_query3->have_posts()) {
					$the_query3->the_post(); ?>
					<h4><?php the_title(); ?></h4>
					<?php
					if (has_post_thumbnail()) {
						?>
						<img src=<?php echo '"' . get_the_post_thumbnail_url() . '"'?>>
						<?php
					}
					the_content();
				}
				?>
		
		
			</div>
		</div>
	</div>

<?php get_footer();