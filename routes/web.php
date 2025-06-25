<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// 25/06/2025
//(/) : ini adalah default route
//membuat deafult route untuk login supaya bisa ketika jalani server langsung direct ke logi
Route::get('/', [\App\Http\Controllers\LoginController::class, 'login']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


//membuat middleware agar tidak sembarangan masuk page lwat url
Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', App\Http\Controllers\DashboardController::class);
    Route::get('service', [App\Http\Controllers\DashboardController::class, 'indexService']);
    Route::get('insert/service', [App\Http\Controllers\DashboardController::class, 'showInsService']);
});

//resource:mengatur semua route, mencakup get, post, delete tanpa dibuat lg. maksudnya buat cover semua dari resource(get, push, delete, post). hanya sekali saja
//get: hanya bisa melihat dan membaca data
//post : bisa membuat, tambah dan ubah data (form)
//put : ubah data (form)-
//delete : hapus data(form)

Route::get('belajar1', [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('tambah', [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('tambah');
//table counts
Route::get('data/hitungan', [\App\Http\Controllers\BelajarController::class, 'viewHitungan'])->name('data.hitungan');
Route::get('edit/data-hitung/{id}', [\App\Http\Controllers\BelajarController::class, 'editDataHitung'])->name('edit.data-hitung');
Route::put('update/tambahan/{id}', [\App\Http\Controllers\BelajarController::class, 'updateTambahan'])->name('update.tambahan');
Route::delete('softDelete/data-hitung/{id}', [\App\Http\Controllers\BelajarController::class, 'softDeleteTambahan'])->name('softDelete.data-hitung');



Route::get('edit/{id}', [\App\Http\Controllers\BelajarController::class, 'update']);
Route::get('edit', [\App\Http\Controllers\BelajarController::class, 'nuall']);
Route::post('tambah-action', [\App\Http\Controllers\BelajarController::class, 'tambahAction'])->name('tambah-action');
