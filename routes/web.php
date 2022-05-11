<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controller\DestinasiController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });
Route::post('actionlogin', [App\Http\Controllers\LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [App\Http\Controllers\LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::post('postRegistration', [App\Http\Controllers\LoginController::class, 'postRegistration'])->name('postRegistration');
Route::get('register','LoginController@register');   
Route::get('login','LoginController@login');   

Route::resource('/','HomeController');

Route::get('destinasi/delete','DestinasiController@delete');

Route::get('destinasi/admin','DestinasiController@admin');
Route::get('akomodasi/admin','AkomodasiController@admin');
Route::get('kuliner/admin','KulinerController@admin');
Route::get('acara/admin','AcaraController@admin');
Route::get('fasum/admin','FasumController@admin');
Route::resource('destinasi','DestinasiController');
Route::resource('akomodasi','AkomodasiController');
Route::resource('kuliner','KulinerController');

Route::resource('category','CategoryController');
Route::resource('subcategory','SubCategoryController');
Route::resource('item','TempatController');
Route::resource('review','ReviewController');
Route::resource('tempat','TempatController');

Route::resource('acara','AcaraController');

Route::resource('admin','AdminController');
// Route::resource('acara','AcaraController');
Route::get('fullcalender', 'AcaraController@index');
Route::post('fullcalenderAjax','AcaraController@ajax');
Route::resource('fasum','FasumController');

Route::get('/category', function () {
    return view('pages.category');
});
