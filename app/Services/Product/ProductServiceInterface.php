<?php

namespace App\Services\Product;

use Illuminate\Http\Request;

interface ProductServiceInterface
{
    public function getAllProduct();

    public function findProductById(int $id);

    public function createProduct(array $attributes);

    public function updateProduct(int $id, array $attributes);

    public function deleteProduct(int $id);

    public function getRelatedProduct($product, $limit=4);

    public function getFeaturedProducts();

    public function getProductOnIndex($request);

    public function getProductsByCategory($categoryName, $request);
}
