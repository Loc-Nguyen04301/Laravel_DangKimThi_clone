<?php

namespace App\Providers;

use App\Repositories\Blog\BlogRepositoryEloquent;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Repositories\Brand\BrandRepositoryEloquent;
use App\Repositories\Brand\BrandRepositoryInterface;
use App\Repositories\Product\ProductRepositoryEloquent;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\ProductCategory\ProductCategoryRepositoryEloquent;
use App\Repositories\ProductCategory\ProductCategoryRepositoryInterface;
use App\Repositories\ProductComment\ProductCommentRepositoryEloquent;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(BlogRepositoryInterface::class, BlogRepositoryEloquent::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepositoryEloquent::class);
        $this->app->bind(ProductCommentRepositoryInterface::class, ProductCommentRepositoryEloquent::class);
        $this->app->bind(ProductCategoryRepositoryInterface::class, ProductCategoryRepositoryEloquent::class);
        $this->app->bind(BrandRepositoryInterface::class, BrandRepositoryEloquent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
