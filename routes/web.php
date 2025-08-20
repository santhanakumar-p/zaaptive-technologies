<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\ZaaptiveTechnologyController;
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

Route::get('zaaptive-technologies', [ZaaptiveTechnologyController::class, 'index'])->name('zaaptive-technologies.index');
Route::get('zaaptive-technologies/career', [ZaaptiveTechnologyController::class, 'career'])->name('zaaptive-technologies.career');
Route::get('zaaptive-technologies/career-details', [ZaaptiveTechnologyController::class, 'careerDetail'])->name('zaaptive-technologies.career-details');
