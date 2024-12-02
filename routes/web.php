<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/agenda-list', [HomeController::class,'listAgenda'])->name('agenda.list');
Route::get('/berita-list', [HomeController::class,'listNews'])->name('news.list');
Route::get('/agenda-list/{slug}', [HomeController::class, 'agendaDetail'])->name('agenda.detail');
Route::get('/berita-list/{slug}', [HomeController::class, 'newsDetail'])->name('news.detail');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth','isAdmin'])->name('dashboard');

Route::middleware('auth','isAdmin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/agenda', AgendaController::class);
    Route::resource('/news', NewsController::class);
});

require __DIR__.'/auth.php';
