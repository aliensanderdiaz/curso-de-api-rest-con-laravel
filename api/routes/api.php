<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

use \App\Http\Controllers\Api\V1\PostController as Postv1;
use \App\Http\Controllers\Api\V2\PostController as Postv2;

Route::apiResource('v1/posts', Postv1::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

Route::apiResource('v2/posts', Postv2::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware('auth:sanctum');

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
