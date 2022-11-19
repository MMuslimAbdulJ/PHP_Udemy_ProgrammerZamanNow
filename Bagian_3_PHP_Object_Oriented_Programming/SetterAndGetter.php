<?php 
require_once "data/Category.php";

$category1 = new Category();
$category1->setName("Handphone");
$category1->setName("   ");
$category1->setExpensive(true);

$category2 = new Category();
$category2->setName("Computer");
$category2->setExpensive(true);

echo "Nama : {$category1->getName()}" . PHP_EOL;
echo "Expensive : {$category1->getExpensive()}" . PHP_EOL;
PHP_EOL;
echo "Nama : {$category2->getName()}" . PHP_EOL;
echo "Expensive : {$category2->getExpensive()}" . PHP_EOL;
