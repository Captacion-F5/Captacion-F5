<?php

use App\Http\Controllers\BootcampController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ProfileController;
use App\Mail\PruebaMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\PostuladoController;
use App\Http\Controllers\BootcampEvent;
use App\Http\Controllers\EventController;




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


Route::get('/exercises', function () {
    return view('pages.exercises');
})->name('exercises');

Route::get('/event', function () {
    return view('pages.event');
})->name('event');

Route::get('/pruebas', function () {
    return view('pruebas');
})->name('pruebas');

Route::get('/dashboard', [BootcampController::class, 'obtener_datos_tabla_principal'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/postulantes/importar', function () {
    return view('pages.importExcelPage');
})->name('importExcel');

Route::post('/postulantes/importar', [PostuladoController::class, 'importar'])->name('postulado.importar');
Route::post('/postulado', [PostuladoController::class, 'store'])->name('postulado.store');
Route::get('/components/forms/applicant-form', [PostuladoController::class, 'create', 'eligeBootcamp'])->name('applicant-form.create');
Route::get('/components/forms/applicant-form', [PostuladoController::class, 'eligeBootcamp'])->name('applicant-form.eligeBootcamp');
Route::get('/postulado',[PostuladoController::class, 'index'])->name('postulado');
Route::delete('/postulado/{id}',[PostuladoController::class, 'destroy'])->name('postulado.destroy');
Route::get('/postulado/{id}/edit', [PostuladoController::class, 'edit'])->name('postulado.edit');
Route::put('/postulado/{id}', [PostuladoController::class, 'update'])->name('postulado.update');
Route::put('/postulado/{id}/update_status', [PostuladoController::class,'update_status'])->name('postulado.update_status');
Route::get('/obtener_datos_bootcamp/{bootcampId}', [PostuladoController::class, 'obtener_datos_bootcamp']);
Route::get('/obtener_datos_ejercicios/{bootcampId}', [PostuladoController::class, 'obtener_datos_ejercicios']);
Route::get('/obtener_datos_event/{bootcampId}', [PostuladoController::class, 'obtener_datos_event']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::resource('bootcamps', BootcampController::class);
Route::get('/general/{id}', [BootcampController::class, 'general'])->name('general');

require __DIR__.'/auth.php';

Route::resource('school',SchoolController::class);
Route::post('/school/index', [SchoolController::class, 'index'])->name('school.index');
Route::post('/school/create', [SchoolController::class, 'create'])->name('school.create');
Route::post('/school/store', [SchoolController::class, 'store'])->name('school.store');

Route::resource('eventos',EventController::class);

Route::get('/exercises/{id}', [BootcampController::class, 'exercises'])->name('exercises');

