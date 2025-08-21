<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\ZaaptiveTechnologyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Careers Routes
Route::prefix('careers')->name('careers.')->group(function () {

    Route::get('/', [CareerController::class, 'index'])->name('index');
    Route::get('/create', [CareerController::class, 'create'])->name('create');
    Route::post('/', [CareerController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [CareerController::class, 'edit'])->name('edit');
    Route::put('/{id}', [CareerController::class, 'update'])->name('update');
    Route::delete('/{id}', [CareerController::class, 'destroy'])->name('destroy');

});

// Zaaptive Technology Routes
Route::prefix('zaaptive-technologies')->name('zaaptive-technologies.')->group(function () {

    Route::get('/', [ZaaptiveTechnologyController::class, 'index'])->name('index');
    Route::get('/career', [ZaaptiveTechnologyController::class, 'career'])->name('career');
    Route::get('/career-details', [ZaaptiveTechnologyController::class, 'careerDetail'])->name('career-details');

});
