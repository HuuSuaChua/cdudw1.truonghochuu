<?php

use App\Http\Controllers\frontend\Contactcontroller;
use App\Http\Controllers\frontend\Productcontroller;
use App\Http\Controllers\frontend\Homecontroller;
use Illuminate\Support\Facades\Route;

Route::get("/",[Homecontroller::class,"index"])->name('home');
Route::get("/san-pham",[Productcontroller::class,"index"])->name('products');
Route::get("/chi-tiet-san-pham/{slug}",[Productcontroller::class,"detail"])->name('product_detail');
Route::get("/lien-he",[Contactcontroller::class,"index"])->name('contact');



