<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\RootController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/unit', [UnitController::class, 'index'])->name('unit.index');
    Route::get('/admin/user', [RootController::class, 'user'])->name('admin.user');
    Route::get('/admin/create', [RootController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [RootController::class, 'store'])->name('admin.store');
    Route::post('/admin/store2', [RootController::class, 'store2'])->name('admin.store2');
    Route::get('/admin/create2', [RootController::class, 'create2'])->name('admin.create2');
    Route::get('/admin/presensi', [RootController::class, 'presensi'])->name('admin.presensi');
    Route::get('/admin/presensi/edit/{id}', [RootController::class, 'editpresensi'])->name('admin.editpresensi');
    Route::post('/admin/presensi/update', [RootController::class, 'updatepresensi'])->name('admin.updatepresensi');
});

require __DIR__.'/auth.php';
