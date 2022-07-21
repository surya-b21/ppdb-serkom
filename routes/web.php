<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\InfoPendaftaranController;
use App\Http\Controllers\Admin\SekolahController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PendaftaranController;
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
})->name("welcome");

Route::get('/403', function () {
    return view('403');
})->name('403');

// Route User
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('user.dashboard');
    Route::resource('/pendaftaran', PendaftaranController::class)->only(['index', 'store', 'update']);
});

// Route Admin
Route::middleware(['auth', 'is_admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/getuser', [AdminDashboardController::class, 'getuser'])->name('getuser');
    Route::get('/peserta', [AdminDashboardController::class, 'peserta'])->name('peserta');
    Route::resource('/sekolah', SekolahController::class);
    Route::get('/getsekolah', [SekolahController::class, 'getsekolah'])->name('getsekolah');
    Route::get('/info-pendaftaran', [InfoPendaftaranController::class, 'index'])->name('info-pendaftaran');
    Route::get('/info-pendaftaran/get', [InfoPendaftaranController::class, 'getpendf'])->name('get.pendf');
    Route::get('/info-pendaftaran/show/{id}', [InfoPendaftaranController::class, 'show'])->name('show');
});

Auth::routes();
