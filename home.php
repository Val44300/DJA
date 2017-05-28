<?php get_header(); ?>

<div class="container-fluid">
	<?php
		$the_query = new WP_Query(array('category_name' => 'Accueil'));
		setup_postdata( $post );
		while ($the_query->have_posts() ) {
			$the_query->the_post();
			
			?>
			<div class="row">
				<h2><?php the_title(); ?></h2>
				<div class="col-md-8">
					<p><?php the_content(); ?></p>
				</div>
				
				<?php
				if (has_post_thumbnail())
					{ ?>
						<div class="col-md-2">
						<?php the_post_thumbnail(); ?>
						</div> <?php
					} ?>
			</div>
			<?php	
		}
	?>
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