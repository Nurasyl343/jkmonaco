<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('main');
})->name('main');

Route::get('/plan', function () {
    return view('plan');
})->name('plan');

Route::get('/plan/1', function () {
    return view('plan1');
})->name('plan1');

Route::get('/plan/2', function () {
    return view('plan2');
})->name('plan2');

Route::get('/admin/login', function () {
    return view('login');
})->name('login');

Route::post('/save-application', [ApplicationController::class, 'create'])->name('saveApplication');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login'])->name('login-post');
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/admin', [ApplicationController::class, 'admin'])->name('admin');
    Route::get('/admin/export-excel', [ApplicationController::class, 'exportToExcel'])->name('adminExcel');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
