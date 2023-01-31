@extends('front.layout.master')

@section('body')
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product shop Section -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-3 order-1 products-sidebar-filter">
                    @include('front.shop.components.products-sidebar-filter')
                </div>

                <div class="col-9 order-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-7">
                                <div class="select-option">
                                    <form action="">
                                        <select name="sort_by" onchange="this.form.submit()" class="sorting">
                                            <option {{request('sort_by') == 'latest' ? 'selected' :''}} value="latest">
                                                Sorting: Latest
                                            </option>
                                            <option {{request('sort_by') == 'oldest' ? 'selected' :''}} value="oldest">
                                                Sorting: Oldest
                                            </option>
                                            <option
                                                {{request('sort_by') == 'name-ascending' ? 'selected' :''}} value="name-ascending">
                                                Sorting: Name A-Z
                                            </option>
                                            <option
                                                {{request('sort_by') == 'name-descending' ? 'selected' :''}} value="name-descending">
                                                Sorting: Name Z-A
                                            </option>
                                            <option
                                                {{request('sort_by') == 'price-ascending' ? 'selected' :''}} value="price-ascending">
                                                Sorting: Price-low to high
                                            </option>
                                            <option
                                                {{request('sort_by') == 'price-descending' ? 'selected' :''}} value="price-descending">
                                                Sorting: Price-high to low
                                            </option>
                                        </select>

                                        <select name="show" onchange="this.form.submit()" class="p-show">
                                            <option {{request('show') == '3' ? 'selected' :''}} value=3>Show:3
                                            </option>
                                            <option {{request('show') == '6' ? 'selected' :''}} value="6">Show:6
                                            </option>
                                            <option {{request('show') == '9' ? 'selected' :''}} value="9">Show:9
                                            </option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-4">
                                   @include('front.components.product-item')
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection
