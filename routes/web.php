<?php

use App\Http\Controllers\{
    CitizenController,
    ProfileController,
    VacineController,
    ApplicationController
};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/citizen/create', [CitizenController::class, 'create'])->name('citizen.create');
    Route::post('/citizen/store', [CitizenController::class, 'store'])->name('citizen.store');
    Route::get('/citizen/list', [CitizenController::class, 'index'])->name('citizen.list');
    Route::match(['put', 'patch'], '/citizen/{citizen}', [CitizenController::class, 'update'])->name('citizen.update');
    Route::delete('/citizen/{citizen}', [CitizenController::class, 'destroy'])->name('citizen.destroy');
    Route::get('/citizen/{citizen}', [CitizenController::class, 'show'])->name('citizen.show');

    Route::get('/vacine/list', [VacineController::class, 'index'])->name('vacine.list');
    Route::get('/vacine/create', [VacineController::class, 'create'])->name('vacine.create');
    Route::post('/vacine/store', [VacineController::class, 'store'])->name('vacine.store');
    Route::get('/vacine/{vacine}', [VacineController::class, 'edit'])->name('vacine.edit');
    Route::match(['put', 'patch'], '/vacine/{vacine}', [VacineController::class, 'update'])->name('vacine.update');
    Route::delete('/vacine/{vacine}', [VacineController::class, 'destroy'])->name('vacine.destroy');
    Route::get('/vacine/{vacine}/details', [VacineController::class, 'show'])->name('vacine.show');



});

require __DIR__.'/auth.php';
