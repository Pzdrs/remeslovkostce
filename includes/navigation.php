<nav class="navbar navbar-expand-sm navbar-dark bg-dark w-100">
	<div class="container">
		<a class="navbar-brand"
		   href="."><?= getConfig('site_name') ?></a>
		<button class="navbar-toggler" type="button"
		        data-toggle="collapse"
		        data-target="#navbarResponsive"
		        aria-controls="navbarResponsive"
		        aria-expanded="false"
		        aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="." class="nav-link <?php linkActive(); ?>">Domů</a>
				</li>
				<li class="nav-item">
					<a href="products.php"
					   class="nav-link <?php linkActive('products.php'); ?>">Katalog</a>
				</li>
				<li class="nav-item">
					<a href="contacts.php"
					   class="nav-link <?php linkActive('contacts.php'); ?>">Kontakty</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
