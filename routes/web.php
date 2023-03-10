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

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']) -> name('home');

// Show route
Route::get('/person/show/{person}', [MainController::class, 'show']) -> name('person.show');

// Delete route
Route::get('/person/delete/{person}', [MainController::class, 'delete']) -> name('person.delete');

// Create route
Route::get('/person/create', [MainController::class, 'create']) -> name('person.create');

// Store route
Route::post('/person/store', [MainController::class, 'store']) -> name('person.store');

// Edit route
Route::get('/person/edit/{person}', [MainController::class, 'edit']) -> name('person.edit');

// Update route
Route::post('/person/update/{person}', [MainController::class, 'update']) -> name('person.update');