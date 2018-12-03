<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SettingController;

/*
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

/*
 * All route names are prefixed with 'admin.settings'.
 */
Route::group([
    'prefix'     => 'settings',
    'as'         => 'settings.',
    'namespace'  => 'Settings',
    'middleware' => 'role:'.config('access.users.admin_role'),
], function () {
    Route::get('dashboard',[SettingController::class, 'index'])->name('dashboard');
    Route::get('dashboard/data',[SettingController::class, 'anyData'])->name('data');
});