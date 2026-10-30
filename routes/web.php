<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AppsCalanderController;
use App\Http\Controllers\AuthSigninController;
use App\Http\Controllers\UiFormElementsController;
use App\Http\Controllers\UiSweetalert2Controller;
use App\Http\Controllers\UiTablesDatatablesController;

Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])->name('admin-dashboard');
Route::get('/apps-calander', [AppsCalanderController::class, 'index'])->name('admin.apps-calander');
Route::get('auth-signin', [AuthSigninController::class, 'index'])->name('admin.auth-signin');
Route::get('ui-form-elements', [UiFormElementsController::class, 'index'])->name('admin.ui-form-elements');
Route::get('ui-sweetalert2', [UiSweetalert2Controller::class, 'index'])->name('admin.ui-sweetalert2');
Route::get('ui-tables-datatables', [UiTablesDatatablesController::class, 'index'])->name('admin.ui-tables-datatables');