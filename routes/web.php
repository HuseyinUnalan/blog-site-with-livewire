<?php

use App\Livewire\AddBlog;
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
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

Route::get('/', Index::class)->name('index');

Route::middleware(['user'])->group(function () { // Kernel.php de yol eklendi
    Route::get('add/blog', AddBlog::class)->name('add.blog');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
