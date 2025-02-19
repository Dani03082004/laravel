<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Models\Pio;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);


Route::get('/dashboard', function () {
    $pios=Pio::all();
    return view('dashboard',['pios'=>$pios]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
