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

Route::get('welcome.blade.php', function () {
    return view('welcome');
});

Route::get('about.blade.php', function () {
    return view('about');
});

Route::get('team.blade.php', function () {
    return view('team');
});

Route::get('partners.blade.php', function () {
    return view('partners');
});

Route::get('contact.blade.php', function () {
    return view('contact');
});
