<?php

namespace App\Repositories\ProductComment;

use App\Models\ProductComment;
use App\Repositories\Base\RepositoryEloquent;

class ProductCommentRepositoryEloquent extends RepositoryEloquent implements ProductCommentRepositoryInterfaces
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return ProductComment::class;
    }
}
