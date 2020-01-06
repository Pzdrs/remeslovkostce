<div class="col-lg-2"></div>
<div class="col-lg-8">
	<h5><?= getProductGroupDisplayName($_GET['productGroup']) ?></h5>
	<hr>
	<div class="row">
      <?php
      foreach (getProducts() as $productGroup => $product) {
        if ($productGroup == $_GET['productGroup']) {
          foreach ($product['options'] as $key => $value) {
            echo
              '<div class="col-lg-4 mb-3">'
              . '<div class="card">'
              . '<div class="card-body">'
              . '<h5 class="card-title">'
              . $value['display_name']
              . '</h5>'
              . '<a href="index.php?page=product&&product='
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

