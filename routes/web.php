<?php

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Trainers
Route::resource('/trainers', App\Http\Controllers\Trainer\TrainerController::class);
Route::resource('/cadets', App\Http\Controllers\Trainer\CadetController::class);
Route::resource('/trainings', App\Http\Controllers\Trainer\TrainingController::class);
Route::resource('/equipments', App\Http\Controllers\Trainer\EquipmentController::class);
Route::get('/equipments-pending', [\App\Http\Controllers\Trainer\ApprovalController::class, 'getAllPending'])->name('equipments-pending');
Route::get('/equipments-approve/{id}', [\App\Http\Controllers\Trainer\ApprovalController::class, 'approve'])->name('equipments-approve');
Route::get('/equipments-returning', [\App\Http\Controllers\Trainer\ReturnController::class, 'getAllApproved']);
Route::get('/equipments-return/{id}', [\App\Http\Controllers\Trainer\ReturnController::class, 'returns'])->name('equipments-return');
Route::get('/profile-trainer', [\App\Http\Controllers\Trainer\ProfileController::class, 'profile'])->name('profile-trainer.profile');
Route::put('/profile-trainer/update/{id}', [\App\Http\Controllers\Trainer\ProfileController::class, 'update'])->name('profile-trainer.update');

// Cadets
Route::get('/profile-cadet', [\App\Http\Controllers\Cadet\CadetProfileController::class, 'profile'])->name('profile-cadet.profile');
Route::put('/profile-cadet/update/{id}', [\App\Http\Controllers\Cadet\CadetProfileController::class, 'update'])->name('profile-cadet.update');
Route::get('/register-trainings/main', [App\Http\Controllers\Cadet\RegisterTrainingController::class, 'main'])->name('register-trainings.main');
Route::get('/register-trainings', [App\Http\Controllers\Cadet\RegisterTrainingController::class, 'index'])->name('register-trainings.index');
Route::get('/register-trainings/create/{id}', [App\Http\Controllers\Cadet\RegisterTrainingController::class, 'create'])->name('register-trainings.create');
Route::post('/register-trainings/{id}/', [App\Http\Controllers\Cadet\RegisterTrainingController::class, 'store'])->name('register-trainings.store');
Route::get('/register-trainings/view/{id}', [App\Http\Controllers\Cadet\RegisterTrainingController::class, 'show'])->name('register-trainings.show');
Route::get('/register-trainings/edit/{id}', [App\Http\Controllers\Cadet\RegisterTrainingController::class, 'edit'])->name('register-trainings.edit');
Route::put('/register-trainings/update/{id}', [App\Http\Controllers\Cadet\RegisterTrainingController::class, 'update'])->name('register-trainings.update');
Route::delete('/register-trainings/destroy/{id}', [App\Http\Controllers\Cadet\RegisterTrainingController::class, 'destroy'])->name('register-trainings.destroy');

Route::get('/register-trainings/create', [App\Http\Controllers\Cadet\CadetEquipmentController::class, 'create'])->name('cadet-equipments.create');


// Route::resource('/register-trainings', App\Http\Controllers\Cadet\RegisterTrainingController::class);

// Route::get('/cadet-trainings', [App\Http\Controllers\Cadet\CadetTrainingController::class, 'index'])->name('cadet-trainings.index');
// Route::get('/cadet-trainings/create', [App\Http\Controllers\Cadet\CadetTrainingController::class, 'create'])->name('cadet-trainings.create');
// Route::post('/cadet-trainings/{id}/', [App\Http\Controllers\Cadet\CadetTrainingController::class, 'store'])->name('cadet-trainings.store');
// Route::post('/cadet-trainings/{id}/', [App\Http\Controllers\Cadet\CadetTrainingController::class, 'show'])->name('cadet-trainings.show');
// Route::post('/cadet-trainings/{id}/', [App\Http\Controllers\Cadet\CadetTrainingController::class, 'destroy'])->name('cadet-trainings.destroy');

// Route::resource('/cadet-trainings', App\Http\Controllers\Cadet\CadetTrainingController::class);


Route::resource('/cadet-equipments', App\Http\Controllers\Cadet\CadetEquipmentController::class);


Route::get('/profile-cadet', [\App\Http\Controllers\Cadet\CadetProfileController::class, 'profile'])->name('profile-cadet');



