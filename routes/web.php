<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'home']);

Route::get('/berita/{id}', [PostController::class, 'showUser']);

Route::get('/dashboard', function () {
    return redirect('/posts');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::resource('posts', PostController::class);

});

require __DIR__.'/auth.php';