<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiteSettingController, PageController, SectionController, RoleController, SEOController};

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/executive-brief', function () {
    return view('brief');
})->name('brief');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/test', function () {
    return view('test');
});

// Frontend Routes
/*Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');*/
