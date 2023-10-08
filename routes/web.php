<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::prefix('admin')->group(function () {
    Route::get('/add-new-tour', [AdminController::class, 'add_new_tour'])->name('add_new_tour');
    Route::POST('/create_tour', [AdminController::class, 'create_tour'])->name('create_tour');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/destination1/{id}', [HomeController::class, 'destination1'])->name('destination1');
Route::get('destinatioDetails/{id}', [HomeController::class, 'destinatioDetails'])->name('destinatioDetails');
Route::POST('/create-booking', [HomeController::class, 'create_booking'])->name('create_booking');
Route::POST('/create_review', [HomeController::class, 'create_review'])->name('create_review');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
