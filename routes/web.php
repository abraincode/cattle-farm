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

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('nerds', 'NerdController');

    // Route resource controller
    // Route::resource('/mahasiswa', 'MahasiswaController');

    // Route resource manual
    Route::post('/mahasiswa', 'MahasiswaController@store')->name('mahasiswa.store');
    Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
    Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
    Route::delete('/mahasiswa/{id}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');
    Route::put('/mahasiswa/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
    Route::get('/mahasiswa/{id}', 'MahasiswaController@show')->name('mahasiswa.show');
    Route::get('/mahasiswa/{id}/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');
});

// Route test request
Route::post('/test-request', function () {
    $request = app('Illuminate\Http\Request');
    dd($request->all());
})->name('test-request');

Route::get('/', 'PageController@home')->name('page.home');
Route::get('/about', 'PageController@about')->name('page.about');
Route::get('/blog', 'PageController@blog')->name('page.blog');
Route::get('/contact', 'PageController@contact')->name('page.contact');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::post('/post', 'PostController@store')->name('admin.post.store');
  Route::get('/post', 'PostController@index')->name('admin.post.index');
  Route::get('/post/create', 'PostController@create')->name('admin.post.create');
  Route::delete('/post/{id}', 'PostController@destroy')->name('admin.post.destroy');
  Route::put('/post/{id}', 'PostController@update')->name('admin.post.update');
  Route::get('/post/{id}', 'PostController@show')->name('admin.post.show');
  Route::get('/post/{id}/edit', 'PostController@edit')->name('admin.post.edit');
});
