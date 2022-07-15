<?php

use App\Http\Controllers\Mobil_baruController;
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

Route::get('/', function () {
    return view('welcome');
});

route::group(['prefix' => '/mobilbaru'], function(){
    route::get('/', [Mobil_baruController::class, 'index'])->name('DataMobilBaru');
});

Route::get('/baru' , 'App\Http\Contollers\Mobil_baruController@index');
