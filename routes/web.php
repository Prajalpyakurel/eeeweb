<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\EmployeeController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//admin

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function () {
        // Login Routes...
        Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('auth.login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);
//        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    });
    Route::get('dashboard',[AdminController::class,'admin'])->name('dashboard');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('employee', [EmployeeController::class, 'index'])->name('employee');
    Route::get('createemployee', [EmployeeController::class, 'create'])->name('createemployee');
    Route::post('createemployee', [EmployeeController::class, 'store'])->name('storeemployee');


});


//frotnend
Route::get('/', [FrontPageController::class, 'index'])->name('home');
Route::get('/about', [FrontPageController::class, 'about'])->name('aboutus');
Route::get('/service', [FrontPageController::class, 'service'])->name('service');
Route::get('/digital', [FrontPageController::class, 'digital'])->name('digitalmarketing');


