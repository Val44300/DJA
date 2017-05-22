<!DOCTYPE html>
<html>
<head>
	<title>Le tour du Numérique</title>
	<meta charset="utf-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="http://localhost/wp-test/wp-content/themes/DJA/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="">
	<?php wp_head(); ?>
</head>
<body>

	<header class="container-fluid" style="background-image: url('<?php header_image(); ?>'); height: 1000px;">
	
		<div class="row">
			<div class="col-md-2 col-xs-12">
				<?php tour_du_numerique_the_custom_logo() ?>
			</div>
			<div class="col-md-8 col-xs-12 col-centered">
				<div class="navbar navbar-default">
					<?php wp_nav_menu(array('theme_location' => 'main_menu',
										'menu_class' => 'nav navbar-nav'
					)); ?>
				</div>
				
			</div>		
		</div>
		
	</header>