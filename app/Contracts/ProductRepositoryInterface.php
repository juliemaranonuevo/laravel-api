<?php
namespace App\Contracts;
use App\Dto\ProductData;

interface ProductRepositoryInterface {

    public function addProduct(ProductData $productData);

    public function isExistsProductCode(string $code);

}
