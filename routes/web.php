<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('main-menu'); // Menu utama
});

Route::get('/employees', [EmployeeController::class, 'idx']); // Lihat karyawan
Route::get('/employees/create', [EmployeeController::class, 'create']); // Tambah karyawan
Route::post('/employees/store', [EmployeeController::class, 'save']); // Simpan karyawan

Route::get('/employees/update-select', [EmployeeController::class, 'updateSelect']); // Menu update
Route::post('/employees/update-input', [EmployeeController::class, 'updateInput']); // HARUS POST
Route::put('/employees/update/{id}', [EmployeeController::class, 'update']); // Update karyawan

Route::get('/employees/delete-select', [EmployeeController::class, 'deleteSelect']); // Menu hapus
Route::post('/employees/delete', [EmployeeController::class, 'del']); // Hapus karyawan berdasarkan input ID

Route::match(['get', 'post'], '/debug', function () {
    return request()->method();
});