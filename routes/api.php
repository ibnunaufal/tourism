<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('mobilehome', [App\Http\Controllers\MobileController::class, 'mobilehome'])->name('mobilehome');
Route::get('getpage', [App\Http\Controllers\MobileController::class, 'getpage'])->name('getpage');
Route::get('imagebyid', [App\Http\Controllers\MobileController::class, 'imagebyid'])->name('imagebyid');
Route::get('reviewbyid', [App\Http\Controllers\MobileController::class, 'reviewbyid'])->name('reviewbyid');
Route::post('reviewstore', [App\Http\Controllers\MobileController::class, 'reviewstore'])->name('reviewstore');

Route::post('mobileactionlogin', [App\Http\Controllers\LoginController::class, 'mobileactionlogin'])->name('mobileactionlogin');
Route::get('mobileactionlogout', [App\Http\Controllers\LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::post('mobilepostRegistration', [App\Http\Controllers\LoginController::class, 'postRegistration'])->name('postRegistration');
