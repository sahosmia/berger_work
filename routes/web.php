<?php

use App\Http\Controllers\Admin\DiarieController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PortfolioController;

use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('front');
Route::post('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/md_speech', [FrontendController::class, 'md_speech'])->name('md_speech');
Route::get('/chairman_speech', [FrontendController::class, 'chairman_speech'])->name('chairman_speech');
Route::get('/contact_us', [FrontendController::class, 'contact_us'])->name('contact_us');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('admin/')->name('admin.')->group(function () {
    Route::resource('sliders', SliderController::class);
    Route::resource('portfolios', PortfolioController::class);
    Route::resource('diaries', DiarieController::class);
    Route::resource('counters', CounterController::class);

    // profile
    Route::get('edit_profile', [ProfileController::class, 'edit_profile'])->name('edit_profile');
    Route::post('profile_name_update', [ProfileController::class, 'profile_name_update'])->name('profile_name_update');
    Route::post('profile_email_update', [ProfileController::class, 'profile_email_update'])->name('profile_email_update');
    Route::post('profile_password_update', [ProfileController::class, 'profile_password_update'])->name('profile_password_update');

    // logo
    Route::get('logo', [LogoController::class, 'index'])->name('logo');
    Route::post('logo_update', [LogoController::class, 'update'])->name('logo_update');

    // language
    Route::get('language', [LanguageController::class, 'index'])->name('language');
    Route::post('language_update', [LanguageController::class, 'language_update'])->name('language_update');

    // Social
    Route::get('social', [SocialController::class, 'index'])->name('social');
    Route::post('socail/social_update', [SocialController::class, 'social_update'])->name('social_update');

    // Page
    Route::get('home_page', [PageController::class, 'home_page'])->name('home_page');
    Route::get('contact_page', [PageController::class, 'contact_page'])->name('contact_page');
    Route::get('corporate_speech', [PageController::class, 'corporate_speech'])->name('corporate_speech');

    Route::post('home_page_update', [PageController::class, 'home_page_update'])->name('home_page_update');
    Route::post('contact_page_update', [PageController::class, 'contact_page_update'])->name('contact_page_update');
    Route::post('md_speech_update', [PageController::class, 'md_speech_update'])->name('md_speech_update');
    Route::post('chairman_speech_update', [PageController::class, 'chairman_speech_update'])->name('chairman_speech_update');

});
