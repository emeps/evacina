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
    if (auth()->check()) {
        return redirect()->route('citizen.list');
    }
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return redirect()->route('citizen.list');
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

    Route::get('/application/list', [ApplicationController::class, 'index'])->name('application.list');
    Route::get('/application/create', [ApplicationController::class, 'create'])->name('application.create');
    Route::post('/application/store', [ApplicationController::class, 'store'])->name('application.store');
    Route::get('/application/{application}', [ApplicationController::class, 'edit'])->name('application.edit');
    Route::match(['put', 'patch'], '/application/{application}', [ApplicationController::class, 'update'])->name('application.update');
    Route::delete('/application/{application}', [ApplicationController::class, 'destroy'])->name('application.destroy');
    Route::get('/application/{application}/details', [ApplicationController::class, 'show'])->name('application.show');

    Route::get('/vacine-card', [CitizenController::class, 'consulta'])->name('citizen.search');
    Route::get('/vacine-card/by-inlness', [CitizenController::class, 'consultaPorDoenca'])->name('citizen.searchByInlness');
});

require __DIR__.'/auth.php';
