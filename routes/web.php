<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [frontController::class, 'mainPage']);

Route::get('/properties', [frontController::class, 'propertyPage']);

Route::get('/about', [frontController::class, 'aboutPage']);

Route::get('/contact', [frontController::class, 'contactPage']);

