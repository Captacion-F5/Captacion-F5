<?php

use App\Http\Controllers\BootcampController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

use App\Http\Controllers\PostuladoController;

use App\Http\Controllers\EventController;


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
Route::get('/obtener_datos_bootcamp/{bootcampId}', [PostuladoController::class, 'obtener_datos_bootcamp']);

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

// Route::resource('postulado',PostuladoController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Bootcamp

Route::resource('bootcamps', BootcampController::class);
Route::get('/general/{id}', [BootcampController::class, 'general'])->name('general');
// Route::get('/bootcamp', function () {
//     return view('bootcamp.index');
// })->name('bootcamp.index');


// Route::get('/bootcamps/create', [BootcampController::class, 'create'])->name('bootcamps.create');
// Route::get('/bootcamps/index', [BootcampController::class, 'index'])->name('bootcamps.index');
// Route::get('/bootcamps/{bootcamp}/edit', [BootcampController::class, 'edit'])->name('bootcamps.edit');
// Route::get('/bootcamps/{bootcamp}', [BootcampController::class, 'show'])->name('bootcamps.show');
// Route::post('/bootcamps/store', [BootcampController::class, 'store'])->name('bootcamps.store');
// Route::put('/bootcamps/{bootcamp}', [BootcampController::class, 'update'])->name('bootcamps.update');
// Route::delete('/bootcamps/destroy/{id}', [BootcampController::class, 'destroy'])->name('bootcamps.destroy');


require __DIR__.'/auth.php';

Route::resource('school',SchoolController::class);
Route::post('/school/index', [SchoolController::class, 'index'])->name('school.index');
Route::post('/school/create', [SchoolController::class, 'create'])->name('school.create');
Route::post('/school/store', [SchoolController::class, 'store'])->name('school.store');
// Route::get('/sidebar_home', [SchoolController::class, 'sidebar_home'])->name('sidebar_home');
// Route::post('/school/index', [SchoolController::class, 'index'])->name('school.index');
// Route::get('/sidebar', [SchoolController::class, 'sidebar'])->name('sidebar');

// routes/web.php



//Eventos

Route::resource('eventos',EventController::class);
//Route::get('/eventos/{id}', 'App\Http\Controllers\EventController@show')->name('eventos.show');


//Route::get('/eventos', [EventPostuladoController::class, 'index'])->name('eventos.index');
