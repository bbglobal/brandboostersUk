<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/',  'index')->name('home');
    Route::get('/services',  'services')->name('services');
    Route::get('/portfolio',  'portfolio')->name('portfolio');
    Route::get('/packages',  'packages')->name('packages');
    Route::get('/about',  'about')->name('about');
    Route::get('/testimonials',  'testimonials')->name('testimonials');
    Route::get('/privacy-and-policy',  'policy')->name('policy');
    Route::get('/contact',  'contact')->name('contact');
    Route::get('/graphic-design-services',  'graphics')->name('graphics');
    Route::get('/logo-design-services',  'logo')->name('logo');
    Route::get('/ecommerce-services',  'ecommerce')->name('ecommerce');
    Route::get('/2D-animations',  'animation2D')->name('animation2D');
    Route::get('/3D-animations',  'animation3D')->name('animation3D');
    Route::get('/web-development-services',  'web')->name('web');
    Route::get('/wordpress-website-development-services',  'wordpress')->name('wordpress');
    Route::get('/mobile-app-development-services',  'mobile')->name('mobile');
    Route::get('/search-engine-optimization-services',  'seo')->name('seo');
    Route::get('/branding-services',  'branding')->name('branding');
    Route::get('/ppc-services',  'ppc')->name('ppc');
    Route::get('/social-media-services',  'social')->name('social');
});
