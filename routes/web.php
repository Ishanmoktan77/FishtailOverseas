<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;

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

Route::get('admin', function () {
    return view('adminPanel.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('admin/messages',[MessageController::class, 'indexAdminPanel'])->middleware(['auth', 'verified'])->name('messages');
Route::get('admin/messages/delete/{id}', [MessageController::class, 'delete'])->middleware(['auth', 'verified'])->name('messageDelete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutusController::class, 'index']);
Route::get('/contact', [MessageController::class, 'index'])->name('contact');
Route::post('/message_submit', [MessageController::class, 'create'])->name('contactSubmit');
