
	<footer class="container-fluid">

		<div class="row">
			<div id="social" class="col-md-2 col-xs-12">
				<a href="#" class="btn btn-default" ><i class="fa fa-facebook fa-2x"></i></a>
				<a href="#" class="btn btn-default" ><i class="fa fa-twitter fa-2x"></i></a>
				<a href="#" class="btn btn-default"><i class="fa fa-youtube fa-2x"></i></a>
			</div>

			<nav  class="navbar navbar-default col-md-offset-2 col-md-4 col-xs-12">
				<?php wp_nav_menu(array('theme_location' => 'footer_menu',
										'menu_class' => 'nav navbar-nav'
				));  ?>
			</nav>
			<div class="col-md-offset-2 col-md-2 col-xs-12">
				<?php
				dynamic_sidebar('widget_footer');
				?>
			</div>
		</div>
		<?php wp_footer(); ?>
	</footer>
</body>
</html>
