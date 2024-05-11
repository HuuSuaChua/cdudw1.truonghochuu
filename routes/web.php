<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/",function(){
    echo "Hello World!";
});
Route::get("home", function(){
    return "Home";
});
Route::get("welcome", function(){
    return view("welcome");
});
Route::get("user",[UserController::class,"index"]);
Route::get("user/1",[UserController::class,"show"]);
Route::get("user/{id}/edit",[UserController::class,"edit"])->name("user.edit");
Route::get("user/list/{page?}",[UserController::class,"list"])->name("user.list");

Route::get("public/home",[UserController::class,"home"]);
Route::get("public/welcome",[UserController::class,"welcome"]);
Route::get("public/user",[UserController::class,"user"]);
Route::get("public/user/{id?}",[UserController::class,"show"]);
Route::get("public/user/{id}/edit",[UserController::class,"edit"]);
Route::get("public/user/list/{page?}",[UserController::class,"list"]);