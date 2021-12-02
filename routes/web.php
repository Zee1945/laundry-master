<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\GuestController::class, 'index']);
Route::get('/search', [App\Http\Controllers\GuestController::class, 'search'])->name('search');

Route::get('/admin', [App\Http\Controllers\TasksController::class, 'index'])->name('dashboard')->Middleware(['auth', 'verified']);
Route::get('/admin/tasks', [App\Http\Controllers\TasksController::class, 'tasks'])->name('task')->Middleware(['auth', 'verified']);

Route::get('/admin/tasks/create', [App\Http\Controllers\TasksController::class, 'create'])->name('task-create')->Middleware(['auth', 'verified']);
Route::post('/admin/tasks/store', [App\Http\Controllers\TasksController::class, 'store'])->name('task-store')->Middleware(['auth', 'verified']);
Route::get('/admin/tasks/edit/{id}', [App\Http\Controllers\TasksController::class, 'edit'])->name('task-edit')->Middleware(['auth', 'verified']);
Route::put('/admin/tasks/update/{id}', [App\Http\Controllers\TasksController::class, 'update'])->name('task-update')->Middleware(['auth', 'verified']);
Route::get('/admin/tasks/destroy/{id}', [App\Http\Controllers\TasksController::class, 'destroy'])->name('task-destroy')->Middleware(['auth', 'verified']);

//Route Jenis
Route::get('/admin/harga', [App\Http\Controllers\JenisController::class, 'index'])->name('jenis')->Middleware(['auth', 'verified']);
Route::get('/admin/harga/create', [App\Http\Controllers\JenisController::class, 'create'])->name('jenis-create')->Middleware(['auth', 'verified']);
Route::post('/admin/harga/store', [App\Http\Controllers\JenisController::class, 'store'])->name('jenis-store')->Middleware(['auth', 'verified']);
Route::get('/admin/harga/edit/{id}', [App\Http\Controllers\JenisController::class, 'edit'])->name('jenis-edit')->Middleware(['auth', 'verified']);
Route::put('/admin/harga/update/{id}', [App\Http\Controllers\JenisController::class, 'update'])->name('jenis-update')->Middleware(['auth', 'verified']);
Route::get('/admin/harga/destroy/{id}', [App\Http\Controllers\JenisController::class, 'destroy'])->name('jenis-destroy')->Middleware(['auth', 'verified']);



// Route::prefix('admin')
//     ->namespace('Admin')
//     ->middleware(['auth', 'admin'])
//     ->group(function () {
//         Route::get('/', 'DashboardController@index')
//             ->name('dashboard');

//         Route::resource('travel-package', 'TravelPackageController');
//         Route::resource('gallery', 'GalleryController');
//         Route::resource('transaction', 'TransactionController');
//     });
