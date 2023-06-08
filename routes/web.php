<?php

use App\Http\Controllers\Page\LandingController;
use App\Http\Controllers\Page\RegisterController;
use App\Http\Controllers\Page\ForgotController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Page\DashboardController;
use App\Http\Controllers\Admin\DashboardController as Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DaftarController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Download\DownloadController;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\LogoutController;

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

Route::prefix('admin')->group(function () {
    Route::middleware('sipon')->group(function () {
        Route::get('', [Admin::class, 'index']);
        Route::get('/pendaftar', [DaftarController::class, 'index']);
        Route::put('/pendaftar/{id}/', [DaftarController::class, 'update']);
        Route::delete('/pendaftar/{id}', [DaftarController::class, 'destroy'])->name('pendaftar.destroy');
        Route::get('/gelombang', [SettingController::class, 'index']);
        Route::post('/gelombang', [SettingController::class, 'create']);
        Route::get('/gelombang/{id}', [SettingController::class, 'show']);
        Route::post('/gelombang/{id}', [SettingController::class, 'update'])->name('gelombang.update');
        Route::delete('/gelombang/{id}', [SettingController::class, 'destroy'])->name('gelombang.destroy');
        Route::get('/logout',  [LogoutController::class, 'index']);
    });
});



Route::get('/login', [AuthController::class, 'index']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/auth', [AuthController::class, 'login'])->name('login');

Route::get('/', [LandingController::class, 'index']);

Route::get('/forgot', [ForgotController::class, 'index']);
Route::post('/forgot', [ForgotController::class, 'store']);

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
    Route::post('/bill/{id}', [DashboardController::class, 'bill']);
    Route::post('/mutasi/{id}', [DashboardController::class, 'mutasi']);
    Route::get('/print/{id}', [DashboardController::class, 'print']);
});

Route::get('/download/{filename}', [DownloadController::class, 'download'])->name('download');
