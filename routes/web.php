<?php

use App\Http\Controllers\Abonnement;
use App\Http\Controllers\Contact;
use App\Http\Controllers\FaiCommentController;
use App\Http\Controllers\FaiController;
use App\Http\Controllers\Follow;
use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OffreService;
use App\Http\Controllers\Reabonnement;
use App\Http\Controllers\SignUp;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


// °°°°°°°°°°°°°°°°°°°° AFFICHAGE DE LA PADE ACCEUIL °°°°°°°°°°°°°°°°°°

Route::get('/', [Home::class, 'index']);

// °°°°°°°°°°°°°°°°°°°° AFFICHAGE DE LA PAGE OFFRES ET SERVICES °°°°°°°°°°°°°°°°°°

Route::get('/offres-services', [OffreService::class, 'index']);


// °°°°°°°°°°°°°°°°°°°° AFFICHAGE DE LA PAGE DE PROFIL DES FAIs °°°°°°°°°°°°°°°°°°

Route::get('/fai-profil/{fai}', [FaiController::class, 'profil']);


// °°°°°°°°°°°°°°°°°°°° AFFICHAGE DE LA PADE DE SUIVI DE COMMANDE °°°°°°°°°°°°°°°°°°
// GET
Route::get('/follow', [Follow::class, 'index']);

// POST
Route::post('/follow', [Follow::class, 'follow']);



// °°°°°°°°°°°°°°°°°°°° POSTER UN COMMENTAIRE °°°°°°°°°°°°°°°°°°

// POST
Route::post('/comment', [FaiCommentController::class, 'storeComment']);


// °°°°°°°°°°°°°°°°°°°° AFFICHAGE DE LA PADE DE CONNECTION°°°°°°°°°°°°°°°°°°

// FORMULAIRE DE CONNEXION
Route::get('/connexion', [Login::class, 'index'])->name('connexion')->middleware('connexionControl');
// SE CONNECTER
Route::post('/connexion', [Login::class, 'login'])->middleware('connexionControl');

// SE DECONNECTER
Route::get('/deconnexion', [Login::class, 'deconnexion'])->name('deconnexion');



// °°°°°°°°°°°°°°°°°°°° AFFICHAGE DE LA PADE DE INSCRIPTION °°°°°°°°°°°°°°°°°°

Route::get('/sign-up', [SignUp::class, 'index']);
// INSCRIPTION
Route::post('/sign-up', [SignUp::class, 'store']);


// °°°°°°°°°°°°°°°°°°°° GESTION DES NEWSLETTERS °°°°°°°°°°°°°°°°°°

Route::post('/newsletter', [NewsletterController::class, 'index']);


// °°°°°°°°°°°°°°°°°°°° AFFICHAGE DE LA PADE DE CONTACT °°°°°°°°°°°°°°°°°°

// ==== GET METHOD ====
Route::get('/contact', [Contact::class, 'index']);
// ===== POST METHOD =====
Route::post('/contact', [Contact::class, 'contact']);



// ======================= GESTION DES ABONNEMENT ========================

// ABONNEMENT1
// ==== GET METHOD ====
Route::get('/abonnement1', [Abonnement::class, 'abonnement1']);
// ===== POST METHOD =====
Route::post('/abonnement1', [Abonnement::class, 'post_abonnement1']);

// ABONNEMENT2
// ==== GET METHOD ====
Route::get('/abonnement2', [Abonnement::class, 'abonnement2']);
// ===== POST METHOD =====
Route::post('/abonnement2', [Abonnement::class, 'post_abonnement2']);

// ABONNEMENT3
// ==== GET METHOD ====
Route::get('/abonnement3', [Abonnement::class, 'abonnement3']);


// ABONNEMENT4
// ==== GET METHOD ====
Route::get('/abonnement4', [Abonnement::class, 'abonnement4']);




// ======================= GESTION DES REABONNEMENTS ========================

// REABONNEMENT1
// ==== GET METHOD ====
Route::get('/reabonnement1', [Reabonnement::class, 'reabonnement1']);
// ===== POST METHOD =====
Route::post('/reabonnement1', [Reabonnement::class, 'post_reabonnement1']);

// REABONNEMENT2
// ==== GET METHOD ====
Route::get('/reabonnement2', [Reabonnement::class, 'reabonnement2']);
// ===== POST METHOD =====
Route::post('/reabonnement2', [Reabonnement::class, 'post_reabonnement2']);

// REABONNEMENT3
// ==== GET METHOD ====
Route::get('/reabonnement3', [Reabonnement::class, 'reabonnement3']);


// REABONNEMENT4
// ==== GET METHOD ====
Route::get('/reabonnement4', [Reabonnement::class, 'reabonnement4']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
