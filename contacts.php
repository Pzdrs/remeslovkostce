<!doctype html>
<html lang="cz">
<head>
  <?php
  include 'includes/head.php';
  ?>
	<title><?= getTitle('contacts') ?></title>
</head>
<body>
<?php include 'includes/navigation.php'; ?>
<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<h5>Kontakty</h5>
			<hr>
			<h5>Petr Boháč</h5>
			<ul class="list-unstyled">
				<span class="font-weight-bold">Pozice:</span><br>
				<li>Majitel a Zakladatel</li>
			</ul>
			<ul class="list-unstyled">
				<span class="font-weight-bold">Adresa:</span><br>
				<li>Jatecká 399</li>
				<li>Mšeno</li>
				<li>277 35</li>
				<li>Česká Republika</li>
			</ul>
			<ul class="list-unstyled">
				<span class="font-weight-bold">Kontakt:</span>
				<ul class="list-unstyled">
					<span class="font-weight-bold">Telefon</span>
					<li>+420 315 693 889</li>
				</ul>
				<ul class="list-unstyled">
					<span class="font-weight-bold">E-mail</span>
					<li><a href="mailto:obchod@remeslovkostce.cz">obchod@remeslovkostce.cz</a>
				</ul>
				</li>
			</ul>
			<ul class="list-unstyled">
				<span class="font-weight-bold">Ostatní informace:</span>
				<ul class="list-unstyled">
					<span class="font-weight-bold">IČ</span>
					<li>10161171</li>
				</ul>
				<ul class="list-unstyled">
					<span class="font-weight-bold">DIČ</span>
					<li>CZ6703151488</li>
				</ul>
				</li>
			</ul>
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>