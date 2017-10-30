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
Route::get('/admin','CategoryController@index');
Route::get('/admin/category','CategoryController@index');
Route::post('/admin/category/add','CategoryController@add');
Route::get('/admin/category/{id}','CategoryController@edit');
Route::patch('/admin/category/{id}','CategoryController@update');
Route::delete('/admin/category/{id}','CategoryController@delete');

// 题目
Route::get('/admin/question','QuestionController@index');
Route::get('/admin/question/add','QuestionController@create');
Route::post('/admin/question/add','QuestionController@add');
Route::get('/admin/question/{id}','QuestionController@show');
Route::get('/admin/question/{id}/edit','QuestionController@edit');
Route::patch('/admin/question/{id}','QuestionController@update');
Route::delete('/admin/question/{id}','QuestionController@delete');

// 工作列表
Route::get('/admin/task','TaskController@admin_index');
Route::get('/admin/work','WorkController@admin_index');

// 用户管理
Route::get('/admin/user','Controller@user_list');
Route::get('/admin/user/{id}','Controller@user_edit_admin');
Route::patch('/admin/user/{id}','Controller@user_update_admin');

// 用户前台
// 题库
Route::get('/category/{id}','CategoryController@user_index');

// 题目
Route::get('/question/{id}','QuestionController@user_index');
Route::get('/question/{id}/submit','QuestionController@user_submit');
Route::post('/task/{id}','TaskController@submit');
Route::get('/task','TaskController@user_index');

// 评测机API
Route::get('/api/count','WorkController@count');
Route::get('/api/get','WorkController@get');
Route::get('/api/task/{id}/{status}','WorkController@update');
Route::get('/api/question/{id}','WorkController@question');
Route::get('/api/user/{id}/{level}','WorkController@upgrade');

// 排行榜分离API
Route::get('/api/user','RankController@getUser');