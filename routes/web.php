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



Auth::routes();

Route::group(['middleware'=>'auth'],function(){

          Route::get('/', function () {
          return view('home');
          });
      Route::get('/home', 'HomeController@index')->name('home');

  /*    Route::get('/books',['as'=>'books.index', 'uses'=>'BooksController@index']);
      Route::post('/books','BooksController@store');
      Route::get('/books/create','BooksController@create');
      Route::get('/books/{books}','BooksController@show')->name('books.show');
      Route::get('/books/{books}/edit','BooksController@edit')->name('books.edit');
      Route::put('/books/{books}','BooksController@update');
      Route::delete('/books/{books}','BooksController@destroy');
*/
      Route::resource('books','BooksController');
      Route::resource('quotes','QuotesController');

      Route::get('quotes/{bookId}/createQuote','QuotesController@createQuote')->name('createQuote');

});
