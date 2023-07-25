<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;
use App\http\Controllers\ChambreController;
use App\http\Controllers\CategorieController;
use App\http\Controllers\ServiceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AfficherChambreController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\NumController;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;



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
Route::get('/', [IndexController::class, 'Afficher_chambre']);
// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/dashboard', [DashboardController::class, 'afficher_dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth', 'verified'])->name('dashboard');

 Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });
 require __DIR__.'/auth.php';

 Route::get('/admin', [AdminController::class, 'tableau_de_bord']);

 //gestion des chambres
Route::get('/deletechambre/{id}', [ChambreController::class, 'supp_chambre']);
Route::get('/update-chambre/{id}', [ChambreController::class, 'update_chambre']);
Route::get('/statut/{id}', [ChambreController::class, 'update_statut']);
Route::post('/statut/traitement', [ChambreController::class, 'update_statut_chambre']);
Route::get('/chambre', [ChambreController::class, 'tableau_chambre'])->middleware('permission:chambres-read');
Route::get('/formchambre', [ChambreController::class, 'publi_chambre'])->middleware('permission:chambres-create');
Route::post('/chambre/traitement', [ChambreController::class, 'ajouter_chambre_traitement']);
Route::post('/updatechambre/traitement', [ChambreController::class, 'modifier_chambre_traitement']);


//gestion des categories
 Route::get('/delete-categorie/{id}', [CategorieController::class, 'delete_categorie']);
 Route::get('/updatecategorie/{id}', [CategorieController::class, 'update_categorie'])->middleware('permission:updatecategorie-update');
 Route::get('/categorie', [CategorieController::class, 'tableau_categorie'])->middleware('permission:categorie-read');
 Route::post('/categorie/traitement', [CategorieController::class, 'ajouter_categorie']);
 Route::post('/update/traitement', [CategorieController::class, 'modifier_categorie_traitement']);


//gestion des services
Route::get('/delete-service/{id}', [ServiceController::class, 'delete_service']);
Route::get('/service', [ServiceController::class, 'tableau_service'])->middleware('permission:service-read');
Route::post('/service/traitement', [ServiceController::class, 'ajouter_service']);
Route::get('/updateservice/{id}', [ServiceController::class, 'update'])->middleware('permission:updateservice-read');
Route::post('/updateServ/traitement', [ServiceController::class, 'modifier_service_traitement']);

//gestion des client
Route::get('/client', [ClientController::class, 'tableau_client']);
Route::post('/clients/traitement', [ClientController::class, 'ajouter_client']);
Route::get('/updateclient/{id}', [ClientController::class, 'update_client']);
Route::post('/updateCli/traitement', [ClientController::class, 'modifier_client_traitement']);
Route::get('/delete-client/{id}', [ClientController::class, 'delete_client']);

//role
Route::get('/role', [RoleController::class, 'tableau_role']);
Route::post('/role/traitement', [RoleController::class, 'ajouter_role']);
Route::get('/updaterole/{id}', [RoleController::class, 'update_role']);
Route::post('/updateRole/traitement', [RoleController::class, 'modifier_role_traitement']);
Route::get('/delete-role/{id}', [RoleController::class, 'delete_role']);

Route::get('/room', [AfficherChambreController::class, 'room_controller']);


//reservation
Route::get('/reservation/{id}', [ReservationController::class, 'afficher_reservation']);
Route::post('/reservation/traitement', [ReservationController::class, 'ajouter_reservation']);
Route::get('/carracteristique/{id}', [ReservationController::class, 'carracteristique_chambre']);
Route::get('/demande', [ReservationController::class, 'afficher_demande_reservation'])->middleware('permission:reservations-read');
Route::get('/valid-demande/{id}', [ReservationController::class, 'valid_demande']);
Route::post('/valider_reservation', [ReservationController::class, 'valider_reservation']);


//Administration
Route::get('/administration', [AdministrateurController::class, 'table_administration']);
Route::post('/ajouter/num', [AdministrateurController::class, 'table_ajouter_administration']);
Route::get('/delete-adminstration/{id}', [AdministrateurController::class, 'delete_administration']);




//Administration
Route::get('/numChambre', [NumController::class, 'num_chambre']);
Route::post('/ajouter', [NumController::class, 'ajouter_num']);
Route::get('/delete-chambre/{id}', [NumController::class, 'delete_chambre']);


//virtrine
Route::get('/services', [VitrineController::class, 'aff_serv']);
Route::get('/propos', [VitrineController::class, 'aff_propos']);
Route::get('/equipe', [VitrineController::class, 'aff_equipe']);
Route::get('/temoignage', [VitrineController::class, 'aff_temoignage']);

//contact
Route::get('/contact', [ContactController::class, 'aff_contact']);