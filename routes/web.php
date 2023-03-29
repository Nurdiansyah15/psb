<?php

use App\Http\Controllers\Page\LandingController;
use App\Http\Controllers\Page\RegisterController;
use App\Http\Controllers\Page\ForgotController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Page\DashboardController;
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
//     return view('dashboard-user.dashboard-user');
// });


// Route::get('/page', function () {
//     return view('landing');
// });


Route::get('/login', [AuthController::class, 'index']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/auth', [AuthController::class, 'login'])->name('login');

Route::get('/', [LandingController::class, 'index']);

Route::get('/forgot', [ForgotController::class, 'index']);

Route::get('/daftar', [RegisterController::class, 'index']);


Route::post('/daftar/step2', [RegisterController::class, 'step2']);
Route::get('/daftar/{id}', [RegisterController::class, 'show']);
Route::post('/daftar', [RegisterController::class, 'store'])->name('daftar.store');

Route::group(['middleware' => ['user']], function () {
    Route::get('/user', [DashboardController::class, 'index']);
    Route::post('/user', [DashboardController::class, 'create']);
    Route::post('/user/{id}', [DashboardController::class, 'update']);
    Route::post('/photo/{id}', [DashboardController::class, 'photo']);
    Route::post('/doc/{id}', [DashboardController::class, 'doc']);
    Route::get('/print/{id}', [DashboardController::class, 'print']);
});
