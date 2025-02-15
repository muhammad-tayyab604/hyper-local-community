<?php

use App\Http\Controllers\Api\ApiCardController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\GeneralController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\SignUpController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('category/get',[CategoryController::class,'get_category']);
Route::get('subcategory/get',[CategoryController::class,'get_subcategory']);
Route::get('card/get',[ApiCardController::class,'card']);
Route::get('article/get',[GeneralController::class,'article']);
Route::get('category/artical/get',[GeneralController::class,'category_wise_article']);
Route::post('social-login', [SignUpController::class, 'socialsignup']);