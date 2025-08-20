<?php

use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('careers', [CareerController::class, 'index'])->name('careers.index');
Route::get('careers/create', [CareerController::class, 'create'])->name('careers.create');
Route::post('careers', [CareerController::class, 'store'])->name('careers.store');
Route::get('careers/{id}/edit', [CareerController::class, 'edit'])->name('careers.edit');
Route::put('careers/{id}', [CareerController::class, 'update'])->name('careers.update');
Route::delete('careers/{id}', [CareerController::class, 'destroy'])->name('careers.destroy');
