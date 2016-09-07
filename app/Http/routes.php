<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * 后台入口
 */
Route::get('/manage', function(){
	return view('project.admin.index');
});

/**
 * 后台管理员管理
 */
Route::resource('/manage/manager','admin\manager\ManagerController');

/**
 * 后台文章管理
 */
Route::resource('/manage/article','admin\article\ArticleController');

/**
 * 后台用户管理
 */
Route::resource('/manage/user','admin\user\UserController');

/**
 * 后台评论管理
 */
Route::resource('/manage/comment','admin\comment\CommentController');

/**
 * 后台相册管理
 */
Route::resource('/manage/photo','admin\photo\PhotoController');

/**
 * 后台分类管理
 */
Route::resource('/manage/letter','admin\letter\LetterController');

/**
 * 后台积分管理
 */
Route::resource('/manage/points','admin\points\PointsController');

/**
 * 后台分类管理
 */
Route::resource('/manage/class','admin\class\ClassController');



/**
 * 测试用
 */
Route::get('/test','TestController@index');
Route::post('/test','TestController@show');
Route::get('/hi/youa/{id}','TestController@down');




