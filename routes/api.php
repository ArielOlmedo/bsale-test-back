<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('products/search/0/categories/{search?}/{palabra?}',[ProductoController::class,'categories']);
Route::get('products/search/1/categories/{search?}/{palabra?}',[ProductoController::class,'categories']);
Route::get('products/search/2/categories/{search?}/{palabra?}',[ProductoController::class,'categoriesNasc']);
Route::get('products/search/3/categories/{search?}/{palabra?}',[ProductoController::class,'categoriesNdesc']);
Route::get('products/search/4/categories/{search?}/{palabra?}',[ProductoController::class,'categoriesPasc']);
Route::get('products/search/5/categories/{search?}/{palabra?}',[ProductoController::class,'categoriesPdesc']);

Route::get('products/search/0/{search?}',[ProductoController::class,'busquedaCatAsc']);
Route::get('products/search/1/{search?}',[ProductoController::class,'busquedaCatDesc']);
Route::get('products/search/2/{search?}',[ProductoController::class,'busquedaNameAsc']);
Route::get('products/search/3/{search?}',[ProductoController::class,'busquedaNameDesc']);
Route::get('products/search/4/{search?}',[ProductoController::class,'busquedaPriceAsc']);
Route::get('products/search/5/{search?}',[ProductoController::class,'busquedaPriceDesc']);
;

Route::resource('categories',CategoryController::class);
Route::resource('products',ProductoController::class);

