<?php

use App\Http\Controllers\FrontEnd\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group([
    'as' => 'front.'
], function () {

    Route::get('/', [HomeController::class , 'index'])->name('home');


    Route::get('/contact-us', function () {
        return view('FrontEnd.Pages.Contact-us.index');
    })->name('contact');


    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
