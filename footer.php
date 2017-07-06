
	<footer class="container-fluid">

	
		<div class="row">
			<div class="col-md-2 col-xs-12 social">
				<a href="https://www.facebook.com/MDEmploiNantesNumerique/" class="btn btn-default" ><i class="fa fa-facebook-square fa-2x"></i></a>
				<a href="https://twitter.com/MDEmploiNantes" class="btn btn-default" ><i class="fa fa-twitter fa-2x"></i></a>
			</div>
			
			<div class="col-md-10 col-sm-10 col-xs-12">
			<?php dynamic_sidebar('widget_footer'); ?>
			</div>
			
			<nav  class="navbar navbar-default col-md-12 col-sm-12 col-xs-12">
				<?php wp_nav_menu(array('theme_location' => 'footer_menu',
										'menu_class' => 'nav navbar-nav'
				));  ?>
			</nav>
		</div>
		<?php wp_footer(); ?>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
