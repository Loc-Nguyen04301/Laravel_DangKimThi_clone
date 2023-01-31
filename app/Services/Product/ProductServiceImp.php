<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\Base\BaseServiceImp;
use Illuminate\Http\Request;

class ProductServiceImp extends BaseServiceImp implements ProductServiceInterface
{
    protected $repository;

    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllProduct()
    {
        // TODO: Implement getAllProduct() method.
        return $this->repository->getAll();
    }

    public function findProductById(int $id)
    {
        // TODO: Implement findProductById() method.
        $product = $this->repository->findById($id);
        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if ($countRating != 0) {
            $avgRating = $sumRating / $countRating;
        }
        $product->avgRating = $avgRating;
        return $product;
    }

    public function createProduct(array $attributes)
    {
        // TODO: Implement createProduct() method.
        return $this->repository->create($attributes);
    }

    public function updateProduct(int $id, array $attributes)
    {
        // TODO: Implement updateProduct() method.
        return $this->repository->update($id, $attributes);
    }

    public function deleteProduct(int $id)
    {
        // TODO: Implement deleteProduct() method.
        return $this->repository->delete($id);
    }

    public function getRelatedProduct($product, $limit = 4)
    {
        // TODO: Implement getRelatedProduct() method.
        return $this->repository->getRelatedProducts($product, $limit);
    }

    public function getFeaturedProducts()
    {
        // TODO: Implement getFeaturedProductsByCategory() method.
        return [
            "men" => $this->repository->getFeaturedProductsByCategory(1),
            "women" => $this->repository->getFeaturedProductsByCategory(2),
        ];
    }

    public function getProductOnIndex($request)
    {
        return $this->repository->getProductOnIndex($request);
    }

    public function getProductsByCategory($categoryName, $request){
        return $this->repository->getProductsByCategory($categoryName,$request);
    }
}
