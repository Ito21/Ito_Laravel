<?php

//use Illuminate\Support\Focades\Route;

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


/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes(['verify' => true]);
Route::get('/', 'MainController@home');
Route::get('/welcome', 'MainController@welcome');
Route::get('/data', 'MainController@data');

Route::get('/bulletin_board', 'Bulletin_boardController@bulletin_board');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/bulletin_board/create', 'Bulletin_boardController@bulletin_board_create');
});
Route::get('/bulletin_board/{bulletin_board}', 'Bulletin_boardController@bulletin_board_show');
Route::post('/bulletin_boards', 'Bulletin_boardController@store');
Route::post('/bb_replies', 'Bulletin_boardController@reply_store');

Route::get('/data/chara', 'CharaController@chara');
Route::get('/data/chara/{chara}', 'CharaController@chara_show');

Route::get('/post', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@destroy');
Route::get('/posts/{post}', 'PostController@show');
Route::post('/posts', 'PostController@store');

Route::middleware('verified')->group(function(){
    
});