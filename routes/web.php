<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

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
//TODO comentar esse para colocar o route abaixo como inicial
// Route::get('/', function () {
//     return view('pages.home');
// });

// Crio um metodo para falar com o controller
Route::get("/", [MoviesController::class, "index"]);