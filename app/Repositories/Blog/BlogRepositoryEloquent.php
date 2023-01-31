<?php

namespace App\Repositories\Blog;

use App\Models\Blog;

use App\Repositories\Base\RepositoryEloquent;

class BlogRepositoryEloquent extends RepositoryEloquent implements BlogRepositoryInterface
{

    public function getModel()
    {
        return Blog::class;
    }

    public function getLatestBlogs($limit = 3)
    {
        return $this->_model->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    }
}
