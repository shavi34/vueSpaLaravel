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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/stats', function() {
  return [
    'series' => 200,
    'lessons' => 1200  
  ];
});

route::get('/tokentest', function() {
  return 'token is working fine';
})->middleware('auth:api');

// Route::get('/createtoken', function() {
// request () -›user () ->forceFilL([
// "api_token' => $token = str_random (60)->

// ])->save();