<?php get_header('home'); ?>

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
				<div class="col-md-6 col-xs-12" style="background: <?php echo "url('" . $background_image . "')"; ?>no-repeat; background-size: cover; height: 500px;">
				<!-- pour éviter des blocs de hauteurs différentes -->
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
		
			<?php	
		} ?>
		</div>
	
	</div>
<div class="container-fluid">
	<div class="row">
		
		<?php
			$background_image = '';
			$the_query = new WP_Query(array('category_name' => 'Banniere'));
	
			while ($the_query->have_posts() ) {
				$the_query->the_post();
				if (has_post_thumbnail()) {
						$background_image = get_the_post_thumbnail_url();
				} else {
						$background_image = '';
				} ?>
				<div class="banniere" style="background: <?php echo "url('" . $background_image . "')"; ?>no-repeat center; background-size: cover; height: 300px;">
				<?php the_content(); ?>
				</div>
				<?php
			}
		?>
		
	</div>
</div>

 <?php get_footer(); 