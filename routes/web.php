<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 用户权限相关
Route::auth();

// 首页
Route::get('/','Controller@welcome');

// 用户编辑
Route::get('/user','Controller@user_edit');
Route::patch('/user','Controller@user_update');

// 管理员面板
// 题库
Route::get('/admin/category','CategoryController@index');
Route::post('/admin/category/add','CategoryController@add');
Route::get('/admin/category/{id}','CategoryController@edit');
Route::patch('/admin/category/{id}','CategoryController@update');
Route::delete('/admin/category/{id}','CategoryController@delete');

