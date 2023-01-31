<?php

namespace App\Services\ProductCategory;


use App\Services\Base\BaseServiceImp;

class ProductCategoryServiceImp extends BaseServiceImp implements ProductCategoryServiceInterface
{
    public $repository;

    public function __construct(ProductCategoryServiceInterface $repository)
    {
        $this->repository = $repository;
    }

}
