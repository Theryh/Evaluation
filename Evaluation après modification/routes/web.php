<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerminalController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\PorteEmbarquementController;
use app\Http\Controllers;


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

// Route::get('/', [AccueilController::class, 'index'])->name('accueil');

//Route::get('page/{numero_page}', [PageController::class, 'index'])->name('page_par_numero');

// Route::get('classe/{classe}/toto', [ClasseController::class, 'toto'])->name('classe.toto');
//Route::resource('classe', ClasseController::class);
//Route::resource('matiere', MatiereController::class);
//Route::resource('professeur', ProfesseurController::class);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//Route::get('setlocale/{locale}', 'LocaleController@setLocale')->name('setlocale');
Route::resource('terminal', TerminalController::class);
Route::resource('porte-embarquement', PorteEmbarquementController::class);

Route::get('/', [TerminalController::class,'liste'])->name('accueil');

//Route::get('/', [TerminalController::class, 'index']);
Route::resource('/hall', HallController::class);
Route::get('/portes-embarquement/create', 'PorteEmbarquementController@create')->name('portes-embarquement.create');
Route::get('/portes-embarquement/{porte_embarquement}/edit', 'PorteEmbarquementController@edit')->name('portes-embarquement.edit');
Route::delete('/portes-embarquement/{porte_embarquement}', 'PorteEmbarquementController@destroy')->name('portes-embarquement.destroy');
Route::post('/portes-embarquement', 'PorteEmbarquementController@store')->name('portes-embarquement.store');
Route::post('/portes-embarquement/create', 'PorteEmbarquementController@create')->name('portes-embarquement.create');





  Route::get('/profile', [PorteEmbarquementController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [PorteEmbarquementController::class, 'update'])->name('profile.update');
  Route::delete('/pro<file', [PorteEmbarquementController::class, 'destroy'])->name('profile.destroy');
  Route::get('/porte-embarquement/{porteEmbarquement}/edit', 'PorteEmbarquementController@edit')->name('porte-embarquement.edit');
  Route::get('/porte-embarquement/{porteEmbarquement}', 'PorteEmbarquementController@show');

