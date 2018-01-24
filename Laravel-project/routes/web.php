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

/* OVERVIEW */
Route::get('/home',         'PostController@index');
Route::get('/',             'PostController@index');
Route::get('/overview',     'PostController@index');
Route::get('/post',         'PostController@addPostForm');
Route::post( '/post/add',    'PostController@addPost');
Route::get( '/post/edit/{post}',    'PostController@editPost');
Route::patch('post/{post}',      'PostController@updatePost');
Route::get('/post/delete/{post}',         'PostController@deletePost');
Route::post('/post/delete/sure/{post}',         'PostController@deletePostSure');


/* INSTRUCTIES */
Route::get('/instructies',         'PostController@instructies');

/* Comments*/
Route::get('comments/{id}',        'CommentsController@show');
Route::post('comments/{comment}',       'CommentsController@addComment');
Route::get('comments/edit/{comment}',   'CommentsController@editComment');
Route::patch('comments/{comment}',      'CommentsController@updateComment');
Route::get('/comments/delete/{comment}',         'CommentsController@deleteComment');
Route::post('/comments/delete/sure/{comment}',         'CommentsController@deleteCommentSure');

/* VOTE */

Route::post('vote/up/{post}',        'VoteController@upVote');
Route::post('vote/down/{post}',        'VoteController@downVote');
Auth::routes();

//Route::get('/home', 'HomeController@index');
