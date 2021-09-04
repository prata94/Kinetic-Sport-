<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavigationController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Route

Route::middleware(['auth', 'isAdmin'])->group( function() {
    Route::get('/dashboard', function () {
        return view('admin.index');
    });
});


// Appointments Routes

Route::get('/appointments', [AppointmentsController::class, 'index'])->name('appointments.index');
Route::get('/appointments/book', [AppointmentsController::class, "book"])->name("appointments.book");
Route::get('/appointments/{appointment}', [AppointmentsController::class, 'show'])->name('appointments.show');
Route::post('/appointments', [AppointmentsController::class, "store"])->name("appointments.store");
Route::get('/appointments/{appointment}/edit', [AppointmentsController::class, "edit"])->name("appointments.edit");
Route::put('/appointments/{appointment}', [AppointmentsController::class, "update"])->name("appointments.update");
Route::delete('/appointments/{appointments}', [AppointmentsController::class, "destroy"])->name("appointments.destroy");

// Navigation Routes

Route::get('/services', [NavigationController::class, 'services'])->name('navigation.services');
Route::get('/aboutus', [NavigationController::class, 'aboutus'])->name('navigation.about');