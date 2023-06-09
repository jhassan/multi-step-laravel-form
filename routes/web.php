<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

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

Route::get('/sample', function () {
    return view('sample');
});

Route::get('/', [JobsController::class, 'index']);
Route::post('/jobs', [JobsController::class, 'store'])->name('jobs.store');
Route::post('/check_email', [JobsController::class, 'check_email'])->name('jobs.check_email');