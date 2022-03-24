<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostCrudController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PostCrudController::class, 'index'])->name('index');
Route::post('/', [PostCrudController::class, 'store'])->name('store');
Route::get('/create', [PostCrudController::class, 'create'])->name('create');
Route::get('/show/{id}', [PostCrudController::class, 'show'])->name('show');
Route::get('/edit/{id}', [PostCrudController::class, 'edit'])->name('edit');
Route::post('/update', [PostCrudController::class, 'update'])->name('update');
Route::get('/delete/{id}', [PostCrudController::class, 'destroy'])->name('delete');
