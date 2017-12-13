<?php

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


Route::group(['middleware' => 'cors'], function () {
Route::post('/user', 'User\UserController@readJson');
Route::get('/user/create/{json}', 'User\UserController@create');
Route::post('/profiles', 'P_profile\P_profilesController@Profiles');
Route::post('/material', 'Materiales\MaterialController@query');

Route::get('/company', 'Company\CompanyController@index');

});