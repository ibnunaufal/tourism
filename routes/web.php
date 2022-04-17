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
Route::resource('/','HomeController');

Route::get('destinasi/admin','DestinasiController@admin');
Route::resource('destinasi','DestinasiController');
Route::resource('akomodasi','AkomodasiController');
Route::resource('kuliner','KulinerController');
Route::resource('admin','AdminController');
// Route::resource('acara','AcaraController');
Route::get('fullcalender', 'AcaraController@index');
Route::post('fullcalenderAjax','AcaraController@ajax');
Route::resource('fasum','FasumController');

Route::get('/category', function () {
    return view('pages.category');
});
