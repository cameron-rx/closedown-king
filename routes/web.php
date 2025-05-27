<?php

use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TemplateItemController;
use App\Http\Controllers\TemplateSectionController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/template', [TemplateController::class, "index"])->name('templates.list');
Route::get('/template/create', [TemplateController::class, "create"])->name('templates.create');
Route::get('/template/{id}/edit', [TemplateController::class, "edit"])->name('templates.edit');
Route::post('/template', [TemplateController::class, "store"])->name('templates.store');
Route::delete('/template/{id}', [TemplateController::class, "destroy"])->name('templates.destroy');

Route::post('/template/{id}/section', [TemplateSectionController::class, "store"])->name('templates.section.store');
Route::delete('/template/{templateId}/section/{sectionId}', [TemplateSectionController::class, "destroy"])->name('templates.section.destroy');


Route::post('/section/{sectionId}/item', [TemplateItemController::class, "store"])->name('section.item.store');
Route::delete('/section/{sectionId}/item/{itemID}', [TemplateItemController::class, "destroy"])->name('section.item.destroy');

Route::get('/checklist', [ChecklistController::class, "create"])->name('checklists.create');
Route::get('/checklist/{checklistId}', [ChecklistController::class, "show"])->name('checklists.show');
Route::get('/checklist/edit/{checklistId}', [ChecklistController::class, "edit"])->name('checklists.edit');
Route::post('/checklist', [ChecklistController::class, "store"])->name('checklists.store');
Route::post('/checklist/{checklistId}', [ChecklistController::class, "update"])->name('checklists.update');