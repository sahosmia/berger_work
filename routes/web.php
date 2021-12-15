<?php

use App\Http\Controllers\Admin\DiarieController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
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
Route::get('/md_speech', [FrontendController::class, 'md_speech'])->name('md_speech');
Route::get('/chairman_speech', [FrontendController::class, 'chairman_speech'])->name('chairman_speech');
Route::get('/contact_us', [FrontendController::class, 'contact_us'])->name('contact_us');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');


Route::get('/home', [HomeController::class, 'index'])->name('home');


// profile
Route::get('/admin/edit_profile', [ProfileController::class, 'edit_profile'])->name('admin.edit_profile');
Route::post('/admin/profile_name_update', [ProfileController::class, 'profile_name_update'])->name('admin.profile_name_update');
Route::post('/admin/profile_email_update', [ProfileController::class, 'profile_email_update'])->name('admin.profile_email_update');
Route::post('/admin/profile_password_update', [ProfileController::class, 'profile_password_update'])->name('admin.profile_password_update');




// logo
Route::get('/admin/logo', [LogoController::class, 'index'])->name('admin.logo');
Route::post('/admin/logo_update', [LogoController::class, 'update'])->name('admin.logo_update');


// slider
Route::get('/admin/slider', [SliderController::class, 'index'])->name('admin.slider');
Route::get('/admin/slider_add', [SliderController::class, 'add'])->name('admin.slider_add');
Route::get('/admin/slider_edit/{id}', [SliderController::class, 'edit']);
Route::post('/admin/slider_store', [SliderController::class, 'store'])->name('admin.slider_store');
Route::post('/admin/slider_update', [SliderController::class, 'update'])->name('admin.slider_update');
Route::get('/admin/slider_delete/{id}', [SliderController::class, 'delete'])->name('admin.slider_delete');
Route::get('/admin/slider_action/{id}', [SliderController::class, 'action'])->name('admin.slider_action');

// portfolio
Route::get('/admin/portfolio', [PortfolioController::class, 'index'])->name('admin.portfolio');
Route::get('/admin/portfolio_edit/{id}', [PortfolioController::class, 'edit']);
Route::post('/admin/portfolio_update', [PortfolioController::class, 'update'])->name('admin.portfolio_update');


// diarie
Route::get('/admin/diarie', [DiarieController::class, 'index'])->name('admin.diarie');
Route::get('/admin/diarie_add', [DiarieController::class, 'add'])->name('admin.diarie_add');
Route::get('/admin/diarie_edit/{id}', [DiarieController::class, 'edit']);
Route::post('/admin/diarie_store', [DiarieController::class, 'store'])->name('admin.diarie_store');
Route::post('/admin/diarie_update', [DiarieController::class, 'update'])->name('admin.diarie_update');
Route::get('/admin/diarie_delete/{id}', [DiarieController::class, 'delete'])->name('admin.diarie_delete');
Route::get('/admin/diarie_action/{id}', [DiarieController::class, 'action'])->name('admin.diarie_action');


// language
Route::get('/admin/language', [LanguageController::class, 'index'])->name('admin.language');
Route::post('/admin/language_update', [LanguageController::class, 'language_update'])->name('admin.language_update');



// Social
Route::get('admin/social', [SocialController::class, 'index'])->name('admin.social');
Route::post('admin/socail/social_update', [SocialController::class, 'social_update'])->name('admin.social_update');

// counter
Route::get('admin/counter', [CounterController::class, 'index'])->name('admin.counter');
Route::get('/admin/counter_edit/{id}', [CounterController::class, 'edit']);
Route::post('admin/counter/counter_update', [CounterController::class, 'counter_update'])->name('admin.counter_update');

