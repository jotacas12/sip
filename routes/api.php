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
Route::get('/user/create', 'User\UserController@create');
Route::post('/profiles', 'P_profile\P_profilesController@Profiles');
Route::post('/material', 'Materiales\MaterialController@query');
Route::post('/material/create', 'Materiales\MaterialController@create');
Route::post('/material/autocomplete', 'Materiales\MaterialController@AutoQuery');
Route::post('/material/autocompletedesc', 'Materiales\MaterialController@AutoQueryDescr');

Route::post('/purchase/create', 'purchase\PurchaseController@create');

Route::get('/company', 'Company\CompanyController@index');

});