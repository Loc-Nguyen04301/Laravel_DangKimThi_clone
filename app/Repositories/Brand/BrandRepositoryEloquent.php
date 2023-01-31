<?php

namespace App\Repositories\Brand;

use App\Models\Brand;

use App\Repositories\Base\RepositoryEloquent;

class BrandRepositoryEloquent extends RepositoryEloquent implements BrandRepositoryInterface
{

    public function getModel()
    {
        return Brand::class;
    }

}
