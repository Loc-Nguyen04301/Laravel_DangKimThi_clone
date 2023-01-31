<?php

namespace App\Providers;


use App\Services\Blog\BlogServiceImp;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Brand\BrandServiceImp;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Product\ProductServiceImp;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCategoryServiceImp;
use App\Services\ProductComment\ProductCategoryServiceInterface;
use Illuminate\Support\ServiceProvider;

class BussinessServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(BlogServiceInterface::class, BlogServiceImp::class);
        $this->app->bind(ProductServiceInterface::class, ProductServiceImp::class);
        $this->app->bind(ProductCategoryServiceInterface::class, ProductCategoryServiceImp::class);
        $this->app->bind(ProductCategoryServiceInterface::class, ProductCategoryServiceImp::class);
        $this->app->bind(BrandServiceInterface::class, BrandServiceImp::class);
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
