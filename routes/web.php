<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;

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
/*** Admin */
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/admin/{slug}', [App\Http\Controllers\AdminController::class, 'show'])->name('show');

/*** Pagina Inicial */
Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/{slug}', [WebController::class, 'show'])->name('show');

/*** Pesquisa */
Route::post('/search', [WebController::class, 'search'])->name('search');


