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
Route::get('products/search/0/categories/{search?}/{palabra?}',[ProductoController::class,'categories']);//buscar objeto en categoria ordenado por categoria ascendentemente segun su tipo
Route::get('products/search/1/categories/{search?}/{palabra?}',[ProductoController::class,'categoriesDesc']);//buscar objeto en categoria ordenado por categoria descendentemente segun su tipo
Route::get('products/search/2/categories/{search?}/{palabra?}',[ProductoController::class,'categoriesNasc']);//buscar objeto en categoria ordenado por nombre alfabeticamente ascendente
Route::get('products/search/3/categories/{search?}/{palabra?}',[ProductoController::class,'categoriesNdesc']);//buscar objeto en categoria ordenado por nombre alfabeticamente descendente
Route::get('products/search/4/categories/{search?}/{palabra?}',[ProductoController::class,'categoriesPasc']);//buscar objeto en categoria ordenado por precio ascendentemente
Route::get('products/search/5/categories/{search?}/{palabra?}',[ProductoController::class,'categoriesPdesc']);//buscar objeto en categoria ordenado por precio descendentemente

Route::get('products/search/0/{search?}',[ProductoController::class,'busquedaCatAsc']);//buscar objeto ordenado por categoria ascendentemente
Route::get('products/search/1/{search?}',[ProductoController::class,'busquedaCatDesc']);//buscar objeto ordenado por categoria descendentemente
Route::get('products/search/2/{search?}',[ProductoController::class,'busquedaNameAsc']);//buscar objeto ordenado por nombre alfabeticamente ascendente
Route::get('products/search/3/{search?}',[ProductoController::class,'busquedaNameDesc']);//buscar objeto ordenado por nombre alfabeticamente descendente
Route::get('products/search/4/{search?}',[ProductoController::class,'busquedaPriceAsc']);//buscar objeto ordenado por precio ascendente
Route::get('products/search/5/{search?}',[ProductoController::class,'busquedaPriceDesc']);//buscar objeto ordenado por precio descendente
;

Route::resource('categories',CategoryController::class);//obtener categorias
Route::resource('products',ProductoController::class);//obtener productos

