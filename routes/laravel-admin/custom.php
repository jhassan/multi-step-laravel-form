<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobController;

Route::group([
    'namespace'  => 'App\Http\Controllers\Admin',
    'middleware' => [config('laravel-admin.router.middleware_web', 'web'), 'auth'],
    'prefix'     => config('laravel-admin.router.prefix', 'admin'),
    'as'     => 'laravel-admin.',
], function(){
    Route::get('/', function () {
        return view('laravel-admin::layouts.app');
    })->name('dashboard');

    Route::resource('jobs', JobController::class);

    // Route::get('setting', 'SettingController@edit')->name('setting.edit');
	// Route::put('setting', 'SettingController@update')->name('setting.update');
});