<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('todo', TodoController::class);

// User Controller
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/edit', [UserController::class, 'update'])->name('user.update');
Route::get('/user/password/edit', [UserController::class, 'passwordEdit'])->name('user.passwordEdit');
Route::post('/user/password/edit', [UserController::class, 'passwordUpdate'])->name('user.passwordUpdate');
