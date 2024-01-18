<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ModuleController;
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
});

require __DIR__.'/auth.php';

Route::controller(ModuleController::class)->group(function () {
    Route::get('/add-module', 'create');
    Route::post('/add-module', 'store');
    Route::get('/show-modules', 'index');
    Route::get('/edit-module/{code}', 'edit');
    Route::put('/update-module/{code}', 'update');
    Route::delete('/delete-module/{code}', 'delete');
});
