<?php

namespace App\Http\Controllers;


use App\Repositories\Brand\BrandRepositoryInterface;
use App\Repositories\ProductCategory\ProductCategoryRepositoryInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;


class ShopController extends Controller
{

    private $productService, $productCategoryService, $brandService;


    public function __construct(ProductServiceInterface            $productService,
                                ProductCategoryRepositoryInterface $productCategoryService,
                                BrandRepositoryInterface           $brandService)
    {
        $this->productService = $productService;
        $this->productCategoryService = $productCategoryService;
        $this->brandService = $brandService;
    }

    public function show($id)
    {
        $categories = $this->productCategoryService->getAll();
        $brands = $this->brandService->getAll();
        $product = $this->productService->findProductById($id);
        $relatedProducts = $this->productService->getRelatedProduct($product, $limit = 4);
        return view('front/shop/show', compact('product', 'relatedProducts','categories','brands'));
    }

    public function index(Request $request)
    {
        $categories = $this->productCategoryService->getAll();
        $brands = $this->brandService->getAll();
        $products = $this->productService->getProductOnIndex($request);

        return view('front.shop.index', compact('products', 'categories','brands'));
    }

    public function category($categoryName, Request $request)
    {
        $categories = $this->productCategoryService->getAll();
        $brands = $this->brandService->getAll();
        $products = $this->productService->getProductsByCategory($categoryName, $request);

        return view('front.shop.index', compact('products', 'categories', 'brands'));
    }
}
