<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolePermission\RolesController;
use App\Http\Controllers\RolePermission\PermissionsController;
use App\Http\Controllers\Admin\OutletController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','roles:admin')->group(function () {
    Route::resource('roles', RolesController::class);
    Route::resource('permissions', PermissionsController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
