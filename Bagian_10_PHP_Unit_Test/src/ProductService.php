<?php
namespace OpenDebugger62\Test;
use OpenDebugger62\Test\Product;
use OpenDebugger62\Test\ProductRepository;
use PHPUnit\TextUI\CliArguments\Exception;

class ProductService {
    public function __construct(private ProductRepository $repository)
    {
    }

    public function register(Product $product) {
        if($this->repository->findById($product->getId()) != null) {
            throw new Exception("Product is already exist");
        }
        return $this->repository->save($product);
    }

    public function delete(string $id) : void {
        $product = $this->repository->findById($id);
        if($product == null) {
            throw new Exception("Product is not found");
        }
        $this->repository->delete($product);
    }


}

?>