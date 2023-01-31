<?php


use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index']);


Route::prefix('shop')->group(function() {
    Route::get('product/{id}', [ShopController::class, 'show']);
    Route::get('',[ShopController::class,'index']);
    Route::get('category/{categoryName}', [ShopController::class,'category']);
});

Route::prefix('cart')->group(function() {
    Route::get('add/{id}',[CartController::class,'add']);
});
