<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\BenificierController;
use App\Http\Controllers\AvocatController;
// Authentication Routes
Route::get('/', [UtilisateurController::class, 'index'])->name('login1');
Route::post('/login', [UtilisateurController::class, 'login'])->name('login');
Route::get('/logout', [UtilisateurController::class, 'logout'])->name('logout');
Route::get('/profile', [UtilisateurController::class, 'profile'])->name('profile');
Route::middleware(['loginAuth'])->group(function () {
    Route::get('/edit-profile', [UtilisateurController::class, 'editProfile'])->name('edit-profile');
    Route::post('/update-profile', [UtilisateurController::class, 'updateProfile'])->name('update-profile');
});
// User Dashboard and Profile Routes
Route::middleware([ 'loginAuth'])->group(function () {
    Route::get('/dashboard', [UtilisateurController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UtilisateurController::class, 'profile'])->name('profile');
});

// Dossier Routes
Route::middleware([ 'loginAuth'])->group(function () {
    Route::get('/list-dossiers', [DossierController::class, 'listDossiers'])->name('list-dossiers');
    Route::get('/add', [DossierController::class, 'addDossier'])->name('add');
    Route::post('/submit-form', [DossierController::class, 'store'])->name('store');
    Route::get('/list-dossiers/{dossier}', [DossierController::class, 'show'])->name('dossier.show');
});

// Benificier Routes
Route::middleware([ 'loginAuth'])->group(function () {
    Route::get('/benificiers', [BenificierController::class, 'index'])->name('benificiers');
    Route::get('/ajouterBenificier', [BenificierController::class, 'ajouterBenificier'])->name('ajouterbenificier');
    Route::post('/submit-formbenificier', [BenificierController::class, 'store'])->name('submit.formbenificier');
    Route::post('/benificier/store', [BenificierController::class, 'store'])->name('benificier.store');
});
Route::middleware([ 'loginAuth'])->group(function () {
    Route::get('/avocats', [AvocatController::class, 'index'])->name('avocat');
    Route::get('/ajouterAvocat', [AvocatController::class, 'ajouterAvocat'])->name('ajouteravocat');
    Route::post('/submit-formavocat', [AvocatController::class, 'store'])->name('submit.formavocat');
    Route::post('/avocats/store', [AvocatController::class, 'store'])->name('avocat.store');

});