<div class="col-lg-2"></div>
<div class="col-lg-8">
	<h5>Katalog</h5>
	<hr>
	<div class="row">
      <?php
      foreach (getProducts() as $productGroup => $product) {
        echo
          '<div class="col-lg-4 mb-3">'
          . '<div class="card h-100">'
          . '<div class="card-body">'
          . '<div class="row">'
          . '<div class="col-12 text-center">'
          . '<h5 class="card-title">'
          . $product['display_name']
          . '</h5>'
          . '</div>'
          . '</div>'
          . '<div class="row">'
          . '<div class="col-6">'
          . '<img class="img-thumbnail" src="assets/img/'
          . ((file_exists('assets/img/productGroups/' . $productGroup . '.jpg'))
            ? 'productGroups/' . $productGroup . '.jpg'
            : 'default.jpg')
          . '" alt="productGroup_image">'
          . '</div>'
          . '<div class="col-6">'
          . '<p class="card-text">'
          . $product['description']
          . '</p>'
          . '</div></div>'
          . '<div class="row">'
          . '<div class="col-12 text-center">'
          . '<a href="index.php?page=products&&productGroup='
          . $productGroup
          . '" class="btn btn-primary mt-3">Přejít k produktům</a>'
          . '</div></div></div></div></div>';
      }
      ?>
	</div>
</div>
<div class="col-lg-2"></div>
