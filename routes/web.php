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

Route::get('/home', function () {
    return redirect()->route('admin.post.index');
});

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
Route::get('/blog/{id}', 'PageController@blog')->name('page.blog.show');
Route::get('/contact', 'PageController@contact')->name('page.contact');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::post('/post', 'PostController@store')->name('admin.post.store');
  Route::get('/post', 'PostController@index')->name('admin.post.index');
  Route::get('/post/create', 'PostController@create')->name('admin.post.create');
  Route::delete('/post/{id}', 'PostController@destroy')->name('admin.post.destroy');
  Route::put('/post/{id}', 'PostController@update')->name('admin.post.update');
  Route::get('/post/{id}', 'PostController@show')->name('admin.post.show');
  Route::get('/post/{id}/edit', 'PostController@edit')->name('admin.post.edit');

  // Category
  Route::post('/category', 'CategoryController@store')->name('admin.category.store');
  Route::get('/category', 'CategoryController@index')->name('admin.category.index');
  Route::get('/category/create', 'CategoryController@create')->name('admin.category.create');
  Route::delete('/category/{id}', 'CategoryController@destroy')->name('admin.category.destroy');
  Route::put('/category/{id}', 'CategoryController@update')->name('admin.category.update');
  Route::get('/category/{id}', 'CategoryController@show')->name('admin.category.show');
  Route::get('/category/{id}/edit', 'CategoryController@edit')->name('admin.category.edit');

  // Tags
  Route::post('/tags', 'TagController@store')->name('admin.tags.store');
  Route::get('/tags', 'TagController@index')->name('admin.tags.index');
  Route::get('/tags/create', 'TagController@create')->name('admin.tags.create');
  Route::delete('/tags/{id}', 'TagController@destroy')->name('admin.tags.destroy');
  Route::put('/tags/{id}', 'TagController@update')->name('admin.tags.update');
  Route::get('/tags/{id}', 'TagController@show')->name('admin.tags.show');
  Route::get('/tags/{id}/edit', 'TagController@edit')->name('admin.tags.edit');

});
