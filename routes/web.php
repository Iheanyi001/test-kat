<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiteSettingController, PageController, SectionController, RoleController, SEOController};
use Illuminate\Contracts\View\View;

Route::get('/', function ():View {
    return view('welcome');
})->name('home');

Route::get('/executive-brief', function () {
    return view('brief');
})->name('brief');

Route::get('/executive-secretary', function(){
    return view('secretary');
})->name('secretary');
/*Route::get('/membership', function () {
    return view('membership');
})->name('membership');*/

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/support/medical-outreach', function(){
    return view('support.medical');
})->name('support.medical');
Route::get('/support/youth-empowerment-and-skill-acquisition', function(){
    return view('support.youth');
})->name('support.youth');
Route::get('/support/environmental-support', function(){
    return view('support.environment');
})->name('support.environment');

Route::get('/support/poverty-alleviation', function(){
    return view('support.poverty');
})->name('support.poverty');

Route::get('/support/community-development', function(){
    return view('support.community');
})->name('support.community');


Route::get('/support/educational-support', function(){
    return view('support.education');
})->name('support.education');

Route::get('/events/previous/bese-2024', function(){
    return view('events.previous.bese2024');
})->name('events.previous.bese.2024');

Route::get('/events/previous/two-school-visit-2024', function(){
    return view('events.previous.two-school-visit-2024');
})->name('events.previous.two-school-visit-2024');


Route::get('/events/previous/courtesy-visit-2024', function():View{
    return view('events.previous.courtesy-visit-2024');
})->name('events.previous.courtesy-visit-2024');

Route::get('/events/upcoming/health', function(){
    return view('events.upcoming.health');
})->name('events.upcoming.health');

Route::get('/events/upcoming/school', function(){
    return view('events.upcoming.school');
})->name('events.upcoming.school');

Route::get('/events/upcoming/green', function(){
    return view('events.upcoming.green');
})->name('events.upcoming.green');


Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');
