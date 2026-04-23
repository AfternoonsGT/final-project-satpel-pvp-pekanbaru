<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    $zones = \App\Models\Zone::all();
    return view('landing.pages.index', compact('zones'));
});

Route::get('/detail', function () {
    return view('landing.pages.detail');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.index');
    })->name('index');

    Route::resource('zones', ZoneController::class);
    Route::resource('attractions', AttractionController::class);
    
}); Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('reviews', ReviewController::class);

    Route::post('reviews/{id}/toggle-approve', [ReviewController::class, 'toggleApprove'])
        ->name('reviews.toggleApprove');
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
