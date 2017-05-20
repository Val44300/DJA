<!DOCTYPE html>
<html>
<head>
	<title>Le tour du Numérique</title>
	<meta charset="utf-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="http://localhost/ebauche/wp-content/themes/themedja/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="">
	<?php wp_head(); ?>
</head>
<body>

	<header class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<img src="http://lorempixel.com/100/100/" alt="logo maison de l'emploi">
			</div>
			<div class="col-md-6 col-xs-12 col-centered">
				<?php wp_nav_menu(array('theme_location' => 'main_menu',
										'menu_class' => 'primary-menu'
				)); ?>
			</div>		
		</div>
		
	</header>

	