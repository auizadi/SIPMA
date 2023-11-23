<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\MahasiswaController;

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

// Route::get('/user', function(){
//     return view('user');
// })->name('user');


Route::get('/',[MahasiswaController::class, 'index']);


Route::get('/sesi', [AuthController::class, 'index'])->name('user');
Route::post('/login', [AuthController::class, 'loginMhs'])->name('loginMhs');


