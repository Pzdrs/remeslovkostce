<?php
function getConfig($section) {
  return parse_ini_file('assets/config.ini')[$section];
}

function getProducts() {
  return json_decode(file_get_contents('assets/products.json'), TRUE);
}

function getTotalProductTypes() {
  return sizeof(getProducts());
}

function getTotalProducts() {
  $count = 0;

  foreach (getProducts() as $productType) {
    foreach ($productType['options'] as $option) {
      $count++;
    }
  }
  return $count;
}

function getFooter(
  $site_name = 'Řemeslo v kostce',
  $author = 'Petr Boháč',
  $year = '2019'
) {
  echo $site_name . ' &COPY; ' . $year . '<br>';
  echo '<span class="text-muted font-weight-light">' . 'by ' . $author
    . '</span>';
}

function getProductGroupDisplayName($productGroupCode) {
  foreach (getProducts() as $key => $value) {
    if ($key == $productGroupCode) {
      return $value['display_name'];
    }
  }
}

function getProductDisplayName($productCode) {
  foreach (getProducts() as $productGroup) {
    foreach ($productGroup['options'] as $key => $value) {
      if ($key == $productCode) {
        echo $value['display_name'];
      }
    }
  }
}

function getProductProperties($product) {
  foreach (getProducts() as $productGroup) {
    foreach ($productGroup['options'] as $optionName => $option) {
      if ($optionName == $product) {
        return $option['properties'];
      }
    }
  }
}

function getTitle($page) {
  $suffix = ' | ' . getConfig('site_name');
  switch ($page) {
    case 'home':
      return 'Home' . $suffix;
      break;
    case 'contacts':
      return 'Kontakty' . $suffix;
      break;
    case 'productGroup':
      return 'Skupina produktů' . $suffix;
      break;
    case 'products':
      return 'Katalog' . $suffix;
      break;
    case 'product':
      return 'Informace o produktu' . $suffix;
      break;
  }
}

function linkActive($file = 'index.php') {
  $scriptName = basename($_SERVER['SCRIPT_FILENAME']);

  if ($scriptName == $file) {
    echo 'active';
  }
}
