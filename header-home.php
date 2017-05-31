<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo() ?></title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://localhost/wp-test/wp-content/themes/DJA/style.css">
	<meta charset="utf-8">
	<?php wp_head(); ?>
</head>
<body>
	<header class="container-fluid home" style="background-image: url('<?php header_image(); ?>');">
		<div class="row">
			<div class="col-md-2 col-xs-12">
				<?php tour_du_numerique_the_custom_logo() ?>
			</div>
			<div class="col-md-6 col-xs-12">
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
			<h1><?php bloginfo() ?></h1>
			<p>Du 19 au 29 septembre 2017</p>
			<p>Nantes</p>
			<p><a href="#" class="btn btn-rouge btn-lg">DEMARRER LE TOUR</a></p>
		</div>
		<p class="align-right propulse">Propulsé par <img src="http://localhost/wp-test/wp-content/themes/DJA/logoMDE.gif" class="top" alt="logo"></p>
	</header>