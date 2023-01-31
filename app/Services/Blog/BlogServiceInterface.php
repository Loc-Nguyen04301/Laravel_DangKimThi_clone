<?php

namespace App\Services\Blog;

interface BlogServiceInterface
{
    public function getLatestBlogs($limit=3);
}
