<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get('/', [HomeController::class, 'homepage'])->name('home.homepage');

Route::get('/travel', [HomeController::class, 'travels'])->name('home.travel');

Route::get('/sport', [HomeController::class, 'sports'])->name('home.sport');

Route::get('/lifestyle', [HomeController::class, 'lifestyle'])->name('home.lifestyle');

Route::get('/car', [HomeController::class, 'cars'])->name('home.car');

Route::get('/login', [HomeController::class, 'login']);

Route::get('/register', [HomeController::class, 'register']);

Route::get('/header', [HomeController::class, 'header'])->name('home.header');



Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('post', [HomeController::class, 'post'])->middleware(['auth', 'admin']);  //user must be login and user should be admin.

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/post_page', [AdminController::class, 'post_page']);

