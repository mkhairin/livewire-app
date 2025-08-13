<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

// Departements
use App\Livewire\Departemen\Index;
use App\Livewire\Departemen\Create;
use App\Livewire\Departemen\Edit;

use App\Livewire\Position\IndexPosition;
use App\Livewire\Position\CreatePosition;
use App\Livewire\Position\EditPosition;

// District
use App\Livewire\District\IndexDistrict;
use App\Livewire\District\CreateDistrict;
use App\Livewire\District\EditDistrict;

use App\Livewire\ProgressStatus\IndexProgress;
use App\Livewire\ProgressStatus\CreateProgress;
use App\Livewire\ProgressStatus\EditProgress;

use App\Livewire\Users\IndexUsers;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Home::class)->name('home.index');
Route::get('/departement', Index::class)->name('departement.index');
Route::get('/departement/create', Create::class)->name('departement.create');
Route::get('/departement/edit/{id}', Edit::class)->name('departement.edit');

Route::get('/position', IndexPosition::class)->name('position.index');
Route::get('/position/create', CreatePosition::class)->name('position.create');
Route::get('/position/edit/{id}', EditPosition::class)->name('position.edit');

Route::get('/district', IndexDistrict::class)->name('district.index');
Route::get('district/create', CreateDistrict::class)->name('district.create');
Route::get('/district/edit/{id}', EditDistrict::class)->name('district.edit');

Route::get('/progress-status', IndexProgress::class)->name('progress_status.index');
Route::get('/progress-status/create', CreateProgress::class)->name('progress_status.create');
Route::get('/progress-status/edit/{id}', EditProgress::class)->name('progress_status.edit');

Route::get('/users', IndexUsers::class)->name('users.index');

