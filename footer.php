
	<footer class="container-fluid">


		<div class="row">
			<div class="col-md-1 col-xs-12 social">
				<a href="#" class="btn btn-default" ><i class="fa fa-facebook-square fa-2x"></i></a>
				<a href="#" class="btn btn-default" ><i class="fa fa-twitter fa-2x"></i></a>
			</div>

			<nav  class="navbar navbar-default col-sm-6 col-md-4 col-xs-12">
				<?php wp_nav_menu(array('theme_location' => 'footer_menu',
										'menu_class' => 'nav navbar-nav'
				));  ?>
			</nav>

			<div class="col-md-6 col-xs-12">
				<?php
				dynamic_sidebar('widget_footer');
				?>
			</div>
		</div>
		<?php wp_footer(); ?>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://localhost/wp-test/wp-content/themes/DJA/programme-animation.js"></script>
</body>
</html>
