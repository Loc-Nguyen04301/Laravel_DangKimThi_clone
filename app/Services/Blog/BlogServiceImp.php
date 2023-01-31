<?php

namespace App\Services\Blog;

use App\Repositories\Blog\BlogRepositoryInterface;
use App\Services\Base\BaseServiceImp;

class BlogServiceImp extends BaseServiceImp implements BlogServiceInterface
{
    protected $repository;

    public function __construct(BlogRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function getLatestBlogs($limit=3)
    {
        return $this->repository->getLatestBlogs($limit);
    }

}
