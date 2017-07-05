<?php 

/*
Template Name: Home
*/

get_header('home'); ?>

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
				<div class="col-md-6 col-xs-12 home-article" style="background: <?php echo "url('" . $background_image . "')"; ?>no-repeat; background-position: center;">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				</div>
		
			<?php	
		} ?>
		</div>
	
	</div>
<div class="container-fluid">
	<div class="row" >
		
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
				<div class="banniere" style="background: #d43456 <?php echo "url('" . $background_image . "')"; ?>no-repeat center; background-size: contain; ">
				<?php the_content(); ?>
				</div>
				<?php
			}
		?>
		
	</div>
</div>

<div class="partenaires">
	<?php
		$the_query2 = new WP_Query(array('category_name' => 'partenaires-accueil'));
		while ($the_query2->have_posts()) {
			$the_query2->the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<?php the_content();
		}	
		?>
</div>

 <?php get_footer(); 