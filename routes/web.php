<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtisteController;
use App\Http\Controllers\OeuvreController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/* Route liées à Principal */
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('home1', [MainController::class, 'home1'])->name('home1');
Route::get('listeOeuvres', [MainController::class, 'listeOeuvres'])->name('listeOeuvres');
Route::get('listeArtistes', [MainController::class, 'listeArtistes'])->name('listeArtistes');
Route::get('showOeuvre/{id}', [OeuvreController::class, 'show'])->name('showOeuvre');
/* END */


/* Route liées à ADMIN */
Route::get('admin_dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard')->middleware(['auth']);
Route::put('admin/desactiver_activer/', [AdminController::class, 'desactiverActiver'])->name('admin_activer_desactiver')->middleware(['auth']);
Route::get('admin_gestion_users', [AdminController::class, 'admin_gestion_users'])->name('admin_gestion_users')->middleware(['auth']);
Route::get('admin_gestion_artistes', [AdminController::class, 'admin_gestion_artistes'])->name('admin_gestion_artistes')->middleware(['auth']);
/* END */


/* Route liées à Artiste */

    // GESTION ARTISTE
Route::get('artiste_dashboard', [ArtisteController::class, 'artiste_dashboard'])->name('artiste_dashboard')->middleware(['auth']);
Route::get('artiste_profil', [ArtisteController::class, 'artiste_profil'])->name('artiste_profil');

    // GESTION OEUVRE
Route::get('oeuvre_form', [ArtisteController::class, 'oeuvre_form'])->name('oeuvre_form')->middleware(['auth']);
Route::get('modifier_oeuvre/{id}', [ArtisteController::class, 'modifier_oeuvre'])->name('modifier_oeuvre')->middleware(['auth']);
Route::post('oeuvre_register', [ArtisteController::class, 'oeuvre_register'])->name('oeuvre_register')->middleware(['auth']);
Route::get('mes_oeuvres', [ArtisteController::class, 'mes_oeuvres'])->name('mes_oeuvres')->middleware(['auth']);
Route::put('desactiver_oeuvre', [ArtisteController::class, 'desactiver_oeuvre'])->name('desactiver_oeuvre')->middleware(['auth']);
Route::put('activer_oeuvre', [ArtisteController::class, 'activer_oeuvre'])->name('activer_oeuvre')->middleware(['auth']);
Route::put('supprimer_oeuvre', [ArtisteController::class, 'supprimer_oeuvre'])->name('supprimer_oeuvre')->middleware(['auth']);

    //FONCTION DE MODIFICATION DES OEUVRES 
    Route::put('modifier_titre', [ArtisteController::class, 'modifier_titre'])->name('modifier_titre')->middleware(['auth']);
    Route::put('modifier_prix', [ArtisteController::class, 'modifier_prix'])->name('modifier_prix')->middleware(['auth']);
    Route::put('modifier_nombre_exemplaire', [ArtisteController::class, 'modifier_nombre_exemplaire'])->name('modifier_nombre_exemplaire')->middleware(['auth']);
    Route::put('modifier_dimension', [ArtisteController::class, 'modifier_dimension'])->name('modifier_dimension')->middleware(['auth']);
    Route::put('modifier_description', [ArtisteController::class, 'modifier_description'])->name('modifier_description')->middleware(['auth']);   

    // GESTION CATEGORIE
Route::put('desactiver_categorie/{id}', [ArtisteController::class, 'desactiver_categorie'])->name('desactiver_categorie')->middleware(['auth']);
Route::put('activer_categorie/{id}', [ArtisteController::class, 'activer_categorie'])->name('activer_categorie')->middleware(['auth']);
Route::put('supprimer_categorie', [ArtisteController::class, 'supprimer_categorie'])->name('supprimer_categorie')->middleware(['auth']);
Route::get('gestion_categories', [ArtisteController::class, 'gestion_categories'])->name('gestion_categories')->middleware(['auth']);
Route::post('categorie_register', [ArtisteController::class, 'categorie_register'])->name('categorie_register')->middleware(['auth']);
Route::get('categorie_form', [ArtisteController::class, 'categorie_form'])->name('categorie_form')->middleware(['auth']);
Route::put('modifier_categorie', [ArtisteController::class, 'modifier_categorie'])->name('modifier_categorie')->middleware(['auth']);


/* END */