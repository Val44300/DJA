<?php get_header(); ?>

<div class="container-fluid">
	<?php
		$the_query = new WP_Query(array('category_name' => 'Accueil'));
		setup_postdata( $post );
		?>
	<div class="row">
		<?php
		while ($the_query->have_posts() ) {
			$the_query->the_post();
			if (has_post_thumbnail()) {
				$background_image = get_the_post_thumbnail_url();
			} else {
				$background_image = '';
			}
			?>		
				<div class="col-md-6 col-xs-12" style="background: <?php echo "url('" . $background_image . "')"; ?>no-repeat center; background-size: cover; height: 500px;">
				<!-- pour éviter des blocs de hauteurs différentes -->
					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
				</div>
		
			<?php	
		} ?>
		</div>
	
	</div>
<div class="container-fluid">
	<div class="row">
		<div class="banniere">
		<?php
			$the_query = new WP_Query(array('category_name' => 'Banniere'));
			while ($the_query->have_posts() ) {
				$the_query->the_post();
				the_content();
			}
		?>
		</div>
	</div>
</div>

 <?php get_footer(); 