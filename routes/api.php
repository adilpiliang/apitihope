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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('login', 'User\UserController@login');
Route::post('register', 'User\UserController@register');
Route::get('logout', 'User\UserController@logout');
Route::post('changepassword', 'User\UserController@ch    angePassword')->middleware('auth:api');
Route::get('matkul', 'Matkul\MatkulController@matkul');
Route::get('matkul/{id}', 'Matkul\MatkulController@matkulByID');
Route::get('materi', 'Materi\MateriController@materi');

//Auth
Route::post('login', 'API\UserController@login');
