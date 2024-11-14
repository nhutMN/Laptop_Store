<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\ProductController;

Route::get('/admin',[AdminController::class, 'index']);
Route::get('/dashboard',[AdminController::class, 'show_dashboard']);
Route::match(['get', 'post'], '/admin-dashboard', [AdminController::class, 'dashboard']);
Route::match(['get', 'post'], '/logout', [AdminController::class, 'logout']);
Route::get('/trang-chu',[AdminController::class, 'show_dashboard']);

// --------------Category Product
Route::get('/all-category-product',[CategoryProduct::class, 'all_category_product']);
Route::get('/add-category-product',[CategoryProduct::class, 'add_category_product']);
// hide / show 
Route::get('/unactive-category-product/{category_product_id}',[CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[CategoryProduct::class, 'active_category_product']);
// save data after insert data
Route::match(['get', 'post'], '/save-category-product', [CategoryProduct::class, 'save_category_product']);
// edit
Route::match(['get', 'post'], '/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
Route::match(['get', 'post'], '/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);
// delete
Route::match(['get', 'post'], '/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);

// --------------Brand Product
Route::get('/all-brand-product',[BrandProduct::class, 'all_brand_product']);
Route::get('/add-brand-product',[BrandProduct::class, 'add_brand_product']);
// hide / show 
Route::get('/unactive-brand-product/{brand_product_id}',[BrandProduct::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[BrandProduct::class, 'active_brand_product']);
// save data after insert data
Route::match(['get', 'post'], '/save-brand-product', [BrandProduct::class, 'save_brand_product']);
// edit
Route::match(['get', 'post'], '/edit-brand-product/{brand_product_id}', [BrandProduct::class, 'edit_brand_product']);
Route::match(['get', 'post'], '/update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);
// delete
Route::match(['get', 'post'], '/delete-brand-product/{brand_product_id}', [BrandProduct::class, 'delete_brand_product']);

// --------------Product
Route::get('/all-product',[ProductController::class, 'all_product']);
Route::get('/add-product',[ProductController::class, 'add_product']);
// hide / show 
Route::get('/unactive-product/{product_id}',[ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}',[ProductController::class, 'active_product']);
// save data after insert data
Route::match(['get', 'post'], '/save-product', [ProductController::class, 'save_product']);
// edit
Route::match(['get', 'post'], '/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::match(['get', 'post'], '/update-product/{product_id}', [ProductController::class, 'update_product']);
// delete
Route::match(['get', 'post'], '/delete-product/{product_id}', [ProductController::class, 'delete_product']);