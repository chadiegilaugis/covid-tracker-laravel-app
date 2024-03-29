<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CovidAPIController;
use App\Http\Controllers\API\CovidPostController;
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


Route::post('login',[CovidAPIController::class,'login']);
Route::post('register',[CovidAPIController::class,'register']);
Route::post('reset-password',[CovidAPIController::class,'resetPassword']);


// POSTs

Route::get('get-all-posts',[CovidPostController::class,'getAllPosts']);
Route::get('get-post',[CovidPostController::class,'getPost']);
Route::get('search-post',[CovidPostController::class,'searchPost']);
