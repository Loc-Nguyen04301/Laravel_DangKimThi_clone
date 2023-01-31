<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Repositories\Base\RepositoryEloquent;


class ProductRepositoryEloquent extends RepositoryEloquent implements ProductRepositoryInterface
{

    public function getModel()
    {
        return Product::class;
    }

    public function getRelatedProducts($product, $limit = 4)
    {
        // TODO: Implement getRelatedProducts() method.
        return $this->_model->where('product_category_id', $product->product_category_id)
            ->limit($limit)
            ->get();
    }

    public function getFeaturedProductsByCategory($categoryId)
    {
        return $this->_model->where('featured', true)
            ->where('product_category_id', $categoryId)
            ->get();
    }

    private function sortAndPagination($products, $request)
    {
        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? 'latest';
        switch ($sortBy) {
            case 'latest':
                $products = $products->orderBy('id');
                break;
            case 'oldest':
                $products = $products->orderByDesc('id');
                break;
            case 'name-ascending':
                $products = $products->orderBy('name');
                break;
            case 'name-descending':
                $products = $products->orderByDesc('name');
                break;
            case 'price-ascending':
                $products = $products->orderBy('price');
                break;
            case 'price-descending':
                $products = $products->orderByDesc('price');
                break;
        }
        $products = $products->paginate($perPage);
        $products->appends(['sort_by' => $sortBy, 'show' => $perPage]);
        return $products;
    }

    private function filter($products, $request)
    {
        // Brand
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id', $brand_ids) : $products;


        //Price
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;

        $priceMin = str_replace('$', '', $priceMin);
        $priceMax = str_replace('$', '', $priceMax);
        $products = ($priceMin != null && $priceMax != null)
            ? $products->whereBetween('price', [$priceMin, $priceMax])
            : $products;

        //Color
        $color = $request->color;
        $products = $color != null
            ? $products->whereHas('productDetails', function ($query) use ($color) {
                return $query->where('color', $color)
                    ->where('qty', '>', 0);
            })
            : $products;
        return $products;
    }

    public function getProductOnIndex($request)
    {
        $search = $request->search ?? '';

        $products = $this->_model->where('name', 'like', '%' . $search . '%');
        $products = $this->filter($products, $request);
        $products = $this->sortAndPagination($products, $request);
        return $products;
    }

    public function getProductsByCategory($categoryName, $request)
    {
        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();

        $products = $this->filter($products, $request);
        $products = $this->sortAndPagination($products, $request);
        return $products;
    }

}
