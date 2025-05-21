<?php

use App\Http\Controllers\TemplateController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/templates', [TemplateController::class, "index"])->name('templates.list');
Route::get('/template', [TemplateController::class, "create"])->name('templates.create');
Route::post('/template', [TemplateController::class, "store"])->name('templates.store');
Route::delete('/template/{id}', [TemplateController::class, "destroy"])->name('templates.destroy');

