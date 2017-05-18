
	<footer class="container">

		<div class="row">
			<div id="social" class="col-md-4 col-xs-12">
				<a href="#" class="btn btn-default" ><i class="fa fa-facebook fa-2x"></i></a>
				<a href="#" class="btn btn-default" ><i class="fa fa-twitter fa-2x"></i></a>
				<a href="#" class="btn btn-default"><i class="fa fa-youtube fa-2x"></i></a>
			</div>

			<nav  class="navbar navbar-default col-md-4 col-xs-12">
				<?php wp_nav_menu(array('theme_location' => 'main_menu',
										'menu_class' => 'primary-menu'
				));  ?>
				<!--
				<ul class="nav navbar-nav">
					<li><a href="#">Mentions légales</a></li>
					<li><a href="#">Partenaires</a></li>
					<li><a href="#">Contacts</a></li>
					<li><a href="#">Espace presse</a></li>
				</ul>
				-->
			</nav>
				<div>
				</div>
			<div class="col-md-4 col-xs-12">
				<h3>Newsletter</h3>
				<form method="post" action="">
					<input type="text" name="name" placeholder="Nom"><br>
					<input type="text" name="email" placeholder="Email"><br>
					<input type="submit" value="S'abonner">
				</form>
			</div>
		</div>
	</footer>
</body>
</html>