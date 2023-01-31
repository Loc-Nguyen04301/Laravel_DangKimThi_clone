<?php

namespace App\Repositories\Blog;

use App\Repositories\Base\RepositoryInterface;

interface BlogRepositoryInterface extends RepositoryInterface
{
    public function getLatestBlogs($limit = 3);
}
