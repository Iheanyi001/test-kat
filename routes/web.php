<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SiteSettingController, PageController, SectionController, RoleController, SEOController};

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/test', function () {
    return view('test');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['auth', 'admin'])->group(function () {
        // Site Settings Routes
        Route::get('/admin/settings', [SiteSettingController::class, 'index'])->name('admin.settings.index');
        Route::post('/admin/settings', [SiteSettingController::class, 'update'])->name('admin.settings.update');

        // Pages Routes
        Route::get('/admin/pages', [PageController::class, 'index'])->name('admin.pages.index');
        Route::get('/admin/pages/create', [PageController::class, 'create'])->name('admin.pages.create');
        Route::post('/admin/pages', [PageController::class, 'store'])->name('admin.pages.store');
        Route::get('/admin/pages/{id}/edit', [PageController::class, 'edit'])->name('admin.pages.edit');
        Route::put('/admin/pages/{id}', [PageController::class, 'update'])->name('admin.pages.update');
        Route::delete('/admin/pages/{id}', [PageController::class, 'destroy'])->name('admin.pages.destroy');

        // managing sections
        Route::get('/admin/sections', [SectionController::class, 'index'])->name('sections.index');  // List all sections
        Route::get('/admin/sections/create', [SectionController::class, 'create'])->name('sections.create');  // Create section
        Route::post('/admin/sections', [SectionController::class, 'store'])->name('sections.store');  // Store new section
        Route::get('/admin/sections/{id}/edit', [SectionController::class, 'edit'])->name('sections.edit');  // Edit section
        Route::put('/admin/sections/{id}', [SectionController::class, 'update'])->name('sections.update');  // Update section
        Route::delete('/admin/sections/{id}', [SectionController::class, 'destroy'])->name('sections.destroy');  // Delete section

        //roles management
        Route::get('/admin/roles', [RoleController::class, 'index'])->name('roles.index');  // List roles
        Route::get('/admin/roles/create', [RoleController::class, 'create'])->name('roles.create');  // Create new role
        Route::post('/admin/roles', [RoleController::class, 'store'])->name('roles.store');  // Store role
        Route::get('/admin/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');  // Edit role
        Route::put('/admin/roles/{id}', [RoleController::class, 'update'])->name('roles.update');  // Update role
        Route::delete('/admin/roles/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');  // Delete role

        //SEO
        Route::get('/admin/seo', [SeoController::class, 'edit'])->name('seo.edit');  // Edit SEO for pages
        Route::put('/admin/seo', [SeoController::class, 'update'])->name('seo.update');
    });
});

// Frontend Routes
Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
