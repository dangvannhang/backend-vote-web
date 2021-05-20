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
//
Route::post('user/login','Api\UserController@login');

Route::post('admin/login','Api\UserController@loginAdmin');

//
Route::get('questionare','Api\TopicController@index');
//
Route::get('option','Api\QuestionareController@index');
//
Route::get('option/{id}','Api\QuestionareController@getOption');
//
Route::get('questionare/{id}','Api\QuestionareController@getOptionQuestionare');


// user status

Route::get('user_status','Api\UserStatusController@getAll');

//
Route::get('user_status/{id}','Api\UserStatusController@getStatusUser');

Route::post('check_status','Api\UserStatusController@checkUserStatus');


Route::post('option/{id}','Api\QuestionareController@updateOption');


// function help get topic of option
Route::get('option/getTopic/{id}','Api\QuestionareController@getTopicOfOption');