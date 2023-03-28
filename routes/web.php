<?php

use App\Http\Controllers\Page\LandingController;
use App\Http\Controllers\Page\RegisterController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Template\Template;

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

// Route::get('/', function () {
//     return view('login');
// });
// Route::get('/1', function () {
//     return view('dashboarduser');
// });
// Route::get('/2', function () {
//     return view('dashboaradmin');
// });
// Route::get('/3', function () {
//     return view('z');
// });
// Route::get('/4', function () {
//     return view('daftarsantri');
// });
// Route::get('/5', function () {
//     return view('user');
// });

// Route::get('/page', function () {
//     return view('landing');
// });


Route::get('/', [LandingController::class, 'index']);
Route::get('/daftar', [RegisterController::class, 'index']);
Route::post('/daftar/2', [RegisterController::class, 'step2']);
