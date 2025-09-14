<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonSiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route principale - Page d'accueil
Route::get('/', [MonSiteController::class, 'index'])->name('accueil');

// Route pour la page À propos
Route::get('/apropos', [MonSiteController::class, 'apropos'])->name('apropos');

// Route pour afficher le formulaire de contact
Route::get('/contact', [MonSiteController::class, 'contact'])->name('contact');

// Route pour traiter le formulaire de contact (POST)
Route::post('/contact', [MonSiteController::class, 'traiterContact'])->name('contact.traiter');

// Route pour la page des services
Route::get('/services', [MonSiteController::class, 'services'])->name('services');
