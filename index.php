<!doctype html>
<html lang="cz">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async
	        src="https://www.googletagmanager.com/gtag/js?id=UA-154868655-1"></script>
	<script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-154868655-1');
	</script>
  <?php
  include 'includes/head.php';
  ?>
	<title><?= getTitle('home') ?></title>
</head>
<body>
<?php include 'includes/navigation.php'; ?>
<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 text-center">
			<h5>Vítejte na stránkách Řemeslo v kostce</h5>
			<hr>
			<p><b>ŘEMESLO V KOSTCE</b> je ryze výrobní firma zaměřená především
				na
				zpracování papíru. Kancelářské potřeby a reklamní předměty
				spotřebního charakteru vyrábíme od roku 1997. </p>
			<p>Naše zboží lze zakoupit v celé řadě obchodů po celé ČR. Pokud
				máte
				zájem o velkoobchodní podmínky prodeje, prosím kontaktujte nás
				na
				<a href="mailto:obchod@remeslovkostce.cz">obchod@remeslovkostce.cz</a>.
			</p>
			<p>Přehled našich výrobků naleznete v sekci <a
					href="products.php">Katalog</a>.</p>

		</div>
		<div class="col-lg-2"></div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>