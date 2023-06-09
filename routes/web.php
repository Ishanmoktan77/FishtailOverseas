<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\LegaldocumnetController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecruitmentProcessController;
use App\Http\Controllers\CategoriesController;

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

Route::middleware('auth')->group(function() {
    Route::get('admin/messages',[MessageController::class, 'indexAdminPanel'])->name('messages');
    Route::get('admin/messages/delete/{id}', [MessageController::class, 'delete'])->name('messageDelete');
    Route::get('admin/team', [TeamController::class, 'indexAdminPanel'])->name('admin.team');
    Route::get('admin/team/delete/{id}', [TeamController::class, 'destroy'])->name('admin.team.delete');
    Route::get('admin/team/add', [TeamController::class, 'create'])->name('admin.team.add');
    Route::post('admin/team/add', [TeamController::class, 'store'])->name('admin.team.store');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/services', function(){
    return view('frontend.services');
})->name('services');
Route::get('/recruitment_process', [RecruitmentProcessController::class, 'index'])->name('recruitmentProcess');
Route::get('/about_us', [AboutusController::class, 'index'])->name('aboutUs');
Route::get('/team',[TeamController::class,'index'])->name('team');
Route::get('/legal_documents',[LegaldocumnetController::class,'index'])->name('legalDocuments');
Route::get('/sample_documents', function() {
    return view('frontend.sample-documents');
})->name('sampleDocuments');
Route::get('/contact', [MessageController::class, 'index'])->name('contact');
Route::post('/message_submit', [MessageController::class, 'create'])->name('contactSubmit');
Route::get('/category', [CategoriesController::class, 'index'])->name('categories');
