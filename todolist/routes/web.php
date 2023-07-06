<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome')->name('welcome');


//Route::get('/', 'welcome')->name('welcome');
//
Route::get('/tasks', [TaskController::class, 'index'])->middleware('auth')->name('tasks');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/task', [TaskController::class, 'create'])->middleware('auth')->name('task');

Route::post('/task', [TaskController::class, 'store'])->middleware('auth');

Route::bind('task', function ($value, $route){
    return Task::where('id', $value)->first();
});

Route::get('/delete/{task}', [TaskController::class, 'delete'])->middleware('auth')->name('delete');


