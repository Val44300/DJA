<?php
get_header(); ?>

<div class="content">
	<?php
		if (have_posts())
		{
			while (have_posts()) {
				the_post(); ?>
				<h2><? the_title(); ?></h2>
				<?php the_content();

			}
		}
		else {
			echo '<h3>Aucun résultat</h3>';
			echo '<p>Désolé, mais rien ne correspond à votre recherche. Veuillez réessayer avec des mots différents.</p>';
		}
	?>
</div>

<?php get_footer();