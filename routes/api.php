<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


// Public routes
Route::post('/register','AuthController@register');
Route::post('/login','AuthController@login');

// // Protected Routes
Route::group(['middleware' => ['auth:sanctum']],function(){
    
    // User
    Route::get('/user','AuthController@user');
    Route::post('/logout','AuthController@logout');
});