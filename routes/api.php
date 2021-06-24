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

// api related with users
Route::post('login','Api\UserController@login');
Route::get('user/check','Api\UserController@userCheck');
Route::get('user/index','Api\UserController@index');
Route::get('user/{id}/voted/infor','Api\UserVotedController@getInforUserVoted');
Route::get('user/voted/index','Api\UserVotedController@getAll');


// api related with topics
Route::get('topic/index','Api\TopicController@index');
Route::get('topic/{id}','Api\TopicController@getId');
Route::post('topic/new','Api\TopicController@createTopic');


// api related with selections
Route::get('selection/index','Api\SelectionController@index');
Route::get('selection/{id}','Api\SelectionController@getId');
Route::get('topic/{id}/selection/index','Api\SelectionController@getSelectionTopic');
Route::post('topic/{id}/selection/new','Api\SelectionController@createSelection');


// api related with voted
Route::post('topic/vote','Api\SelectionController@voteSelection');




// api testing
Route::post('/user/new','Api\UserController@createNewUser');