<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;

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
Route::name('website.')->group(function () {

    Route::get('/', [CustomController::class, 'index'])->name('index');
    
    Route::get('/dang-nhap', [CustomController::class, 'login'])->name('login');
    Route::post('/dang-nhap', [CustomController::class, 'postlogin'])->name('postlogin'); 

    Route::get('/dang-ky', [CustomController::class, 'create'])->name('create');
    Route::post('/store', [CustomController::class, 'store'])->name('store'); 

    Route::get('logout', [CustomController::class, 'logout'])->name('logout');
});


