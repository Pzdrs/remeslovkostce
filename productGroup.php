<!doctype html>
<html lang="cz">
<head>
  <?php
  include 'includes/head.php';
  ?>
	<title><?= getTitle('productGroup') ?></title>
</head>
<body>
<?php include 'includes/navigation.php'; ?>
<div class="container-fluid">
	<div class="row mt-5">
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<h5><?= getProductGroupDisplayName($_GET['group']) ?></h5>
			<hr>
			<div class="row">
              <?php
              foreach (getProducts() as $productGroup => $product) {
                if ($productGroup == $_GET['group']) {
                  foreach ($product['options'] as $key => $value) {
                    echo
                      '<div class="col-lg-4 mb-3">'
                      . '<div class="card">'
                      . '<div class="card-body">'
                      . '<h5 class="card-title">'
                      . $value['display_name']
                      . '</h5>'
                      . '<a href="product.php?product='
                      . $key
                      . '" class="btn btn-primary">Přejít k produktu</a>'
                      . '</div></div></div>';
                  }
                }
              }
              ?>
			</div>
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>

