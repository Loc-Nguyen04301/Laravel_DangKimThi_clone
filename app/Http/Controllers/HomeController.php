<?php

namespace App\Http\Controllers;

use App\Services\Blog\BlogServiceInterface;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Product\ProductServiceInterface;


class HomeController extends Controller
{
    private $productService, $blogService, $brandService;

    public function __construct(ProductServiceInterface $productService,
                                BlogServiceInterface    $blogService
    )
    {
        $this->productService = $productService;
        $this->blogService = $blogService;
    }

    public function index()
    {
        $featureProducts = $this->productService->getFeaturedProducts();
        $blogs = $this->blogService->getLatestBlogs();
        return view('front/index', compact('featureProducts', "blogs"));
    }
}
