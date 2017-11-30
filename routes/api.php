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

Route::resource('user', 'User\UserController', ['except' => ['create', 'edit']]);
Route::resource('employee', 'Employee\EmployeeController', ['except' => ['create', 'edit']]);
