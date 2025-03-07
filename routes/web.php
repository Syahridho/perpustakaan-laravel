<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::get('/detail/$id', function () {
    return view('detail');
});

Route::get('/book', function () {
    return view('book');
});


Route::post("/book", [BookController::class, 'create']);

Route::resource('fruits', FruitController::class);

Route::resource('/dashboard', FruitController::class);

// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
