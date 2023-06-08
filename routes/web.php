<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
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

// * Basic way
/*  
    Route::get('/', [PageController::class, 'home'])->name('home');

    Route::get('blog', [PageController::class, 'blog'])->name('blog');

    Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

*/

Route::controller(PageController::class)->group(function () {

    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    // * slug is a property of post
    Route::get('blog/{post:slug}', 'post')->name('post');
});


Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('posts', PostController::class)->except(['show']);

// Add the following route definition for profile edit
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');


require __DIR__ . '/auth.php';


