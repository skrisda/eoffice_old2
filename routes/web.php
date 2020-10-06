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
Route::get('personAuth',[PersonAuthController::class, 'checklogin']);


Route::group([
    'prefix' => 'office',
    'middleware' => 'stdauth'

], function(){

    Route::get('/', [OfficeController::class, 'home']);

});
