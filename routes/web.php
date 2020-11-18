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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'RoleController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@panel')->name('admin.panel');
    Route::get('/edit/films', 'AdminController@editfilms')->name('admin.edit.films');
    Route::post('/edit/films/category/create','AdminController@FilmsCategoryCreate')->name('films.category.create');
    Route::post('/edit/films/add','AdminController@FilmsAdd')->name('films.add');
    Route::get('/edit/books', 'AdminController@editbooks')->name('admin.edit.books');
    Route::post('/edit/books/category/create','AdminController@BooksCategoryCreate')->name('books.category.create');
    Route::post('/edit/books/add','AdminController@BooksAdd')->name('books.add');

});

Route::group(['prefix' => 'home'], function () {
    Route::get('/films', 'HomeController@films')->name('films');
    Route::get('/film/{id}', 'HomeController@filmOne')->name('film.one');
    Route::get('/films/category/{id}', 'HomeController@showCategoryFilms')->name('show.category.films');
    Route::get('/multfilms', 'HomeController@not')->name('multfilms');
    Route::get('/books', 'HomeController@books')->name('books');
    Route::get('/book/{id}', 'HomeController@booksOne')->name('books.one');
    Route::get('/books/category/{id}', 'HomeController@showCategoryBooks')->name('show.category.books');
    Route::get('/download/{filename}', ['as' => 'upload_download','uses' => 'HomeController@downloadBook']);
    Route::get('/audiobooks', 'HomeController@not')->name('audiobooks');
    Route::get('/audioskazki', 'HomeController@not')->name('audioskazki');
    Route::get('/music', 'HomeController@not')->name('music');
    Route::get('/training', 'HomeController@not')->name('training');
    Route::get('/online', 'HomeController@not')->name('online');
});
