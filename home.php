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
				<div class="col-md-6 col-xs-12" style="background: <?php echo "url('" . $background_image . "')"; ?>no-repeat; background-position: center; height: 500px;">
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
<div class="container-fluid">
	<div class="row partenaires-liste">
		<div class="partenaires">
			<h3 class="titre-partenaires">Nos partenaires</h3>
			<div class="col-xs-6 col-sm-3 col-md-2">
				<a href="http://www.nantesmetropole.fr/" target="_blank">
					<img src="http://localhost/wp-test/wp-content/themes/DJA/images/Nantes_Metropole.jpg" alt="logo Nantes Metropole" class="logo-p">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-2">
				<a href="http://www.loire-atlantique.fr" target="_blank">
					<img src="http://localhost/wp-test/wp-content/themes/DJA/images/Logo_CG44.png" alt="logo Departement Loire-Atlantique" class="logo-p">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-2">
				<a href="http://www.pole-emploi.fr/" target="_blank">
					<img src="http://localhost/wp-test/wp-content/themes/DJA/images/POLE_EMPLOI.jpg" alt="logo Pole Emploi" class="logo-p">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-2 logos">
				<a href="http://www.cget.gouv.fr/" target="_blank">
					<img src="http://localhost/wp-test/wp-content/themes/DJA/images/etat.png" alt="logo Etat" class="logo-p">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-2 logos">
				<a href="http://www.iadvize.com/fr/" target="_blank">
					<img src="http://localhost/wp-test/wp-content/themes/DJA/images/Logo_iAdvize_black.png" alt="logo iAdvize" class="logo-p">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-2 logos">
				<a href="https://learndigital.withgoogle.com/digitalactive/" target="_blank">
					<img src="http://localhost/wp-test/wp-content/themes/DJA/images/Digital_Active.png" alt="logo Google Digital Active" class="logo-p">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-2 logos">
				<a href="http://www.agissonspourlemploi.fr/" target="_blank">
					<img src="http://localhost/wp-test/wp-content/themes/DJA/images/AGISSONS POUR L EMPLOI.jpeg" alt="logo Agissons pour l'emploi" class="logo-p">
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-2 logos">
				<a href="http://www.adnouest.org/" target="_blank">
					<img src="http://localhost/wp-test/wp-content/themes/DJA/images/ADNouest.jpg" alt="logo ADN Ouest" class="logo-p">
				</a>
			</div>
		</div>
	</div><!-- row -->
</div>
 <?php get_footer(); 