<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

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

$withoutViews = ['create', 'edit'];

Route::group(['namespace' => 'Api'], function() use ($withoutViews){
    Route::resource('categories', CategoryController::class, ['except' => $withoutViews]);
    Route::resource('genders', CategoryController::class, ['except' => $withoutViews]);
});


