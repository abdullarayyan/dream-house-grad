<?php

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
Route::get('foo',function (){
    function getSettingsObject ($key) {
        return \App\Models\Prices::where('key_cd',  strtoupper($key)) -> first();
    }
    dd(getSettingsObject('STONE_BUILDING')->value);
//   dd(\App\Models\Prices::query()->firstOr());
});
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::resource('/customer', 'App\Http\Controllers\CustomerController');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// SettingsController
Route::put('/change', 'App\Http\Controllers\PricesController@change');
Route::resource('settings', 'App\Http\Controllers\PricesController');
