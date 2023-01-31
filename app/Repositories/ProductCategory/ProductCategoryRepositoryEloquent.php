<?php

namespace App\Repositories\ProductCategory;

use App\Models\ProductCategory;

use App\Repositories\Base\RepositoryEloquent;

class ProductCategoryRepositoryEloquent extends RepositoryEloquent implements ProductCategoryRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return ProductCategory::class;
    }
}
