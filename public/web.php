<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\Template\Template;
use App\Http\Controllers\RegisterController;

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
    return view('login');
});
Route::get('/1', function () {
    return view('dashboarduser');
});
Route::get('/2', function () {
    return view('dashboaradmin');
});
Route::get('/3', function () {
    return view('');
});
Route::get('/4', function () {
    return view('daftarsantri');
});
Route::get('/5', function () {
    return view('user');
});

Route::get('register', [RegisterController ::class, 'index'])->name('register.index');
