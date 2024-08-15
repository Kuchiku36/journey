<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('',[TacheController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //gestion des taches ajout de tache suppression modification d'etat
    Route::get('/tache', [TacheController::class, 'show'])->name('tache.detail');
    Route::get('/tache/ajouter', [TacheController::class, 'create'])->name('tache.ajouter');
    Route::post('/tache/store', [TacheController::class, 'store'])->name('tache.store');
    Route::post('/tache/modifier/{tache}', [TacheController::class, 'modifier'])->name('tache.modifier');
    Route::get('/tache/delete/{tache}', [TacheController::class, 'delete'])->name('tache.delete');
    Route::get('/tache/update/{tache}', [TacheController::class, 'update'])->name('tache.update');
    Route::get('/tache/edit/{tache}', [TacheController::class, 'edit'])->name('tache.edit');
});

require __DIR__.'/auth.php';
