<?php

namespace App\Repositories\Product;

use App\Repositories\Base\RepositoryInterface;
use http\Env\Request;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function getRelatedProducts($product, $limit = 4);
    public function getFeaturedProductsByCategory($categoryId);
    public function getProductOnIndex($request);
    public function getProductsByCategory($categoryName, $request);

}
