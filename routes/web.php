<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\PatientController::class, 'index'])->name('index');
Route::get('/inscription/patient', [App\Http\Controllers\PatientController::class, 'create'])->name('create');
Route::get('/voir/patient/{patient}', [App\Http\Controllers\PatientController::class, 'show'])->name('show');
Route::post('/enregister/patient', [App\Http\Controllers\PatientController::class, 'store'])->name('store');
Route::get('/patient/{patient:id}/edit', [App\Http\Controllers\PatientController::class, 'edit'])->name('edit');
Route::put('/patient/{patient:id}/update', [App\Http\Controllers\PatientController::class, 'update'])->name('udapte');


//medecin
Route::get('/ajout/medecin', [App\Http\Controllers\MedecinController::class, 'create'])->name('medecin.create');
Route::post('/enregister/medecin', [App\Http\Controllers\MedecinController::class, 'store'])->name('medecin.store');