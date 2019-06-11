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
