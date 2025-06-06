<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\DiscordController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TemplateItemController;
use App\Http\Controllers\TemplateSectionController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserIsAdmin;
use App\Http\Middleware\UserWhitelisted;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth', UserWhitelisted::class])->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/logs', [ChecklistController::class, "index"])->name('logs');
    Route::get('/checklist', [ChecklistController::class, "create"])->name('checklists.create');
    Route::get('/checklist/{checklistId}', [ChecklistController::class, "show"])->name('checklists.show');
    Route::get('/checklist/edit/{checklistId}', [ChecklistController::class, "edit"])->name('checklists.edit');
    Route::post('/checklist', [ChecklistController::class, "store"])->name('checklists.store');
    Route::patch('/checklist/{checklistId}', [ChecklistController::class, "update"])->name('checklists.update');
    Route::delete('/checklist/{checklistId}', [ChecklistController::class, "destroy"])->name('checklists.destroy');

});

Route::middleware(['auth', UserIsAdmin::class])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    });

    Route::get('/template', [TemplateController::class, "index"])->name('templates.list');
    Route::get('/template/create', [TemplateController::class, "create"])->name('templates.create');
    Route::get('/template/{id}/edit', [TemplateController::class, "edit"])->name('templates.edit');
    Route::post('/template', [TemplateController::class, "store"])->name('templates.store');
    Route::delete('/template/{id}', [TemplateController::class, "destroy"])->name('templates.destroy');

    Route::post('/section/{sectionId}/item', [TemplateItemController::class, "store"])->name('section.item.store');
    Route::delete('/section/{sectionId}/item/{itemID}', [TemplateItemController::class, "destroy"])->name('section.item.destroy');

    Route::post('/template/{id}/section', [TemplateSectionController::class, "store"])->name('templates.section.store');
    Route::delete('/template/{templateId}/section/{sectionId}', [TemplateSectionController::class, "destroy"])->name('templates.section.destroy');


    // User Routes
    Route::get('/users', [UserController::class, "index"])->name('user.index');
    Route::patch('/user/{userId}', [UserController::class, "update"])->name('user.update');
});

// Auth Routes
Route::get('/auth/redirect', [DiscordController::class, "redirect"]);
Route::get('/auth/callback', [DiscordController::class, "callback"]);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/verificationt', [AuthController::class, 'verification'])->name('verification');
Route::get('/logout',  [AuthController::class, 'logout'])->name('logout');
