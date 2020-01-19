<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
//Route::get('/motos','MotosController@index');
//Route::get('/marcas','MarcasController@index');

Route::group([
    "prefix"=> "v1",
    "namespace"=>"Api\V1"
    //"middleware"=>["auth:api"]
], function(){
    Route::ApiResource('banners','BannersController');
    Route::ApiResource('marcas','MarcasController');
    Route::ApiResource('motos','MotosController');
});