<div class="col-lg-2"></div>
<div class="col-lg-8">
	<h5><?= getProductDisplayName($_GET['product']) ?></h5>
	<hr>
	<div class="row">
		<div class="col-lg-5">
			<img src="assets/img/products/<?= $_GET['product'] ?>.jpg"
			     alt="product_image">
		</div>
		<div class="col-lg-7">
			<table class="table">
				<tr>
                  <?php

                  foreach (
                    getProductProperties($_GET['product']) as $property =>
                    $value
                  ) {
                    echo '<th>'
                      . $property
                      . '</th>';
                  }

                  ?>
				</tr>
				<tr>
                  <?php

                  foreach (
                    getProductProperties($_GET['product']) as $property =>
                    $value
                  ) {
                    echo '<td>'
                      . $value
                      . '</td>';
                  }

                  ?>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="col-lg-2"></div>

