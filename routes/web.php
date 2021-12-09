<?php

use App\Http\Controllers\Admin\DiarieController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('front');
Route::post('/contact', [FrontendController::class, 'contact'])->name('contact');


Route::get('/home', [HomeController::class, 'index'])->name('home');


// logo
Route::get('/logo', [LogoController::class, 'index'])->name('logo');
Route::post('/logo_update', [LogoController::class, 'update'])->name('logo_update');


// slider
Route::get('/slider', [SliderController::class, 'index'])->name('slider');
Route::get('/slider_add', [SliderController::class, 'add'])->name('slider_add');
Route::get('/slider_edit/{id}', [SliderController::class, 'edit']);
Route::post('/slider_store', [SliderController::class, 'store'])->name('slider_store');
Route::post('/slider_update', [SliderController::class, 'update'])->name('slider_update');
Route::get('/slider_delete/{id}', [SliderController::class, 'delete'])->name('slider_delete');
Route::get('/slider_action/{id}', [SliderController::class, 'action'])->name('slider_action');

// portfolio
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio_edit/{id}', [PortfolioController::class, 'edit']);
Route::post('/portfolio_update', [PortfolioController::class, 'update'])->name('portfolio_update');


// diarie
Route::get('/diarie', [DiarieController::class, 'index'])->name('diarie');
Route::get('/diarie_add', [DiarieController::class, 'add'])->name('diarie_add');
Route::get('/diarie_edit/{id}', [DiarieController::class, 'edit']);
Route::post('/diarie_store', [DiarieController::class, 'store'])->name('diarie_store');
Route::post('/diarie_update', [DiarieController::class, 'update'])->name('diarie_update');
Route::get('/diarie_delete/{id}', [DiarieController::class, 'delete'])->name('diarie_delete');
Route::get('/diarie_action/{id}', [DiarieController::class, 'action'])->name('diarie_action');


