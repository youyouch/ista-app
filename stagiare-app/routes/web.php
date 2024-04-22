<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;

Route::get('/stagiaires', [StagiaireController::class, 'index'])->name('stagiaires.index');
Route::get('/stagiaires/create', [StagiaireController::class, 'create'])->name('stagiaires.create');
Route::post('/stagiaires', [StagiaireController::class, 'store'])->name('stagiaires.store');
Route::get('/stagiaires/{stagiaire}', [StagiaireController::class, 'show'])->name('stagiaires.show');
Route::get('/stagiaires/{stagiaire}/edit', [StagiaireController::class, 'edit'])->name('stagiaires.edit');
Route::put('/stagiaires/{stagiaire}', [StagiaireController::class, 'update'])->name('stagiaires.update');
Route::delete('/stagiaires/{stagiaire}', [StagiaireController::class, 'destroy'])->name('stagiaires.destroy');
Route::delete('/stagiaires', [StagiaireController::class, 'destroyAll'])->name('stagiaires.destroyAll');
Route::get('/stagiaires', [StagiaireController::class, 'search'])->name('stagiaires.search');
