<?php

use App\Http\Controllers\PortfolioController;
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
    return view('portfolio.index');
})->name('get.index');

Route::get('about',[PortfolioController::class,'getAbout'])->name('get.about');
Route::get('contact',[PortfolioController::class,'getContact'])->name('get.contact');
Route::get('portfolio',[PortfolioController::class,'getPortfolio'])->name('get.portfolio');
