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
//
Route::get('topic','Api\TopicController@index');
//
Route::get('options','Api\QuestionareController@index');
//
Route::get('option/{id}','Api\QuestionareController@getOption');
//
Route::get('questionare/{id}','Api\QuestionareController@getOptionQuestionare');


// user status

//
Route::get('user_status/{id}','Api\UserStatusController@getStatusUser');

Route::post('user_status','Api\UserStatusController@addUserStatus');