<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\DossierController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UtilisateurController::class, 'index'])->name('login');
Route::post('/login', [UtilisateurController::class, 'login'])->name('login');
Route::get('/dashboard', [UtilisateurController::class, 'dashboard'])->name('dashboard');
Route::get('/list-dossiers', [DossierController::class, 'listDossiers'])->name('list-dossiers');
Route::get('/add', [DossierController::class, 'addDossier'])->name('add');