<?php

namespace App\Services\ProductComment;

use App\Services\Base\BaseServiceImp;

class ProductCategoryServiceImp extends BaseServiceImp implements ProductCategoryServiceInterface
{
    public $repository;

    public function __construct(ProductCategoryServiceInterface $repository)
    {
        $this->repository = $repository;
    }

}
