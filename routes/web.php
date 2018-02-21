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

Route::get('/write', function () {
    $items = DB::table('categories')->get();
    return view('write', compact('items'));
});

Route::resource('category', 'CategoryController');
Route::resource('article','ArticleController');
