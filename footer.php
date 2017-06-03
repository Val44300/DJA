
	<footer class="container-fluid">
	<div class="row">
		<div class="col-md-offset-3 col-md-6 col-xs-12">
			<?php
			dynamic_sidebar('widget_footer');
			?>
		</div>
	</div>
		<div class="row">
			<div class="col-md-2 col-xs-12 social">
				<a href="#" class="btn btn-default" ><i class="fa fa-facebook fa-2x"></i></a>
				<a href="#" class="btn btn-default" ><i class="fa fa-twitter fa-2x"></i></a>
			</div>

			<nav  class="navbar navbar-default col-md-offset-2 col-md-4 col-xs-12">
				<?php wp_nav_menu(array('theme_location' => 'footer_menu',
										'menu_class' => 'nav navbar-nav'
				));  ?>
			</nav>

		</div>
		<?php wp_footer(); ?>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://localhost/wp-test/wp-content/themes/DJA/programme-animation.js"></script>
</body>
</html>
