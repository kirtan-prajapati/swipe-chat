<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

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


Route::post('/login', [Api\LoginController::class, 'login']);
Route::post('/register', [Api\LoginController::class, 'register']);
Route::get('/products', [Api\ProductController::class, 'products']);

/*Route::get('/userDetail', function (Request $request) {
    return App\Models\User::find(1);
});*/
