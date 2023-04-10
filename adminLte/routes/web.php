<?php

use App\Http\Controllers\BootcampController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PostuladoController;

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
    return view('auth.login');
});


Route::middleware(['web'])->group(function () {
    Route::get('/myregister', function () {
        return view('auth.register');
    })->name('myregister');

    Route::post('/myregister', [RegisteredUserController::class, 'store'])->name('myregister.store');
});


Route::middleware(['web'])->group(function () {
    Route::get('/myregister', function () {
        return view('auth.register');
    })->name('myregister');

    Route::post('/myregister', [RegisteredUserController::class, 'store'])->name('myregister.store');
});



Route::get('/general', function () {
    return view('pages.general');
})->name('general');

Route::get('/exercises', function () {
    return view('pages.exercises');
})->name('exercises');

Route::get('/event', function () {
    return view('pages.event');
})->name('event');

Route::get('/pruebas', function () {
    return view('pruebas');
})->name('pruebas');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/postulantes', [PostuladoController::class, 'store'])->name('postulado.store');

// Route::get('/layouts.prueba',function() {
//     return view('layouts.prueba');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Bootcamp

// Route::resource('bootcamps', 'BootcampController');

Route::get('/bootcamp', function () {
    return view('bootcamp.index');
})->name('bootcamp.index');



Route::get('/bootcamp/create', [BootcampController::class, 'create'])->name('bootcamp.create');


require __DIR__.'/auth.php';

Route::resource('school',SchoolController::class);
Route::post('/school/create', [SchoolController::class, 'create'])->name('school.create');
Route::post('/school/store', [SchoolController::class, 'store'])->name('school.store');
