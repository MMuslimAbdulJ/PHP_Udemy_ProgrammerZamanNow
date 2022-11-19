<?php 
require_once "data/Product.php";

use Data\Product\Product as ProductProduct;
use Data\Product\ProductDummy;

$product = new ProductProduct("Chiki", 2500);
echo $product->getName()  . PHP_EOL;
echo $product->getPrice()  . PHP_EOL;

$dummy = new ProductDummy("Apple", 4500);
echo $dummy->info()  . PHP_EOL;
?>