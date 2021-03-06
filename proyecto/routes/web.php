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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/games.html', function () {
    return view('games');
});

Route::get('/api.html', function () {
    return view('api');
})->middleware(['auth'])->name('api');

Route::get('/blog.html', function () {
    return view('blog');
});

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/logueo.html', function () {
    return view('auth/login');
});

Route::get('/registro', function () {
    return view('auth/register');
}); 

Route::get('/single', function () {
    return view('single');
});

Route::get('/dashboard', function () {
    return view('index');
});
