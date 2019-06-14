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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('authors', 'AuthorsController');
Route::resource('articles', 'ArticlesController')->middleware('auth');

Route::view('testupload', 'testupload');

Route::post('upload', function (Illuminate\Http\Request $request) {
	//Illuminate\Support\Facades\Storage\Storage::put('file.jpg', $request->poster);
    $file = (new App\Services\FileService)->upload($request->file);
	dd('done');
})->name('upload');




Route::namespace('Admin')->name('admin.')->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::prefix('author')->name('author.')->group(function () {
        Route::get('profile', 'AuthorController@profile')->name('profile');
    });

    Route::resource('author', 'AuthorController');
});