<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Unauth\Pagecontroller;
use App\Http\Controllers\Admin\AdminAuthController;


//Frontend Pages
Route::get('/', [Pagecontroller::class, 'Homepage'])->name('Homepage');
Route::get('/about', [Pagecontroller::class, 'About'])->name('About');
Route::get('/contact', [Pagecontroller::class, 'Contact'])->name('Contact');
Route::get('/logistics', [Pagecontroller::class, 'Logistics'])->name('Logistics');
Route::get('/services', [Pagecontroller::class, 'Services'])->name('Services');

Route::post('/track', [PackageController::class, 'trackPackages'])->name('track');










// Login & Logout
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Admin Register Page
Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register'])->name('admin.register.submit');


// Protected Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::post('/admin/packages', [PackageController::class, 'store'])->name('packages.store');
    Route::get('/admin/managePackages', [PackageController::class, 'managePackages'])->name('manage.packages');

    Route::get('packages/{package}/edit', [PackageController::class, 'editPackage'])->name('packages.edit');


    Route::put('/admin/packages/{id}', [PackageController::class, 'updatePackage'])->name('updatePackage');
    Route::delete('packages/{package}', [PackageController::class, 'destroy'])->name('packages.destroy');

    Route::post('/admin/packages/map/{id}', [PackageController::class, 'updateMap'])->name('update.map');
    Route::post('/logout', [AdminAuthController::class, 'destroy'])->name('logout');

});

