<?php 

class Product {
    public function __construct(
        public string $id,
        public string $name,
        public int $price,
        public int $quantity = 0,
        public bool $isExpensive = false
    )
    {
    }
}

$product = new Product("1", "Steak Wagyu A5", 20000, 100);
var_dump($product);
?>