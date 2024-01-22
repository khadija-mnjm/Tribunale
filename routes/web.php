<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\BenificierController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', [UtilisateurController::class, 'index'])->name('login');
Route::post('/login', [UtilisateurController::class, 'login'])->name('login');
Route::get('/dashboard', [UtilisateurController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [UtilisateurController::class, 'profile'])->name('profile');
Route::get('/list-dossiers', [DossierController::class, 'listDossiers'])->name('list-dossiers');
Route::get('/add', [DossierController::class, 'addDossier'])->name('add');
Route::post('/submit-form', [DossierController::class, 'store'])->name('submit.form');

Route::get('/{dossier}', [DossierController::class, 'show'])->name('dossier.show');
Route::get('/benificiers', [BenificierController::class, 'index'])->name('benificiers');
Route::get('/ajouterBenificier', [BenificierController::class, 'ajouterbenificier'])->name('ajouterbenificier');
Route::post('/submit-formbenificier', [BenificierController::class, 'store'])->name('submit.formbenificier');
Route::post('/benificier/store', [BenificierController::class, 'store'])->name('benificier.store');
*/

// Authentication Routes
Route::get('/', [UtilisateurController::class, 'index'])->name('login');
Route::post('/login', [UtilisateurController::class, 'login'])->name('login');
Route::post('/logout', [UtilisateurController::class, 'logout'])->name('logout');
// User Dashboard and Profile Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UtilisateurController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UtilisateurController::class, 'profile'])->name('profile');
});

// Dossier Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/list-dossiers', [DossierController::class, 'listDossiers'])->name('list-dossiers');
    Route::get('/add', [DossierController::class, 'addDossier'])->name('add');
    Route::post('/submit-form', [DossierController::class, 'store'])->name('submit.form');
    Route::get('/list-dossiers/{dossier}', [DossierController::class, 'show'])->name('dossier.show');
});

// Benificier Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/benificiers', [BenificierController::class, 'index'])->name('benificiers');
    Route::get('/ajouterBenificier', [BenificierController::class, 'ajouterBenificier'])->name('ajouterbenificier');
    Route::post('/submit-formbenificier', [BenificierController::class, 'store'])->name('submit.formbenificier');
    Route::post('/benificier/store', [BenificierController::class, 'store'])->name('benificier.store');
});