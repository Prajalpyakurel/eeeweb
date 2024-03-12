<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;
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

//Route::get('/', function () {
//    return view('website.layouts.master');
//});
Route::get('/', [FrontPageController::class, 'index'])->name('home');
Route::get('/about', [FrontPageController::class, 'about'])->name('aboutus');
Route::get('/service', [FrontPageController::class, 'service'])->name('service');


