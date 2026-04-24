<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttractionController;
use App\Http\Controllers\ReviewController;

Route::prefix('/')->name('landing.')->group(function() {
    Route::get('/', function () {
        $zones = \App\Models\Zone::all();
        $attractions = \App\Models\Attraction::all();
        return view('landing.pages.index', compact('zones', 'attractions'));
    })->name('index');
    Route::prefix('/zone')->Group(function() {
        Route::get('/{zone}', [ZoneController::class, 'showZones'])->name('zones');
        Route::get('/review', [ReviewController::class, 'showReviews'])->name('reviews');
        Route::post('/review', [ReviewController::class, 'store'])->name('zone.reviews.store');
    });
    Route::prefix('/attraction')->Group(function() {
        Route::get('/{attraction}', [AttractionController::class, 'showAttractions'])->name('attractions');
        Route::get('/review', [ReviewController::class, 'showReviews'])->name('reviews');
        Route::post('/review', [ReviewController::class, 'store'])->name('attraction.reviews.store');
    });

    Route::get('/detail', function () {
        return view('landing.pages.detail');
    })->name('detail');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        $zones = \App\Models\Zone::all();
        $attractions = \App\Models\Attraction::all();
        $publishedReviews = \App\Models\Review::where('is_approved', true)->get();
         $unpublishedReviews = \App\Models\Review::where('is_approved', false)->get();
        $counter = [
    'zones' => $zones->count(),
    'attractions' => $attractions->count(),
     'published_reviews' => $publishedReviews->count(),
    'unpublished_reviews' => $unpublishedReviews->count(),
];
        return view('admin.pages.index', compact('counter'));
    })->name('index');
    
    Route::resource('zones', ZoneController::class);
    Route::resource('attractions', AttractionController::class);
    Route::get('reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::patch('reviews/{review}/approve', [ReviewController::class, 'approve'])->name('reviews.approve');
    Route::patch('reviews/{review}/disapprove', [ReviewController::class, 'disapprove'])->name('reviews.disapprove');
    Route::patch('reviews/{review}/toggle-approve', [ReviewController::class, 'toggleApprove'])->name('reviews.toggleApprove');
    Route::delete('reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
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
