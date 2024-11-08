<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\AppointmentController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
    Route::get('/appointments/create/{providerId}', [AppointmentController::class, 'create'])->name('appointments.createWithProvider');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/hizmet-saglayicilar', [ProviderController::class, 'index'])->name('providers.index');
    Route::get('/hizmet-saglayicilar/{id}', [ProviderController::class, 'show'])->name('providers.show');
    // Route::get('/providers/{provider}/randevu-al', [AppointmentController::class, 'createForProvider'])->name('appointments.createForProvider');

});
