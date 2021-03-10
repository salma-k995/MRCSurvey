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
Route::get('/all/organisme' , 'App\Http\Controllers\OrganismeController@all') ;
Route::get('/all/activated' , 'App\Http\Controllers\OrganismeController@activated_Organisme') ;
Route::get('/all/disactivated' , 'App\Http\Controllers\OrganismeController@diactivated_Organisme') ;
Route::post('/store/organisme' , 'App\Http\Controllers\OrganismeController@store') ;
Route::put('/update/organisme/{id}' , 'App\Http\Controllers\OrganismeController@update') ;
Route::get('/get/organisme/{id}' , 'App\Http\Controllers\OrganismeController@getOrganisme') ;
Route::delete('/delete/organisme/{id}' , 'App\Http\Controllers\OrganismeController@delete') ;
Route::put('/activate/{id}' , 'App\Http\Controllers\OrganismeController@activate') ;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/store' , 'App\Http\Controllers\CategorieController@store') ;

Route::group(['prefix' => 'user','middleware' => ['assign.guard:users','jwt.auth']],function ()
{
    Route::post('/store' , 'App\Http\Controllers\CategorieController@store') ;
});