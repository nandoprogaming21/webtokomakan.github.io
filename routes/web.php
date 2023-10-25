<?php

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
Route::get('/', fn () =>view ('home'));
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('menu', 'menu');
Route::view('team', 'team');
Route::view('service', 'service');
Route::view('testimoni', 'testimoni');
Route::view('booking', 'booking');
Route::view('admin', 'admin');
Route::view('test', 'test');




Route::get('/home', function () {
    return view('home');
});
