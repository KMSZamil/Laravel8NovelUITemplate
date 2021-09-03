<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function (){
    //Route::get('/', function () { return view('welcome'); });
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::prefix('authenticate')->group(function () {
        Route::get('/index', [AuthenticateController::class, 'index'])->name('authenticate.index');
        Route::post('/pass_change', [AuthenticateController::class, 'pass_change'])->name('authenticate.pass_change');
    });
    Route::resource('samples',SampleController::class);
});
