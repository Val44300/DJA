<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo() ?></title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://localhost/wp-test/wp-content/themes/DJA/style.css">
	
	<?php wp_head(); ?>
</head>
<body>
	<header class="container-fluid home" style="background-image: url('<?php header_image(); ?>'); background-size: cover;">
		<div class="row">
			<div class="col-md-2 col-xs-12 affiche">
				<?php tour_du_numerique_the_custom_logo() ?>
			</div>
			<div class="col-md-6">
				<div class="navbar navbar-default navbar-header">
					<?php wp_nav_menu(array('theme_location' => 'main_menu',
										'menu_class' => 'nav navbar-nav'
					)); ?>
				</div>	
			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar('widget_header'); ?>
			</div>	
		</div>

		<div class="titre-principal">
			<h1><img src="http://localhost/wp-test/wp-content/themes/DJA/images/titre.png" alt="<?php bloginfo() ?>"/></h1>
			<h2>Du 14 au 29 septembre 2017</h2>
			<h3>Nantes</h3>
			<p class="hidden-sm"><a href="#" class="btn btn-rouge btn-lg">DEMARRER LE TOUR</a></p>
		</div>
		<p class="propulse"><span class="bas">Propulsé par </span><img src="http://localhost/wp-test/wp-content/themes/DJA/images/maison.png" class="top" alt="logo">
		</p>
	</header>