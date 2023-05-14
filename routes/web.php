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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('jobs/create-step-one', [JobsController::class, 'createStepOne'])->name('jobs.create.step.one');
Route::post('jobs/create-step-one', [JobsController::class, 'postCreateStepOne'])->name('jobs.create.step.one.post');

Route::get('jobs/create-step-two', [JobsController::class, 'createStepTwo'])->name('jobs.create.step.two');
Route::post('jobs/create-step-two', [JobsController::class, 'postCreateStepTwo'])->name('jobs.create.step.two.post');

Route::get('jobs/create-step-three', [JobsController::class, 'createStepThree'])->name('jobs.create.step.three');
Route::post('jobs/create-step-three', [JobsController::class, 'postCreateStepThree'])->name('jobs.create.step.three.post');

Route::get('jobs/create-step-four', [JobsController::class, 'createStepFour'])->name('jobs.create.step.four');
Route::post('jobs/create-step-four', [JobsController::class, 'postCreateStepFour'])->name('jobs.create.step.four.post');

Route::get('jobs/create-step-five', [JobsController::class, 'createStepFive'])->name('jobs.create.step.five');
Route::post('jobs/create-step-five', [JobsController::class, 'postCreateStepFive'])->name('jobs.create.step.five.post');

Route::get('jobs/create-step-six', [JobsController::class, 'createStepSix'])->name('jobs.create.step.six');
Route::post('jobs/create-step-six', [JobsController::class, 'postCreateStepSix'])->name('jobs.create.step.six.post');

// Route::get('jobs', 'JobsController@index')->name('jobs.index');

// Route::get('jobs/create-step-one', 'JobsController@createStepOne')->name('jobs.create.step.one');
// Route::post('jobs/create-step-one', 'JobsController@postCreateStepOne')->name('jobs.create.step.one.post');

// Route::get('jobs/create-step-two', 'JobsController@createStepTwo')->name('jobs.create.step.two');
// Route::post('jobs/create-step-two', 'JobsController@postCreateStepTwo')->name('jobs.create.step.two.post');

// Route::get('jobs/create-step-three', 'JobsController@createStepThree')->name('jobs.create.step.three');
// Route::post('jobs/create-step-three', 'JobsController@postCreateStepThree')->name('jobs.create.step.three.post');
