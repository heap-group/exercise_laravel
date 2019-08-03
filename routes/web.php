<?php

use PhpParser\Node\Stmt\HaltCompiler;
use App\Http\Middleware\HelloMiddleware;

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

Route::get('/', function () {
    return view('welcome');
});

//名前空間を指定する
Route::namespace('Sample')->group(function () {

    Route::get('/sample', 'SampleController@index');

    Route::get('/sample/other', 'SampleController@other');
});

//ミドルウェアを適応する
Route::middleware([HelloMiddleware::class])->group(function () {

    Route::get('/hello', 'HelloController@index')
        ->name('hello');

    Route::get('/hello/other', 'HelloController@other');
});
