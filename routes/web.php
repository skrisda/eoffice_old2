<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

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
//Route::get('/', 'App\Http\Controllers\FrontendController@index');
Route::get('/',[FrontendController::class, 'index']);
Route::get('personLogin',[FrontendController::class, 'login']);
//Route::post('personAuth',[PersonAuthController::class, 'checklogin']);
Route::post('personAuth','App\Http\Controllers\PersonAuthController@checklogin');

Auth::routes();
// *** USER ****/
Route::group([
    'prefix' => 'backend',
    'middleware' => 'auth'
], function(){
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('dashboard', [App\Http\Controllers\BackendController::class, 'dashboard']);
});


Route::group([
    'prefix' => 'office',
    'middleware' => 'personauth'

], function(){

    //Route::get('/', [OfficeController::class, 'home']);
    Route::get('home', [App\Http\Controllers\OfficeController::class,'home']);
    Route::post('officeLogout', [App\Http\Controllers\PersonAuthController::class, 'logout']);
});