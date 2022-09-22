<?php

use App\Http\Controllers\TraiteurController;
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

Route::get('/', function () {
    return view('layout.accueil');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/traiteur/create', [TraiteurController::class, 'create'])->name('traiteur.create');
Route::post('/traiteur/store', [TraiteurController::class, 'store'])->name('traiteur.store');
Route::get('/traiteur', [TraiteurController::class, 'index'])->name('traiteur.index');


//  <!-- Menu Item -->

require __DIR__ . '/auth.php';
