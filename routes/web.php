<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('admin')->group(function () {
        Route::get('', function () {
           return view('admin');
        });
        Route::get('/user-management', [UserController::class, 'index'])->name('users.index');

        //Books
        Route::get('/books/create', [BookController::class, 'create'])->name('book.create');
    });
});

