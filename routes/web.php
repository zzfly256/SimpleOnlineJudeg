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
Route::get('/admin','CategoryController@index')->middleware('isAdmin');;
Route::get('/admin/category','CategoryController@index')->middleware('isAdmin');
Route::post('/admin/category/add','CategoryController@add')->middleware('isAdmin');
Route::get('/admin/category/{id}','CategoryController@edit')->middleware('isAdmin');
Route::patch('/admin/category/{id}','CategoryController@update')->middleware('isAdmin');
Route::delete('/admin/category/{id}','CategoryController@delete')->middleware('isAdmin');

// 题目
Route::get('/admin/question','QuestionController@index')->middleware('isAdmin');
Route::get('/admin/question/add','QuestionController@create')->middleware('isAdmin');
Route::post('/admin/question/add','QuestionController@add')->middleware('isAdmin');
Route::get('/admin/question/{id}','QuestionController@show')->middleware('isAdmin');
Route::get('/admin/question/{id}/edit','QuestionController@edit')->middleware('isAdmin');
Route::patch('/admin/question/{id}','QuestionController@update')->middleware('isAdmin');
Route::delete('/admin/question/{id}','QuestionController@delete')->middleware('isAdmin');

// 工作列表
Route::get('/admin/task','TaskController@admin_index')->middleware('isAdmin');
Route::get('/admin/work','WorkController@admin_index')->middleware('isAdmin');

// 用户管理
Route::get('/admin/user','Controller@user_list')->middleware('isAdmin');
Route::get('/admin/user/{id}','Controller@user_edit_admin')->middleware('isAdmin');
Route::patch('/admin/user/{id}','Controller@user_update_admin')->middleware('isAdmin');

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

// 排行榜
Route::get('/rank','RankController@total');
Route::get('/rank/school','RankController@school');
Route::get('/rank/{id}','RankController@user');