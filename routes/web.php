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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin/tasks', [App\Http\Controllers\TasksController::class, 'index'])->name('task')->Middleware(['auth', 'verified']);;
Route::get('/admin/tasks/create', [App\Http\Controllers\TasksController::class, 'create'])->name('task-create')->Middleware(['auth', 'verified']);;
Route::post('/admin/tasks/store', [App\Http\Controllers\TasksController::class, 'store'])->name('task-store')->Middleware(['auth', 'verified']);
Route::post('/admin/tasks/edit', [App\Http\Controllers\TasksController::class, 'edit'])->name('task-edit')->Middleware(['auth', 'verified']);
Route::post('/admin/tasks/update/{id}', [App\Http\Controllers\TasksController::class, 'edit'])->name('task-edit')->Middleware(['auth', 'verified']);;
Route::post('/admin/tasks/destroy/{id}', [App\Http\Controllers\TasksController::class, 'destroy'])->name('task-destroy')->Middleware(['auth', 'verified']);;



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
