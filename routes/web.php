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

Route::get('/', function () {
    return view('welcome');
});

Route::view('login', 'auth.login')->name('login');
Route::view('register', 'auth.register')->name('register');

Route::post('login', function () {
    return redirect()->route('login');
})->name('login');

Route::post('register', function () {
    return redirect()->route('register');
})->name('register');

Route::view('detail', 'motel.detail')->name('detail');

Route::view('profile', 'user.profile')->name('profile');

Route::view('editprofile', 'user.edit-profile')->name('edit-profile');

Route::view('add', 'motel.add')->name('add-motel');

Route::view('edit', 'motel.edit')->name('edit-motel');
